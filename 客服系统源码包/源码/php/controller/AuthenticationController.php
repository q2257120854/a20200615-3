<?php

class AuthenticationController extends Controller
{
    public function isGuestLoggedInAction()
    {
        // Check if there is someone already logged-in

        $guest = $this->get('guest');
        $id    = $guest->getId();

        if($id !== null)
        {
            // Check if the user's session is still valid

            $user = UserModel::repo()->find($id);

            if($user && $user->hasValidSession())
            {
                // Update user's information

                $user->info = Utils::arrayMergeRecursive($user->info, json_decode($this->get('request')->postVar('info', false)));
                $user->save();

                return $this->json(array(

                    'success'       => true,
                    'id'            => $id,
                    'lastMessageId' => $guest->getLastMessageId(),
                    'name'          => substr($user->name, 0, strrpos($user->name, '-', -1)),
                    'mail'          => $user->mail,
                    'image'         => $user->image
                ));
            }
            else
            {
                // Clear guest's identity

                $this->get('auth')->clearGuest();
            }
        }

        return $this->json(array('success' => false));
    }

    public function loginGuestAction()
    {
        // Check if there is someone already logged-in

        $guest = $this->get('guest');
        $id    = $guest->getId();

        if($id !== null)
        {
            // Check if the user's session is still valid

            $user = UserModel::repo()->find($id);

            if($user && $user->hasValidSession())
            {
                return $this->json(array('success' => true, 'id' => $id, 'lastMessageId' => $guest->getLastMessageId()));
            }
            else
            {
                // Clear guest's identity

                $this->get('auth')->clearGuest();
            }
        }

        // Get the input

        $request = $this->get('request');

        // Special care for automatic login

        if($request->postVar('auto'))
        {
            return $this->autoLoginGuest();
        }

        $departmentId = $request->postVar('department');
        $name         = $request->postVar('name');
        $mail         = $request->postVar('mail');
        $image        = $request->postVar('image');
        $info         = $request->postVar('info', false);

        // Validate the input

        $errors = $this->get('model_validation')->validateLoginData(compact('name', 'mail'));

        if(count($errors) === 0)
        {
            $user = $this->createGuest(array(

                'department' => $departmentId,
                'name'       => $name,
                'mail'       => $mail,
                'image'      => $image,
                'info'       => $info
            ));

            if($user)
            {
                return $this->json(array('success' => true, 'id' => $user->id));
            }
        }

        // Return an error response

        return $this->json(array('success' => false, 'errors' => $errors));
    }

    protected function autoLoginGuest()
    {
        $id = $this->get('session')->getId();

        if(!empty($id))
        {
            $visitor = $this->get('online_guests')->find($id);

            if($visitor)
            {
                $name  = $visitor['name'];
                $mail  = $this->get('i18n')->trans('empty.mail.placeholder');
                $image = $this->get('template_interface')->asset(UserModel::DEFAULT_AVATAR_PATH);
                $info  = $this->get('request')->postVar('info', false);

                $user = $this->createGuest(array(

                    'department' => null,
                    'name'       => $name,
                    'mail'       => $mail,
                    'image'      => $image,
                    'info'       => $info
                ));

                if($user)
                {
                    return $this->json(array(

                        'success' => true,

                        'id'    => $user->id,
                        'name'  => $name,
                        'mail'  => $mail,
                        'image' => $image
                    ));
                }
            }
        }

        return $this->json(array('success' => false));
    }

    protected function createGuest($data)
    {
        $departmentId = $data['department'];
        $name         = $data['name'];
        $mail         = $data['mail'];
        $image        = $data['image'];
        $info         = $data['info'];

        // -----

        $user = UserModel::repo()->generateGuest($name, $mail);

        $user->image = $image;
        $user->info  = json_decode($info);

        if($user->save())
        {
            // Create new talk for the guest

            $talkId = TalkModel::repo()->getTalkIdForGuest($user->id, $departmentId);

            // Add initial message to the talk

            $msg = new MessageModel(array(

                'from_id' => $user->id,
                'to_id'   => MessageModel::TO_ID_ALL,
                'body'    => '',
                'talk_id' => $talkId,
                'extra'   => array('type' => MessageModel::EXTRA_TALK_START)
            ));

            $msg->save();

            // Store the user in session

            $this->get('auth')->setGuest($user->id, $user->name, $user->roles, $talkId);

            return $user;
        }

        return false;
    }

    public function loginAction()
    {
        $security = $this->get('security');
        $request  = $this->get('request');
        $config   = $this->get('config');
        $logger   = $this->get('logger');

        // Redirect if already logged in

        if($this->get('user')->getId())
        {
            return $this->redirect('Admin:index');
        }

        // Log in automatically if administrator user has no password (true only at first use/installation)

        $appSettings = $config->data['appSettings'];

        if(empty($appSettings['installed']) && empty($config->data['superPass']))
        {
            $userToken = array(

                'id'    => '-1',
                'name'  => $config->data['superUser'],
                'roles' => array('ADMIN')
            );

            $this->get('auth')->setUser($userToken['id'], $userToken['name'], $userToken['roles']);

            // Redirect to admin's panel

            return $this->redirect('Install:index');
        }

        $errors   = false;
        $username = '';

        if($request->isPost())
        {
            // Get credentials

            $username = $security->escapeString  ($request->postVar('name'));
            $password = $security->encodePassword($request->postVar('password'));

            // Check if user exists and passwords match

            $userToken = null;

            $userEntry = UserModel::repo()->findOneBy(array('mail' => $username, 'roles' => array('LIKE', '%OPERATOR%')));

            if(isset($userEntry->password))
            {
                if($password == $userEntry->password)
                {
                    $userToken = array(

                        'id'    => $userEntry->id,
                        'name'  => $userEntry->name,
                        'roles' => $userEntry->roles
                    );

                    // Update user's IP address

                    if(!isset($userEntry->info))
                    {
                        $userEntry->info = array();
                    }

                    $userEntry->info['ip'] = $request->getIp();
                    $userEntry->save();
                }
            }

            // Store user's identity in the session

            if($userToken)
            {
                $this->get('auth')->setUser($userToken['id'], $userToken['name'], $userToken['roles']);

                // Log

                $logger->info('Successful login, user: ' . $username);

                // Redirect to admin's panel

                return $this->redirect('Admin:index');
            }

            $errors = true;

            // Log

            $logger->info('Failed login, user: ' . $username);
        }

        return $this->render('admin/login.html', array(

            'name'   => $username,
            'errors' => $errors
        ));
    }

    public function logoutAction()
    {
        $user = $this->get('user');

        if($user->getId())
        {
            // Reset user's last activity time

            UserModel::repo()->resetLastActivity($user->getId());

            // Log

            $this->get('logger')->info('Log out, user: ' . $user->getName());
        }

        // Clear user's identity

        $this->get('auth')->clearUser();
        $this->get('session')->destroy();

        // Redirect

        return $this->redirect('Authentication:login');
    }

    public function logoutGuestAction()
    {
        $request = $this->get('request');
        $guest   = $this->get('guest');

        $silent = $request->postVar('silent') == 'true' ? true : false;

        if($guest->getId())
        {
            // Reset user's last activity time

            UserModel::repo()->resetLastActivity($guest->getId());

            // End user's talk if any

            if(!$silent && $guest->hasTalkId())
            {
                // Send system message

                $msg = new MessageModel(array(

                    'from_id' => MessageModel::USER_ID_SYSTEM,
                    'to_id'   => MessageModel::TO_ID_ALL,
                    'body'    => '',
                    'talk_id' => $guest->getTalkId(),
                    'extra'   => array('type' => MessageModel::EXTRA_TALK_CLOSE)
                ));

                $msg->save();

                // Set new talk state

                $talk = TalkModel::repo()->find($guest->getTalkId());

                if(!empty($talk))
                {
                    $talk->state = TalkModel::STATE_CLOSED;
                    $talk->save();

                    // Remove talk from "user -> talk" map

                    TalkModel::repo()->removeTalksFromMap(array($talk->id));
                }
            }
        }

        // Clear user's identity

        $this->get('auth')->clearGuest();

        // Redirect

        return $this->json(array('success' => true));
    }
}

?>
