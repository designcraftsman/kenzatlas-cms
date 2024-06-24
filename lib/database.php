<?php 
    class DatabaseConnection{
        public ?PDO $database = null;
        public function getConnection():PDO{
            $this->database = new PDO('mysql:host=localhost;dbname=kenzltry_kenzatlas;charset=utf8', 'kenzltry_mariamFayz', 'kenzatlas2024');
            return $this->database;    
        }
    }