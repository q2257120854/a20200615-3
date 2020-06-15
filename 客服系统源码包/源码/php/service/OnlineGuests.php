<?php

class OnlineGuests extends Service
{
    const ARCHIVE_INTERVAL = 900; //  15 minutes (in seconds) // frequency of the old entries removal procedure

    private $time;

    public function onRegister()
    {
        parent::onRegister();

        // -----

        $this->time = time();
    }

    public function findAll()
    {
        $this->removeOldEntries();

        $result  = array();
        $entries = $this->get('memory.online')->getData();

        foreach($entries as $id => $raw)
        {
            $entry = $this->parseEntry($raw);

            if(!$this->isOld($entry))
            {
                $result[] = $entry;
            }
        }

        return $result;
    }

    public function keepAlive($id, $url = null)
    {
        $memory = $this->get('memory.online');
        $entry  = $memory->get($id);

        if(empty($entry))
        {
            $entry = array(

                'lastActivity' => $this->time,
                'name'         => 'visitor.' . rand(10000, 99999)
            );
        }
        else
        {
            $entry = $this->parseEntry($entry);
            $entry['lastActivity'] = $this->time;
        }

        if(!empty($url))
        {
            $entry['url'] = $url;
        }

        $memory->set($id, $this->encodeEntry($entry));
    }

    public function shouldLogin($id)
    {
        $messages = $this->get('msg_queue')->findBy(array(

            'uid' => $id,
            'cmd' => 'login'
        ));

        return !empty($messages);
    }

    public function initLogin($id)
    {
        $this->get('msg_queue')->add(array(

            'uid' =>  $id,
            'cmd' => 'login'
        ));
    }

    public function confirmLogin($id)
    {
        $this->get('msg_queue')->removeBy(array(

            'uid' =>  $id,
            'cmd' => 'login'
        ));

        $this->get('memory.online')->remove($id);
    }

    public function find($id)
    {
        $entry = $this->get('memory.online')->get($id);

        if(empty($entry))
        {
            return null;
        }

        return $this->parseEntry($entry);
    }

    public function findBy($attrs)
    {
        $result  = array();
        $entries = $this->findAll();

        foreach($entries as $id => $entry)
        {
            $match = true;

            foreach($attrs as $key => $value)
            {
                if(!isset($entry[$key]) || $entry[$key] != $value)
                {
                    $match = false;
                    break;
                }
            }

            if($match)
            {
                $result[$id] = $entry;
            }
        }

        return $result;
    }

    public function findOneBy($attrs)
    {
        $entries = $this->findAll();

        foreach($entries as $id => $entry)
        {
            $match = true;

            foreach($attrs as $key => $value)
            {
                if(!isset($entry[$key]) || $entry[$key] != $value)
                {
                    $match = false;
                    break;
                }
            }

            if($match)
            {
                return $entry;
            }
        }

        return null;
    }

    public function findIdByName($name)
    {
        $entries = $this->get('memory.online')->getData();

        foreach($entries as $id => $raw)
        {
            $entry = $this->parseEntry($raw);

            if($entry['name'] == $name)
            {
                return $id;
            }
        }

        return null;
    }

    protected function removeOldEntries()
    {
        // Limit this activity's frequency

        $memory   = $this->get('memory.stats');
        $lastTime = intval($memory->get('online_guests.lastArchive'));

        if($lastTime + self::ARCHIVE_INTERVAL < $this->time)
        {
            $memory->set('online_guests.lastArchive', $this->time);

            // -----

            $memoryOnline = $this->get('memory.online');
            $entries      = $memoryOnline->getData();

            foreach($entries as $id => $raw)
            {
                $entry = $this->parseEntry($raw);

                if($this->isOld($entry))
                {
                    $memoryOnline->remove($id);
                }
            }

            // -----

            $this->get('msg_queue')->removeOld();
        }
    }

    protected function parseEntry($dataStr)
    {
        $result = array();
        $data   = explode('|', trim($dataStr, '|'));

        $result['lastActivity'] = intval(array_shift($data));

        foreach($data as &$entry)
        {
            $parts = explode('=', $entry);
            $k     = $parts[0];
            $v     = $parts[1];

            if($k === 'url')
            {
                $v = base64_decode($v);
            }

            $result[$k] = $v;
        }

        return $result;
    }

    protected function encodeEntry($entry)
    {
        $result = "{$entry['lastActivity']}|";
        $vars   = array();

        foreach($entry as $key => &$v)
        {
            if($key === 'lastActivity')
            {
                continue;
            }

            if($key === 'url')
            {
                $v = base64_encode($v);
            }

            $vars[] = "$key=$v";
        }

        $result .= implode('|', $vars);

        return trim($result, '|');
    }

    protected function isOld($entry)
    {
        return $this->time - UserModel::ONLINE_TIME > $entry['lastActivity'];
    }
}

?>
