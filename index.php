<?php

    try
    {
        $bdd = new PDO("mysql:host=localhost;dbname=user;charset=utf8","root","");
    }
    catch(Execption $e)
    {
        $e->getMessage();
    }

    #Function 
    function issetAndNotEmpty($variable)
    {
        $isIssetAndNotEmpty = False;
        if(isset($variable) && $variable != "")
            $isIssetAndNotEmpty = True;
        return $isIssetAndNotEmpty;
    }





?>