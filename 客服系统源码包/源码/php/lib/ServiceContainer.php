<?php

class ServiceContainer
{
    private static $instance = null;
    
    private $app          = null;
    private $services     = array();
    private $constructors = array();
    
    // Constructor
    
    private function __construct()
    {
        self::$instance = $this;
    }
    
    public static function getInstance()
    {
        if(self::$instance == null)
        {
            new ServiceContainer();
        }
        
        return self::$instance;
    }
    
    // Methods
    
    public function setApp($app)
    {
        $this->app = $app;
    }
    
    public function getApp()
    {
        return $this->app;
    }
    
    public function get($id)
    {
        // Create the service if not already availabe
        
        if(!isset($this->services[$id]) && isset($this->constructors[$id]))
        {
            if($this->constructors[$id][1])
            {
                $this->services[$id] = new $this->constructors[$id][0]($this->constructors[$id][1]);
            }
            else
            {
                $this->services[$id] = new $this->constructors[$id][0];
            }

            $this->services[$id]->setServiceContainer($this);
        }
        
        // Return the service
        
        return $this->services[$id];
    }
    
    public function registerService($id, $ServiceClass, $opts = array())
    {
        // Store the service constructor
        
        $this->constructors[$id] = array($ServiceClass, $opts);
    }

    public function registerServiceInstance($id, $instance)
    {
        // Store the service instance

        $this->services[$id] = $instance;
    }
    
    public function clean()
    {
        // Remove the registered services
        
        foreach($this->services as $service)
        {
            $service->onRemove();
        }
        
        $this->services = array();
    }
}

?>
