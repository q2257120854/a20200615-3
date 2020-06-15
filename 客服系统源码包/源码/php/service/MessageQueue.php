<?php

class MessageQueue extends Service
{
    const ID_LENGTH       = 16;
    const DEFAULT_TIMEOUT = 30; // seconds

    private $config;
    private $memory;
    private $time;

    public function onRegister()
    {
        parent::onRegister();

        // -----

        $this->time   = time();
        $this->memory = $this->get('memory.msg_q');
    }

    public function find($id)
    {
        $raw = $this->memory->get($id);

        if($raw)
        {
            return $this->parseMessage($raw);
        }

        return null;
    }

    public function findAll()
    {
        $data     = $this->memory->getData();
        $messages = array();

        foreach($data as $id => $raw)
        {
            $messages[$id] = $this->parseMessage($raw);
        }

        return $messages;
    }

    public function findBy($attrs, $includeOld = false)
    {
        $data     = $this->memory->getData();
        $messages = array();

        foreach($data as $id => $raw)
        {
            $message = $this->parseMessage($raw);

            if($includeOld || !$this->isOld($message))
            {
                $match = true;

                foreach($attrs as $key => $value)
                {
                    if(!isset($message[$key]) || $message[$key] != $value)
                    {
                        $match = false;
                        break;
                    }
                }

                if($match)
                {
                    $messages[$id] = $message;
                }
            }
        }

        return $messages;
    }

    public function findOneBy($attrs, $includeOld = false)
    {
        $data = $this->memory->getData();

        foreach($data as $id => $raw)
        {
            $message = $this->parseMessage($raw);

            if($includeOld || !$this->isOld($message))
            {
                $match = true;

                foreach($attrs as $key => $value)
                {
                    if(!isset($message[$key]) || $message[$key] != $value)
                    {
                        $match = false;
                        break;
                    }
                }

                if($match)
                {
                    return $message;
                }
            }
        }

        return null;
    }

    public function add($message)
    {
        $id = $this->get('security')->randomString(self::ID_LENGTH);

        if(!isset($message['timeout']))
        {
            $message['timeout'] = $this->time + self::DEFAULT_TIMEOUT;
        }
        else
        {
            $message['timeout'] = $this->time + $message['timeout'];
        }

        $this->memory->set($id, $this->encodeMessage($message));

        return $id;
    }

    public function remove($id)
    {
        $this->memory->remove($id);
    }

    public function removeBy($attrs)
    {
        $data     = $this->memory->getData();
        $messages = array();

        foreach($data as $id => $raw)
        {
            $message = $this->parseMessage($raw);
            $match   = true;

            foreach($attrs as $key => $value)
            {
                if(!isset($message[$key]) || $message[$key] != $value)
                {
                    $match = false;
                    break;
                }
            }

            if($match)
            {
                $this->remove($id);
            }
        }

        return $messages;
    }

    public function removeOld()
    {
        $messages = $this->findAll();

        foreach($messages as $id => $message)
        {
            if($this->isOld($message))
            {
                $this->memory->remove($id);
            }
        }
    }

    /*
        Raw format: timeout|key1=value1|key2=value2
        Output: array(

            'timeout' => timeout,
            'key1' => 'value1',
            'key2' => 'value2'
        )
     */
    protected function parseMessage($dataStr)
    {
        $message = array();
        $data    = explode('|', trim($dataStr, '|'));

        $message['timeout'] = intval(array_shift($data));

        foreach($data as &$entry)
        {
            $parts = explode('=', $entry);
            $k     = $parts[0];
            $v     = $parts[1];

            $message[$k] = $v;
        }

        return $message;
    }

    protected function encodeMessage($message)
    {
        $result = "{$message['timeout']}|";
        $vars   = array();

        foreach($message as $key => &$v)
        {
            if($key === 'timeout')
            {
                continue;
            }

            $vars[] = "$key=$v";
        }

        $result .= implode('|', $vars);

        return trim($result, '|');
    }

    protected function isOld($message)
    {
        return $this->time > $message['timeout'];
    }
}

?>
