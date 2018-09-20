<?php

    try
    {
        $bdd = new PDO("mysql:host=localhost;dbname=user;charset=utf8","root","");
    }
    catch(Execption $e)
    {
        $e->getMessage();
    }

    function issetAndNotEmpty($variable)
    {
        $isIssetAndNotEmpty = False;
        if(isset($variable) && $variable != "")
            $isIssetAndNotEmpty = True;
        return $isIssetAndNotEmpty;
    }

    #CREATE USER
    if(issetAndNotEmpty($_POST("new_pseudo")) && issetAndNotEmpty($_POST("new_pass")) 
    && issetAndNotEmpty($_POST("new_email")))
    {
        $createUser = $bdd->prepare("INSERT INTO utilisateur(pseudo, pass, email) 
                                    VALUES (:pseudo, :pass, :email)");
        $createUser->execute(array(
                            "pseudo" => $_POST("new_pseudo"),
                            "pass" => $_POST("new_pass"),
                            "email" => $_POST("new_email")));
    }

    #CONNECTER USER
    if(issetAndNotEmpty($_POST("pseudo")) && issetAndNotEmpty($_POST("pass")))
    {

    }



?>