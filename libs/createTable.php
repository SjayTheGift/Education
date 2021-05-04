<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once ('classes/ManageUsers.php');
// $users = new ManageUsers();

function write_to_table($open){
    $users = new ManageUsers();
    $users->check_table_exist_create_else_drop();
    while (!feof($open)) 
    {
        $getTextLine = fgets($open);
        $explodeLine = explode(",",$getTextLine);
        
        list($name,$surname,$email,$password) = $explodeLine;
        
        $password = md5($password);
        $users->registerUsers($name, $surname , $email, $password);
    
    
    }
        
    fclose($open);
}

