<?php

class ExceptionHandler extends Service
{
    // Methods
    
    public function createResponse($exception)
    {
        // Create empty controller and inject services to it
        
        $controller = new Controller();
        $controller->setServiceContainer($this->services);
        
        // Create special response for exceptions
        
        $view = $this->getExceptionView(get_class($exception));
        
        $message = $exception->getMessage();
        $config  = $this->get('config')->data;

        // Log

        $this->get('logger')->error($message);
        
        return $controller->render($view, compact('message', 'config'), 'html', array(), 500);
    }
    
    protected function getExceptionView($className)
    {
        // Check if a special view exists for this class
        
        if(Controller::viewExists('error/' . $className . '.html.php'))
        {
            return 'error/' . $className . '.html.php';
        }
        
        // Return the default view if non can be found
        
        if(!get_parent_class($className))
        {
            return 'error/Exception.html.php';
        }
        
        // Try with the parent class
        
        return $this->getExceptionView(get_parent_class($className));
    }
}

?>
