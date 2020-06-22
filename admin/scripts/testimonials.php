<?php
session_start();
require_once 'functions.php';
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $_SESSION['upload']  = -1;
    if(!empty($_FILES['photo']['name']) && !empty($_POST['name']) && !empty($_POST['comment'])){
        $result = addTest($_FILES['photo'], '../../images/img', [$_POST['name'], $_POST['comment']]); 
       $_SESSION['upload']  = $result ? 1:-1; 
       $result ? header("location:../index_page.php?upldErr=0"):header("location:../index_page.php?upldErr=1");
    }
    else
        header("location:../index_page.php?emptyFields=1");
}else
    header("location:../index_page.php");