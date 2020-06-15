<?php
/**
 * Created by PhpStorm.
 * User: zhangjun
 * Date: 08/09/2018
 * Time: 12:11 PM
 */

class Duckchat_Session_ClearController extends Duckchat_MiniProgramController
{
    private $classNameForRequest = '\Zaly\Proto\Plugin\DuckChatSessionClearRequest';
    private $classNameForResponse = '\Zaly\Proto\Plugin\DuckChatSessionClearResponse';
    private $requestAction = "duckchat.session.clear";

    public function rpcRequestClassName()
    {
        return $this->classNameForRequest;
    }

    /**
     * @param \Zaly\Proto\Plugin\DuckChatSessionClearRequest $request
     * @param \Zaly\Proto\Core\TransportData $transportData
     */
    public function rpc(\Google\Protobuf\Internal\Message $request, \Google\Protobuf\Internal\Message $transportData)
    {
        try {
            $userId = $request->getUserId();

            if(!$userId) {
                $errorCode = $this->zalyError->errorSessionClear;
                $errorInfo = $this->zalyError->getErrorInfo($errorCode);
                $this->setRpcError($errorCode, $errorInfo);
                throw new Exception("duckchat.session.id userid is not exits");
            }
            $this->clearSessionByUserId($userId);
            $this->setRpcError($this->defaultErrorCode, "");
        } catch (Exception $ex) {
            $tag = __CLASS__."-".__FUNCTION__;
            $errorCode = $this->zalyError->errorSessionClear;
            $errorInfo = $this->zalyError->getErrorInfo($errorCode);
            $this->setRpcError($errorCode, $errorInfo);
            $this->ctx->Wpf_Logger->error($tag, $ex->getMessage());
        }
        $this->rpcReturn($this->requestAction, new \Zaly\Proto\Plugin\DuckChatSessionClearResponse());
        return;
    }

    private function clearSessionByUserId($userId)
    {
        $flag = $this->ctx->SiteSessionTable->deleteSessionByUserId($userId);

        if($flag >0) {
            return true;
        }
        throw new Exception("delete session failed");
    }
}