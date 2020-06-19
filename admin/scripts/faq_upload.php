<?php 
    session_start();
    if(!isset($_SESSION['fname']))
        header('location: ../../index.html?signFrst=1');
        require_once 'functions.php';
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(isset($_POST['askerName']) && isset($_POST['question']) && isset($_POST['answer'])){
            $askerName = $_POST['askerName'];
            $question = $_POST['question'];
            $answer = $_POST['answer'];
            $ansby = $_SESSION['uid'];
         
            if(addFaq($askerName, $question, $answer, $ansby))
                header('location: ../index_page.php?upldErr=0');
            else
                header('location: ../index_page.php?upldErr=1');

        } else
                header('location: ../index_page.php?emptyFields=1');

           
} else
                header('location: ../index_page.php?signFrst=1');
