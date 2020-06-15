<?php

class UploadModel extends Model
{
    // Constants

    const STATE_PENDING   = 'pending';
    const STATE_ABORTED   = 'aborted';
    const STATE_DENIED    = 'denied';
    const STATE_ERROR     = 'error';
    const STATE_UPLOADING = 'uploading';
    const STATE_UPLOADED  = 'uploaded';

    // Constructor

    public function initialize()
    {
        parent::initialize();

        $this->state    = self::STATE_PENDING;
        $this->progress = 0;
    }

    // Getters & setters

    public function getTableName()
    {
        return 'mirrormx_customer_chat_upload';
    }

    public function getColumns()
    {
        return array('message_id', 'state', 'files_info', 'size', 'progress');
    }

    // Methods

    public static function repo()
    {
        return new UploadModel;
    }

    public function saveFiles($files)
    {
        if(!isset($this->id) || empty($this->id))
        {
            throw new Exception('First save the upload');
        }

        $result    = array();
        $filesInfo = array();
        $totalSize = 0;

        foreach($files as $file)
        {
            $fileModel = new SharedFileModel(array(

                'upload_id'     => $this->id,
                'original_name' => $file['name'],
                'type'          => $file['type']
            ));

            $fileModel->moveUploaded($file['tmp_name']);

               $result[] = $fileModel;
            $filesInfo[] = array(

                'name' => $fileModel->original_name,
                'type' => $fileModel->type,
                'size' => $fileModel->size
            );

            $totalSize += $fileModel->size;
        }

        $this->files_info = $filesInfo;
        $this->state      = self::STATE_UPLOADED;
        $this->size       = $totalSize;
        $this->progress   = $this->size;
        $this->save();

        return $result;
    }

    // Transition checks

    public function canDeny()
    {
        return $this->state === self::STATE_PENDING || $this->state === self::STATE_UPLOADING;
    }

    public function canConfirm()
    {
        return $this->state === self::STATE_PENDING;
    }

    public function canAbort()
    {
        return $this->state === self::STATE_PENDING || $this->state === self::STATE_UPLOADING;
    }

    public function canUpload()
    {
        return $this->state === self::STATE_UPLOADING;
    }

    // Hooks

    public function preSave()
    {
        $result = parent::preSave();

        if(isset($result['files_info'])) $result['files_info'] = json_encode($result['files_info']);

        return $result;
    }

    public function postRead($data)
    {
        $data = parent::postRead($data);

        $data['id']         = intval($data['id']);
        $data['message_id'] = intval($data['message_id']);

        if(isset($data['files_info'])) $data['files_info'] = json_decode($data['files_info']);

        // Get related files

        if($data['state'] === self::STATE_UPLOADED)
        {
            $id    = $data['id'];
            $files = SharedFileModel::repo()->findBy(array('upload_id' => $id));

            if($files)
            {
                $filesSafe = array();

                foreach($files as &$file)
                {
                    $filesSafe[] = $file->getPublicInfo();
                }

                $data['files'] = $filesSafe;
            }
        }

        return $data;
    }
}

?>
