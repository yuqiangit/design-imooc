<?php
/**
 * Created by PhpStorm.
 * User: shihuipeng
 * Date: 16/7/22
 * Time: 上午11:42
 */

use IMooc\Event;

define('BASEDIR', __DIR__);
/**
 * spl 标准框架 模式
 */

/**
 * 自动加载
 */
include BASEDIR . '/IMooc/Loader.php';

spl_autoload_register('\\IMooc\\Loader::autoload');
//\IMooc\Object::hello();
//\App\Controller\Home\Index::test();


//$db = new \IMooc\DataBase();
//$db->where('id = 1')->where('name= 1')->limit(10);

/**
 * 魔术方法
 */
/** @var object $obj */
//$obj = new \IMooc\Object();
//$obj->name = 'get';
//echo $obj->name.'<br>';
//
//echo $obj->test('hello','psh');
//\IMooc\Object::test();

//echo $obj;
///** @var  $obj */
//echo $obj('test');

/**
 * 设计模式
 * 工厂
 * 单例
 * 注册树
 */


//$db = \IMooc\Factory::createDataBase();
//\IMooc\Register::set('db1',$db);
//$db = \IMooc\Register::get('db1');

/**
 * 适配器
 */


//$db = new \IMooc\DataBase\PDO();
//$db->connect('127.0.0.1','root','123456','liking');
//$result = $db->query('select * from t_user limit 1');
//$db->close();
//
//var_dump(mysql_fetch_array($result));
//var_dump(mysqli_fetch_all($result));
//var_dump($result->fetchAll());


/**
 * 策略
 */

//$index = new \IMooc\Page();
//if (isset($_GET['female'])) {
//    $strategy = new \IMooc\StrategyFemale();
//    $index->setStrategy($strategy);
//    $index->index();
//} else {
//    $strategy = new \IMooc\StrategyMale();
//    $index->setStrategy($strategy);
//    $index->index();
//}

/**
 * 数据对象映射模式
 */
//$user_info = new \IMooc\User(94);
//echo $user_info->name;
//$user_info->name = 'wanghau';
//echo 'ok';

//$user = \IMooc\Factory::createUser(94);
//echo $user->name;
//$user->name = 'ccc';

/**
 * 观察者模式
 */

$even = new Event();
$even->addObserver(new \IMooc\EventObserver1());
$even->addObserver(new \IMooc\EventObserver2());
$even->addObserver(new \IMooc\EventObserver3());
$even->trigger();
