<?php
namespace CW;
/*����ģʽ���ڲ����ö��󣬵�ĳ��������Ҫ��ε��õ�ʱ��ʹ�õ���ģʽֻ��Ҫ����һ�ξ�����*/
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