<?php

class SharedFileModel extends Model
{
    // Constants

    const FILENAME_LENGTH = 31;
    const PASSWORD_LENGTH = 31;

    // Constructor

    public function initialize()
    {
        parent::initialize();

        $this->size = 0;
    }

    // Getters & setters

    public function getTableName()
    {
        return 'mirrormx_customer_chat_shared_file';
    }

    public function getColumns()
    {
        return array('original_name', 'name', 'type', 'size', 'upload_id', 'password');
    }

    // Methods

    public static function repo()
    {
        return new SharedFileModel;
    }

    public function remove()
    {
        $result = parent::remove();
        $result = $result && unlink(realpath($this->getPath()));

        return $result;
    }

    public function moveUploaded($tmpPath)
    {
        // Store file information

        $this->name     = self::$services->get('security')->randomString(self::FILENAME_LENGTH);
        $this->password = self::$services->get('security')->randomString(self::PASSWORD_LENGTH);
        $this->size     = filesize($tmpPath);

        $success = $this->save();

        // Encode & save

        $this->saveEncoded($tmpPath);

        return $success && $this->save();
    }

    public function getPublicInfo()
    {
        $result = $this->getData();

        $result['name'] = $result['original_name'];
        $result['size'] = intval($result['size']);

        // Remove unnecessary or secret fields

        unset($result['password']);
        unset($result['original_name']);
        unset($result['upload_id']);

        return $result;
    }

    protected function saveEncoded($tmpPath)
    {
        if(!file_exists(realpath($tmpPath)))
        {
            throw new Exception('File does not exist');
        }

        $in  = fopen($tmpPath, 'r');
        $out = fopen($this->getPath(), 'w');

        Utils::xorStream($in, $out, $this->password);

        fclose($out);
        fclose($in);
    }

    public function sendDecoded()
    {
        if(!file_exists(realpath($this->getPath())))
        {
            throw new Exception('File does not exist');
        }

        $in  = fopen(realpath($this->getPath()), 'r');
        $out = fopen('php://output', 'a');

        Utils::xorStream($in, $out, $this->password);

        fclose($out);
        fclose($in);
    }

    public function clear()
    {
        // Delete files

        $config    = self::$services->get('config');
        $filesGlob = ROOT_DIR . '/../' . $config->data['sharedFiles']['dir'] . '/*.dat';

        foreach(glob($filesGlob, GLOB_NOSORT) as $path)
        {
            unlink(realpath($path));
        }

        // Remove all model entries

        $result = self::$db->execute('DELETE FROM ' . self::repo()->getTableName()) &&
                  self::$db->execute('ALTER TABLE ' . self::repo()->getTableName() . ' AUTO_INCREMENT = 1');

        return $result;
    }

    protected function getPath()
    {
        $config = self::$services->get('config');

        return ROOT_DIR . '/../' . $config->data['sharedFiles']['dir'] . '/' . $this->name . '.dat';
    }
}

?>
