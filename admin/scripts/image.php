<?php
require_once 'functions.php';
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $permFolderLoc = '../../images/img';
        if(!empty($_FILES['photo']['name'])){
            if(!pushFile($_FILES['photo'],$permFolderLoc))
               header('location:../index_page.php?submitErr=1');
            else
                header('location:../index_page.php?submitErr=0');
        } else
            header('location:../index_page.php?emptyFile=1');

    }else
            header('location:../index_page.php?submitErr=1');

