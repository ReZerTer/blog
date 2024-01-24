<?php
    session_start();  
    unset($_SESSION['user']);
    if(isset($_SESSION['redirect_url'])) 
    {  
        header('Location: ' . $_SESSION['redirect_url']);
        unset($_SESSION['redirect_url']); 
        exit();
    } 
    else 
    {
        header('Location: ../index.php');
        exit();
    }
?>