<?php

class Response
{
    // Fields

    private $content;
    private $headers;
    private $code;

    // Constructor

    public function __construct($content, $headers = null, $code = null)
    {
        $this->content = $content;
        $this->headers = $headers;
        $this->code    = $code;
    }

    // Methods

    public function send()
    {
        // Set the response code

        if($this->code)
        {
            if($this->headers)
            {
                $this->headers[0][2] = $this->code;
            }
            else
            {
                $this->headers = array(array('Content-type', 'text/html', $this->code));
            }
        }

        // Set headers

        if($this->headers)
        {
            foreach($this->headers as $header)
            {
                $header[2] = isset($header[2]) ? $header[2] : null;

                header("{$header[0]}: {$header[1]}", true, $header[2]);
            }
        }

        // Write the content

        echo $this->content;
    }

    public function getContent()
    {
        return $this->content;
    }

    public function getHeaders()
    {
        return $this->headers;
    }

    public function getCode()
    {
        return $this->code;
    }
}

?>
