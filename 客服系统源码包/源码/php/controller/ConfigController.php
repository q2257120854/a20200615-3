<?php

class ConfigController extends Controller
{
    // Get chat settings

    public function getSettingsAction()
    {
        $config = $this->get('config');

        return $this->json(array(

            'success' => true,

            'settings' => $config->data['appSettings']
        ));
    }

    // Update chat settings

    public function updateSettingsAction()
    {
        $config   = $this->get('config');
        $settings = $this->get('request')->postVars();

        $settings = $this->mergeWidgetThemeSettings($settings, $config);

        // Join new values with the current settings

        $config->updateAppSettings($settings);

        return $this->json(array('success' => true));
    }

    // Reset to defaults

    public function resetSettingsAction()
    {
        $config = $this->get('config');
        $keys   = $this->get('request')->postVar('keys');

        if(!empty($keys))
        {
            $keys = explode(',', $keys);
        }
        else
        {
            $keys = array();
        }

        // Use only specified settings

        $settings = array_intersect_key($config->data['defaultSettings'], array_fill_keys($keys, 0));

        $settings = $this->mergeWidgetThemeSettings($settings, $config);

        $config->updateAppSettings($settings);

        // Send updated settings

        return $this->json(array('success' => true, 'settings' => $settings));
    }

    // Adjust settings, if the widget theme was changed

    protected function mergeWidgetThemeSettings($settings, $config)
    {
        if(isset($settings['widgetTheme']))
        {
            if($settings['widgetTheme'] !== $config->data['appSettings']['widgetTheme'])
            {
                $themeConfig = include ROOT_DIR . '/../' . $settings['widgetTheme'] . '/config.php';

                $settings = array_merge($settings, $themeConfig);
            }
        }

        return $settings;
    }
}

?>
