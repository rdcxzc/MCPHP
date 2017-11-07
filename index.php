<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/11/7
 * Time: 10:12
 */
define('MCPHP',__DIR__);
define('CORE',MCPHP.'/core');
define('APP',MCPHP.'/app');
define('MODULE','app');


//include APP.'/common/function.php';
require __DIR__ . '/core/init.php';

spl_autoload_register('\core\init::load');

\core\init::run();