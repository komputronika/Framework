<?php

namespace Framework\Classes;

class Response 
{
    function __construct()
    {

    }

    function setHeader ()
    {
    }

    function setBody( $var  )
    {
    }

    function output( $var  )
    {
        // Check if redirect
        // Check if use custom header
        // Check if use cache
        // Print body;
        echo $var;
        return true;
    }

}
