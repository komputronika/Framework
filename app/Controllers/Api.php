<?php
namespace App\Controllers;

// Super class of controller
//use Framework\Classes\Controller;

// Used very often, make it default;
// use Framework\Classes\Parser;

use Framework\Classes\Database;
use Framework\Classes\Request;

// Our class extends Controller
class Api 
{

    function __construct()
    {
        // echo "-----------------------------<br>"; 
        // echo "Class Home<br>"; 
        //parent::__construct();
    }

    function _api($data = [], $msg = 'OK', $code = 200)
    {
        $response = ['code' => $code, 'msg' => $msg, 'data' => $data];
        echo json_encode( $response );
    }

    function index()
    {
        $req = new Request;
        $body = $req->getData();

        //print $body;

        $token = $req->getClientToken();
        // $var = $req->getVar("skema_id");

        $data["userbody"] = $body; 
        $data["token"] = $token; 
        // $data["var"] = $var; 
        
        $this->_api( $data );

        //print_r($_SERVER);
        //print_r($body);
        //print json_encode($data);
    }

}
