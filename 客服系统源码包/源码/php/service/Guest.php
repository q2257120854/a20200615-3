<?php

class Guest extends Service
{
    // Fields

    private $id;
    private $name;
    private $roles;
    private $talkId;

    // Methods

    public function onRegister()
    {
        parent::onRegister();

        // -----

        $user = $this->get('auth')->getGuest();

        if(!empty($user))
        {
            $this->id     = intval($user['id']);
            $this->name   = $user['name'];
            $this->roles  = $user['roles'];
            $this->talkId = intval($user['talkId']);

            if(isset($user['lastMessageId'])) $this->lastMessageId = intval($user['lastMessageId']);
        }
        else
        {
            $this->id            = null;
            $this->name          = 'Guest';
            $this->roles         = array('GUEST');
            $this->talkId        = null;
            $this->lastMessageId = 0;
        }
    }

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getRoles()
    {
        return $this->roles;
    }

    public function hasRole($role)
    {
        return array_search($role, $this->roles) !== false;
    }

    public function hasRoles($roles)
    {
        foreach($roles as $role)
        {
            if(!$this->hasRole($role))
            {
                return false;
            }
        }

        return true;
    }

    public function hasSomeRoles($roles)
    {
        foreach($roles as $role)
        {
            if($this->hasRole($role))
            {
                return true;
            }
        }

        return false;
    }

    public function getTalkId()
    {
        return $this->talkId;
    }

    public function hasTalkId()
    {
        return !empty($this->talkId);
    }

    public function setTalkId($talkId)
    {
        $this->talkId = intval($talkId);
        $this->save();
    }

    public function getLastMessageId()
    {
        return isset($this->lastMessageId) ? $this->lastMessageId : null;
    }

    public function setLastMessageId($id)
    {
        $this->lastMessageId = intval($id);
        $this->save();
    }

    public function save()
    {
        $this->get('auth')->setGuest($this->id, $this->name, $this->roles, $this->talkId, $this->getLastMessageId());
    }
}

?>
