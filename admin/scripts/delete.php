<?php
session_start();
$result = false;
if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_SESSION['fname'])){
    require_once 'functions.php';
    if(isset($_POST['deletePhotos']) || isset($_POST['adminPhotos'])){
        $count = count($_POST['adminPhotos']);
        $sql = 'DELETE FROM gallery WHERE photoID IN(?';
        $dType = str_repeat('s', $count);
      $result = delStuff($dType, $sql, $_POST['adminPhotos']);
        $_SESSION['status']  = $result ? 1:-1;
        if($result){
            foreach($_POST['adminPhotos'] as $photo){
                 unlink("../../images/img/$photo");
            }
            header('location: ../index_page.php?unkErr=0');
        } else
            header('location: ../index_page.php?unkErr=1');
        
    } else if(isset($_POST['deleteFaqs']) || isset($_POST['faqs'])){
                $count = count($_POST['faqs']);
                $sql = 'DELETE FROM faqs WHERE fid IN(?';
                $dType = str_repeat('i', $count);
                $result = delStuff($dType, $sql, $_POST['faqs']);
                $_SESSION['status']  = $result ? 1:-1;
                $result?header('location: ../index_page.php?err=0'):header('location: ../index_page.php?err=1');
               
    } else if(isset($_POST['deleteMsgs']) || isset($_POST['msgs'])){
                $count = count($_POST['msgs']);
                $sql = 'DELETE FROM messages WHERE mid IN(?';  
                $dType = str_repeat('i', $count);
                $result = delStuff($dType, $sql, $_POST['msgs']);
                $_SESSION['status']  = $result ? 1:-1;
                $result?header('location: ../index_page.php?err=0'):header('location: ../index_page.php?err=1');
        
    } else if(isset($_POST['deleteTests']) || isset($_POST['tests'])){
                $count = count($_POST['tests']);
                $sql = 'DELETE FROM testimonials WHERE tid IN(?';  
                $dType = str_repeat('s', $count);
                $result = delStuff($dType, $sql, $_POST['tests']);
                $_SESSION['status']  = $result ? 1:-1;
                $result?header('location:../index_page.php?err=0'):header('location:../index_page.php?err=1');
    } 
        else {
            $_SESSION['status']  = $result ? 1:-1;
            header('location: ../index_page.php?err=1');
        }
            
    
}else {
    $_SESSION['status']  = $result ? 1:-1;
    header('location: ../index_page.php?err=1');
}
    $_SESSION['status']  = $result ? 1:-1;
    header('location: ../index_page.php?err=1');