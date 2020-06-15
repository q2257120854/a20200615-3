<?php

function autoload($name)
{
    $paths = array(
    
        "lib/$name",
        "service/$name",
        "app/$name",
        "model/$name",
        "controller/$name"
    );
    
    foreach($paths as $path)
    {
        $filename = ROOT_DIR . "/$path.php";
        
        if(file_exists($filename))
        {
            // Include the file
            
            require_once $filename;
        }
    }
}

spl_autoload_register('autoload');

?>
