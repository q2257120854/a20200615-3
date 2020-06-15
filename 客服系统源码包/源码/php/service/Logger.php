<?php

class Logger extends Service
{
    const ERROR   = 'error',
          WARNING = 'warning',
          INFO    = 'info';

    protected $config,
              $logFilePath,
              $logErrors,
              $logWarnings,
              $logInfos,
              $logCount = 0;

    // Methods

    public function onRegister()
    {
        parent::onRegister();

        // -----

        $this->config      = $this->get('config');
        $this->logFilePath = ROOT_DIR . '/../' . $this->config->data['services']['logger']['file'];
        $this->logErrors   = $this->config->data['services']['logger']['logErrors'];
        $this->logWarnings = $this->config->data['services']['logger']['logWarnings'];
        $this->logInfos    = $this->config->data['services']['logger']['logInfos'];
    }
    
    public function error($message)
    {
        if($this->logErrors)
        {
            // Include stack trace in the entry

            $stackTrace = debug_backtrace();

            $stackStr = "Stack trace:\n";

            foreach($stackTrace as $entry)
            {
                $stackStr .= "{$entry['file']}:{$entry['line']} ({$entry['class']}:{$entry['function']}())\n";
            }

            $this->log(self::ERROR, $message . "\n" . $stackStr);
        }
    }

    public function warning($message)
    {
        if($this->logWarnings)
        {
            $this->log(self::WARNING, $message);
        }
    }

    public function info($message)
    {
        if($this->logInfos)
        {
            $this->log(self::INFO, $message);
        }
    }

    public function log($type, $message)
    {
        $datetime = date("Y-m-d H:i:s");
        $entry    = '';

        // If it's the first log, include a header

        if($this->logCount === 0)
        {
            $entry .= "Application path: {$_SERVER['REQUEST_URI']}\n";
        }

        // Add entry's body

        $entry .= "$datetime [$type] $message\n";

        // Append message to the log file

        file_put_contents($this->logFilePath, $entry, FILE_APPEND);

        // Increment the counter

        $this->logCount++;
    }

    public function getLogs()
    {
        if(file_exists($this->logFilePath))
        {
            return file_get_contents($this->logFilePath);
        }

        return '';
    }

    public function clear()
    {
        file_put_contents($this->logFilePath, '');

        // Clear the counter

        $this->logCount = 0;
    }
}

?>
