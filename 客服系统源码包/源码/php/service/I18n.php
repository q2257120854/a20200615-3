<?php

class I18n extends Service
{
    private $config;
    private $request;
    private $session;
    private $language;
    private $translations;
    private $defaultTranslations;
    private $langDir;
    private $defaultLanguage;
    private $preferredLanguage;

    public function onRegister()
    {
        parent::onRegister();

        // -----

        $this->config  = $this->get('config');
        $this->request = $this->get('request');
        $this->session = $this->get('session');

        $this->langDir           = ROOT_DIR . '/../' . $this->config->data['services']['i18n']['langDir'];
        $this->defaultLanguage   = $this->config->data['services']['i18n']['default'];
        $this->preferredLanguage = $this->config->data['appSettings']['defaultLanguage'];

        // Determine request's language

        $this->language = $this->preferredLanguage;

             if($this->session->get('language')) $this->language = $this->session->get('language');
        else if($this->request->getLanguage())   $this->language = $this->request->getLanguage();

        // Load translations

        $this->initTranslations(array_unique(array(

            $this->language,
            $this->preferredLanguage,
            $this->defaultLanguage
        )));
    }

    public function trans($key, $vars = null)
    {
        if(isset($this->translations[$key]))
        {
            if($vars != null)
            {
                return str_replace(array_keys($vars), array_values($vars), $this->translations[$key]);
            }

            return $this->translations[$key];
        }

        $this->get('logger')->warning('"' . $this->language . '" translation missing for "' . $key . '"');

        // Try to use the default translation

        if(empty($this->defaultTranslations) && $this->language !== $this->defaultLanguage)
        {
            if($this->hasLanguage($this->defaultLanguage))
            {
                $this->defaultTranslations = $this->loadTranslations($this->defaultLanguage);
            }
        }

        if(isset($this->defaultTranslations[$key]))
        {
            if($vars != null)
            {
                return str_replace(array_keys($vars), array_values($vars), $this->defaultTranslations[$key]);
            }

            return $this->defaultTranslations[$key];
        }

        return '* ' . $key . ' *';
    }

    // List all available languages

    public function getLanguages()
    {
        $result = array();

        // Read all XX.php files from the language directory

        foreach(glob($this->langDir . '/*.php') as $path)
        {
            $result[] = substr(basename($path), 0, 2);
        }

        return $result;
    }

    private function initTranslations($languageList)
    {
        // Find first supported language and use it

        foreach($languageList as $lang)
        {
            if($this->hasLanguage($lang))
            {
                $this->language     = $lang;
                $this->translations = $this->loadTranslations($lang);

                return;
            }
        }

        $this->translations = array();
    }

    private function hasLanguage($lang)
    {
        return file_exists($this->langDir . '/' . substr($lang, 0, 2) . '.php');
    }

    private function loadTranslations($lang)
    {
        return include $this->langDir . '/' . substr($lang, 0, 2) . '.php';
    }
}

?>
