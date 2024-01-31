<?php

namespace Framework\Classes;

use Framework\Classes\Response;


class Controller 
{
    public $response;

    function __construct()
    {
        $this->response = new Response;
        
        // echo "-----------------------------<br>"; 
        // echo "Class Core Controller<br>"; 
    }
}