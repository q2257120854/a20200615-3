<?php

class MobileAppController extends Controller
{
    // Return general information about the server, that app can use

    public function apiAction()
    {
        $config   = $this->get('config');
        $template = $this->get('template_interface');

        return $this->json(array(

            'success'  => true,
            'app'      => $config->data['services']['verify']['app'],
            'loginUrl' => $template->url('MobileApp:login')
        ));
    }

    public function loginAction()
    {
        if($this->isPreflight()) return $this->handlePreflight();

        $input = $this->getInput();

        $template = $this->get('template_interface');
        $security = $this->get('security');
        $request  = $this->get('request');
        $config   = $this->get('config');
        $logger   = $this->get('logger');

        $userToken = null;
        $userData  = null;

        // Login

        $errors   = false;
        $username = '';

        if($request->isPost())
        {
            // Get credentials

            $username = $security->escapeString  ($input['name']);
            $password = $security->encodePassword($input['password']);

            // Check if user exists and passwords match

            $userEntry = UserModel::repo()->findOneBy(array('mail' => $username, 'roles' => array('LIKE', '%OPERATOR%')));

            if(isset($userEntry->password))
            {
                if($password == $userEntry->password)
                {
                    $userToken = array(

                        'id'    => $userEntry->id,
                        'name'  => $userEntry->name,
                        'roles' => $userEntry->roles
                    );

                    $userData = $userEntry->toJson();
                }
            }

            // Store user's identity in the session

            if($userToken)
            {
                $this->get('auth')->setUser($userToken['id'], $userToken['name'], $userToken['roles']);

                // Log

                $logger->info('Successful login, user: ' . $username);
            }
            else
            {
                // Log

                $logger->info('Failed login, user: ' . $username);

                return $this->json(array(

                    'success' => false
                ));
            }
        }
        else
        {
            return $this->json(array(

                'success' => false
            ));
        }

        // Success

        return $this->json(array(

            'success' => true,

            'sid' => $this->get('session')->getId(),

            'config' => array(

                'user' => $userData,
                'ui'   => $config->data['appSettings'],
                'time' => date("Y-m-d H:i:s"),

                'urls' => array(

                    'logout' => $template->url('MobileApp:logout'),

                    // MessageController

                    'lastMessages'         => $template->url("MobileApp:Message__operatorGuestGetLast"),
                    'sendMessage'          => $template->url("MobileApp:Message__send"),
                    'queryHistory'         => $template->url("MobileApp:Message__queryHistory"),
                    'clearHistory'         => $template->url("MobileApp:Message__clearHistory"),

                    // UploadController

                    'uploadCrud'           => $template->url("MobileApp:Upload__crud"),
                    'uploadFiles'          => $template->url("MobileApp:Upload__upload"),
                    'denyUpload'           => $template->url("MobileApp:Upload__deny"),
                    'confirmUpload'        => $template->url("MobileApp:Upload__confirm"),
                    'abortUpload'          => $template->url("MobileApp:Upload__abort"),

                    // SharedFileController

                    'downloadFile'         => $template->url("SharedFile:download"),

                    // OperatorController

                    'manageConnection'     => $template->url('MobileApp:Operator__manageConnection'),
                    'getTypingStatus'      => $template->url("MobileApp:Operator__getTypingStatus"),
                    'updateTypingStatus'   => $template->url("MobileApp:Operator__updateTypingStatus"),
                    'getOnlineUsers'       => $template->url("MobileApp:Operator__getOnlineUsers"),
                    'inviteToTalk'         => $template->url("MobileApp:Operator__inviteToTalk"),
                    'leaveTalk'            => $template->url("MobileApp:Operator__leaveTalk"),
                    'closeTalk'            => $template->url("MobileApp:Operator__closeTalk"),
                    'transferTalk'         => $template->url("MobileApp:Operator__transferTalk"),
                    'getOperator'          => $template->url("MobileApp:Operator__get"),
                    'getUser'              => $template->url("MobileApp:Operator__get"),
                    'getUsers'             => $template->url("MobileApp:Operator__getUsers"),
                    'listOperators'        => $template->url("MobileApp:Operator__list"),
                    'saveOperator'         => $template->url("MobileApp:Operator__update"),
                    'uploadAvatar'         => $template->url("MobileApp:Operator__uploadAvatar"),
                    'deleteOperator'       => $template->url("MobileApp:Operator__delete"),

                    // CannedMessageController

                    'createCannedMessages' => $template->url("MobileApp:CannedMessage__create"),
                    'getCannedMessage'     => $template->url("MobileApp:CannedMessage__get"),
                    'listCannedMessages'   => $template->url("MobileApp:CannedMessage__list"),
                    'updateCannedMessage'  => $template->url("MobileApp:CannedMessage__update"),
                    'deleteCannedMessage'  => $template->url("MobileApp:CannedMessage__delete"),

                    // DepartmentController

                    'createDepartment'     => $template->url("Department:create"),
                    'getDepartment'        => $template->url("Department:get"),
                    'listDepartments'      => $template->url("Department:list"),
                    'updateDepartment'     => $template->url("Department:update"),
                    'deleteDepartment'     => $template->url("Department:delete"),

                    // ContactController

                    'contact'              => $template->url("Contact:contact"),

                    // ConfigController

                    'getSettings'          => $template->url("Config:getSettings"),
                    'updateSettings'       => $template->url("Config:updateSettings"),
                    'resetSettings'        => $template->url("Config:resetSettings"),

                    // AdminController

                    'getLogs'              => $template->url("Admin:logs"),
                    'clearLogs'            => $template->url("Admin:clearLogs"),
                    'updateBlacklist'      => $template->url("Admin:updateBlacklist"),

                    // WidgetController

                    'widgetMobile'         => $template->url('Widget:mobileView'),
                    'widgetInit'           => $template->url("Widget:init", false),
                    'widgetInitInline'     => $template->url("Widget:initInline", false),

                    // OnlineGuestsController

                    'trackLogin'           => $template->url("MobileApp:OnlineGuests__login")
                )
            )
        ));
    }

    public function logoutAction()
    {
        $user = $this->get('user');

        if($user->getId())
        {
            // Reset user's last activity time

            UserModel::repo()->resetLastActivity($user->getId());

            // Log

            $this->get('logger')->info('Log out, user: ' . $user->getName());
        }

        // Clear user's identity

        $this->get('auth')->clearUser();
        $this->get('session')->destroy();

        return $this->json(array(

            'success' => true
        ));
    }

    //--------------------------------------------------------------------------
    //  Proxy for existing controllers
    //--------------------------------------------------------------------------

    public function __call($name, $arguments)
    {
        // Find target controller and action

        $parts = explode('__', $name);

        if(count($parts) !== 2)
        {
            return $this->deny();
        }

        $controllerName = $parts[0] . 'Controller';
        $actionName     = $parts[1];

        // Firewall check

        $route      = $parts[0] . ':' . str_replace('Action', '', $actionName);
        $authorized = $this->get('firewall')->canAccessPath($route);

        if(!$authorized)
        {
            return $this->deny();
        }

        // Preflight request handling

        if($this->isPreflight()) return $this->handlePreflight();

        // Run action

        $controller = new $controllerName();
        $controller->setServiceContainer($this->services);

        $response = $controller->$actionName();

        // Decorate response

        return new Response($response->getContent(), $this->getCorsHeaders());
    }

    //--------------------------------------------------------------------------
    //  Helper methods
    //--------------------------------------------------------------------------

    protected function getCorsHeaders()
    {
        $request = $this->get('request');

        return array(

            array('Content-type', 'application/json;charset=utf-8'),

            array('Access-Control-Allow-Origin',  $request->getHeader('Origin')),
            array('Access-Control-Allow-Headers', $request->getHeader('Access-Control-Request-Headers')),
            array('Access-Control-Allow-Methods', $request->getHeader('Access-Control-Request-Method'))
        );
    }

    public function json($array, $forceTextType = false, $headers = array())
    {
        return parent::json($array, $forceTextType, $this->getCorsHeaders());
    }

    protected function isPreflight()
    {
        return $this->get('request')->getMethod() == 'OPTIONS';
    }

    protected function handlePreflight()
    {
        return $this->json(array());
    }

    protected function getInput()
    {
        $rawInput = @file_get_contents('php://input');
        $input    = json_decode($rawInput, true);

        if($input !== null)
        {
            return $input;
        }

        return array();
    }
}

?>
