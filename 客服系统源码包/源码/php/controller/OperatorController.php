<?php

class OperatorController extends Controller
{
    // Update talk's typing status

    public function updateTypingStatusAction()
    {
        $request = $this->get('request');
        $userId  = $this->get('user')->getId();
        $talkId  = $request->postVar('talkId');
        $status  = $request->postVar('status');

        UserModel::repo()->updateTypingStatus($userId, $talkId, $status == true);

        return $this->json(array('success' => true));
    }

    // Get talks typing statuses

    public function getTypingStatusAction()
    {
        $userId  = $this->get('user')->getId();
        $results = array();
        $talkIds = UserModel::repo()->getWatchedTalks($userId);

        foreach($talkIds as $talkId)
        {
            $results[$talkId] = UserModel::repo()->getTypingStatus($userId, $talkId);
        }

        return $this->json(array('success' => true, 'results' => $results));
    }

    // Update the given profile

    public function updateAction()
    {
        $request     = $this->get('request');
        $i18n        = $this->get('i18n');
        $security    = $this->get('security');
        $currentUser = $this->get('user');

        // Get the input

        $id          = $request->postVar('id');
        $name        = $request->postVar('name');
        $mail        = $request->postVar('mail');
        $roles       = $request->postVar('roles');
        $image       = $request->postVar('image');
        $departments = $request->postVar('departments');
        $password    = null;

        if($currentUser->getId() == $id || $currentUser->hasRole('ADMIN'))
        {
            $password = $request->postVar('password');
        }

        $errors = array();

        // Get the user

        $user = UserModel::repo()->find($id);

        if($user && ($currentUser->getId() === $user->id || $currentUser->hasRole('ADMIN')))
        {
            // Check if current password is correct

            if(!$currentUser->hasRole('ADMIN') && !empty($password))
            {
                $currPassword = $security->encodePassword($request->postVar('currPassword'));

                if($currPassword !== $user->password)
                {
                    $errors['password'] = $i18n->trans('curr.pass.incorrect');
                }
            }

            if(count($errors) === 0)
            {
                // Set new properties

                $user->setRawData(compact('name', 'mail', 'password', 'roles', 'image', 'departments'));

                // Validate the input

                $errors = $this->get('model_validation')->validateUser($user->getData(true), !empty($password));

                if(count($errors) === 0)
                {
                    // Update the user

                    if(!empty($password)) $user->password = $this->get('security')->encodePassword($user->password);

                    $user->save(true);

                    // Return a successful response

                    return $this->json(array('success' => true));
                }
            }

            // Return an error response

            return $this->json(array('success' => false, 'errors' => $errors));
        }
        else if($currentUser->hasRole('ADMIN') && !empty($password))
        {
            return $this->createAction();
        }

        // Return an error response

        return $this->json(array('success' => false, 'errors' => array('error' => $i18n->trans('user.not.found'))));
    }

    // Get default profile images

    public function getDefaultAvatarsAction()
    {
        $avatars  = UserModel::getDefaultAvatars();
        $template = $this->get('template_interface');

        // Make all the names absolute asset paths

        $i = 0;

        foreach($avatars as $a)
        {
            $avatars[$i++] = $template->asset($a);
        }

        return $this->json(array('success' => true, 'avatars' => $avatars));
    }

    // Upload the profile image

    public function uploadAvatarAction()
    {
        // Get the input

        $request = $this->get('request');
        $i18n    = $this->get('i18n');

        $id   = $request->postVar('userId');
        $file = $request->friendlyFile('avatar');

        // Get the user

        $user = UserModel::repo()->find($id);

        if($user)
        {
            // Resize and save the image

            $filename = $this->get('security')->randomString(64) . '.' . $file['ext'];

            $inputPath  = $file['tmp_name'];
            $webPath    = 'upload/avatars/' . $filename;
            $outputPath = ROOT_DIR . '/../' . $webPath;

            $this->get('image_resizer')->resize($inputPath, $outputPath, UserModel::AVATAR_SIZE, UserModel::AVATAR_SIZE);

            // Update the model

            $user->image = $request->getRootUrl() . $webPath;
            $user->save();

            return $this->json(array('success' => true, 'image' => $user->image), true);
        }

        return $this->json(array('success' => false, 'error' => $i18n->trans('user.not.found')));
    }

    // Get all operators

    public function listAction()
    {
        // Get the user

        $users = UserModel::repo()->findOperatorsFull();

        if($users)
        {
            // Hide the password fields

            foreach($users as $user)
            {
                unset($user->password);
            }

            // Return a successful response

            return $this->json(array('success' => true, 'users' => $users));
        }

        // Return an error response

        return $this->json(array('success' => false));
    }

    // Create new operator

    public function createAction()
    {
        $request = $this->get('request');
        $i18n    = $this->get('i18n');

        // Get the input

        $name        = $request->postVar('name');
        $mail        = $request->postVar('mail');
        $password    = $request->postVar('password');
        $departments = $request->postVar('departments');

        $roles = array('OPERATOR');

        // Validate the input

        $user = new UserModel(compact('name', 'mail', 'password', 'roles', 'departments'));

        $errors = $this->get('model_validation')->validateUser($user->getData(true));

        if(count($errors) === 0)
        {
            // Create the user

            $user->password = $this->get('security')->encodePassword($user->password);

            if($user->save(true))
            {
                // Return a successful response

                return $this->json(array('success' => true, 'id' => $user->id));
            }

            $errors = array($i18n->trans('couldnt.save.user'));
        }

        // Return an error response

        return $this->json(array('success' => false, 'errors' => $errors));
    }

    // Remove an operator

    public function deleteAction()
    {
        $request = $this->get('request');

        // Get the input

        $id = $request->postVar('id');

        // Get the user

        $user = UserModel::repo()->find($id);

        // Do not remove administrator

        if($user->hasRole('ADMIN'))
        {
            return $this->json(array('success' => false));
        }

        if($user)
        {
            // Remove the user

            $user->remove();

            // Return a successful response

            return $this->json(array('success' => true));
        }

        // Return an error response

        return $this->json(array('success' => false));
    }

    // Get user

    public function getAction()
    {
        $request = $this->get('request');

        // Get the input

        $id = $request->postVar('id');

        // Get the user

        $user = UserModel::repo()->find($id);

        if($user)
        {
            // Hide the password field

            unset($user->password);

            // Return a successful response

            return $this->json(array('success' => true, 'user' => $user));
        }

        // Return an error response

        return $this->json(array('success' => false));
    }

    // Get users

    public function getUsersAction()
    {
        $request = $this->get('request');

        // Input

        $ids = $request->getVar('ids');

        // Get the users

        $users = UserModel::repo()->findMulti($ids);

        if($users)
        {
            // Hide the password fields

            foreach($users as &$user)
            {
                unset($user->password);
            }

            // Return a successful response

            return $this->json(array('success' => true, 'users' => $users));
        }

        // Return an error response

        return $this->json(array('success' => false));
    }

    // Check whether there's any operator on-line

    public function isOnlineAction()
    {
        // Hide operators' presence if maximum number of connections has been exceeded

        $user = $this->get('guest');

        if(!$user->getId())
        {
            $config       = $this->get('config');
            $guestsOnline = UserModel::repo()->countGuestsOnline();

            if($guestsOnline >= intval($config->data['appSettings']['maxConnections']))
            {
                return $this->json(array('success' => false));
            }
        }
        else
        {
            // Check for operators that are allowed to handle given talk

            return $this->json(array(

                'success' => UserModel::repo()->hasOperatorForTalk($user->getTalkId())
            ));
        }

        // Check for any operator

        return $this->json(array('success' => UserModel::repo()->isOperatorOnline()));
    }

    // Get all on-line users

    public function getOnlineUsersAction()
    {
        return $this->json(array('success' => true, 'users' => UserModel::repo()->getAllOnline()));
    }

    // Get ID of the talk with the given user

    public function getTalkIdForUserAction()
    {
        $user1Id = $this->get('user')->getId;
        $user2Id = $this->get('request')->postVar('id');

        return $this->json(array(

            'success' => true,
            'talkId'  => TalkModel::getTalkIdForUsers($user1Id, $user2Id)
        ));
    }

    // Add given operator to a given talk

    public function inviteToTalkAction()
    {
        $request = $this->get('request');
        $i18n    = $this->get('i18n');

        $from   = $this->get('user')->getId();
        $talkId = $request->postVar('talkId');
        $userId = $request->postVar('userId');

        // Check if user is already in the talk

        $watchedTalks = UserModel::repo()->getWatchedTalks($userId);

        if(in_array($talkId, $watchedTalks))
        {
            return $this->json(array(

                'success' => false,
                'errors'  => $i18n->trans('user.alrdy.in.t')
            ));
        }

        $user = UserModel::repo()->find($userId);

        if(!$user)
        {
            return $this->json(array(

                'success' => false,
                'errors'  => $i18n->trans('user.not.exist')
            ));
        }

        // Make the user watch the talk

        UserModel::repo()->addWatchedTalks($userId, array($talkId));

        // Send system message to tell the user has been added

        $msg = new MessageModel(array(

            'from_id' => MessageModel::USER_ID_SYSTEM,
            'to_id'   => MessageModel::TO_ID_ALL,
            'body'    => '',
            'talk_id' => $talkId,
            'extra'   => array('type' => MessageModel::EXTRA_USER_INVITE, 'id' => $userId, 'name' => $user->name, 'mail' => $user->mail)
        ));

        $success = $msg->save();

        return $this->json(array(

            'success' => $success,
            'talkId'  => $talkId,
            'userId'  => $userId
        ));
    }

    // Remove current operator from the given talk

    public function leaveTalkAction()
    {
        $request = $this->get('request');
        $user    = $this->get('user');
        $i18n    = $this->get('i18n');

        $talkId = $request->postVar('talkId');
        $silent = $request->postVar('silent') == 'true' ? true : false;
        $userId = $user->getId();

        $user = UserModel::repo()->find($userId);
        $talk = TalkModel::repo()->find($talkId);

        if(!$user)
        {
            return $this->json(array(

                'success' => false,
                'errors'  => $i18n->trans('user.not.exist')
            ));
        }

        if(!$talk)
        {
            return $this->json(array(

                'success' => false,
                'errors'  => $i18n->trans('talk.not.exist')
            ));
        }

        // Don't allow to leave the talk if it's not yet in progress

        if(!$talk->isObsolete() && $talk->state === TalkModel::STATE_NEW)
        {
            return $this->json(array(

                'success' => false,
                'errors'  => $i18n->trans('cant.leave.unhandled.t')
            ));
        }

        // Force silent leave if the talk is closed

        if($talk->state === TalkModel::STATE_CLOSED)
        {
            $silent = true;
        }

        // Stop watching the talk

        UserModel::repo()->removeWatchedTalks($userId, array($talkId));

        if(!$silent)
        {
            // Send system message to tell user has left

            $msg = new MessageModel(array(

                'from_id' => MessageModel::USER_ID_SYSTEM,
                'to_id'   => MessageModel::TO_ID_ALL,
                'body'    => '',
                'talk_id' => $talkId,
                'extra'   => array('type' => MessageModel::EXTRA_USER_LEAVE, 'id' => $userId, 'name' => $user->name, 'mail' => $user->mail)
            ));

            $msg->save();
        }

        return $this->json(array(

            'success' => true,
            'talkId' => $talkId
        ));
    }

    // Close the given talk

    public function closeTalkAction()
    {
        $request = $this->get('request');
        $user    = $this->get('user');
        $i18n    = $this->get('i18n');

        $talkId = $request->postVar('talkId');
        $userId = $user->getId();

        $talk = TalkModel::repo()->find($talkId);
        $user = UserModel::repo()->find($userId);

        if(!$talk)
        {
            return $this->json(array(

                'success' => false,
                'errors'  => $i18n->trans('talk.not.exist')
            ));
        }

        if(!$user)
        {
            return $this->json(array(

                'success' => false,
                'errors'  => $i18n->trans('user.not.exist')
            ));
        }

        // Ensure only owner can close the talk

        if($talk->owner != $userId)
        {
            return $this->json(array(

                'success' => false,
                'errors'  => $i18n->trans('only.t.owner.can.close')
            ));
        }

        // Stop watching the talk

        UserModel::repo()->removeWatchedTalks($userId, array($talkId));

        // Proceed only if not already closed

        $success = true;

        if($talk->state !== TalkModel::STATE_CLOSED)
        {
            // Change talk's state

            $talk->state = TalkModel::STATE_CLOSED;

            $success = $talk->save();

            // Send system message to tell the talk has been closed

            $msg = new MessageModel(array(

                'from_id' => MessageModel::USER_ID_SYSTEM,
                'to_id'   => MessageModel::TO_ID_ALL,
                'body'    => '',
                'talk_id' => $talkId,
                'extra'   => array('type' => MessageModel::EXTRA_TALK_CLOSE, 'user' => $user->name)
            ));

            $success = $success && $msg->save();
        }

        return $this->json(array(

            'success' => $success,
            'talkId' => $talkId
        ));
    }

    // Transfer the given talk to another operator

    public function transferTalkAction()
    {
        $request = $this->get('request');
        $user    = $this->get('user');
        $i18n    = $this->get('i18n');

        $talkId     = $request->postVar('talkId');
        $newOwnerId = $request->postVar('newOwnerId');;
        $userId     = $user->getId();

        $talk     = TalkModel::repo()->find($talkId);
        $newOwner = UserModel::repo()->find($newOwnerId);

        if(!$talk)
        {
            return $this->json(array(

                'success' => false,
                'errors'  => $i18n->trans('talk.not.exist')
            ));
        }

        if(!$newOwner)
        {
            return $this->json(array(

                'success' => false,
                'errors'  => $i18n->trans('user.not.exist')
            ));
        }

        // Ensure only owner can transfer the talk

        if($talk->owner != $userId)
        {
            return $this->json(array(

                'success' => false,
                'errors'  => $i18n->trans('only.t.owner.can.transfer')
            ));
        }

        // Change talk's owner

        $talk->owner = $newOwnerId;

        $success = $talk->save();

        // Make the new owner watch the talk

        UserModel::repo()->addWatchedTalks($newOwnerId, array($talkId));

        // Send system message to tell the talk has a new owner

        $systemMsg = new MessageModel(array(

            'from_id' => MessageModel::USER_ID_SYSTEM,
            'to_id'   => MessageModel::TO_ID_ALL,
            'body'    => '',
            'talk_id' => $talkId,
            'extra'   => array('type' => MessageModel::EXTRA_TALK_OWNER, 'id' => $newOwnerId, 'user' => $newOwner->name)
        ));

        $systemMsg->save();

        $success = $success && $systemMsg->save();

        return $this->json(array(

            'success' => $success,
            'talkId' => $talkId
        ));
    }

    // Reset user's last activity time

    public function resetLastActivityAction()
    {
        $user = $this->get('user');

        return $this->json(array(

            'success' => UserModel::repo()->resetLastActivity($user->getId())
        ));
    }

    // Manage all major functionalities

    public function manageConnectionAction()
    {
        $request = $this->get('request');
        $user    = $this->get('user');
        $userId  = $user->getId();

        // Keep alive

        UserModel::repo()->stayAlive($userId);

        // Get logged in & anonymous users

        $users    = UserModel::repo()->getAllOnline();
        $visitors = $this->get('online_guests')->findAll();

        // Store watched talks

        $lastMessageId = intval($request->postVar('lastMessageId'));
        $watchedTalks  = $request->postVar('watchedTalks');
        $watchedTalks  = !empty($watchedTalks) ? explode(',', $watchedTalks) : array();

        $watchedTalks = UserModel::repo()->addWatchedTalks($userId, $watchedTalks);

        // Get messages from watched talks and global talks

        $talks = MessageModel::repo()->getOperatorTalks($userId, $watchedTalks, $lastMessageId);

        // Make operator watch all of the new talks

        $newWatchedTalks = array();

        foreach($talks as $id => $messages)
        {
            $newWatchedTalks[] = $id;
        }

        UserModel::repo()->addWatchedTalks($userId, $newWatchedTalks);

        // Manage obsolete talks

        TalkModel::repo()->checkForObsoleteTalks($userId, $talks);
        TalkModel::repo()->archiveOldTalks();

        // Get user(s) -> talk map

        $userTalkMap = TalkModel::repo()->getUserTalkMap();

        // Get talk -> department map

        $talkDepartmentMap = TalkModel::repo()->getTalkDepartmentMap($newWatchedTalks);

        // Get watched uploads

        $watchedUploads = $request->postVar('watchedUploads');
        $watchedUploads = !empty($watchedUploads) ? explode(',', $watchedUploads) : array();
        $uploads        = array();

        if(count($watchedUploads) > 0)
        {
            $uploads = UploadModel::repo()->findMulti($watchedUploads);
        }

        return $this->json(array(

            'success'           => true,
            'talks'             => $talks,
            'userTalkMap'       => $userTalkMap,
            'talkDepartmentMap' => $talkDepartmentMap,
            'users'             => $users,
            'visitors'          => $visitors,
            'uploads'           => $uploads
        ));
    }
}

?>
