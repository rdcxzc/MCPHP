<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/11/7
 * Time: 16:30
 */
namespace core\main;

class Model extends \PDO
{
    public function __construct($dsn, $username, $passwd, $options)
    {
        $dsn = 'mysql;host=localhost:dbname=muchang';
        $user = 'root';
        $pass = 'root';
        try
        {
            parent::__construct($dsn, $username, $passwd, $options);
        }
        catch(\Exception $e)
        {
            echo $e->getMessage();
        }

    }
}