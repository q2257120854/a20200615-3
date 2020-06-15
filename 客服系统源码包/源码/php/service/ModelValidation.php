<?php

class ModelValidation extends Service
{
    private $validation;

    public function onRegister()
    {
        parent::onRegister();

        // -----

        $this->validation = $this->get('validation');
        $this->i18n       = $this->get('i18n');
    }

    public function validateMessage($message)
    {
        $extra       = $message['extra'];
        $extraErrors = null;

        if(!empty($extra))
        {
            if($extra['type'] !== MessageModel::EXTRA_FILES)
            {
                $extraErrors = array($this->i18n->trans('value.invalid'));
            }
        }

        return $this->clearEmpty(array(

            'from' => $this->validation->validate($message['from'], array(

                $this->i18n->trans('value.blank') => new NotBlankValidator(),
                $this->i18n->trans('value.not.num') => new NumberValidator()
            )),

            'body' => $this->validation->validate($message['body'], array(

                $this->i18n->trans('value.blank') => new NotBlankValidator()
            )),

            'extra' => $extraErrors
        ));
    }

    public function validateSharedFiles($files)
    {
        $maxSize      = 1024 * 1024 * intval($this->get('config')->data['appSettings']['sharedFileMaxSize']);
        $totalSize    = 0;
        $invalidFiles = array();

        foreach($files as $file)
        {
            if($file['error'] === UPLOAD_ERR_OK)
            {
                $totalSize += $file['size'];
            }
            else
            {
                $invalidFiles[] = $file;
            }
        }

        return $this->clearEmpty(array(

            'invalidFiles' => $invalidFiles,

            'totalSize' => $this->validation->validate($totalSize, array(

                $this->i18n->trans('value.n.in.range') => new RangeValidator(1, $maxSize)
            ))
        ));
    }

    public function validateUser($user, $checkPassword = true)
    {
        $data = array(

            'name' => $this->validation->validate($user['name'], array(

                $this->i18n->trans('value.blank') => new NotBlankValidator()
            )),

            'mail' => $this->validation->validate($user['mail'], array(

                $this->i18n->trans('value.blank') => new NotBlankValidator(),
                $this->i18n->trans('value.not.mail') => new MailValidator()
            ))
        );

        if($checkPassword)
        {
            $data['password'] = $this->validation->validate($user['password'], array(

                $this->i18n->trans('value.blank') => new NotBlankValidator(),
                $this->i18n->trans('value.too.short') => new LengthValidator(6)
            ));
        }

        return $this->clearEmpty($data);
    }

    public function validateDepartment($department)
    {
        return $this->clearEmpty(array(

            'name' => $this->validation->validate($department['name'], array(

                $this->i18n->trans('value.blank') => new NotBlankValidator()
            ))
        ));
    }

    public function validateInstallConfig($config)
    {
        return $this->clearEmpty(array(

            'dbHost' => $this->validation->validate($config['dbHost'], array(

                $this->i18n->trans('value.blank') => new NotBlankValidator()
            )),

            'dbPort' => $this->validation->validate($config['dbPort'], array(

                $this->i18n->trans('value.blank') => new NotBlankValidator(),
                $this->i18n->trans('value.not.num') => new NumberValidator()
            )),

            'dbName' => $this->validation->validate($config['dbName'], array(

                $this->i18n->trans('value.blank') => new NotBlankValidator()
            )),

            'dbUser' => $this->validation->validate($config['dbUser'], array(

                $this->i18n->trans('value.blank') => new NotBlankValidator()
            )),
            /*
            'dbPassword' => $this->validation->validate($config['dbPassword'], array(

                $this->i18n->trans('value.blank') => new NotBlankValidator()
            )),
            */
            'superUser' => $this->validation->validate($config['superUser'], array(

                $this->i18n->trans('value.blank') => new NotBlankValidator()
            )),

            'superPass' => $this->validation->validate($config['superPass'], array(

                $this->i18n->trans('value.blank') => new NotBlankValidator()
            )),

            'superPassRepeat' => $this->validation->validate($config['superPassRepeat'], array(

                $this->i18n->trans('value.blank') => new NotBlankValidator(),
                $this->i18n->trans('values.not.match') => new EqualsValidator($config['superPass'])
            )),

            'appSettings' => array(

                'contactMail' => $this->validation->validate($config['appSettings']['contactMail'], array(

                    $this->i18n->trans('value.blank') => new NotBlankValidator(),
                    $this->i18n->trans('value.not.mail') => new MailValidator()
                ))
            )
        ));
    }

    public function validateContactData($data)
    {
        return $this->clearEmpty(array(

            'name' => $this->validation->validate($data['name'], array(

                $this->i18n->trans('value.blank') => new NotBlankValidator()
            )),

            'mail' => $this->validation->validate($data['mail'], array(

                $this->i18n->trans('value.blank') => new NotBlankValidator(),
                $this->i18n->trans('value.not.mail') => new MailValidator()
            )),

            'question' => $this->validation->validate($data['question'], array(

                $this->i18n->trans('value.blank') => new NotBlankValidator(),
                $this->i18n->trans('value.too.short') => new LengthValidator(6)
            ))
        ));
    }

    public function validateLoginData($data)
    {
        return $this->clearEmpty(array(

            'name' => $this->validation->validate($data['name'], array(

                $this->i18n->trans('value.blank') => new NotBlankValidator()
            )),

            'mail' => $this->validation->validate($data['mail'], array(

                $this->i18n->trans('value.blank') => new NotBlankValidator(),
                $this->i18n->trans('value.not.mail') => new MailValidator()
            ))
        ));
    }

    public function validateMailTranscriptData($data)
    {
        return $this->clearEmpty(array(

            'talkId' => $this->validation->validate($data['talkId'], array(

                $this->i18n->trans('value.blank')   => new NotBlankValidator(),
                $this->i18n->trans('value.not.num') => new NumberValidator()
            )),

            'mail' => $this->validation->validate($data['mail'], array(

                $this->i18n->trans('value.blank')    => new NotBlankValidator(),
                $this->i18n->trans('value.not.mail') => new MailValidator()
            ))
        ));
    }

    public function validateConfig()
    {
        if(!$this->get('verify')->verifyInstallation())
        {
            return array(

                'message' => $this->i18n->trans('install.not.verified')
            );
        }

        return array();
    }

    public function validateDb()
    {
        $errors       = array('message' => $this->i18n->trans('db.invalid'));
        $adminCreated = true;

        try
        {
            $db = $this->get('db');

            // Reconnect in case the database was created just now

            $db->reconnect();

            $tables = $db->getTables();

            $expectedTables = array(

                UserModel::repo()        ->getTableName(),
                TalkModel::repo()        ->getTableName(),
                MessageModel::repo()     ->getTableName(),
                DepartmentModel::repo()  ->getTableName(),
                DepartmentModel::repo()  ->getLinkingTableName(),
                DataModel::repo('')      ->getTableName(),
                SharedFileModel::repo('')->getTableName()
            );

            // Check if admin user exists

            if(!UserModel::repo()->findOneBy(array('roles' => array('Like', '%ADMIN%'))))
            {
                $adminCreated = false;
            }
        }
        catch(Exception $ex)
        {
            $errors['message'] = $this->i18n->trans('db.exception', array('%msg%' => $ex->getMessage()));

            return $errors;
        }

        if(count(array_diff($expectedTables, $tables)) !== 0)
        {
            $errors['message'] = $this->i18n->trans('db.exception', array('%actual%' => join(', ', $tables), '%expected%' => join(', ', $expectedTables)));

            return $errors;
        }

        if(!$adminCreated)
        {
            $errors['message'] = $this->i18n->trans('admin.update.error');

            return $errors;
        }

        return array();
    }

    private function clearEmpty($array)
    {
        // Clear empty entries

        $keys = array_keys($array);

        for($i = count($array) - 1; $i >= 0; $i--)
        {
            $key = $keys[$i];

            if(is_array($array[$key]))
            {
                $array[$key] = $this->clearEmpty($array[$key]);
            }

            if(empty($array[$key]))
            {
                unset($array[$key]);
            }
        }

        return $array;
    }
}

?>
