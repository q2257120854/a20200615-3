<!DOCTYPE html>
<html<?php if(!empty($vars['mobile'])) echo ' class="mobile"'; else if(!empty($vars['inline'])) echo ' class="inline-view"' ?>>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

        <?php if(!empty($vars['mobile'])) { ?>
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
        <?php } ?>

        <!-- Fonts -->

        <?php echo $app->renderView('blocks/fonts.html'); ?>

        <!-- Styles -->

        <link rel="stylesheet" href="<?php echo $app->asset('css/main.css') ?>" />
        <link rel="stylesheet" href="<?php echo $app->asset('css/widget-mobile.css') ?>" />
        <link rel="stylesheet" href="<?php echo $app->asset('css/jquery.mCustomScrollbar.css') ?>" />
        <link rel="stylesheet" href="<?php echo $app->asset('css/bootstrap.css') ?>" />
        <link rel="stylesheet" href="<?php echo $app->path('Widget:themeStyle') ?>" />
        <link rel="stylesheet" href="<?php echo $app->path('Widget:customStyle') ?>" />
    </head>
    <body>

        <div id="customer-chat-widget" class="customer-chat customer-chat-widget loading-screen">
            <div class="customer-chat-header">
                <div class="customer-chat-header-title"><?php echo $app->trans('chatHeader') ?></div>
                <div class="customer-chat-header-indicator"></div>

                <div id="customer-chat-button-close" class="customer-chat-header-button mobile-only">
                    <i class="icon-remove icon-white"></i>
                </div>

                <div id="customer-chat-button-toggle" class="customer-chat-header-button desktop-only">
                    <i class="icon-chevron-down icon-white"></i>
                    <i class="icon-chevron-up icon-white"></i>
                </div>

                <div id="customer-chat-button-settings" class="customer-chat-header-button"><i class="icon-wrench icon-white"></i></div>

                <div class="customer-chat-header-menu">
                    <div class="customer-chat-header-menu-triangle"></div>

                    <!-- Settings -->

                    <a href="#" id="customer-chat-setting-toggle-sound" class="customer-chat-toggle-sound"><i class="icon-music"></i> <div><?php echo $app->trans('toggleSoundLabel') ?></div></a>
                    <a href="#" id="customer-chat-setting-toggle-scroll" class="customer-chat-toggle-scroll"><i class="icon-arrow-down"></i> <div><?php echo $app->trans('toggleScrollLabel') ?></div></a>
                    <a href="#" id="customer-chat-setting-toggle-emots" class="customer-chat-toggle-emots"><i class="icon-heart"></i> <div><?php echo $app->trans('toggleEmoticonsLabel') ?></div></a>
                    <a href="#" id="customer-chat-setting-toggle-media" class="customer-chat-toggle-media"><i class="icon-picture"></i> <div><?php echo $app->trans('toggleMediaLabel') ?></div></a>
                    <a href="#" id="customer-chat-setting-toggle-show" class="customer-chat-toggle-show desktop-only"><i class="icon-resize-full"></i> <div><?php echo $app->trans('toggleAutoShowLabel') ?></div></a>
                    <a href="#" id="customer-chat-toggle-fs" class="desktop-only"><i class="icon-fullscreen"></i> <div><?php echo $app->trans('toggleFullscreenLabel') ?></div></a>

                    <!-- Actions -->

                    <a href="#" id="customer-chat-action-mail-transcript">
                        <i class="icon-envelope"></i>
                        <div><?php echo $app->trans('mailTranscriptLabel') ?></div>
                    </a>

                    <a href="#" id="customer-chat-action-end-chat">
                        <i class="icon-off"></i>
                        <div><?php echo $app->trans('endChatLabel') ?></div>
                    </a>

                    <div id="customer-chat-action-end-chat-confirmation" class="item">
                        <i class="icon-off"></i>
                        <div>
                            <?php echo $app->trans('endChatConfirmQuestion') ?>
                            <a href="#" id="customer-chat-action-end-chat-confirm" class="customer-chat-content-button customer-chat-content-button-inline"><?php echo $app->trans('endChatConfirm') ?></a>
                            <a href="#" id="customer-chat-action-end-chat-cancel" class="customer-chat-content-button customer-chat-content-button-inline"><?php echo $app->trans('endChatCancel') ?></a>
                        </div>
                    </div>
                </div>
            </div>

            <div id="customer-chat-content-login-form" class="customer-chat-content">
                <div class="form">
                    <div class="customer-chat-content-info">
                        <?php echo $app->trans('startInfo') ?>
                    </div>
                    <div id="customer-chat-select-avatar">
                        <a href="#" class="prev-avatar customer-chat-content-button customer-chat-content-button-inline"><i class="icon-chevron-left icon-white"></i></a>
                        <i class="selected-avatar customer-chat-content-message-avatar"></i>
                        <a href="#" class="next-avatar customer-chat-content-button customer-chat-content-button-inline"><i class="icon-chevron-right icon-white"></i></a>
                    </div>
                    <div class="customer-chat-content-message-input">
                        <a href="#" class="select-department"><i class="fa fa-hand-pointer-o"></i><i class="fa fa-pencil edit"></i> <span class="empty-content"><?php echo $app->trans('selectDepartment') ?></span><span class="content"></span></a>
                    </div>
                    <div class="customer-chat-content-message-input">
                        <input id="customer-chat-login-name" type="text" class="customer-chat-content-message-input-field" placeholder="<?php echo $app->trans('contactNameLabel') ?>" />
                    </div>
                    <div class="customer-chat-content-message-input">
                        <input id="customer-chat-login-mail" type="email" class="customer-chat-content-message-input-field" placeholder="<?php echo $app->trans('contactMailLabel') ?>" />
                    </div>
                    <div class="customer-chat-content-row">
                        <a href="#" id="customer-chat-login-start" class="customer-chat-content-button"><?php echo $app->trans('startLabel') ?> <i class="icon-circle-arrow-right icon-white" style="margin: 3px 0 0 3px;"></i></a>
                    </div>
                </div>
                <div class="departments">
                    <div class="list">
                    </div>
                </div>
            </div>

            <div id="customer-chat-content-chat-box" class="customer-chat-content chat-box file-drop-zone">
                <div class="file-drop-zone-effect">
                    <i class="fa fa-upload"></i>
                </div>

                <div class="customer-chat-content-messages">
                    <div class="customer-chat-content-messages-wrapper"></div>
                </div>

                <div class="customer-chat-content-message-input">
                    <div class="customer-chat-emots-menu">
                        <div class="customer-chat-header-menu-triangle"></div>

                        <div class="emots-wrapper">
                            <a href="#" data-emot=":)" class="customer-chat-emoticon"><i class="emot emot-1" alt=":)" title=":)"></i></a>
                            <a href="#" data-emot=";)" class="customer-chat-emoticon"><i class="emot emot-2" alt=";)" title=";)"></i></a>
                            <a href="#" data-emot=":(" class="customer-chat-emoticon"><i class="emot emot-3" alt=":(" title=":("></i></a>
                            <a href="#" data-emot=":D" class="customer-chat-emoticon"><i class="emot emot-4" alt=":D" title=":D"></i></a>
                            <a href="#" data-emot=":P" class="customer-chat-emoticon"><i class="emot emot-5" alt=":P" title=":P"></i></a>
                            <a href="#" data-emot="=)" class="customer-chat-emoticon"><i class="emot emot-6" alt="=)" title="=)"></i></a>
                            <a href="#" data-emot=":|" class="customer-chat-emoticon"><i class="emot emot-7" alt=":|" title=":|"></i></a>
                            <a href="#" data-emot="=|" class="customer-chat-emoticon"><i class="emot emot-8" alt="=|" title="=|"></i></a>
                            <a href="#" data-emot=">:|" class="customer-chat-emoticon"><i class="emot emot-9" alt=">:|" title=">:|"></i></a>
                            <a href="#" data-emot=">:D" class="customer-chat-emoticon"><i class="emot emot-10" alt=">:D" title=">:D"></i></a>

                            <a href="#" data-emot="o_O" class="customer-chat-emoticon"><i class="emot emot-11" alt="o_O" title="o_O"></i></a>
                            <a href="#" data-emot="=O" class="customer-chat-emoticon"><i class="emot emot-12" alt="=O" title="=O"></i></a>
                            <a href="#" data-emot="<3" class="customer-chat-emoticon"><i class="emot emot-13" alt="<3" title="<3"></i></a>
                            <a href="#" data-emot=":S" class="customer-chat-emoticon"><i class="emot emot-14" alt=":S" title=":S"></i></a>
                            <a href="#" data-emot=":*" class="customer-chat-emoticon"><i class="emot emot-15" alt=":*" title=":*"></i></a>
                            <a href="#" data-emot=":$" class="customer-chat-emoticon"><i class="emot emot-16" alt=":$" title=":$"></i></a>
                            <a href="#" data-emot="=B" class="customer-chat-emoticon"><i class="emot emot-17" alt="=B" title="=B"></i></a>
                            <a href="#" data-emot=":-D" class="customer-chat-emoticon"><i class="emot emot-18" alt=":-D" title=":-D"></i></a>
                            <a href="#" data-emot=";-D" class="customer-chat-emoticon"><i class="emot emot-19" alt=";-D" title=";-D"></i></a>
                            <a href="#" data-emot="*-D" class="customer-chat-emoticon"><i class="emot emot-20" alt="*-D" title="*-D"></i></a>
                        </div>
                    </div>

                    <div class="typing-indicator"><i class="icon icon-pencil"></i></div>
                    <div class="input-wrapper">
                        <input type="text" id="customer-chat-message-input" class="customer-chat-content-message-input-field" placeholder="<?php echo $app->trans('chatInputLabel') ?>" />
                    </div>

                    <label class="file-button" for="file-input">
                        <i class="fa fa-upload"></i>
                        <input type="file" id="file-input" name="files[]" multiple>
                    </label>

                    <div class="customer-chat-content-message-emots-button"></div>

                    <a id="chat-send-button" href="#" class="customer-chat-content-button mobile-only"><i class="icon-white icon-arrow-right"></i></a>

                    <div class="end-talk-info">
                        <span><?php echo $app->trans('operatorClosedTalk') ?></span>
                        <a href="#" id="customer-chat-action-silent-logout" class="customer-chat-content-button"><i class="icon-white icon-repeat"></i> <?php echo $app->trans('loginAgain') ?></a>
                    </div>
                </div>
            </div>

            <div id="customer-chat-content-mail-transcript" class="customer-chat-content">
                <div class="form">
                    <div class="customer-chat-content-info">
                        <?php echo $app->trans('mailTranscriptInfo') ?>
                    </div>
                    <div class="customer-chat-content-message-input">
                        <input id="customer-chat-transcript-mail" type="text" class="customer-chat-content-message-input-field" placeholder="<?php echo $app->trans('contactMailLabel') ?>" />
                    </div>
                    <div class="customer-chat-content-row">
                        <a href="#" id="customer-chat-action-transcript-cancel" class="customer-chat-content-button"><i class="icon-circle-arrow-left icon-white" style="margin: 3px 0 0 3px;"></i> <?php echo $app->trans('selectCancel') ?></a>
                        <a href="#" id="customer-chat-action-transcript-send" class="customer-chat-content-button"><?php echo $app->trans('contactSendLabel') ?> <i class="icon-circle-arrow-right icon-white" style="margin: 3px 0 0 3px;"></i></a>
                    </div>
                </div>
            </div>

            <div id="customer-chat-content-contact-form" class="customer-chat-content">
                <div class="form">
                    <div class="customer-chat-content-info">
                        <?php echo $app->trans('contactInfo') ?>
                    </div>
                    <div class="customer-chat-content-message-input">
                        <input id="customer-chat-contact-name" type="text" class="customer-chat-content-message-input-field" placeholder="<?php echo $app->trans('contactNameLabel') ?>" />
                    </div>
                    <div class="customer-chat-content-message-input">
                        <input id="customer-chat-contact-mail" type="email" class="customer-chat-content-message-input-field" placeholder="<?php echo $app->trans('contactMailLabel') ?>" />
                    </div>
                    <div class="customer-chat-content-message-input">
                        <textarea id="customer-chat-contact-message" class="customer-chat-content-message-input-field" placeholder="<?php echo $app->trans('contactQuestionLabel') ?>"></textarea>
                    </div>
                    <div class="customer-chat-content-row">
                        <a href="#" id="customer-chat-contact-send" class="customer-chat-content-button"><?php echo $app->trans('contactSendLabel') ?> <i class="icon-circle-arrow-right icon-white" style="margin: 3px 0 0 3px;"></i></a>
                    </div>
                </div>
            </div>

            <div id="customer-chat-content-loading" class="customer-chat-content">
                <img src="<?php echo $app->asset('img/loading.gif') ?>"class="customer-chat-content-loading-icon" />
            </div>

            <div id="customer-chat-content-info" class="customer-chat-content">
                <div id="customer-chat-info-text" class="customer-chat-content-info"></div>
                <div class="customer-chat-content-row">
                    <a href="#" id="customer-chat-info-back" class="customer-chat-content-button"><i class="icon-circle-arrow-left icon-white" style="margin: 3px 3px 0 0;"></i> <?php echo $app->trans('backLabel') ?></a>
                </div>
            </div>
        </div>

        <a id="mobile-widget" class="customer-chat-header" href="<?php echo $app->path('Widget:mobileView') ?>" target="_top"><i class="icon-white icon-comment"></i></a>

        <!-- Templates -->

        <?php echo $app->renderView('js-templates/common.html'); ?>

        <!-- Scripts -->

        <?php echo $app->renderView('blocks/debugScripts.html'); ?>

        <?php if($app->env == 'prod') { ?>
            <script src="<?php echo $app->asset('js/customer-chat-widget-libs.min.js') ?>" type="text/javascript"></script>
        <?php } else { ?>
            <!--[if lte IE 9]>
            <script type="text/javascript" src="<?php echo $app->asset('js/lib/es5-shim.min.js') ?>"></script>
            <![endif]-->
            <script src="<?php echo $app->asset('js/lib/jquery.js') ?>"></script>
            <!--[if lte IE 9]>
            <script type="text/javascript" src="<?php echo $app->asset('js/lib/placeholders.jquery.min.js') ?>"></script>
            <![endif]-->
            <script src="<?php echo $app->asset('js/lib/jquery.cookie.js') ?>"></script>
            <script src="<?php echo $app->asset('js/lib/jquery.ui.min.js') ?>"></script>
            <script src="<?php echo $app->asset('js/lib/jquery.mousewhell.js') ?>"></script>
            <script src="<?php echo $app->asset('js/lib/jquery.mCustomScrollbar.js') ?>"></script>
            <script src="<?php echo $app->asset('js/lib/AjaxUploader.js') ?>"></script>
            <script src="<?php echo $app->asset('js/lib/json2.js') ?>"></script>
            <script src="<?php echo $app->asset('js/lib/underscore.js') ?>"></script>
            <script src="<?php echo $app->asset('js/lib/handlebars.js') ?>"></script>
            <script src="<?php echo $app->asset('js/lib/backbone.js') ?>"></script>
            <script src="<?php echo $app->asset('js/lib/backbone.marionette.js') ?>"></script>
            <script src="<?php echo $app->asset('js/lib/soundmanager2-nodebug-jsmin.js') ?>"></script>
        <?php } ?>

        <script type="text/javascript">
            // Basic configuration

            window.chatConfig = {

                serverTimeDifference : (new Date('<?php echo date("Y-m-d H:i:s") ?>'.replace(/-/g,"/")).getTime() / 1000) - (new Date().getTime() / 1000),

                rootPath : '<?php echo $app->asset("") ?>',

                onlineDepartmentsPath  : '<?php echo $app->path("Department:getOnline") ?>',
                isOperatorOnlinePath   : '<?php echo $app->path("Operator:isOnline") ?>',
                isLoggedInPath         : '<?php echo $app->path("Authentication:isGuestLoggedIn") ?>',
                loginPath              : '<?php echo $app->path("Authentication:loginGuest") ?>',
                logoutPath             : '<?php echo $app->path("Authentication:logoutGuest") ?>',
                getTypingStatusPath    : '<?php echo $app->path("Guest:getTypingStatus") ?>',
                updateTypingStatusPath : '<?php echo $app->path("Guest:updateTypingStatus") ?>',
                manageConnectionPath   : '<?php echo $app->path("Guest:manageConnection") ?>',
                lastMessagesPath       : '<?php echo $app->path("Message:getLast") ?>',
                sendMessagePath        : '<?php echo $app->path("Message:guestSend") ?>',
                mailTalkTranscriptPath : '<?php echo $app->path("Message:mailTalkTranscript") ?>',
                uploadCrudPath         : '<?php echo $app->path("Upload:crud") ?>',
                uploadFilesPath        : '<?php echo $app->path("Upload:upload") ?>',
                abortUploadPath        : '<?php echo $app->path("Upload:abort") ?>',
                downloadFilePath       : '<?php echo $app->path("SharedFile:download") ?>',
                getOperatorPath        : '<?php echo $app->path("Operator:get") ?>',
                getUsersPath           : '<?php echo $app->path("Operator:getUsers") ?>',
                contactPath            : '<?php echo $app->path("Contact:contact") ?>',
                trackKeepAlivePath     : '<?php echo $app->path("OnlineGuests:keepAlive") ?>',
                trackConfirmLoginPath  : '<?php echo $app->path("OnlineGuests:confirmLogin") ?>',

                trans : <?php echo $vars["trans"] ?>,

                ui : <?php echo $vars["uiJson"] ?>,

                defaultAvatars : <?php echo $vars["defaultAvatars"] ?>,

                info : <?php echo $vars["info"] ?>,

                mobile : <?php echo !empty($vars['mobile']) ? 'true' : 'false' ?>,
                inline : <?php echo !empty($vars['inline']) ? 'true' : 'false' ?>,

                remoteDomain : '<?php echo $vars['remoteDomain']; ?>',

                geolocConfig : <?php echo $vars["geolocConfig"] ?>
            };
        </script>

        <?php if($app->env == 'prod') { ?>
            <script src="<?php echo $app->asset('js/customer-chat-widget.min.js') ?>" type="text/javascript"></script>
        <?php } else { ?>
            <script src="<?php echo $app->asset('js/app/Application.js') ?>"></script>

            <script src="<?php echo $app->asset('js/app/service/SoundPlayer.js') ?>"></script>
            <script src="<?php echo $app->asset('js/app/service/Geolocation.js') ?>"></script>
            <script src="<?php echo $app->asset('js/app/service/Beacon.js') ?>"></script>
            <script src="<?php echo $app->asset('js/app/service/I18n.js') ?>"></script>

            <script src="<?php echo $app->asset('js/app/model/GuestSettingsModel.js') ?>"></script>
            <script src="<?php echo $app->asset('js/app/model/UserModel.js') ?>"></script>
            <script src="<?php echo $app->asset('js/app/model/MessageModel.js') ?>"></script>
            <script src="<?php echo $app->asset('js/app/model/SharedFileModel.js') ?>"></script>
            <script src="<?php echo $app->asset('js/app/model/UploadModel.js') ?>"></script>
            <script src="<?php echo $app->asset('js/app/model/GuestChatModel.js') ?>"></script>

            <script src="<?php echo $app->asset('js/app/collection/WatchedUploadsCollection.js') ?>"></script>

            <script src="<?php echo $app->asset('js/app/controller/UploadController.js') ?>"></script>

            <script src="<?php echo $app->asset('js/app/view/LoginFormView.js') ?>"></script>
            <script src="<?php echo $app->asset('js/app/view/ContactFormView.js') ?>"></script>
            <script src="<?php echo $app->asset('js/app/view/MailTranscriptView.js') ?>"></script>
            <script src="<?php echo $app->asset('js/app/view/AvatarView.js') ?>"></script>
            <script src="<?php echo $app->asset('js/app/view/MessageView.js') ?>"></script>
            <script src="<?php echo $app->asset('js/app/view/message/MessageImageView.js') ?>"></script>
            <script src="<?php echo $app->asset('js/app/view/message/MessageVideoView.js') ?>"></script>
            <script src="<?php echo $app->asset('js/app/view/message/MessageFileView.js') ?>"></script>
            <script src="<?php echo $app->asset('js/app/view/FileDropZoneView.js') ?>"></script>
            <script src="<?php echo $app->asset('js/app/view/ChatBoxView.js') ?>"></script>
            <script src="<?php echo $app->asset('js/app/view/WidgetView.js') ?>"></script>
            <script src="<?php echo $app->asset('js/app/view/SelectListView.js') ?>"></script>
            <script src="<?php echo $app->asset('js/app/view/SelectAvatarInlineView.js') ?>"></script>

            <script src="<?php echo $app->asset('js/app/facade/WidgetFacade.js') ?>"></script>

            <script src="<?php echo $app->asset('js/app/adapter/PostMessageApiAdapter.js') ?>"></script>

            <script src="<?php echo $app->asset('js/widget.js') ?>"></script>
        <?php } ?>

    </body>
</html>
