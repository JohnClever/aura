<?php
require_once 'conn.php';
require_once 'functions.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $insMsg = 'INSERT INTO messages(fname, lname, email, subject, content, msgDate, status) VALUES(?,?,?,?,?,?,?)';
    $status = 1;
    
    if(!empty($_POST['fname']) &&
       !empty($_POST['lname']) && 
       !empty($_POST['email']) && 
       !empty($_POST['subject']) && 
       !empty($_POST['content'])){
        
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $content = $_POST['content'];
        
        date_default_timezone_set('Africa/Accra');
        $msgDate = date('Y-m-d H:i:s', time());
        $stmt = queryGeneral('ssssssi', $insMsg, [$fname, $lname, $email, $subject, $content, $msgDate, $status]);
        $stmt ? header('location:../../index.php?contactErr=0'):header('location:../../index.php?contactErr=1');
    }else
         header('location:../../index.php?emptyFields=1');
    
  
    
}else
    header('location:../..index.php');
 
