<?php
namespace CW;
/*单例模式，内部调用对象，当某个对象需要多次调用的时候，使用单例模式只需要调用一次就行了*/
class Database{
    protected static $db;
    private function __construct(){

    }
    static function getInstance(){
        if(self::$db){
            return self::$db;
        }else{
            self::$db = new self();
            return self::$db;
        }
    }
    public function where($where){
        return $this;
    }
    public function order($order){
        return $this;
    }
    public function limit($limit){
        return $this;
    }
}