<?php
namespace CW;
class Object{
    protected $array = array();
    public static function test(){
        var_dump(__METHOD__);
    }
    public function __set($name,$value){
        $this->array[$name] = $value;
    }
    public function __get($name){
        return $this->array[$name];
    }
    public function __call($func,$param){
        var_dump($func,$param);
        return "magic function \n";
    }
    static function __callStatic($func,$param){
        var_dump($func,$param);
        return "magic function \n";
    }
    public function __toString(){
        return __CLASS__;
    }
    public function __invoke($param){
        var_dump($param);
        return "invoke";
    }
}