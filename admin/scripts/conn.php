<?php
function dbConn(){
    $hostname = $_SERVER['SERVER_NAME'];
    $username = 'root';
    $connPwd = '';
    $dbname = 'aura';

    return new mysqli($hostname, $username, $connPwd, $dbname);
    
}







