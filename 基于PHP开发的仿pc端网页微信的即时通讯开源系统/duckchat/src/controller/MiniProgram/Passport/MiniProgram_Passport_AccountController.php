<?php
/**
 * Created by PhpStorm.
 * User: zhangjun
 * Date: 08/09/2018
 * Time: 10:25 AM
 */

class MiniProgram_Passport_AccountController extends MiniProgramController
{
    private $passporAccountPluginId = 105;
    private $errorCode = "";
    private $sessionClear  = "duckchat.session.clear";
    private $resetPassword = "api.passport.passwordModifyPassword";

    public function getMiniProgramId()
    {
        return $this->passporAccountPluginId;
    }

    public function requestException($ex)
    {
        $this->showPermissionPage();
    }

    public function preRequest()
    {
    }

    public function doRequest()
    {

        $tag = __CLASS__.'-'.__FUNCTION__;
        $method = strtolower($_SERVER['REQUEST_METHOD']);

        try{
            if($method == "post") {

                $loginName = $_POST['loginName'];
                $siteLoginName = $this->loginName;
                if($siteLoginName != $loginName) {
                    $errorCode = $this->zalyError->errorUpdatePasswordLoginName;
                    $errorInfo = $this->zalyError->getErrorInfo($errorCode);
                    echo json_encode(["errCode" => $errorInfo]);
                    return;
                }

                $this->modifyPassportPassword($loginName);
                echo json_encode(["errCode" => "success"]);
                return;
            } else {
                $this->ctx->Wpf_Logger->error($tag, "duckchat.session.clear userUd == ".$this->userId);
                echo $this->display("miniProgram_passport_account", ['passporAccountPluginId' => $this->passporAccountPluginId]);
                return;
            }
        }catch (Exception $ex) {
            $errorCode = $this->errorCode ? $this->errorCode : "修改失败";
            echo json_encode(["errCode" => $errorCode]);
            return;
        }
    }

    private function modifyPassportPassword($loginName)
    {
        $tag = __CLASS__ . "-". __FUNCTION__;

        try{
            $sessionClearRequest = new \Zaly\Proto\Plugin\DuckChatSessionClearRequest();
            $sessionClearRequest->setUserId($this->userId);
            $this->requestDuckChatInnerApi($this->passporAccountPluginId, $this->sessionClear, $sessionClearRequest);
        }catch (Exception $ex) {
            $this->ctx->Wpf_Logger->error($tag, $ex->getMessage());
            throw new Exception($ex->getMessage());
        }
    }
}