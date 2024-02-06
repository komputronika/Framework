<?php

namespace Framework\Classes;

class Response 
{

    protected $headers = [];
    
    function __construct()
    {

    }

    function setHeader ( $header )
    {
        $this->headers[] = $header;
    }

    function setBody( $var  )
    {
    }

    function redirect( $to )
    {
        header('Location: '.trim($to));
        die();
    }

    function output( $var  )
    {
        // Check if redirect
        // Check if use custom header
        foreach( $this->headers as $head )
        {
            header($head);
        }
        // Check if use cache
        // Print body;
        return $var;
    }

}
