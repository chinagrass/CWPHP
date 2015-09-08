<?php
define('BASEDIR',__DIR__);
include(BASEDIR.'/Models/Loader.php');
spl_autoload_register('\\Models\\Loader::autoload');
Models\Object::test();
App\Controller\Home\Index::test();

