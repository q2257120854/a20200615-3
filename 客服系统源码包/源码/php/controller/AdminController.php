<?php

class AdminController extends Controller
{
    const SOUNDS_DIR            = 'audio';
    const WIDGET_THEMES_DIR     = 'widget-themes';
    const WIDGET_BLACKLIST_PATH = 'config/widget.blacklist.txt';

    // Show admin/operator's main page

    public function indexAction()
    {

        $user        = $this->get('user');
        $appSettings = $this->get('config')->data['appSettings'];

        if($user->hasRole('ADMIN') && !$user->hasRole('OPERATOR'))
        {
            $userData = $user->getData();
        }
        else
        {
            $userEntry = UserModel::repo()->findOperatorFull($user->getId());
            $userData  = $userEntry->getData();
        }

        return $this->render('admin/index.html', array(

            'languages'          => json_encode($this->get('i18n')->getLanguages()),
            'trans'              => json_encode($this->getJsTranslations()),
            'userData'           => json_encode($userData),
            'uiJson'             => json_encode($appSettings),
            'installed'          => $appSettings['installed'],
            'installStatus'      => json_encode($this->getInstallStatus()),
            'messageSound'       => $appSettings['messageSound'],
            'systemMessageSound' => $appSettings['systemMessageSound'],
            'defaultAvatars'     => json_encode($this->getDefaultAvatars()),
            'messageSounds'      => json_encode($this->getMessageSounds()),
            'widgetThemes'       => json_encode($this->getWidgetThemes()),
            'widgetBlacklist'    => $this->getWidgetBlacklist(),
            'qrCode'             => json_encode($this->getQRCodeConfig($userData)),
            'gMapsKey'           => $appSettings['gMapsKey']
        ));
    }

    // Save widget's blacklist

    public function updateBlacklistAction()
    {
        $request  = $this->get('request');
        $contents = $request->postVar('contents');

        if($request->isPost())
        {
            file_put_contents(ROOT_DIR . '/' . self::WIDGET_BLACKLIST_PATH, $contents);

            return $this->json(array('success' => true));
        }

        return $this->json(array('success' => false));
    }

    // Show the chatting widget

    public function widgetTestAction()
    {
        return $this->render('admin/widget-test.html');
    }

    // Display logs

    public function logsAction()
    {
        $logs = $this->get('logger')->getLogs();

        return $this->text($logs);
    }

    // Clear logs

    public function clearLogsAction()
    {
        $this->get('logger')->clear();

        return $this->json(array('success' => true));
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

    // Get default new message sounds

    protected function getMessageSounds()
    {
        $sounds = array();

        // Read all sounds from the default sounds directory

        foreach(glob(ROOT_DIR . '/../' . self::SOUNDS_DIR . '/*') as $path)
        {
            $sounds[basename($path, '.mp3')] = self::SOUNDS_DIR . '/' . basename($path);
        }

        return $sounds;
    }

    // Get available widget themes

    protected function getWidgetThemes()
    {
        $themes = array();

        // Read all sounds from the default sounds directory

        foreach(glob(ROOT_DIR . '/../' . self::WIDGET_THEMES_DIR . '/*') as $path)
        {
            $themes[] = array('label' => ucfirst(basename($path)), 'value' => self::WIDGET_THEMES_DIR . '/' . basename($path));
        }

        return $themes;
    }

    // Get widget's blacklist

    protected function getWidgetBlacklist()
    {
        $path = ROOT_DIR . '/' . self::WIDGET_BLACKLIST_PATH;

        if(file_exists($path))
        {
            return file_get_contents($path);
        }

        return '';
    }

    public function getWidgetBlacklistLines()
    {
        $path = ROOT_DIR . '/' . self::WIDGET_BLACKLIST_PATH;

        if(file_exists($path))
        {
            $lines = file($path);

            foreach($lines as &$line)
            {
                $line = trim($line);
            }

            return $lines;
        }

        return array();
    }

    public function getQRCodeConfig($userData)
    {
        $template = $this->get('template_interface');

        return array(

            'url'  => $template->url('MobileApp:api'),
            'user' => isset($userData['mail']) ? $userData['mail'] : $userData['name']
        );
    }

    // Installation validity check

    protected function getInstallStatus()
    {
        $validators = $this->get('model_validation');

        // Check if the configuration settings are correct

        $validConfig = count($validators->validateConfig()) === 0;

        // Check if the database structure is correct

        $validDb = count($validators->validateDb()) === 0;

        return compact('validConfig', 'validDb');
    }

    // Subset of translations used in JavaScript

    protected function getJsTranslations()
    {
        $i18n = $this->get('i18n');

        return array(

            'app.name'      => $i18n->trans('app.name'),
            'welcome'       => $i18n->trans('welcome'),
            'edit.profile'  => $i18n->trans('edit.profile'),
            'edit.operator' => $i18n->trans('edit.operator'),
            'add.new.msg' => $i18n->trans('add.new.msg'),
            'add.new.operator' => $i18n->trans('add.new.operator'),
            'add.new.dep' => $i18n->trans('add.new.dep'),
            'incorrect.install' => $i18n->trans('incorrect.install'),
            'edit.config' => $i18n->trans('edit.config'),
            'please.install' => $i18n->trans('please.install'),
            'not.installed.msg' => $i18n->trans('not.installed.msg'),
            'install' => $i18n->trans('install'),
            'error.saving.file' => $i18n->trans('error.saving.file'),
            'form.error' => $i18n->trans('form.error'),
            'remove.msg' => $i18n->trans('remove.msg'),
            'remove.msg.q' => $i18n->trans('remove.msg.q'),
            'new.talk' => $i18n->trans('new.talk'),
            'cant.chat.w.self' => $i18n->trans('cant.chat.w.self'),
            'select.msg' => $i18n->trans('select.msg'),
            'select.operator' => $i18n->trans('select.operator'),
            'invitation' => $i18n->trans('invitation'),
            'leave.talk' => $i18n->trans('leave.talk'),
            'leave.talk.q' => $i18n->trans('leave.talk.q'),
            'leave.talk.confirm' => $i18n->trans('leave.talk.confirm'),
            'transfer.n.leave' => $i18n->trans('transfer.n.leave'),
            'end.talk' => $i18n->trans('end.talk'),
            'transfer' => $i18n->trans('transfer'),
            'leave' => $i18n->trans('leave'),
            'error' => $i18n->trans('error'),
            'mailTranscriptLabel' => $i18n->trans('mailTranscriptLabel'),
            'mailTranscriptHeader' => $i18n->trans('mailTranscriptHeader'),
            'mailTranscriptSuccess' => $i18n->trans('mailTranscriptSuccess'),
            'mailTranscriptError' => $i18n->trans('mailTranscriptError'),
            'contactSuccessHeader' => $i18n->trans('contactSuccessHeader'),
            'remove.dep' => $i18n->trans('remove.dep'),
            'remove.dep.q' => $i18n->trans('remove.dep.q'),
            'clear.history' => $i18n->trans('clear.history'),
            'clear.history.q' => $i18n->trans('clear.history.q'),
            'clear.history.err' => $i18n->trans('clear.history.err'),
            'history.cleared' => $i18n->trans('history.cleared'),
            'clear.logs' => $i18n->trans('clear.logs'),
            'clear.logs.q' => $i18n->trans('clear.logs.q'),
            'logs.cleared' => $i18n->trans('logs.cleared'),
            'clear.logs.err' => $i18n->trans('clear.logs.err'),
            'widget.embd.code' => $i18n->trans('widget.embd.code'),
            'uploading' => $i18n->trans('uploading'),
            'uploading.image' => $i18n->trans('uploading.image'),
            'avatar.uploaded' => $i18n->trans('avatar.uploaded'),
            'uploaded.success' => $i18n->trans('uploaded.success'),
            'remove.user' => $i18n->trans('remove.user'),
            'remove.user.q' => $i18n->trans('remove.user.q'),
            'select.avatar' => $i18n->trans('select.avatar'),
            'reset.settings' => $i18n->trans('reset.settings'),
            'reset.settings.q' => $i18n->trans('reset.settings.q'),
            'reset' => $i18n->trans('reset'),
            'alert' => $i18n->trans('alert'),
            'v.cant.be.empty' => $i18n->trans('v.cant.be.empty'),
            'pass.have.to.match' => $i18n->trans('pass.have.to.match'),
            'enter.valid.mail' => $i18n->trans('enter.valid.mail'),
            'pass.need.6.chars' => $i18n->trans('pass.need.6.chars'),
            'close' => $i18n->trans('close'),
            'cancel' => $i18n->trans('cancel'),
            'insert' => $i18n->trans('insert'),
            'send' => $i18n->trans('send'),
            'clear' => $i18n->trans('clear'),
            'timeDaysAgo' => $i18n->trans('timeDaysAgo'),
            'timeHoursAgo' => $i18n->trans('timeHoursAgo'),
            'timeMinutesAgo' => $i18n->trans('timeMinutesAgo'),
            'timeSecondsAgo' => $i18n->trans('timeSecondsAgo'),
            'clear.messages' => $i18n->trans('clear.messages'),
            'language' => $i18n->trans('language'),
            'default.language' => $i18n->trans('default.language'),
            'primary.color' => $i18n->trans('primary.color'),
            'secondary.color' => $i18n->trans('secondary.color'),
            'label.color' => $i18n->trans('label.color'),
            'contact.mail' => $i18n->trans('contact.mail'),
            'hide.offline' => $i18n->trans('hide.offline'),
            'show.widget.auto' => $i18n->trans('show.widget.auto'),
            'every.refresh' => $i18n->trans('every.refresh'),
            'first.visit' => $i18n->trans('first.visit'),
            'until.hide' => $i18n->trans('until.hide'),
            'allow' => $i18n->trans('allow'),
            'turn.off' => $i18n->trans('turn.off'),
            'show.widget.after' => $i18n->trans('show.widget.after'),
            'ask.mail' => $i18n->trans('ask.mail'),
            'media.in.chat' => $i18n->trans('media.in.chat'),
            'display.auto' => $i18n->trans('display.auto'),
            'display.clicked' => $i18n->trans('display.clicked'),
            'chat.header' => $i18n->trans('chat.header'),
            'welcome.msg' => $i18n->trans('welcome.msg'),
            'msg.sound' => $i18n->trans('msg.sound'),
            'sys.msg.sound' => $i18n->trans('sys.msg.sound'),
            'shared.max.size' => $i18n->trans('shared.max.size'),
            'widget.theme' => $i18n->trans('widget.theme'),
            'widget.width' => $i18n->trans('widget.width'),
            'widget.height' => $i18n->trans('widget.height'),
            'widget.side' => $i18n->trans('widget.side'),
            'left' => $i18n->trans('left'),
            'right' => $i18n->trans('right'),
            'widget.offset' => $i18n->trans('widget.offset'),
            'mobile.bp' => $i18n->trans('mobile.bp'),
            'max.conn' => $i18n->trans('max.conn'),
            'poll.interval' => $i18n->trans('poll.interval'),
            'file.sharing' => $i18n->trans('file.sharing'),
            'file.too.big' => $i18n->trans('file.too.big'),
            'operator.init.chat' => $i18n->trans('operator.init.chat'),
            'online.track.int' => $i18n->trans('online.track.int'),
            'invite' => $i18n->trans('invite'),
            'visitor.invite' => $i18n->trans('visitor.invite'),
            'invite.visitor.q' => $i18n->trans('invite.visitor.q'),
            'user.info' => $i18n->trans('user.info'),
            'gmaps.key' => $i18n->trans('gmaps.key'),
            'no.entries' => $i18n->trans('no.entries'),
            'sm.closed.talk' => $i18n->trans('sm.closed.talk'),
            'sm.user.closed.chat' => $i18n->trans('sm.user.closed.chat'),
            'sm.now.talk.owner' => $i18n->trans('sm.now.talk.owner'),
            'sm.user.invited' => $i18n->trans('sm.user.invited'),
            'sm.user.left' => $i18n->trans('sm.user.left'),
            'empty.mail.placeholder' => $i18n->trans('empty.mail.placeholder')
        );
    }
}

?>
