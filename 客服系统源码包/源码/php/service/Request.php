<?php

require_once ROOT_DIR . '/lib/php-user-agent/phpUserAgent.php';
require_once ROOT_DIR . '/lib/php-user-agent/phpUserAgentStringParser.php';

class Request extends Service
{
    // Fields

    private $method;
    private $getVars;
    private $postVars;
    private $files;
    private $friendlyFiles;
    private $ip;
    private $remoteHost;
    private $host;
    private $serverName;
    private $serverHost;
    private $referer;
    private $userAgent;

    private $uri;
    private $rootUri;
    private $rootUriFull;
    private $rootUriFullNoProto;
    private $route;
    private $rootUrl;

    private $language;

    // Constructor

    public function __construct()
    {
        $this->method     = strtoupper($_SERVER['REQUEST_METHOD']);
        $this->getVars    = $_GET;
        $this->postVars   = $_POST;
        $this->files      = $_FILES;
        $this->ip         = isset($_SERVER['HTTP_X_FORWARDED_FOR']) ? $_SERVER['HTTP_X_FORWARDED_FOR'] : (isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : '');
        $this->remoteHost = isset($_SERVER['REMOTE_HOST'])          ? $_SERVER['REMOTE_HOST']     : '';
        $this->referer    = isset($_SERVER['HTTP_REFERER'])         ? $_SERVER['HTTP_REFERER']    : '';
        $this->userAgent  = isset($_SERVER['HTTP_USER_AGENT'])      ? $_SERVER['HTTP_USER_AGENT'] : '';

        // Use last IP address if multiple addresses are listed

        $ipParts  = explode(',', $this->ip);
        $this->ip = trim(end($ipParts));

        $this->initFiles();

        $this->host               = $_SERVER['HTTP_HOST'];
        $this->serverName         = $_SERVER['SERVER_NAME'];
        $this->serverHost         = preg_replace('/^www\./', '', $this->getServerName());
        $this->protocol           = (!empty($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https') || (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443 ? "https" : "http";
        $this->uri                = $_SERVER['REQUEST_URI'];
        $this->rootUri            = $_SERVER['SCRIPT_NAME'];
        $this->rootUriFull        = $this->getProtocol() . '://' . $this->getHost() . $this->rootUri;
        $this->rootUriFullNoProto = '//' . $this->getHost() . $this->rootUri;

        $components = parse_url($this->uri);

        if(isset($components['query']))
        {
            $this->query = $components['query'];
        }
        else
        {
            $this->query = '';
        }

        $i          = strpos($this->query, '&');
        $queryRoute = $i !== false ? substr($this->query, 0, $i) : $this->query;

        $this->route   = htmlspecialchars(trim($queryRoute === false ? $this->query : $queryRoute, '/'));
        $this->url     = $this->getProtocol() . '://' . $this->getHost() . $this->getUri();
        $this->rootUrl = '/' . trim(preg_replace('/\/php\/app(_\w+)?\.php.*/', '', $this->uri), '/');

        if(strlen($this->rootUrl) !== 1)
        {
            $this->rootUrl .= '/';
        }

        // Determine client language

        if(isset($_SERVER['HTTP_ACCEPT_LANGUAGE']))
        {
            $this->language = strtolower(substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2));
        }
    }

    public function onRegister()
    {
        parent::onRegister();

        // -----

        $lang = $this->getVar('_lang');

        if(empty($lang))
        {
            $lang = $this->postVar('_lang');
        }

        if(!empty($lang))
        {
            $this->get('session')->set('language', $lang);
        }
    }

    // Methods

    public function getRoute()
    {
        return $this->route;
    }

    public function getUri()
    {
        return $this->uri;
    }

    public function getUrl()
    {
        return $this->url;
    }

    public function getRootUri()
    {
        return $this->rootUri;
    }

    public function getRootUriFull($includeProto = true)
    {
        return $includeProto ? $this->rootUriFull : $this->rootUriFullNoProto;
    }

    public function getQuery()
    {
        return $this->query;
    }

    public function getRootUrl()
    {
        return $this->rootUrl;
    }

    public function getVar($name, $safe = true)
    {
        return isset($this->getVars[$name]) ? ($safe ? $this->get('security')->escape($this->getVars[$name]) : $this->getVars[$name]) : null;
    }

    public function getVars()
    {
        return $this->getVars;
    }

    public function postVar($name, $safe = true)
    {
        return isset($this->postVars[$name]) ? ($safe ? $this->get('security')->escape($this->postVars[$name]) : $this->postVars[$name]) : null;
    }

    public function postVars()
    {
        return $this->postVars;
    }

    public function getHeader($name)
    {
        $key = 'HTTP_' . strtoupper(str_replace('-', '_', $name));

        return isset($_SERVER[$key]) ? $_SERVER[$key] : null;
    }

    public function initFiles()
    {
        $this->friendlyFiles = array();

        foreach($this->files as $id => $file)
        {
            if(is_array($file))
            {
                $this->friendlyFiles[$id] = $this->initFile($file);
            }

            $name = null;

            if(is_array($file['name']))
            {
                $name = $file['name'][0];
            }
            else
            {
                $name = $file['name'];
            }

            $this->files[$id]['ext'] = substr($name, strrpos($name, '.') + 1);
        }
    }

    protected function initFile($file)
    {
        if(is_array($file['name']))
        {
            // Multiple files

            $result = array();

            foreach($file['name'] as $i => $name)
            {
                $name = $file['name'][$i];

                $result[] = array(

                    'name'     => $file['name'][$i],
                    'type'     => $file['type'][$i],
                    'tmp_name' => $file['tmp_name'][$i],
                    'error'    => $file['error'][$i],
                    'size'     => $file['size'][$i],
                    'ext'      => substr($name, strrpos($name, '.') + 1)
                );
            }

            return $result;
        }

        // Single file

        $name = $file['name'];

        $file['ext'] = substr($name, strrpos($name, '.') + 1);

        return $file;
    }

    public function getUploadSize($field = null)
    {
        if(!empty($field))
        {
            if(!isset($this->friendlyFiles[$field])) return 0;

            $uploadField = $this->friendlyFiles[$field];

            if(is_array($uploadField))
            {
                $size = 0;

                foreach($uploadField as $file)
                {
                    $size += $file['size'];
                }

                return $size;
            }

            return $uploadField['size'];
        }

        $size = 0;

        foreach($this->friendlyFiles as $id => $file)
        {
            $size += $this->getUploadSize($id);
        }

        return $size;
    }

    public function file($name)
    {
        return isset($this->files[$name]) && $this->files[$name]['error'] === UPLOAD_ERR_OK ? $this->files[$name] : null;
    }

    public function files()
    {
        return $this->files;
    }

    public function friendlyFiles()
    {
        return $this->friendlyFiles;
    }

    public function friendlyFile($name)
    {
        return isset($this->friendlyFiles[$name]) && $this->friendlyFiles[$name]['error'] === UPLOAD_ERR_OK ? $this->friendlyFiles[$name] : null;
    }

    public function getReferer()
    {
        return $this->referer;
    }

    public function getuserAgent()
    {
        return $this->userAgent;
    }

    public function getIp()
    {
        return $this->ip;
    }

    public function getProtocol()
    {
        return $this->protocol;
    }

    public function getHost()
    {
        return $this->host;
    }

    public function getServerName()
    {
        return $this->serverName;
    }

    public function getServerHost()
    {
        return $this->serverHost;
    }

    public function hasFile($name)
    {
        return $this->file($name) !== null;
    }

    public function getMethod()
    {
        return $this->method;
    }

    public function isGet()
    {
        return $this->getMethod() == 'GET';
    }

    public function isPost()
    {
        return $this->getMethod() == 'POST';
    }

    public function isPut()
    {
        return $this->getMethod() == 'PUT';
    }

    public function isDelete()
    {
        return $this->getMethod() == 'DELETE';
    }

    public function getLanguage()
    {
        return $this->language;
    }

    public function getUserInfo()
    {
        $ua = new phpUserAgent();

        return array(

            'ip'             => $this->getIp(),
            'referer'        => $this->getReferer(),
            'userAgent'      => $this->getuserAgent(),
            'browserName'    => $ua->getBrowserName(),
            'browserVersion' => $ua->getBrowserVersion(),
            'os'             => $ua->getOperatingSystem(),
            'engine'         => $ua->getEngine(),
            'language'       => $this->getLanguage()
        );
    }

    public function userIdFromRequestInfo()
    {
        $info = $this->getUserInfo();

        return md5($info['ip'] . $info['userAgent']);
    }
}

?>
