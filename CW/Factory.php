<?php
namespace CW;
/*工厂设计模式，工厂方法或者类生成对象，而不是在代码中直接new，这样可以防止类在修改后，你需要更改很多的代码*/
class Factory{
    static function createDatabase(){
        return Database::getInstance();
    }
}