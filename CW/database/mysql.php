<?php
namespace CW\database;
use CW\iDatabase;
class mysql implements iDatabase{
    protected $conn;
    public function connect($host,$user,$password,$dbname){
        $conn = mysql_connect($host,$user,$password);
        mysql_select_db($dbname,$conn);
        $this->conn = $conn;
    }
    public function query($sql){
        $result = mysql_query($sql,$this->conn);
        return $result;
    }
    public function close(){
        mysql_close($this->conn);
    }
}