<?php
namespace CW\database;
use CW\iDatabase;
class pdo implements iDatabase{
   /*
    * @var \PDO
    * */
    protected $conn;
    public function connect($host,$user,$password,$dbname){
        $conn = new \PDO("mysql:host=$host;dbname=$dbname",$user,$password);
        $this->conn = $conn;
    }

    public function query($sql){
        return $this->conn->query($sql);
    }

    public function close(){
        unset($this->conn);
    }
}