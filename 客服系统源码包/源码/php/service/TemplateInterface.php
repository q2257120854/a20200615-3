<?php

class TemplateInterface extends Service
{
    public $user;
    public $request;
    public $env;

    private $app;

    public function onRegister()
    {
        parent::onRegister();

        // -----

        $this->app     = $this->getApp();
        $this->user    = $this->get('user');
        $this->request = $this->get('request');
        $this->env     = $this->get('config')->data['env'];
        $this->i18n    = $this->get('i18n');
    }

    public function asset($file)
    {
        $rootUrl = $this->request->getRootUrl();

        return $rootUrl . $file;
    }

    public function path($actionName)
    {
        return $this->request->getRootUri() . '?' . $this->get('router')->getRoute($actionName);
    }

    public function url($actionName, $includeProto = true)
    {
        return $this->request->getRootUriFull($includeProto) . '?' . $this->get('router')->getRoute($actionName);
    }

    public function render($actionName)
    {
        $response = $this->app->runAction($actionName);

        echo $response->getContent() . "\n";
    }

    public function renderView($path, $vars = array(), $return = false)
    {
        // Create empty controller and inject services to it

        $controller = new Controller();
        $controller->setServiceContainer($this->services);

        // Create and display/return the response

        $response = $controller->render($path, $vars);

        if($return)
        {
            return $response->getContent();
        }

        echo $response->getContent() . "\n";
    }

    public function trans($key, $vars = null)
    {
        return $this->i18n->trans($key, $vars);
    }
}

?>
