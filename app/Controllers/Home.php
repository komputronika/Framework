<?php

// Namespace for this controller
namespace App\Controllers;

// Super class of controller
//use Framework\Classes\Controller;
use Framework\Classes\Parser;

// Our class extends Controller
class Home extends BaseController
{

    function __construct()
    {
        //parent::__construct();
    }

    function parse()
    {
        $parser = new Parser;

        $data = array('user' => array(
            array('username' => 'life', 'email' => 'life@earth.zz', 'address' => 'Earth 001, Milky way'),
            array('username' => 'anonym', 'email' => 'seeyou@friday.zz', 'address' => 'Paris, France')
        ));

        $parser->parse( APP_PATH ."Views/template", $data, ["path"=>'']);
    }

    function index()
    {

        //echo "> Output from Home::index()\n\t ( FOLDER: ".dirname(__FILE__)." | NAMESPACE: ". __NAMESPACE__." | CLASS: ".__CLASS__." | METHOD: ".__METHOD__." )\n";
        //echo "Apakah masuk?";

?>
        <!doctype html>
        <html lang="en">

        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title></title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        </head>

        <body class="p-5">
            <div class="container">
                <div class="card shadow mx-auto my-auto">
                    <div class="card-body">
                        <h5 class="mb-0">Sertifikasi</h5>
                    </div>
                </div>
            </div>

            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
        </body>

        </html>

<?php


    }
}
