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

abstract class Manage_CommonController extends MiniProgramController
{

    protected function getMiniProgramId()
    {
        return 100;
    }


    protected function preRequest()
    {
        if (!$this->ctx->Site_Config->isManager($this->userId)) {
            //不是管理员，exception
            throw new Exception("user has no permission");
        }
    }

    /**
     * @param Exception $ex
     * @return mixed|void
     */
    protected function requestException($ex)
    {
        echo $ex->getMessage();
        $this->showPermissionPage();
    }

}