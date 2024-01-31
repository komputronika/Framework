<?php

namespace Framework\Classes;

use Framework\Classes\Response;
use Framework\Classes\Parser;


class Controller 
{
    protected $response;
    protected $view;

    function __construct()
    {
        $this->response = new Response;
        $this->view = new Parser;

        // echo "-----------------------------<br>"; 
        // echo "Class Core Controller<br>"; 
    }
}