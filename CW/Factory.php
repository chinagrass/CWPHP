<?php
namespace CW;
/*�������ģʽ�������������������ɶ��󣬶������ڴ�����ֱ��new���������Է�ֹ�����޸ĺ�����Ҫ���ĺܶ�Ĵ���*/
class Factory{
    static function createDatabase(){
        return Database::getInstance();
    }
}