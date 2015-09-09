<?php
namespace CW;
/*工厂设计模式，工厂方法或者类生成对象，而不是在代码中直接new*/
class Factory{
    static function createDatabase(){
        return new Database();
    }
}