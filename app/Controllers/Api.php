<?php
namespace App\Controllers;

use Framework\Classes\Controller;
use Framework\Classes\Database;
use Framework\Classes\Request;
use Framework\Classes\Response;

// Our class extends Controller
class Api extends Controller
{

    function __construct()
    {
        // echo "-----------------------------<br>"; 
        // echo "Class Home<br>"; 
        parent::__construct();
    }

    function _api($data = [], $msg = 'OK', $code = 200)
    {
        $response = ['code' => $code, 'msg' => $msg, 'data' => $data];
        return json_encode( $response );
    }

    function index()
    {
        $req = new Request;
        $res = new Response;
        $body = $req->getData();

        $token = $req->getClientToken();
        // $var = $req->getVar("skema_id");

        $data["userbody"] = $body; 
        $data["token"] = $token; 
        // $data["var"] = $var; 
        
        $view = $this->_api( $data );

        //print_r($_SERVER);
        //print_r($body);
        //print json_encode($data);
        //return 

        //return $this->response->output( $view );
        $res->setHeader('Content-Type: application/json');
        return $res->output( $view );
    }

}
