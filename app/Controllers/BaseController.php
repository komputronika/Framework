<?php
namespace App\Controllers;
use Framework\Classes\Controller;

class BaseController extends Controller
{
    function __construct()
    {
        print "Periksa Login Terlebih Dahulu<br>";
    }
}
