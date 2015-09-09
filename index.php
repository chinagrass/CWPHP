<?php
define('BASEDIR',__DIR__);
include(BASEDIR.'/CW/Loader.php');
spl_autoload_register('\\CW\\Loader::autoload');
CW\Object::test();
App\Controller\Home\Index::test();

//入栈出栈(先入后出)
$stack = new splstack();
$stack->push("data1\n");
$stack->push("data2\n");
echo $stack->pop();
echo $stack->pop();
//队列（先入先出）
$queue = new splQueue();
$queue->enqueue("data3\n");
$queue->enqueue("data4\n");
echo $queue->dequeue();
echo $queue->dequeue();
//�?小堆
$heap = new SplMinHeap();
$heap->insert("data5\n");
$heap->insert("data6\n");
echo $heap->extract();
echo $heap->extract();
//固定尺寸数组
$array = new SplFixedArray(10);
$array[0] = 123;
$array[9] = 3333;
var_dump($array);


