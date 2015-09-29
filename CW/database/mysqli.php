<?php
namespace CW\database;
use CW\iDatabase;
class mysqli implements iDatabase{
    protected $conn;
    public function connect($host,$user,$password,$dbname){
        $conn = mysqli_connect($host,$user,$password,$dbname);
        $this->conn = $conn;
    }
    public function query($sql){
        mysqli_query($this->conn,$sql);
    }
    public function close(){
        $this->close($this->conn);
    }
}