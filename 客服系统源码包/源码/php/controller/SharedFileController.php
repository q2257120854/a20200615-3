<?php

class SharedFileController extends Controller
{
    public function downloadAction()
    {
        $request = $this->get('request');
        $id      = $request->getVar('id');
        $file    = SharedFileModel::repo()->find($id);

        if(!$file)
        {
            return $this->text('File not found');
        }

        // Check permissions to download

        $user = $this->get('user');

        if(!$user->hasSomeRoles(array('OPERATOR', 'ADMIN')))
        {
            $guest = $this->get('guest');

            $upload  = UploadModel::repo()->find($file->upload_id);
            $message = MessageModel::repo()->find($upload->message_id);

            if($guest->getTalkId() !== $message->talk_id)
            {
                return $this->text('Access denied');
            }
        }

        // Decode and send

        $file->sendDecoded();

        return $this->download('', $file->original_name, $file->type);
    }
}

?>
