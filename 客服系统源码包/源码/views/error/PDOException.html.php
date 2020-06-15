<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title><?php echo $app->trans('db.error') ?></title>

        <!-- Fonts -->

        <?php echo $app->renderView('blocks/fonts.html'); ?>

        <!-- Styles -->

        <link rel="stylesheet" href="<?php echo $app->asset('css/jquery.mCustomScrollbar.css') ?>" />
        <link rel="stylesheet" href="<?php echo $app->asset('css/framework.css') ?>" />
        <link rel="stylesheet" href="<?php echo $app->asset('css/main.css') ?>" />
        <link rel="stylesheet" href="<?php echo $app->asset('css/admin.css') ?>" />
        <link rel="stylesheet" href="<?php echo $app->asset('css/bootstrap.css') ?>" />
    </head>
    <body class="install-wizard">

        <div class="panel">

            <div class="header"><?php echo $app->trans('db.error') ?></div>

            <div class="content">

                <!-- Message -->

                <p class="intro">
                    <?php echo $app->trans('db.error.msg', array('%dbName%' => $vars['config']['dbName'])) ?>
                </p>

                <p class="error">
                    <?php echo $vars['message'] ?>
                </p>

                <!-- Actions -->

                <div class="row buttons">
                    <a class="btn" href="<?php echo $app->path('Install:wizard') ?>">
                        <?php echo $app->trans('sign.as.admin') ?>
                        <i class="icon-circle-arrow-right icon-white"></i>
                    </a>
                </div>

            </div>
        </div>

    </body>
</html>
