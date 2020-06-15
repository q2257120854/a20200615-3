<?php

class Firewall extends Service
{
    private $config;
    private $user;
    private $router;
    
    public function onRegister()
    {
        parent::onRegister();
        
        // -----
        
        $this->config = include ROOT_DIR . '/config/firewall.php';
        $this->user   = $this->get('user');
        $this->router = $this->get('router');
    }
    
    public function canAccessAction($actionName)
    {
        $roles = isset($this->config['rules'][$actionName]) ? $this->config['rules'][$actionName] : null;
        
        if(empty($roles))
        {
            return true;
        }
        
        return $this->user->hasSomeRoles($roles);
    }
    
    public function canAccessPath($path)
    {
        return $this->canAccessAction($this->router->getActionName($path));
    }
    
    public function getLoginAction()
    {
        return $this->config['login_action'];
    }
}

?>
