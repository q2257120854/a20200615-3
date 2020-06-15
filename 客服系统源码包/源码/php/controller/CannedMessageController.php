<?php

class CannedMessageController extends Controller
{
    // Constants

    const DATA_TYPE = 'canned_message';

    // Get all canned messages

    public function listAction()
    {
        $messages = DataModel::repo(self::DATA_TYPE)->findAll();
        $result   = array();

        if(!empty($messages))
        {
            foreach($messages as $message)
            {
                $result[] = array('id' => $message->id, 'name' => $message->key, 'body' => $message->value);
            }
        }

        return $this->json(array(

            'success'  => true,
            'messages' => $result
        ));
    }

    // Get given canned message

    public function getAction()
    {
        $request = $this->get('request');

        // Get the input

        $id = $request->postVar('id');

        // Get the user

        $message = DataModel::repo(self::DATA_TYPE)->find($id);

        if($message)
        {
            // Return a successful response

            $message = array('id' => $message->id, 'name' => $message->key, 'body' => $message->value);

            return $this->json(array('success' => true, 'user' => $message));
        }

        // Return an error response

        return $this->json(array('success' => false));
    }

    // Update canned message

    public function updateAction()
    {
        $request = $this->get('request');

        // Get the input

        $id   = $request->postVar('id');
        $name = $request->postVar('name');
        $body = $request->postVar('body');

        // Get the message

        $message = DataModel::repo(self::DATA_TYPE)->find($id);

        if($message)
        {
            // Set new properties

            $message->setRawData(array('key' => $name, 'value' => $body));

            // Update the message

            $message->save();

            // Return a successful response

            return $this->json(array('success' => true));
        }
        else
        {
            return $this->createAction();
        }
    }

    // Create canned message

    public function createAction()
    {
        $request = $this->get('request');

        // Get the input

        $name = $request->postVar('name');
        $body = $request->postVar('body');

        $message = new DataModel(self::DATA_TYPE, array('key' => $name, 'value' => $body));

        // Create the message

        if($message->save())
        {
            // Return a successful response

            return $this->json(array('success' => true, 'id' => $message->id));
        }

        $errors = array('Couldn\'t save the message');

        // Return an error response

        return $this->json(array('success' => false, 'errors' => $errors));
    }

    // Delete canned message

    public function deleteAction()
    {
        $request = $this->get('request');

        // Get the input

        $id = $request->postVar('id');

        // Get the message

        $message = DataModel::repo(self::DATA_TYPE)->find($id);

        if($message)
        {
            // Remove the message

            $message->remove();

            // Return a successful response

            return $this->json(array('success' => true));
        }

        // Return an error response

        return $this->json(array('success' => false));
    }
}

?>
