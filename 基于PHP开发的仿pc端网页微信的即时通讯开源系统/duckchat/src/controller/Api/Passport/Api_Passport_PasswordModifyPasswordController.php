<?php
/**
 * Created by PhpStorm.
 * User: zhangjun
 * Date: 10/09/2018
 * Time: 10:46 AM
 */


class Api_Passport_PasswordModifyPasswordController extends BaseController
{
    private $classNameForRequest = '\Zaly\Proto\Site\ApiPassportPasswordModifyPasswordRequest';
    private $classNameForResponse = '\Zaly\Proto\Site\ApiPassportPasswordModifyPasswordResponse';

    public function rpcRequestClassName()
    {
        return $this->classNameForRequest;
    }

    /**
     * @param \Zaly\Proto\Site\ApiPassportPasswordModifyPasswordRequest $request
     * @param \Google\Protobuf\Internal\Message $transportData
     */
    public function rpc(\Google\Protobuf\Internal\Message $request, \Google\Protobuf\Internal\Message $transportData)
    {
        $tag = __CLASS__ . '-' . __FUNCTION__;
        try{
            $newPassword = $request->getNewPassword();
            $password = $request->getPassword();
            $loginName = $request->getLoginName();
            $this->ctx->Wpf_Logger->error($tag, "error_msg=" . $request->serializeToJsonString());
            $this->checkOldPassword($loginName, $password);
            $this->updatePasswordByLoginName($loginName, $newPassword);
            $this->setRpcError($this->defaultErrorCode, "");
        }catch (Exception $ex) {
            $this->ctx->Wpf_Logger->error($tag, "error_msg=" . $ex->getMessage());
        }
        $this->rpcReturn($transportData->getAction(),  new $this->classNameForResponse());
    }

    private function  checkOldPassword($loginName, $password)
    {
        $userInfo = $this->ctx->PassportPasswordTable->getUserByLoginName($loginName);
        if($userInfo == false) {
            $errorCode = $this->zalyError->errorExistUser;
            $errorInfo = $this->zalyError->getErrorInfo($errorCode);
            $this->setRpcError($errorCode, $errorInfo);
            throw new Exception("user is not exists");
        }

        if(!password_verify($password, $userInfo['password'])) {
            $errorCode = $this->zalyError->errorMatchLogin;
            $errorInfo = $this->zalyError->getErrorInfo($errorCode);
            $this->setRpcError($errorCode, $errorInfo);
            throw new Exception("loginName password is not match");
        }
    }

    private function updatePasswordByLoginName($loginName, $password)
    {
        $tag = __CLASS__ . '-' . __FUNCTION__;

        try{
            $where = [
                "loginName" => $loginName
            ];
            $data = [
                "password" => password_hash($password, PASSWORD_BCRYPT)
            ];
            $this->ctx->PassportPasswordTable->updateUserData($where, $data);
        }catch (Exception $ex) {
            $this->ctx->Wpf_Logger->error($tag, "error_msg=" . $ex->getMessage());
            $errorCode = $this->zalyError->errorUpdatePwd;
            $errorInfo = $this->zalyError->getErrorInfo($errorCode);
            $this->setRpcError($errorCode, $errorInfo);
            throw new Exception("update password failed ");
        }
    }
}