<?php
define('BASEDIR',__DIR__);
include(BASEDIR.'/CW/Loader.php');
spl_autoload_register('\\CW\\Loader::autoload');
CW\Object::test();
App\Controller\Home\Index::test();

//ջ(�Ƚ����)
/*$stack = new splstack();
$stack->push("data1\n");
$stack->push("data2\n");
echo $stack->pop();
echo $stack->pop();
//�У��Ƚ��ȳ���
$queue = new splQueue();
$queue->enqueue("data3\n");
$queue->enqueue("data4\n");
echo $queue->dequeue();
echo $queue->dequeue();
//�ѣ��Ƚ��ȳ���
$heap = new SplMinHeap();
$heap->insert("data5\n");
$heap->insert("data6\n");
echo $heap->extract();
echo $heap->extract();
//�̶����ȵ�����
$array = new SplFixedArray(10);
$array[0] = 123;
$array[9] = 3333;
var_dump($array);*/

//PHP����ʽ����
/*$db = new CW\Database();
$db->where("id=1")->where("name=2")->order("order desc")->limit(10);*/

/*PHP��ħ������*/

//__set()/__get():����������Խ��нӹ�(���Բ����ڻ��Զ����ã�����ֵ)
//__call()/__callStatic() :��ķ������п���,__callStatic()���ھ�̬������
//__toString():��һ��PHP����ת����һ���ַ���
//__invoke():��һ�����󵱳�һ������ʱ��ص��÷���,�Ѷ��󵱳�һ��������ִ��
/*$obj = new CW\Object();
$obj->title = 'hello';
echo $obj->title;

echo $obj->fun("hello",123);

echo CW\Object::fun2("world",1234);

echo $obj;

echo $obj('text');*/

/*����ģʽ*/
$db = CW\Factory::createDatabase();
var_dump($db);