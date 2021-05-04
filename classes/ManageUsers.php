<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MangerUsers
 *
 * @author dell notebook
 */
include_once ('DBConn.php');
class ManageUsers {
    public $link;
    
    function __construct() {
        $db_connection = new dbConnection();
        $this->link = $db_connection->connect();
        return $this->link;
    }

    function check_table_exist_create_else_drop(){
        $dbnumbers = $this->link->prepare('SELECT * FROM `tbl_user` ');
        $dbnumbers->execute();
        $count = $dbnumbers->rowCount();
        if ($count == 0) {
            $this->create_table();
        } else {
            $this->drop_table();
            $this->create_table();
        }
    }

    function drop_table(){
        $this->link->exec("DROP TABLE IF EXISTS `tbl_user`");
    }

    function create_table(){
        $sql = "CREATE TABLE IF NOT EXISTS `tbl_user` (
            `ID` int(11) AUTO_INCREMENT PRIMARY KEY,
            `FName` varchar(225) NOT NULL,
            `LName` varchar(225) NOT NULL,
            `Email` varchar(225) NOT NULL,
            `Password` varchar(225) NOT NULL
          ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;";

        $this->link->exec($sql);
        echo "Table tbl_user created successfully"; 
    }

    
    function registerUsers($name,$surname,$email,$password){
        $query = $this->link->prepare("INSERT INTO tbl_user (FName, LName, Email, Password) VALUES(?,?,?,?)");
        $values = array($name,$surname,$email,$password);
        $query->execute($values);
        $counts = $query->rowCount();
        return $counts;
    }
    function loginUsers($name,$surname,$email,$password){
        $query = $this->link->query("SELECT * FROM tbl_user WHERE fname = '$name' AND lname = '$surname' AND email = '$email' AND password = '$password' ");
        $rowcount = $query->rowCount();
        return $rowcount;
    }
    function GetUserInfo($email){
        $query = $this->link->query("SELECT * FROM tbl_user WHERE email = '$email'");
        $rowcount = $query->rowCount();
        if($rowcount == 1){
            $result = $query->fetchAll();
            return $result;
        }else{
            return $rowcount;
        }
    }
}
