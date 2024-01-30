<?php

namespace Framework\Classes;

class Request 
{
    function __construct()
    {

    }

    function getBody ()
    {
        $body = file_get_contents("php://input");
        return $body;
    }

    function getVar( $var  )
    {
        // Filter variable di sini
        $var = $_REQUEST["$var"];
        return $var;
    }

    function getData ()
    {
        $body = $this->getBody();
        $data = json_decode($body);
        return $data;
    }

    function getClientToken(){
        $bearerToken = null;
        if (isset($_SERVER['AUTHORIZATION'])) {
            $bearerToken = $_SERVER['AUTHORIZATION'];
        }elseif (isset($_SERVER['HTTP_AUTHORIZATION'])) { //Nginx or fast CGI
            $bearerToken = $_SERVER["HTTP_AUTHORIZATION"];
        }elseif (isset($_SERVER['REDIRECT_HTTP_AUTHORIZATION'])) {
           $bearerToken = $_SERVER["REDIRECT_HTTP_AUTHORIZATION"];
        }

        $token = trim(str_replace('Bearer ', '', $bearerToken));
        return $token;  
    }

}