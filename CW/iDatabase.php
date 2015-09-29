<?php
namespace CW;
interface iDatabase{
    public function connect($host,$user,$password,$dbname);
    public function query($sql);
    public function close();
}