<?php
define('BASEDIR',__DIR__);
//include(BASEDIR.'/CW/Loader.php');
//spl_autoload_register('\\CW\\Loader::autoload');
//CW\Object::test();
//App\Controller\Home\Index::test();
require(BASEDIR.'/Templates/Home/course.template.php');
//栈(先进后出)
/*$stack = new splstack();
$stack->push("data1\n");
$stack->push("data2\n");
echo $stack->pop();
echo $stack->pop();
//列（先进先出）
$queue = new splQueue();
$queue->enqueue("data3\n");
$queue->enqueue("data4\n");
echo $queue->dequeue();
echo $queue->dequeue();
//堆（先进先出）
$heap = new SplMinHeap();
$heap->insert("data5\n");
$heap->insert("data6\n");
echo $heap->extract();
echo $heap->extract();
//固定长度的数组
$array = new SplFixedArray(10);
$array[0] = 123;
$array[9] = 3333;
var_dump($array);*/

//PHP的链式操作
/*$db = new CW\Database();
$db->where("id=1")->where("name=2")->order("order desc")->limit(10);*/

/*PHP的魔术方法*/

//__set()/__get():将对象的属性进行接管(属性不存在会自动调用，并赋值)
//__call()/__callStatic() :类的方法进行控制,__callStatic()用在静态方法上
//__toString():将一个PHP对象转换成一个字符串
//__invoke():将一个对象当成一个函数时会回调该方法,把对象当成一个函数来执行
/*$obj = new CW\Object();
$obj->title = 'hello';
echo $obj->title;

echo $obj->fun("hello",123);

echo CW\Object::fun2("world",1234);

echo $obj;

echo $obj('text');*/

/*工厂模式*/
//$db = CW\Factory::createDatabase();
//var_dump($db);