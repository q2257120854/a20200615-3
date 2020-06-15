<?php

class Statistics extends Service
{
    // Fields
    
    private $data = array();
    
    // Methods

    public function onRemove()
    {
        parent::onRemove();

        $this->services->get('logger')->info($this->getDataString());
    }
    
    public function set($key, $value)
    {
        $this->data[$key] = $value;
    }

    public function get($key)
    {
        return isset($this->data[$key]) ? $this->data[$key] : null;
    }

    public function has($key)
    {
        return isset($this->data[$key]);
    }

    public function add($key, $n)
    {
        if($this->has($key))
        {
            $value = $this->data[$key];

            if(is_numeric($value))
            {
                $value += $n;
            }
            else
            {
                $value = $n;
            }
        }
        else
        {
            $value = $n;
        }

        $this->data[$key] = $value;
    }

    public function inc($key)
    {
        $this->add($key, 1);
    }

    public function dec($key)
    {
        $this->add($key, -1);
    }

    public function getData()
    {
        return $data;
    }

    public function getDataString()
    {
        $result = '';

        foreach($this->data as $key => $value)
        {
            $result .= "$key: $value, ";
        }

        $result = trim($result, ', ');

        return $result;
    }
}

?>
