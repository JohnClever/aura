<?php
session_start();
require_once 'conn.php';
require_once 'functions.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    
    $fetchUser = 'SELECT * FROM users WHERE username = ? OR email = ?';

    if(!empty($_POST['usn']) && !empty($_POST['pwd'])){
        $username = trim($_POST['usn']);
        $pwd = $_POST['pwd'];
        if($stmt = querySelect('ss', $fetchUser, [$username, $username])){
            if($stmt->num_rows == 1)
                $stmt->bind_result($uid, $dbUsn, $email, $dbPwd, $fname, $lname);
            else
                header('location:../index.php?usnPwdErr=1');
        While($stmt->fetch()){
        if(password_verify($pwd, $dbPwd)){
            
            $_SESSION['dbUsn'] = $dbUsn;
            $_SESSION['email'] = $email;
            $_SESSION['dbPwd'] = $dbPwd;
            $_SESSION['fname'] = $fname;
            $_SESSION['lname'] = $lname;
            $_SESSION['uid']   = $uid;
            
            header('location: ../index_page.php');
            
        }else
            header('location:../index.php?usnPwdErr=1');
    }
            
    } else
            header('location:../index.php?signErr=1');
    
}else
            header('location:../index.php?emptyFields=1');
    
}else
            header('location:../index.php?signFrst=1');
 