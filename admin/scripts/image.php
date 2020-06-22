<?php
session_start();
require_once 'functions.php';
    $_SESSION['upload']  = -1;
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $permFolderLoc = '../../images/img';
        if(!empty($_FILES['photo']['name'])){
            $result = pushFile($_FILES['photo'],$permFolderLoc);
                if(!$result){
                    $_SESSION['upload']  = -1;
                    header('location:../index_page.php?submitErr=1');
                }
                                
               
            else {
                 $_SESSION['upload']  = $result ? 1:-1;
                header('location:../index_page.php?submitErr=0');
            }
                
        } else
            header('location:../index_page.php?emptyFile=1');

    }else
            header('location:../index_page.php?submitErr=1');
    
    