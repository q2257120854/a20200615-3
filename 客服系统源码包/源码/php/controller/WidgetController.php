<?php

class WidgetController extends Controller
{
    public function initAction()
    {
        $config          = $this->get('config');
        $request         = $this->get('request');
        $adminController = new AdminController();
        $blacklist       = $adminController->getWidgetBlacklistLines();

        // Return an empty response, if the page is blacklisted

        $pageUrl = $request->getReferer();

        if(!empty($pageUrl))
        {
            foreach($blacklist as $exp)
            {
                // String matching

                if(strpos($pageUrl, $exp) !== false)
                {
                    return $this->text('');
                }

                // Regular expression matching

                if(substr($exp, 0, 1) == '/' && substr($exp, -1) == '/')
                {
                    if(preg_match($exp, $pageUrl))
                    {
                        return $this->text('');
                    }
                }
            }
        }

        return $this->render('widget/init.js.php', array(

            'ui' => $config->data['appSettings']

        ), 'js');
    }

    public function initInlineAction()
    {
        $config = $this->get('config');

        return $this->render('widget/init.js.php', array(

            'ui'     => $config->data['appSettings'],
            'inline' => true

        ), 'js');
    }

    public function iframeContentAction()
    {
        $config = $this->get('config');

        return $this->render('widget/iframe-content.html.php', array(

            'trans'          => json_encode($this->getJsTranslations()),
            'ui'             => $config->data['appSettings'],
            'uiJson'         => json_encode($config->data['appSettings']),
            'defaultAvatars' => json_encode($this->getDefaultAvatars()),
            'info'           => json_encode($this->get('request')->getUserInfo()),
            'remoteDomain'   => $this->get('request')->getVar('domain'),
            'geolocConfig'   => json_encode($config->data['services']['geolocation'])
        ));
    }

    public function inlineViewAction()
    {
        $config = $this->get('config');

        return $this->render('widget/iframe-content.html.php', array(

            'inline'         => true,
            'trans'          => json_encode($this->getJsTranslations()),
            'ui'             => $config->data['appSettings'],
            'uiJson'         => json_encode($config->data['appSettings']),
            'defaultAvatars' => json_encode($this->getDefaultAvatars()),
            'info'           => json_encode($this->get('request')->getUserInfo()),
            'remoteDomain'   => $this->get('request')->getVar('domain'),
            'geolocConfig'   => json_encode($config->data['services']['geolocation'])
        ));
    }

    public function mobileViewAction()
    {
        $config              = $this->get('config');
        $request             = $this->get('request');
        $userInfo            = $request->getUserInfo();
        $userInfo['referer'] = $request->getUrl();

        return $this->render('widget/iframe-content.html.php', array(

            'trans'          => json_encode($this->getJsTranslations()),
            'mobile'         => true,
            'ui'             => $config->data['appSettings'],
            'uiJson'         => json_encode($config->data['appSettings']),
            'defaultAvatars' => json_encode($this->getDefaultAvatars()),
            'info'           => json_encode($userInfo),
            'remoteDomain'   => $this->get('request')->getVar('domain'),
            'geolocConfig'   => json_encode($config->data['services']['geolocation'])
        ));
    }

    public function customStyleAction()
    {
        $appSettings = $this->getCSSSettings();

        return $this->render('widget/custom-style.css.php', $appSettings, 'css', array(

            array('Cache-Control', 'no-cache, no-store, must-revalidate'),
            array('Pragma', 'no-cache'),
            array('Expires', '0')
        ));
    }

    public function themeStyleAction()
    {
        $appSettings = $this->getCSSSettings();

        return $this->render('../' . $appSettings['widgetTheme'] . '/style.css.php', $appSettings, 'css', array(

            array('Cache-Control', 'no-cache, no-store, must-revalidate'),
            array('Pragma', 'no-cache'),
            array('Expires', '0')
        ));
    }

    // Get settings for CSS customization

    protected function getCSSSettings()
    {
        $appSettings = $this->get('config')->data['appSettings'];
        $colors      = $this->get('color_calculator');

        // Calculate additional colors

        $appSettings['primaryColorDarker']    = $colors->sub($appSettings['primaryColor'],   '#2e3030');
        $appSettings['primaryColorDarker2']   = $colors->sub($appSettings['primaryColor'],   '#181a1b');
        $appSettings['secondaryColorDarker']  = $colors->sub($appSettings['secondaryColor'], '#10150c');
        $appSettings['secondaryColorLighter'] = $colors->add($appSettings['secondaryColor'], '#0e0d0f');

        return $appSettings;
    }

    // Get default profile images

    protected function getDefaultAvatars()
    {
        $avatars  = UserModel::getDefaultAvatars();
        $template = $this->get('template_interface');

        // Make all the names absolute asset paths

        $i = 0;

        foreach($avatars as $a)
        {
            $avatars[$i++] = $template->asset($a);
        }

        return $avatars;
    }

    // Subset of translations used in JavaScript

    protected function getJsTranslations()
    {
        $i18n = $this->get('i18n');

        return array(

            'loadingLabel'           => $i18n->trans('loadingLabel'),
            'loginError'             => $i18n->trans('loginError'),
            'chatHeader'             => $i18n->trans('chatHeader'),
            'startInfo'              => $i18n->trans('startInfo'),
            'selectDepartment'       => $i18n->trans('selectDepartment'),
            'selectCancel'           => $i18n->trans('selectCancel'),
            'startLabel'             => $i18n->trans('startLabel'),
            'backLabel'              => $i18n->trans('backLabel'),
            'initMessageBody'        => $i18n->trans('initMessageBody'),
            'initMessageAuthor'      => $i18n->trans('initMessageAuthor'),
            'chatInputLabel'         => $i18n->trans('chatInputLabel'),
            'timeDaysAgo'            => $i18n->trans('timeDaysAgo'),
            'timeHoursAgo'           => $i18n->trans('timeHoursAgo'),
            'timeMinutesAgo'         => $i18n->trans('timeMinutesAgo'),
            'timeSecondsAgo'         => $i18n->trans('timeSecondsAgo'),
            'offlineMessage'         => $i18n->trans('offlineMessage'),
            'toggleSoundLabel'       => $i18n->trans('toggleSoundLabel'),
            'toggleScrollLabel'      => $i18n->trans('toggleScrollLabel'),
            'toggleEmoticonsLabel'   => $i18n->trans('toggleEmoticonsLabel'),
            'toggleMediaLabel'       => $i18n->trans('toggleMediaLabel'),
            'toggleAutoShowLabel'    => $i18n->trans('toggleAutoShowLabel'),
            'toggleFullscreenLabel'  => $i18n->trans('toggleFullscreenLabel'),
            'endChatLabel'           => $i18n->trans('endChatLabel'),
            'endChatConfirmQuestion' => $i18n->trans('endChatConfirmQuestion'),
            'endChatConfirm'         => $i18n->trans('endChatConfirm'),
            'endChatCancel'          => $i18n->trans('endChatCancel'),
            'mailTranscriptLabel'    => $i18n->trans('mailTranscriptLabel'),
            'mailTranscriptHeader'   => $i18n->trans('mailTranscriptHeader'),
            'mailTranscriptSuccess'  => $i18n->trans('mailTranscriptSuccess'),
            'mailTranscriptError'    => $i18n->trans('mailTranscriptError'),
            'operatorClosedTalk'     => $i18n->trans('operatorClosedTalk'),
            'loginAgain'             => $i18n->trans('loginAgain'),
            'contactHeader'          => $i18n->trans('contactHeader'),
            'contactInfo'            => $i18n->trans('contactInfo'),
            'contactNameLabel'       => $i18n->trans('contactNameLabel'),
            'contactMailLabel'       => $i18n->trans('contactMailLabel'),
            'contactQuestionLabel'   => $i18n->trans('contactQuestionLabel'),
            'contactSendLabel'       => $i18n->trans('contactSendLabel'),
            'contactSuccessHeader'   => $i18n->trans('contactSuccessHeader'),
            'contactSuccessMessage'  => $i18n->trans('contactSuccessMessage'),
            'contactErrorHeader'     => $i18n->trans('contactErrorHeader'),
            'contactErrorMessage'    => $i18n->trans('contactErrorMessage'),
            'file.too.big'           => $i18n->trans('file.too.big'),
            'you'                    => $i18n->trans('you'),
            'sm.closed.talk'         => $i18n->trans('sm.closed.talk'),
            'sm.user.closed.chat'    => $i18n->trans('sm.user.closed.chat'),
            'sm.now.talk.owner'      => $i18n->trans('sm.now.talk.owner'),
            'sm.user.invited'        => $i18n->trans('sm.user.invited'),
            'sm.user.left'           => $i18n->trans('sm.user.left'),
            'empty.mail.placeholder' => $i18n->trans('empty.mail.placeholder')
        );
    }
}

?>
