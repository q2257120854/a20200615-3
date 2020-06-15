<?php

return array(

    // Login path

    'login_action' => 'Authentication:login',

    // Firewall rules

    'rules' => array(

        // Installation

        'Install:index'        => array('ADMIN'),
        'Install:verify'       => array('ADMIN'),
        'Install:verifySubmit' => array('ADMIN'),
        'Install:wizard'       => array('ADMIN'),
        'Install:wizard2'      => array('ADMIN'),
        'Install:wizard3'      => array('ADMIN'),
        'Install:uninstall'    => array('ADMIN'),
        'Install:uninstall2'   => array('ADMIN'),

        // Configuration

        'Config:updateSettings' => array('ADMIN'),
        'Config:resetSettings'  => array('ADMIN'),

        // Guest

        'Guest:get'       => array('OPERATOR', 'ADMIN'),
        'Guest:getAll'    => array('OPERATOR', 'ADMIN'),
        'Guest:getOnline' => array('OPERATOR', 'ADMIN'),

        // Operator

        'Operator:manageConnection'   => array('OPERATOR', 'ADMIN'),
        'Operator:resetLastActivity'  => array('OPERATOR', 'ADMIN'),
        'Operator:updateTypingStatus' => array('OPERATOR', 'ADMIN'),
        'Operator:getTypingStatus'    => array('OPERATOR', 'ADMIN'),
        'Operator:update'             => array('OPERATOR', 'ADMIN'),
        'Operator:uploadAvatar'       => array('OPERATOR', 'ADMIN'),
        'Operator:list'               => array('OPERATOR', 'ADMIN'),
        'Operator:getOnlineUsers'     => array('OPERATOR', 'ADMIN'),
        'Operator:create'             => array('ADMIN'),
        'Operator:delete'             => array('ADMIN'),
        'Operator:inviteToTalk'       => array('OPERATOR', 'ADMIN'),
        'Operator:leaveTalk'          => array('OPERATOR', 'ADMIN'),
        'Operator:closeTalk'          => array('OPERATOR', 'ADMIN'),

        // Message

        'Message:send'                       => array('OPERATOR', 'ADMIN'),
        'Message:getUserHistory'             => array('OPERATOR', 'ADMIN'),
        'Message:queryHistory'               => array('OPERATOR', 'ADMIN'),
        'Message:clearHistory'               => array('ADMIN'),
        'Message:operatorGuestGetLast'       => array('OPERATOR', 'ADMIN'),
        'Message:getTalk'                    => array('OPERATOR', 'ADMIN'),
        'Message:operatorMailTalkTranscript' => array('OPERATOR', 'ADMIN'),

        // Canned message

        'CannedMessage:create' => array('ADMIN'),
        'CannedMessage:get'    => array('OPERATOR', 'ADMIN'),
        'CannedMessage:list'   => array('OPERATOR', 'ADMIN'),
        'CannedMessage:update' => array('ADMIN'),
        'CannedMessage:delete' => array('ADMIN'),

        // Department

        'Department:create' => array('ADMIN'),
        'Department:get'    => array('OPERATOR', 'ADMIN'),
        'Department:list'   => array('OPERATOR', 'ADMIN'),
        'Department:update' => array('ADMIN'),
        'Department:delete' => array('ADMIN'),

        // Admin

        'Admin:index'      => array('OPERATOR', 'ADMIN'),
        'Admin:logs'       => array('ADMIN'),
        'Admin:clearLogs'  => array('ADMIN'),
        'Admin:widgetTest' => array('OPERATOR', 'ADMIN'),

        // Online tracking

        'OnlineGuests:login' => array('OPERATOR'),
        'OnlineGuests:list'  => array('OPERATOR', 'ADMIN'),

        // Mobile app

        // -> Implemented inside controller
    )
);

?>
