<?php

class User extends Service
{
    // Fields

    private $id;
    private $name;
    private $roles;

    // Methods

    public function onRegister()
    {
        parent::onRegister();

        // -----

        $user = $this->get('auth')->getUser();

        if(!empty($user))
        {
            $this->id    = $user['id'];
            $this->name  = $user['name'];
            $this->roles = array_unique(array_merge($user['roles'], array('GUEST')));
        }
        else
        {
            $this->id    = null;
            $this->name  = 'Guest';
            $this->roles = array('GUEST');
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

    public function save()
    {
        $this->get('auth')->setUser($this->id, $this->name, $this->roles);
    }

    public function getData()
    {
        $data = array();

        foreach($this as $key => $value)
        {
            $data[$key] = $value;
        }

        return $data;
    }
}

?>
