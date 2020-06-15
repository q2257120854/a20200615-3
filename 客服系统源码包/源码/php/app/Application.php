<?php

require_once ROOT_DIR . '/lib/JSON.php';

// Main application class

class Application
{
    // Fields

    private $environment;
    private $services;

    // Constructor

    public function __construct($environment = '')
    {
        $this->environment = $environment;
        $this->services    = ServiceContainer::getInstance();

        $this->services->setApp($this);
    }

    // Methods

    public function getEnvironment()
    {
        return $this->environment;
    }

    public function config()
    {
        // Setup the services

        $this->services->registerService('exception_handler',   'ExceptionHandler');
        $this->services->registerService('config',              'Configuration');
        $this->services->registerService('logger',              'Logger');
        $this->services->registerService('stats',               'Statistics');
        $this->services->registerService('db',                  'Database');
        $this->services->registerService('filesystem',          'Filesystem');
        $this->services->registerService('memory',              'Memory');
        $this->services->registerService('memory.talks_map',    'Memory', '.talks_map');
        $this->services->registerService('memory.watched_talks','Memory', '.watched_talks');
        $this->services->registerService('memory.stats',        'Memory', '.stats');
        $this->services->registerService('memory.online',       'Memory', '.online');
        $this->services->registerService('memory.msg_q',        'Memory', '.msg_q');
        $this->services->registerService('msg_queue',           'MessageQueue');
        $this->services->registerService('online_guests',       'OnlineGuests');
        $this->services->registerService('events',              'Events');
        $this->services->registerService('mailer',              'Mailer');
        $this->services->registerService('i18n',                'I18n');
        $this->services->registerService('http',                'Http');
        $this->services->registerService('request',             'Request');
        $this->services->registerService('session',             'Session');
        $this->services->registerService('router',              'Router');
        $this->services->registerService('security',            'Security');
        $this->services->registerService('validation',          'Validation');
        $this->services->registerService('verify',              'Verification');
        $this->services->registerService('model_validation',    'ModelValidation');
        $this->services->registerService('models',              'Repository');
        $this->services->registerService('views',               'Repository');
        $this->services->registerService('controllers',         'Repository');
        $this->services->registerService('user',                'User');
        $this->services->registerService('guest',               'Guest');
        $this->services->registerService('auth',                'Authentication');
        $this->services->registerService('firewall',            'Firewall');
        $this->services->registerService('template_interface',  'TemplateInterface');
        $this->services->registerService('image_resizer',       'ImageResizer');
        $this->services->registerService('color_calculator',    'ColorCalculator');
    }

    public function run($request)
    {
        $response = null;

        // Authorize

        $authorized = $this->services->get('firewall')->canAccessPath($request->getRoute());

        if($authorized)
        {
            // Find the matching action and run it

            $router     = $this->services->get('router');
            $actionName = $router->getActionName($request->getRoute());

            if($actionName) // action exists
            {
                $response = $this->runAction($actionName);
            }
            else // no action for this route
            {
                // Create empty controller and inject services to it

                $controller = new Controller();
                $controller->setServiceContainer($this->services);

                // If it's the first time application's run, open installation wizard

                $config      = $this->services->get('config');
                $appSettings = $config->data['appSettings'];

                if(empty($appSettings['installed']) && empty($config->data['superPass']))
                {
                    // Redirect

                    $response = $controller->redirect('Install:index');
                }
                else
                {
                    // Create the "Not Found" HTTP response

                    $this->services->get('logger')->info('Route /' . $request->getRoute() . ' not found');

                    $response = $controller->render('error/404.html.php', array(), 'html', array(), 404);
                }
            }
        }
        else
        {
            /*
            // Return the "Access denided" HTTP response

            return new Response('Access denied (' . $request->getRoute() . ')', null, 403);
            */

            // Redirect to the login page

            $loginAction = $this->services->get('firewall')->getLoginAction();
            $loginPath   = '?' . $this->services->get('router')->getRoute($loginAction);

            $response = new Response('', array(array('Location', $loginPath)), 303);
        }

        // Clean

        $this->services->clean();

        // Return the response

        return $response;
    }

    public function runAction($actionName)
    {
        $response = null;

        // Find the matching action

        $action = $this->services->get('router')->getActionByName($actionName);

        // Run the action and return the response

        $controller = $action['controller'];
        $actionName = $action['action'];

        // Inject services to the controller

        $controller->setServiceContainer($this->services);

        // Run the action

        try
        {
            $result = $controller->$actionName();

            if($result instanceof Response)
            {
                $response = $result;
            }
            else
            {
                $response = new Response($result);
            }
        }
        catch(Exception $e)
        {
            // Create special response for exceptions

            $response = $this->services->get('exception_handler')->createResponse($e);
        }

        return $response;
    }
}

?>
