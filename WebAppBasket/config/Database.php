<?php

   class Database {
      private $host = "localhost";
      private $db = "proyecto";
      private $username = "demo";   
      private $password = "123";

      puublic function __contruct() {
        
        
      }

      public function connect() {
        try {
            PDO = new PDO("mysql:host=".$this->host.";dbname=".$this->db.$this->user,
            $this->password); 
        } catch (PDOException $e) {
            return $e->getMessage
            //throw $th;
        }
      }

    }