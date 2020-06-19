<?php
session_start();
if($_SERVER['REQUEST_METHOD'] && isset($_SESSION['fname'])){
    require_once 'functions.php';
    if(isset($_POST['deletePhotos'])){
        $count = count($_POST['adminPhotos']);
        $sql = 'DELETE FROM gallery WHERE photoID IN(?';
        $dType = str_repeat('s', $count);
      $result = delStuff($dType, $sql, $_POST['adminPhotos']);
        if($result){
            foreach($_POST['adminPhotos'] as $photo){
                 unlink("../../images/img/$photo");
            }
            header('location: ../index_page.php?unkErr=0');
        } else
            header('location: ../index_page.php?unkErr=1');
        
    } else if(isset($_POST['deleteFaqs'])){
                $count = count($_POST['faqs']);
                $sql = 'DELETE FROM faqs WHERE fid IN(?';
                $dType = str_repeat('i', $count);
                delStuff($dType, $sql, $_POST['faqs'])?header('location: ../index_page.php?delErr=0'):header('location: ../index_page.php?delErr=1');
        
    } else if(isset($_POST['deleteMsgs'])){
                $count = count($_POST['msgs']);
                $sql = 'DELETE FROM messages WHERE mid IN(?';  
                $dType = str_repeat('i', $count);
                delStuff($dType, $sql, $_POST['msgs'])?header('location: ../index_page.php?delErr=0'):header('location: ../index_page.php?delErr=1');
    } 
        else 
            header('location: ../index_page.php?emptyFields=1');
    
}else
    header('location: ../index_page.php?unkErr=4');