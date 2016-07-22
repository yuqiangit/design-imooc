<?php
/**
 * Created by PhpStorm.
 * User: shihuipeng
 * Date: 16/7/22
 * Time: 上午11:42
 */

define('BASEDIR',__DIR__);
include BASEDIR.'/IMooc/Loader.php';
spl_autoload_register('\\IMooc\\Loader::autoload');
\IMooc\Object::hello();
\App\Controller\Home\Index::test();