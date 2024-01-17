<?php

namespace Framework;

class Testclass
{

    function method1()
    {
        echo "> Output from Testclass::method1()\n\t ( FOLDER: ".dirname(__FILE__)." | NAMESPACE :". __NAMESPACE__." | CLASS: ".__CLASS__." | METHOD: ".__METHOD__." )\n";
    }
}

