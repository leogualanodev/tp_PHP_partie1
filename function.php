<?php

function connexion(){
    DEFINE("DB_HOST" , "localhost");
    DEFINE("DB_USER" , "root");
    DEFINE("DB_PASSWORD" , "");
    DEFINE("DB_NAME" , "colyseum");

    try {
        $connect =  new PDO ("mysql:host=".DB_HOST.";dbname=".DB_NAME , DB_USER , DB_PASSWORD);
        $connect->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e){
        echo 'connection failed : '.$e->getMessage();
    }

    return $connect ;
}

function startM ($name){
    $pattern = "/^M/";
    if ( preg_match($pattern , $name)){
        return true ;
    }else {
        return false;
    }
}


?>