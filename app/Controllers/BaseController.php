<?php
namespace App\Controllers;
use Framework\Classes\Controller;
//use Framework\Classes\Parser;

class BaseController extends Controller
{

    //protected $view;

    function __construct()
    {
        // echo "-----------------------------<br>"; 
        // echo "Class BaseController<br>"; 
        parent::__construct();

        //$this->view = new Parser;
    }
}
