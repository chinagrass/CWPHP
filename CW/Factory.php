<?php
namespace CW;
/*�������ģʽ�������������������ɶ��󣬶������ڴ�����ֱ��new*/
class Factory{
    static function createDatabase(){
        return new Database();
    }
}