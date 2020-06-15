<?php
/**
 * Created by PhpStorm.
 * User: anguoyue
 * Date: 15/08/2018
 * Time: 10:59 AM
 */

class Manage_UserController extends Manage_CommonController
{

    public function doRequest()
    {
        $params = ["lang" => $this->language];

        $method = $_SERVER['REQUEST_METHOD'];
        if ($method == 'POST') {

            //get user list by page
            $offset = $_POST['offset'];
            $length = $_POST['length'];


        } else {
            //get user list by page
            $offset = $_GET['offset'];
            $length = $_GET['length'];

            if (empty($offset)) {
                $offset = 0;
            }

            if (empty($length)) {
                $length = 50;
            }

            $params['userList'] = $this->getUserListByOffset($offset, $length);

            $params['totalUserCount'] = $this->getTotalUsers();

            echo $this->display("manage_user_indexList", $params);
        }
        return;
    }

    private function getUserListByOffset($offset, $length)
    {
        return $this->ctx->SiteUserTable->getSiteUserListByOffset($offset, $length);
    }

    private function getTotalUsers()
    {
        $tag = __CLASS__ . "->" . __FUNCTION__;
        try {
            return $this->ctx->SiteUserTable->getSiteUserCount();
        } catch (Exception $e) {
            $this->logger->error($tag, $e);
        }
    }

}