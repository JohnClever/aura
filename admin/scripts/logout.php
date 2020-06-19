<?php
session_start();
if(isset($_SESSION['fname'])){
    $_SESSION = array();
    header('location: ../index.html'); 
    
}else
    header('location:../index.html');
