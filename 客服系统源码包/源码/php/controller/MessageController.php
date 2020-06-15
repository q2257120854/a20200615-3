<?php

class MessageController extends Controller
{
    // Constants

    const DATE_TIME_FORMAT = 'Y-m-d H:i:s';

    // Get last messages for the logged-in guest

    public function getLastAction()
    {
        $guest     = $this->get('guest');
        $guestId   = $guest->getId();

        if(!$guestId) return $this->json(array('success' => false));

        $lastMsgId = $this->get('request')->postVar('lastMsgId');

        $query = array('datetime' => array('>=', date(self::DATE_TIME_FORMAT, time() - MessageModel::LAST_MESSAGES_TIME_DELAY)));

        if(!empty($lastMsgId))
        {
            $query['id'] = array('<', $lastMsgId);
        }

        $messages = MessageModel::repo()->findBy($query);

        // Filter messages for the talk

        $result = array();

        if(!empty($messages))
        {
            foreach($messages as $message)
            {
                if($message->from_id == $guest->getId() || $message->to_id == $guest->getId()) $result[] = $message;
            }
        }

        return $this->json(array('success' => true, 'messages' => $result));
    }

    // Get last messages between operator and a given guest

    public function operatorGuestGetLastAction()
    {
        $operator  = $this->get('user');
        $request   = $this->get('request');
        $guestId   = $request->postVar('guestId');
        $lastMsgId = $request->postVar('lastMsgId');

        $query = array('datetime' => array('>=', date(self::DATE_TIME_FORMAT, time() - MessageModel::LAST_MESSAGES_TIME_DELAY)));

        if(!empty($lastMsgId))
        {
            $query['id'] = array('<', $lastMsgId);
        }

        $messages = MessageModel::repo()->findBy($query);

        // Filter messages for the talk

        $result = array();

        if(!empty($messages))
        {
            foreach($messages as $message)
            {
                if(
                    ($message->from_id == $operator->getId() && $message->to_id   == $guestId) ||
                    ($message->to_id   == $operator->getId() && $message->from_id == $guestId)
                )
                {
                    $result[] = $message;
                }
            }
        }

        return $this->json(array('success' => true, 'messages' => $result));
    }

    // Get messages from the given talk

    public function getTalkAction()
    {
        $request   = $this->get('request');
        $talkId    = $request->postVar('id');
        $lastMsgId = $request->postVar('lastMsgId');
        $messages  = MessageModel::repo()->getTalk($talkId, $lastMsgId);

        return $this->json(array('success' => true, 'messages' => $messages));
    }

    // Send message (guest version)

    public function guestSendAction()
    {
        $request    = $this->get('request');
        $validators = $this->get('model_validation');

        // Get the input

        $guest = $this->get('guest');
        $from  = $guest->getId();
        $body  = $request->postVar('body');
        $extra = (array) json_decode($request->postVar('extra', false));

        $to = MessageModel::TO_ID_ALL; // Special value used for broadcasting

        // Validate the input

        $errors = $validators->validateMessage(array(

            'from'    => $from,
            'to'      => $to,
            'talk_id' => $guest->getTalkId(),
            'body'    => $body,
            'extra'   => $extra
        ));

        if(count($errors) === 0)
        {
            // Get the users data (to_user_info is initially set to broadcast info)

            $fromUser = UserModel::repo()->find($from);

            if(empty($fromUser))
            {
                return $this->json(array('success' => false));
            }

            // Create the message

            $msg = new MessageModel(array(

                'from_id' => $from,
                'to_id'   => $to,
                'body'    => $body,
                'talk_id' => $guest->getTalkId(),
                'extra'   => $extra
            ));

            // Handle uploads

            $upload = null;

            if(isset($msg->extra) && $msg->extra['type'] === MessageModel::EXTRA_FILES)
            {
                if(!$this->fileSharingAllowed())
                {
                    return $this->json(array('success' => false, 'upload' => $this->createInvalidUpload()));
                }

                $msg->save();

                $upload = $this->createUpload($msg);
            }
            else
            {
                $msg->save();
            }

            // Return a successful response

            $result = array('success' => true, 'id' => $msg->id, 'talkId' => $msg->talk_id);

            if($upload)
            {
                $result['upload'] = $upload->getData();
            }

            return $this->json($result);
        }

        // Return an error response

        return $this->json(array('success' => false, 'errors' => $errors));
    }

    // Send message from the logged-in operator to another user

    public function sendAction()
    {
        $request    = $this->get('request');
        $validators = $this->get('model_validation');
        $user       = $this->get('user');

        // Get the input

        $from   = $user->getId();
        $to     = $request->postVar('to');
        $body   = $request->postVar('body');
        $talkId = $request->postVar('talk_id');
        $extra  = (array) json_decode($request->postVar('extra', false));

        if(!is_numeric($talkId))
        {
            $talkId = null;
        }

        // Validate the input

        $errors = $validators->validateMessage(array(

            'from'  => $from,
            'body'  => $body,
            'extra' => $extra
        ));

        if(count($errors) === 0)
        {
            $guestTalk = true;

            // Find the talk ID if not specified

            $userTalkMapping = array();

            if(empty($talkId))
            {
                $toUser = UserModel::repo()->find($to);

                if($toUser->isGuest())
                {
                    $talkId = TalkModel::repo()->getTalkIdForGuest($to);

                    $userTalkMapping[$to] = $talkId;
                }
                else
                {
                    $guestTalk = false;

                    $talkId = TalkModel::repo()->getTalkIdForUsers($from, $to);

                    // Sort ids

                    $user1 = $from;
                    $user2 = $to;

                    if($user1 > $user2)
                    {
                        $user1 = $user2;
                        $user2 = $from;
                    }

                    $userTalkMapping["{$user1}_$user2"] = $talkId;
                }

                // Make the other user watch the new talk

                UserModel::repo()->addWatchedTalks($to, array($talkId));
            }

            // Create the message

            $msg = new MessageModel(array(

                'from_id' => $from,
                'to_id'   => $to,
                'body'    => $body,
                'talk_id' => $talkId,
                'extra'   => $extra
            ));

            // Handle uploads

            $upload = null;

            if(isset($msg->extra) && $msg->extra['type'] === MessageModel::EXTRA_FILES)
            {
                if(!$this->fileSharingAllowed())
                {
                    return $this->json(array('success' => false, 'upload' => $this->createInvalidUpload()));
                }

                $success = $msg->save();

                $upload = $this->createUpload($msg, true);
            }
            else
            {
                $success = $msg->save();
            }

            // Update the talk status if needed

            $talk = TalkModel::repo()->find($talkId);

            if($talk->state === TalkModel::STATE_NEW)
            {
                $talk->state = TalkModel::STATE_IN_PROGRESS;
            }

            // Set talk's owner, if not yet present

            if(empty($talk->owner))
            {
                $talk->owner = $from;

                // Notify others about the new owner (only for guest talks)

                if($guestTalk)
                {
                    $systemMsg = new MessageModel(array(

                        'from_id' => MessageModel::USER_ID_SYSTEM,
                        'to_id'   => MessageModel::TO_ID_ALL,
                        'body'    => '',
                        'talk_id' => $talkId,
                        'extra'   => array('type' => MessageModel::EXTRA_TALK_OWNER, 'id' => $from, 'user' => $user->getName())
                    ));

                    $systemMsg->save();
                }
            }

            // Save the talk

            $talk->stayAlive();
            $talk->save();

            // Return a successful response

            $result = array('success' => $success, 'to' => $to, 'message' => $msg, 'talk_id' => $talkId, 'userTalkMapping' => $userTalkMapping);

            if($upload)
            {
                $result['upload'] = $upload->getData();
            }

            return $this->json($result);
        }

        // Return an error response

        return $this->json(array('success' => false, 'errors' => $errors));
    }

    // Initiate file upload

    protected function createUpload($message, $isOperator = false)
    {
        $filesInfo = $message->extra['files'];
        $totalSize = 0;

        foreach($filesInfo as $file)
        {
            $totalSize += $file->size;
        }

        $upload = new UploadModel(array(

            'message_id' => $message->id,
            'files_info' => $filesInfo,
            'size'       => $totalSize,
        ));

        if($isOperator)
        {
            $upload->state = UploadModel::STATE_UPLOADING;
        }

        $upload->save();

        return $upload;
    }

    protected function createInvalidUpload()
    {
        return new UploadModel(array(

            'state' => UploadModel::STATE_ERROR
        ));
    }

    // Get logged-in user messages history

    public function getHistoryAction()
    {
        $userId = $this->get('user')->getId();

        $messages = null;

        if($userId)
        {
            $messages = MessageModel::repo()->findBy(array('to_id' => $userId, 'from_id' => $userId), 'OR');
        }

        return $this->json($messages ? $messages : array());
    }

    // Get history of the given user

    public function getUserHistoryAction()
    {
        $request = $this->get('request');
        $userId  = $request->postVar('id');

        $messages = MessageModel::repo()->findBy(array('to_id' => $userId, 'from_id' => $userId), 'OR');

        return $this->json($messages ? $messages : array());
    }

    // Search through history

    public function queryHistoryAction()
    {
        $request   = $this->get('request');
        $queryData = $request->postVar('query', false);

        $query = json_decode($queryData, true);

        // Handle date filtering

        $query['fromDate'] = !empty($query['fromDate']) ? new DateTime($query['fromDate']) : new DateTime('01/01/1900');
        $query['toDate']   = !empty($query['toDate'])   ? new DateTime($query['toDate'])   : new DateTime('+ 100 years');
        $query['fromDate'] = $query['fromDate']->format(self::DATE_TIME_FORMAT);
        $query['toDate']   = $query['toDate']->format(self::DATE_TIME_FORMAT);
        $query['limit']    = intval($query['limit']);

        $results = MessageModel::repo()->queryHistory($query);

        return $this->json($results ? $results : array());
    }

    // Clear history

    public function clearHistoryAction()
    {
        $request = $this->get('request');

        // Force POST requests

        if(!$request->isPost()) return $this->json(array('success' => false));

        // Clear the history

        $success = TalkModel::repo()->clear();

        if($success)
        {
            // Log

            $this->get('logger')->info('History cleared');
        }

        return $this->json(array('success' => $success));
    }

    // Send talk transcript to email (guest)

    public function mailTalkTranscriptAction()
    {
        return $this->_mailTalkTranscript($this->get('guest')->getTalkId());
    }

    // Send talk transcript to email (opeoperator)

    public function operatorMailTalkTranscriptAction()
    {
        return $this->_mailTalkTranscript($this->get('request')->postVar('talkId'));
    }

    public function _mailTalkTranscript($talkId)
    {
        $request  = $this->get('request');
        $i18n     = $this->get('i18n');
        $template = $this->get('template_interface');

        // Get input

        $mail = $request->postVar('mail');

        // Validate

        $errors = $this->get('model_validation')->validateMailTranscriptData(compact('talkId', 'mail'));

        if(!empty($errors))
        {
            return $this->json(array(

                'success' => false,
                'errors'  => $errors
            ));
        }

        // Find the talk

        $transcriptData = MessageModel::repo()->getTalkForTranscript($talkId);
        $messages       = $transcriptData['talk'];
        $users          = $transcriptData['users'];

        // Return if talk is empty

        if(!$messages || count($messages) < 1)
        {
            return $this->json(array(

                'success' => false
            ));
        }

        // Prepare email and talk transcript

        $mailData = array(

            'users'     => $users,
            'dateStart' => $messages[0]->datetime,
            'dateEnd'   => $messages[count($messages) - 1]->datetime
        );

        $transcriptData = array(

            'users'     => $users,
            'messages'  => $messages,
            'dateStart' => $mailData['dateStart'],
            'dateEnd'   => $mailData['dateEnd']
        );

        $mailBody   = $template->renderView('email/talk-transcript.html.php',            $mailData,       true);
        $transcript = $template->renderView('email/talk-transcript-attachment.html.php', $transcriptData, true);

        $talkFilename = $i18n->trans('talk.transcript.filename') . time();

        // Create ZIP archive

        $zipPath = sys_get_temp_dir() . '/' . $this->get('security')->randomString(16);
        $zip     = new ZipArchive();

        if($zip->open($zipPath, ZipArchive::CREATE) !== true)
        {
            return $this->json(array(

                'success' => false
            ));
        }

        $zip->addFromString($talkFilename . '.html', $transcript);
        $zip->close();

        // Send the email with transcript

        $from    = $this->get('config')->data['appSettings']['contactMail'];
        $subject = $this->get('i18n')->trans('app.name') . ' (' . $this->get('i18n')->trans('talk.transcript.mail.title') . ')';

        $success = $this->get('mailer')->sendMessage($from, $mail, $subject, $mailBody, array(

            array('name' => $talkFilename . '.zip', 'content' => file_get_contents($zipPath))
        ));

        return $this->json(array(

            'success' => $success
        ));
    }

    protected function fileSharingAllowed()
    {
        return $this->get('config')->data['appSettings']['fileSharing'] == 'true';
    }
}

?>
