<?php
//PUT THIS HEADER ON TOP OF EACH UNIQUE PAGE
if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
if (!isset($_SESSION['username'])) {
    header("location:login/main_login.php");
 }

