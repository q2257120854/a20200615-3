<?php
/**
 * Created by PhpStorm.
 * User: childeYin<尹少爷>
 * Date: 13/07/2018
 * Time: 6:32 PM
 */

use Google\Protobuf\Any;
use Zaly\Proto\Core\TransportData;
use Zaly\Proto\Core\TransportDataHeaderKey;
use Google\Protobuf\Internal\Message;

abstract class MiniProgramController extends \Wpf_Controller
{
    protected $logger;

    /**
     * @var \Zaly\Proto\Core\PublicUserProfile
     */
    protected $userProfile;
    protected $userId;
    protected $loginName;

    protected $success = "success";
    protected $error = "error.alert";

    protected $ctx;

    protected $language = Zaly\Proto\Core\UserClientLangType::UserClientLangEN;
    protected $requestData;


    public function __construct(Wpf_Ctx $context)
    {
        $this->ctx = new BaseCtx();
        $this->logger = new Wpf_Logger();
    }


    protected abstract function getMiniProgramId();

    //for permission

    /**
     * 在处理正式请求之前，预处理一些操作，比如权限校验
     * @return bool
     */
    protected abstract function preRequest();

    /**
     * 处理正式的请求逻辑，比如跳转界面，post获取信息等
     */
    protected abstract function doRequest();

    /**
     * preRequest && doRequest 发生异常情况，执行
     * @param $ex
     * @return mixed
     */
    protected abstract function requestException($ex);

    /**
     * 根据http request cookie中的duckchat_sessionId 做权限判断
     * @return string|void
     */
    public function doIndex()
    {
        $tag = __CLASS__ . "-" . __FUNCTION__;

        try {
            parent::doIndex();

            // 接收的数据流
            $this->requestData = file_get_contents("php://input");

            $this->logger->info("site.manage.base", "cookie=" . json_encode($_COOKIE));

            $duckchatSessionId = $_COOKIE["duckchat_sessionid"];

            if (empty($duckchatSessionId)) {
                throw new Exception("duckchat_sessionid is empty in cookie");
            }
            $miniProgramId = $this->getMiniProgramId();

            //get user profile from duckchat_sessionid
            $userPublicProfile = $this->getDuckChatUserProfileFromSessionId($duckchatSessionId, $miniProgramId);

            if (empty($userPublicProfile) || empty($userPublicProfile->getUserId())) {
                throw new Exception("get empty user profile by duckchat_sessionid error");
            }

            $this->userProfile = $userPublicProfile;
            $this->userId = $userPublicProfile->getUserId();
            $this->loginName = $userPublicProfile->getLoginName();
            $this->ctx->Wpf_Logger->info("", "Mini Program Request UserId=" . $this->userId);

            $this->getAndSetClientLang();

            $this->preRequest();
            $this->doRequest();
        } catch (Exception $ex) {
            echo $ex->getMessage();
            $this->ctx->Wpf_Logger->error($tag, "error msg =" . $ex);
            $this->requestException($ex);
        }

    }

    /**
     * @param $duckchatSessionId
     * @return \Zaly\Proto\Core\PublicUserProfile
     * @throws Exception
     */
    public function getDuckChatUserProfileFromSessionId($duckchatSessionId, $miniProgramId)
    {
        $tag = __CLASS__ . "-" . __FUNCTION__;
        try {

            $action = "duckchat.session.profile";
            $requestData = new Zaly\Proto\Plugin\DuckChatSessionProfileRequest();
            $requestData->setEncryptedSessionId($duckchatSessionId);

            $response = $this->requestDuckChatInnerApi($miniProgramId, $action, $requestData);

            $this->logger->info($tag, "response=" . json_encode($response));

            if (empty($response)) {
                throw new Exception("get empty response by duckchat_sessionid error");
            }

            $userProfile = $response->getProfile();
            return $userProfile->getPublic();
        } catch (Exception $ex) {
            $this->ctx->Wpf_Logger->error($tag, "error msg =" . $ex);
            throw $ex;
        }
    }


    /**
     * 通用本地小程序，发送请求调用 DuckChat inner api
     * @param $miniProgramId
     * @param $action
     * @param $requestProtoData
     * @return \Google\Protobuf\unpacked
     * @throws Exception
     */
    public function requestDuckChatInnerApi($miniProgramId, $action, $requestProtoData)
    {
        $miniProgramProfile = $this->getMiniProgramProfile($miniProgramId);

        $authKey = $miniProgramProfile['authKey'];

        $requestTransportDataString = $this->buildTransportData($action, $requestProtoData);
//        $requestBodyJson = array(
//            "body" => $requestTransportDataString,
//            "time" => time(),
//        );
//        $requestBodyJson = json_encode($requestBodyJson);

        //加密发送
        $encryptedTransportData = $this->ctx->ZalyAes->encrypt($requestTransportDataString, $authKey);

        $requestUrl = "/?action=" . $action . "&body_format=pb&miniProgramId=" . $miniProgramId;
        $requestUrl = ZalyHelper::getFullReqUrl($requestUrl);

        $this->ctx->Wpf_Logger->error($action, "fihttp request url =" . $requestUrl);

        $encryptedHttpTransportResponse = $this->ctx->ZalyCurl->request($requestUrl, "POST", $encryptedTransportData);
        //解密结果
        $httpResponse = $this->ctx->ZalyAes->decrypt($encryptedHttpTransportResponse, $authKey);

        return $this->buildResponseFromHttp($requestUrl, $httpResponse);
    }

    private function buildTransportData($action, $requestBody)
    {
        $anyBody = new \Google\Protobuf\Any();
        $anyBody->pack($requestBody);

        $transportData = new \Zaly\Proto\Core\TransportData();
        $transportData->setAction($action);
        $transportData->setBody($anyBody);
        $transportData->setTimeMillis(ZalyHelper::getMsectime());
        return $transportData->serializeToString();
    }

    private function buildResponseFromHttp($url, $httpResponse)
    {

        $urlParams = parse_url($url);
        $query = isset($urlParams['query']) ? $urlParams['query'] : [];
        $urlParams = $this->ctx->ZalyCurl->convertUrlQuery($query);
        $requestAction = $urlParams['action'];
        $responseBodyFormat = $urlParams['body_format'];

        if (empty($requestAction)) {
            throw new Exception("request url with no action");
        }

        if (empty($responseBodyFormat)) {
            $responseBodyFormat = 'json';
        }

        $responseTransportData = new Zaly\Proto\Core\TransportData();
        switch ($responseBodyFormat) {
            case "json":
                $responseTransportData->mergeFromJsonString($httpResponse);
                break;
            case "pb":
                $responseTransportData->mergeFromString($httpResponse);
                break;
            case "base64pb":
                $realData = base64_decode($httpResponse);
                $responseTransportData->mergeFromString($realData);
                break;
        }

        if ($requestAction != $responseTransportData->getAction()) {
            throw new Exception("response with error action");
        }

        $responseHeader = $responseTransportData->getHeader();

        if (empty($responseHeader)) {
            throw new Exception("response with empty header");
        }

        $errCode = $this->getHeaderValue($responseHeader, TransportDataHeaderKey::HeaderErrorCode);

        if ("success" == $errCode) {
            $responseMessage = $responseTransportData->getBody()->unpack();
            return $responseMessage;
        } else {
            $errInfo = $this->getHeaderValue($responseHeader, TransportDataHeaderKey::HeaderErrorInfo);
            throw new Exception($errInfo);
        }

    }

    private function getMiniProgramProfile($miniProgramId)
    {
        $miniProgramProfile = $this->ctx->SitePluginTable->getPluginById($miniProgramId);

        if (!empty($miniProgramProfile)) {

            if (empty($miniProgramProfile['authKey'])) {
                if (empty($authKey)) {
                    $config = $this->ctx->SiteConfigTable->selectSiteConfig(SiteConfig::SITE_PLUGIN_PLBLIC_KEY);
                    $miniProgramProfile['authKey'] = $config[SiteConfig::SITE_PLUGIN_PLBLIC_KEY];
                }
            }

        }

        return $miniProgramProfile;
    }

    private function getHeaderValue($header, $key)
    {
        if (empty($header)) {

        }
        return $header['_' . $key];
    }

    protected function showPermissionPage()
    {
//        $apiPageLogin = ZalyConfig::getConfig("apiPageLogin");
//        header("Location:" . "http://www.akaxin.com/");
        exit();
    }


    protected function getAndSetClientLang()
    {
        $headLang = isset($_GET['lang']) ? $_GET['lang'] : "";

        if (isset($headLang) && $headLang == Zaly\Proto\Core\UserClientLangType::UserClientLangZH) {
            $this->language = Zaly\Proto\Core\UserClientLangType::UserClientLangZH;
            $this->zalyError = $this->ctx->ZalyErrorZh;
        } else {
            $this->language = Zaly\Proto\Core\UserClientLangType::UserClientLangEN;
            $this->zalyError = $this->ctx->ZalyErrorEn;
        }
    }

    protected function getCurrentTimeMills()
    {
        return ZalyHelper::getMsectime();
    }

    protected function finish_request()
    {
        if (!function_exists("fastcgi_finish_request")) {
            function fastcgi_finish_request()
            {
            }
        }
        fastcgi_finish_request();
    }

}