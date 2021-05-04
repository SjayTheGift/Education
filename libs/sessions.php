<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
// error_reporting(0);
session_start();
if (isset($_SESSION['store'])) {
    $session_name = $_SESSION['store'];
}else{
     header("location: login.php");
}
 
