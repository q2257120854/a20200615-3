<?php

class UploadController extends Controller
{
    //--------------------------------------------------------------------------
    //  CRUD
    //--------------------------------------------------------------------------

    public function crudAction()
    {
        $request = $this->get('request');

        if($request->isGet())
        {
            return $this->crudRead();
        }

        if($request->isPut())
        {
            return $this->crudUpdate();
        }

        return $this->json(array('success' => false));
    }

    protected function crudRead()
    {
        $request   = $this->get('request');
        $uploadIds = $request->getVar('ids');
        $uploads   = UploadModel::repo()->findMulti($uploadIds);

        if(!$uploads)
        {
            return $this->json(array('success' => false));
        }

        // Check permissions

        if(!$this->isOperator())
        {
            $guest    = $this->get('guest');
            $messages = MessageModel::repo()->findMulti($this->getMessageIds());

            if(!$this->allMessagesFromTalk($messages, $guest->getTalkId()))
            {
                return $this->json(array('success' => false, 'error' => 'Access denied'));
            }
        }

        return $this->json(array('success' => true, 'uploads' => array_values($uploads)));
    }

    public function crudUpdate()
    {
        $model = (array) json_decode(file_get_contents('php://input'), true);

        // Find upload

        $upload = UploadModel::repo()->find(intval($model['id']));

        if(!$upload || !$upload->canUpload())
        {
            return $this->json(array('success' => false));
        }

        // Check permissions

        if(!$this->isAuthor($upload))
        {
            return $this->json(array('success' => false, 'error' => 'Access denied'));
        }

        // Update progress

        $upload->progress = $model['progress'];
        $upload->save();

        return $this->json(array(

            'success' => true
        ));
    }

    //--------------------------------------------------------------------------
    //  State transitions
    //--------------------------------------------------------------------------

    public function denyAction()
    {
        // Find upload

        $upload = $this->findUpload();

        if(!$upload || !$upload->canDeny())
        {
            return $this->json(array('success' => false));
        }

        // Check permissions

        if(!$this->isOperator())
        {
            return $this->json(array('success' => false, 'error' => 'Access denied'));
        }

        // Update state

        $upload->state = UploadModel::STATE_DENIED;
        $upload->save();

        return $this->json(array('success' => true, 'upload' => $upload));
    }

    public function confirmAction()
    {
        // Find upload

        $upload = $this->findUpload();

        if(!$upload || !$upload->canConfirm())
        {
            return $this->json(array('success' => false));
        }

        // Check permissions

        if(!$this->isOperator())
        {
            return $this->json(array('success' => false, 'error' => 'Access denied'));
        }

        // Update state

        $upload->state = UploadModel::STATE_UPLOADING;
        $upload->save();

        return $this->json(array('success' => true, 'upload' => $upload));
    }

    public function abortAction()
    {
        // Find upload

        $upload = $this->findUpload();

        if(!$upload || !$upload->canAbort())
        {
            return $this->json(array('success' => false));
        }

        // Check permissions

        if(!$this->isAuthor($upload))
        {
            return $this->json(array('success' => false, 'error' => 'Access denied'));
        }

        // Update state

        $upload->state = UploadModel::STATE_ABORTED;
        $upload->save();

        return $this->json(array('success' => true, 'upload' => $upload));
    }

    public function uploadAction()
    {
        ignore_user_abort(true);

        $request  = $this->get('request');
        $files    = $request->friendlyFiles();
        $files    = $files['files'];

        // Find upload

        $upload = $this->findUpload();

        if(!$upload || !$upload->canUpload())
        {
            return $this->json(array('success' => false));
        }

        // Check permissions

        if(!$this->isAuthor($upload))
        {
            return $this->json(array('success' => false, 'error' => 'Access denied'));
        }

        // Validate the files

        if(empty($files))
        {
            $upload->state = UploadModel::STATE_ABORTED;
            $upload->save();

            return $this->json(array('success' => false));
        }

        $validators = $this->get('model_validation');
        $errors     = $validators->validateSharedFiles($files);

        if(!empty($errors))
        {
            $upload->state = UploadModel::STATE_ABORTED;
            $upload->save();

            return $this->json(array('success' => false, 'errors' => $errors));
        }

        // Save the files

        $models  = $upload->saveFiles($files);
        $fileIds = array();

        foreach($models as $model)
        {
            $fileIds[] = $model->id;
        }

        return $this->json(array(

            'success' => !empty($models),
            'files'   => $fileIds

        ), true);
    }

    //--------------------------------------------------------------------------
    //  Helpers
    //--------------------------------------------------------------------------

    protected function findUpload()
    {
        $request  = $this->get('request');
        $uploadId = $request->postVar('id');

        return UploadModel::repo()->find($uploadId);
    }

    protected function isOperator()
    {
        $user = $this->get('user');

        return $user->hasSomeRoles(array('OPERATOR', 'ADMIN'));
    }

    protected function isAuthor($upload)
    {
        // Check if upload's message was sent by this user

        $message = MessageModel::repo()->find($upload->message_id);

        return (

            intval($message->from_id) === intval($this->get('user') ->getId()) ||
            intval($message->from_id) === intval($this->get('guest')->getId())
        );
    }

    protected function getMessageIds($uploads)
    {
        $ids = array();

        foreach($uploads as $upload)
        {
            $ids[] = $upload->message_id;
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
