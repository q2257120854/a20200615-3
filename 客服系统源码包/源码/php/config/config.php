<?php

$parameters = include ROOT_DIR . '/config/parameters.php';

$config = Utils::arrayMergeRecursive(array(

    // Environment info

    'env' => 'prod', // 'dev' / 'prod'

    // Other (do not modify manually)

    'appLabel' => 'phpLiveChat',

    'services' => array(

        'configuration' => array(

            'appSettingsFile' => 'app.settings.php'
        ),

        'memory' => array(

            'file' => 'data/memory%id%.dat'
        ),

        'logger' => array(

            'file'        => 'data/log.dat',
            'logErrors'   => true,
            'logWarnings' => false,
            'logInfos'    => false
        ),

        'mailer' => array(

            'smtp'       => false,
            'smtpSecure' => 'ssl',
            'smtpHost'   => '',
            'smtpUser'   => '',
            'smtpPass'   => '',
            'smtpPort'   => 465
        ),

        'i18n' => array(

            'langDir' => 'php/config/lang',
            'default' => 'en'
        ),

        'geolocation' => array(

            'url' => 'https://lcapi.mirrormx.net/v1/geolocation/query'
        ),

        'verify' => array(

            'url'   => 'https://lcapi.mirrormx.net/v1/purchase/verify',
            'app'   => 'lc-pro',
            'code'  => '',
            'token' => ''
        )
    ),

    'sharedFiles' => array(

        'dir' => 'upload/shared-files'
    ),

    'dbType' => 'mysql',

    'avatarImageSize' => 40,

    'defaultSettings' => array(

        'defaultLanguage'        => 'en',
        'widgetTheme'            => 'widget-themes/modern',
        'primaryColor'           => '#36a9e1',
        'secondaryColor'         => '#86C953',
        'labelColor'             => '#ffffff',
        'hideWhenOffline'        => false,
        'autoShowWidget'         => 'once',
        'autoShowWidgetAfter'    =>   10,
        'contactMail'            => 'admin@domain.com',
        'askForMail'             => 'true',
        'chatBoxMedia'           => 'auto',
        'headerHeight'           =>  45,
        'widgetWidth'            => 340,
        'widgetHeight'           => 400,
        'widgetSide'             => 'right',
        'widgetOffset'           =>  50,
        'mobileBreakpoint'       => 550,
        'maxConnections'         =>   5,
        'pollingInterval'        =>   5,
        'operatorInitChat'       => 'true',
        'onlineTrackInterval'    => 10,
        'maxConnections'         =>  5,
        'messageSound'           => 'audio/default.mp3',
        'systemMessageSound'     => 'audio/system.mp3',
        'sharedFileMaxSize'      => 10,
        'fileSharing'            => 'true',
        'gMapsKey'               => ''
    )

), $parameters);

// Generate connection strings

$config['dbConnectionRaw_mysql'] = 'mysql:host=' . $config['dbHost'] . ';port=' . $config['dbPort'];
$config['dbConnection_mysql']    = 'mysql:dbname=' . $config['dbName'] . ';host=' . $config['dbHost'] . ';port=' . $config['dbPort'];

// Used connection strings

$config['dbConnectionRaw'] = $config['dbConnectionRaw_' . $config['dbType']];
$config['dbConnection']    = $config['dbConnection_'    . $config['dbType']];

return $config;

?>
