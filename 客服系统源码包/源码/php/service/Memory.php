<?php

class Memory extends Service
{
    // Fields

    private $data;
    private $modified = false;
    private $lockHandle;

    // Methods

    public function __construct($id = '')
    {
        $this->id = $id;
    }

    public function onRegister()
    {
        parent::onRegister();

        // -----

        $this->config = $this->services->get('config');
        $this->stats  = $this->services->get('stats');

        if($this->lock())
        {
            $this->data = $this->getFileData();
        }

        $this->unlock();
    }

    public function onRemove()
    {
        parent::onRemove();

        // -----

        $this->save();
    }

    public function getFilePath()
    {
        return ROOT_DIR . '/../' . str_replace('%id%', $this->id, $this->config->data['services']['memory']['file']);
    }

    public function set($key, $value)
    {
        $this->data[$key] = $value;

        $this->modified = true;
    }

    public function get($key)
    {
        return isset($this->data[$key]) ? $this->data[$key] : null;
    }

    public function remove($key)
    {
        unset($this->data[$key]);

        $this->modified = true;
    }

    public function clear()
    {
        $this->setData(array());
    }

    public function getData()
    {
        return $this->data;
    }

    public function setData($data)
    {
        $this->data = $data;

        $this->modified = true;
    }

    public function getKeys()
    {
        return array_keys($this->data);
    }

    public function save()
    {
        if($this->modified)
        {
            // Lock the file

            if($this->lock())
            {
                // Merge current data with memory file content

                $this->data = $this->mergeData($this->getFileData(), $this->data);
            }
            else
            {
                // Log error

                $this->services->get('logger')->error('Couldn\'t lock memory file (id: ' . $this->id . ')');
            }

            // Unlock

            $this->unlock();

            // Update the file
            
            file_put_contents($this->getFilePath(), $this->createIniString($this->data));

            $this->stats->inc('file_writes');

            // Reset the state

            $this->modified = false;
        }
    }

    protected function createIniString($entries)
    {
        $arr = array();

        foreach($entries as $key => $value)
        {
            if(is_array($value))
            {
                $arr[] = "[$key]";

                foreach($value as $skey => $sval) $arr[] = "$skey=" . (is_numeric($sval) ? $sval : '"' . $sval . '"');
            }
            else $arr[] = "$key=" . (is_numeric($value) ? $value : '"' . $value . '"');
        }

        return implode("\r\n", $arr);
    }

    protected function getFileData()
    {
        $path = $this->getFilePath();

        $this->stats->inc('file_reads');

        if(!file_exists($path))
        {
            return array();
        }

        return parse_ini_file($path, true);
    }

    protected function mergeData($curr, $new)
    {
        $result = Utils::arrayMergeRecursive($curr, $new);

        foreach(array_keys($curr) as $key)
        {
            if(!isset($new[$key])) unset($result[$key]);
        }

        return $result;
    }

    protected function lock($exclusive = false)
    {
        // Avoid nested locks

        if($this->lockHandle)
        {
            $this->unlock();
        }

        $path = $this->getFilePath();

        if(file_exists($path))
        {
            $this->lockHandle = fopen($path, 'r');

            return flock($this->lockHandle, $exclusive ? LOCK_EX : LOCK_SH);
        }

        return true;
    }

    protected function unlock()
    {
        if($this->lockHandle)
        {
            flock($this->lockHandle, LOCK_UN);
            fclose($this->lockHandle);

            $this->lockHandle = null;
        }
    }
}

?>
