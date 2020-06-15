<?php

function logging_error_handler($errno, $errstr, $errfile, $errline)
{
	static $logCount = 0;

    $datetime = date("Y-m-d H:i:s");
    $entry    = '';

    // If it's the first log, include a header

    if($logCount === 0)
    {
        $entry .= "Application path: {$_SERVER['REQUEST_URI']}\n";
    }

    // Add entry's body

    $entry .= "$datetime $errstr on line $errline in $errfile\n";

    file_put_contents(ROOT_DIR . "/../data/log.dat", $entry, FILE_APPEND);

    // Increment the counter

    $logCount++;
}

set_error_handler('logging_error_handler');

?>
