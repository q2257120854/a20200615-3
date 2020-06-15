<?php

class Authentication extends Service
{
    // Fields

    private $session;

    // Methods

    public function onRegister()
    {
        parent::onRegister();

        // -----

        $this->session = $this->get('session');
    }

    public function getUser()
    {
        return $this->session->get('user');
    }

    public function getGuest()
    {
        return $this->session->get('guest');
    }

    public function clearUser()
    {
        $this->session->remove('user');
    }

    public function clearGuest()
    {
        $this->session->remove('guest');
    }

    public function setUser($id, $name, $roles)
    {
        $this->session->set('user', array(

            'id'    => $id,
            'name'  => $name,
            'roles' => $roles
        ));
    }

    public function setGuest($id, $name, $roles, $talkId = null, $lastMessageId = null)
    {
        $data = array(

            'id'     => $id,
            'name'   => $name,
            'roles'  => $roles,
            'talkId' => $talkId
        );

        if($lastMessageId !== null)
        {
            $data['lastMessageId'] = $lastMessageId;
        }

        $this->session->set('guest', Utils::arrayMergeRecursive($data));
    }
}

?>
