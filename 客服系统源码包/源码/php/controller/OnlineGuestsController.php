<?php

class OnlineGuestsController extends Controller
{
    // Image width values for return messages

    const MESSAGE_LOGIN = 2;

    // Get online guests

    public function listAction()
    {
        $users = $this->get('online_guests')->findAll();

        return $this->json(array('success' => true, 'users' => $users));
    }

    // Update guest's status and check messages

    public function keepAliveAction()
    {
        $id = $this->get('session')->getId();

        if(empty($id))
        {
            return $this->noResponse();
        }

        $url = $this->get('request')->getVar('url');

        if(!empty($url))
        {
            $data['url'] = $url;
        }

        $onlineGuests = $this->get('online_guests');
        $onlineGuests->keepAlive($id, $url);

        if($onlineGuests->shouldLogin($id))
        {
            return $this->beacon(self::MESSAGE_LOGIN);
        }

        return $this->noResponse();
    }

    // Queue "login" command for the guest

    public function loginAction()
    {
        $name = $this->get('request')->postVar('name');

        if(empty($name))
        {
            return $this->json(array('succes' => false));
        }

        // Instruct the guest to login

        $onlineGuests = $this->get('online_guests');
        $id           = $onlineGuests->findIdByName($name);

        if(empty($id))
        {
            return $this->json(array('succes' => false));
        }

        $onlineGuests->initLogin($id);

        return $this->json(array('success' => true));
    }

    // Confirm login command was received

    public function confirmLoginAction()
    {
        // Get user ID

        $id = $this->get('session')->getId();

        if(empty($id))
        {
            return $this->json(array('success' => false));
        }

        $this->get('online_guests')->confirmLogin($id);

        return $this->json(array('success' => true));
    }
}

?>
