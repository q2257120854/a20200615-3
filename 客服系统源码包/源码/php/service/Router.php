<?php

class Router extends Service
{
    // Fields
    
    private static $instance;
    
    private $routes;
    
    // Constructor
    
    public function __construct()
    {
        $this->routes = $this->getRoutes();
    }
    
    // Methods
    
    protected function getRoutes()
    {
        return include ROOT_DIR . '/config/routes.php';
    }
    
    public function getAction($route)
    {
        // Find matching action
        
        $actionName = $this->getActionName($route);

        // Route not found

        if(!$actionName)
        {
            return null;
        }

        return $this->getActionByName($actionName);
    }

    public function getActionByName($actionName)
    {
        $parts          = explode(':', $actionName);
        $controllerName = $parts[0] . 'Controller';
        $actionName     = $parts[1] . 'Action';
        
        $controller = new $controllerName;
        
        return array('controller' => $controller, 'action' => $actionName);
    }
    
    public function getActionName($route)
    {
        // Find matching action
        
        foreach($this->routes as $path => $action)
        {
            if($path == $route)
            {
                return $action;
            }
        }
        
        // Route not found
        
        return null;
    }
    
    public function getRoute($actionName)
    {
        // Find matching route
        
        foreach($this->routes as $path => $action)
        {
            if($action == $actionName)
            {
                return $path;
            }
        }
        
        // Action not found
        
        return null;
    }
}

?>
