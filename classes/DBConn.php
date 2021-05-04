<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of database
 *
 * @author dell notebook
 */
class dbConnection {
    protected $db_conn;
    public $db_name ='task1';
    public $db_user = 'root';
    public $db_pass = '';
    public $db_host = 'localhost';
    
    function connect(){
        try{
            $this->db_conn = new PDO("mysql:host=$this->db_host;dbname=$this->db_name",$this->db_user,$this->db_pass);
        
            return $this->db_conn;
        }
      catch (PDOException $e){
            return $e->getMessage();
      }
    }
}
