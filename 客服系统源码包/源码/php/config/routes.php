<?php

return array(

    // Installation (comment after running)

    'install'               => 'Install:index',
    'install-verify'        => 'Install:verify',
    'install-verify-submit' => 'Install:verifySubmit',
    'install-wizard'        => 'Install:wizard',
    'install-wizard-2'      => 'Install:wizard2',
    'install-wizard-3'      => 'Install:wizard3',
    'uninstall'             => 'Install:uninstall',
    'uninstall-2'           => 'Install:uninstall2',

    // Configuration

    'config-get-settings'    => 'Config:getSettings',
    'config-update-settings' => 'Config:updateSettings',
    'config-reset-settings'  => 'Config:resetSettings',

    // Authentication

    'is-guest-logged-in' => 'Authentication:isGuestLoggedIn',
    'login-guest'        => 'Authentication:loginGuest',
    'login'              => 'Authentication:login',
    'logout'             => 'Authentication:logout',
    'logout-guest'       => 'Authentication:logoutGuest',

    // Common

    'get-default-avatars' => 'Operator:getDefaultAvatars',

    // Guest

    'guest-manage-connection'    => 'Guest:manageConnection',
    'guest-update-typing-status' => 'Guest:updateTypingStatus',
    'guest-get-typing-status'    => 'Guest:getTypingStatus',
    'guest-get-online'           => 'Guest:getOnline',

    // Operator

    'operator-manage-connection'    => 'Operator:manageConnection',
    'operator-reset-last-activity'  => 'Operator:resetLastActivity',
    'operator-update-typing-status' => 'Operator:updateTypingStatus',
    'operator-get-typing-status'    => 'Operator:getTypingStatus',
    'operator-update'               => 'Operator:update',
    'operator-upload-avatar'        => 'Operator:uploadAvatar',
    'operator-list'                 => 'Operator:list',
    'operator-create'               => 'Operator:create',
    'operator-delete'               => 'Operator:delete',
    'operator-get'                  => 'Operator:get',
    'operator-is-online'            => 'Operator:isOnline',
    'operator-online-users'         => 'Operator:getOnlineUsers',
    'operator-get-users'            => 'Operator:getUsers',
    'operator-invite-to-talk'       => 'Operator:inviteToTalk',
    'operator-leave-talk'           => 'Operator:leaveTalk',
    'operator-close-talk'           => 'Operator:closeTalk',
    'operator-transfer-talk'        => 'Operator:transferTalk',

    // Message

    'message-get-last'                      => 'Message:getLast',
    'message-send'                          => 'Message:send',
    'message-guest-send'                    => 'Message:guestSend',
    'message-get-history'                   => 'Message:getHistory',
    'message-get-user-history'              => 'Message:getUserHistory',
    'message-query-history'                 => 'Message:queryHistory',
    'message-clear-history'                 => 'Message:clearHistory',
    'message-operator-guest-get-last'       => 'Message:operatorGuestGetLast',
    'message-operator-get-talk'             => 'Message:getTalk',
    'message-mail-talk-transcript'          => 'Message:mailTalkTranscript',
    'message-operator-mail-talk-transcript' => 'Message:operatorMailTalkTranscript',

    // Canned message

    'canned-message-create' => 'CannedMessage:create',
    'canned-message-get'    => 'CannedMessage:get',
    'canned-message-list'   => 'CannedMessage:list',
    'canned-message-update' => 'CannedMessage:update',
    'canned-message-delete' => 'CannedMessage:delete',

    // Department

    'department-create' => 'Department:create',
    'department-get'    => 'Department:get',
    'department-list'   => 'Department:list',
    'department-update' => 'Department:update',
    'department-delete' => 'Department:delete',
    'department-online' => 'Department:getOnline',

    // Contact

    'contact' => 'Contact:contact',

    // Widget

    'widget-iframe-content'     => 'Widget:iframeContent',
    'widget-inline'             => 'Widget:inlineView',
    'widget-mobile'             => 'Widget:mobileView',
    'widget-init.js'            => 'Widget:init',
    'widget-init-inline.js'     => 'Widget:initInline',
    'widget-custom-style.css'   => 'Widget:customStyle',
    'widget-theme-style.css'    => 'Widget:themeStyle',

    // Admin

    'admin'                  => 'Admin:index',
    'admin-logs'             => 'Admin:logs',
    'admin-clear-logs'       => 'Admin:clearLogs',
    'admin-update-blacklist' => 'Admin:updateBlacklist',
    'widget-test'            => 'Admin:widgetTest',

    // File sharing

    'upload'         => 'Upload:crud',
    'upload-upload'  => 'Upload:upload',
    'upload-deny'    => 'Upload:deny',
    'upload-confirm' => 'Upload:confirm',
    'upload-abort'   => 'Upload:abort',

    'shared-file-download' => 'SharedFile:download',

    // Online tracking

    'guest-track-keep-alive'    => 'OnlineGuests:keepAlive',
    'guest-track-login'         => 'OnlineGuests:login',
    'guest-track-confirm-login' => 'OnlineGuests:confirmLogin',
    'guest-track-list'          => 'OnlineGuests:list',

    // Mobile app

    'mobile-api'               => 'MobileApp:api',
    'mobile-login'             => 'MobileApp:login',
    'mobile-logout'            => 'MobileApp:logout',

    // Mobile app -> Operator

    'mobile-operator-manage-connection'    => 'MobileApp:Operator__manageConnection',
    'mobile-operator-update-typing-status' => 'MobileApp:Operator__updateTypingStatus',
    'mobile-operator-get-typing-status'    => 'MobileApp:Operator__getTypingStatus',
    'mobile-operator-update'               => 'MobileApp:Operator__update',
    'mobile-operator-upload-avatar'        => 'MobileApp:Operator__uploadAvatar',
    'mobile-operator-list'                 => 'MobileApp:Operator__list',
    'mobile-operator-create'               => 'MobileApp:Operator__create',
    'mobile-operator-delete'               => 'MobileApp:Operator__delete',
    'mobile-operator-get'                  => 'MobileApp:Operator__get',
    'mobile-operator-is-online'            => 'MobileApp:Operator__isOnline',
    'mobile-operator-online-users'         => 'MobileApp:Operator__getOnlineUsers',
    'mobile-operator-get-users'            => 'MobileApp:Operator__getUsers',
    'mobile-operator-invite-to-talk'       => 'MobileApp:Operator__inviteToTalk',
    'mobile-operator-leave-talk'           => 'MobileApp:Operator__leaveTalk',
    'mobile-operator-close-talk'           => 'MobileApp:Operator__closeTalk',
    'mobile-operator-transfer-talk'        => 'MobileApp:Operator__transferTalk',

    // Mobile app -> Message

    'mobile-message-send'                    => 'MobileApp:Message__send',
    'mobile-message-query-history'           => 'MobileApp:Message__queryHistory',
    'mobile-message-clear-history'           => 'MobileApp:Message__clearHistory',
    'mobile-message-operator-guest-get-last' => 'MobileApp:Message__operatorGuestGetLast',

    // Mobile app -> File sharing

    'mobile-upload'         => 'MobileApp:Upload__crud',
    'mobile-upload-upload'  => 'MobileApp:Upload__upload',
    'mobile-upload-deny'    => 'MobileApp:Upload__deny',
    'mobile-upload-confirm' => 'MobileApp:Upload__confirm',
    'mobile-upload-abort'   => 'MobileApp:Upload__abort',

    'mobile-shared-file-download' => 'MobileApp:SharedFile__download',

    // Mobile app -> Online guests

    'mobile-guest-track-login' => 'MobileApp:OnlineGuests__login',

    // Mobile app -> Canned message

    'mobile-canned-message-create' => 'MobileApp:CannedMessage__create',
    'mobile-canned-message-get'    => 'MobileApp:CannedMessage__get',
    'mobile-canned-message-list'   => 'MobileApp:CannedMessage__list',
    'mobile-canned-message-update' => 'MobileApp:CannedMessage__update',
    'mobile-canned-message-delete' => 'MobileApp:CannedMessage__delete'
);

?>
