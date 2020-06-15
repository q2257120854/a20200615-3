<?php

require_once ROOT_DIR . '/lib/smart_resize_image.php';

class ImageResizer extends Service
{
    public function resize($inputPath, $outputPath, $width, $height)
    {
        smart_resize_image($inputPath, $width, $height, false, $outputPath, false, false, 100);
    }
}

?>