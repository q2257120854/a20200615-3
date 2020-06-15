<?php

class GuestController extends Controller
{
    // Get online guests

    public function getOnlineAction()
    {
        $guests = UserModel::repo()->findBy(array(

            'roles' => array('LIKE', '%GUEST%'))
        );

        $result = array();

        if($guests)
        {
            foreach($guests as $guest)
            {
                if($guest->hasValidSession())
                {
                    $result[] = $guest;
                }
            }
        }

        return $this->json($result);
    }

    // Update guest talk's typing status

    public function updateTypingStatusAction()
    {
        $guest = $this->get('guest');

        if($guest->hasTalkId())
        {
            $request = $this->get('request');
            $talkId  = $guest->getTalkId();
            $status  = $request->postVar('status');

            UserModel::repo()->updateTypingStatus($guest->getId(), $talkId, $status == true);

            return $this->json(array('success' => true));
        }

        return $this->json(array('success' => false));
    }

    // Get talk's typing status

    public function getTypingStatusAction()
    {
        $guest = $this->get('guest');

        if($guest->hasTalkId())
        {
            $talkId = $guest->getTalkId();

            $result = UserModel::repo()->getTypingStatus($guest->getId(), $talkId);

            return $this->json(array('success' => true, 'result' => $result));
        }

        return $this->json(array('success' => false));
    }

    // Manage all major functionalities

    public function manageConnectionAction()
    {
        $request = $this->get('request');
        $guest   = $this->get('guest');
        $guestId = $guest->getId();

        if(!$guestId)
        {
            return $this->json(array('success' => false));
        }

        $guestModel = UserModel::repo()->find($guestId);

        if(!$guestModel)
        {
            return $this->json(array('success' => false));
        }

        // Keep alive

        $info = $request->postVar('info', false);
        $url  = $request->postVar('url');

        if(empty($info))
        {
            $info = isset($guestModel->info) ? $guestModel->info : array();
        }
        else
        {
            $info = json_decode($info, true);
        }

        if(!empty($url))
        {
            $info['referer'] = $url;
        }

        $info = json_encode($info);

        UserModel::repo()->stayAlive($guestId, $info);

        // Find new messages

        $lastMessageId = intval($request->postVar('lastMessageId'));

        if($lastMessageId !== null && $lastMessageId > $guest->getLastMessageId())
        {
            $guest->setLastMessageId($lastMessageId);
        }

        $messages = MessageModel::repo()->getTalk($guest->getTalkId(), $lastMessageId);

        // Get watched uploads

        $watchedUploads = $request->postVar('watchedUploads');
        $watchedUploads = !empty($watchedUploads) ? explode(',', $watchedUploads) : array();
        $uploads        = array();

        if(count($watchedUploads) > 0)
        {
            $uploads = UploadModel::repo()->findMulti($watchedUploads);

            // Check permissions

            if(empty($uploads) || !$this->allowedToWatchUploads($uploads, $guest->getTalkId()))
            {
                $uploads = array();
            }
        }

        return $this->json(array(

            'success' => true,
            'user'    => $guestModel->getBasicData(),
            'messages'=> $messages ? $messages : array(),
            'uploads' => $uploads

        ));
    }

    protected function allowedToWatchUploads($uploads, $talkId)
    {
        $messages = MessageModel::repo()->findMulti($this->getMessageIds($uploads));

        return $this->allMessagesFromTalk($messages, $talkId);
    }

    protected function getMessageIds($uploads)
    {
        $ids = array();

        if(!empty($uploads))
        {
            foreach($uploads as $upload)
            {
                $ids[] = $upload->message_id;
            }
        }

        return $ids;
    }

    protected function allMessagesFromTalk($messages, $talkId)
    {
        foreach($messages as $message)
        {
            if($message->talk_id !== $talkId)
            {
                return false;
            }
        }

        return true;
    }
}

?>
