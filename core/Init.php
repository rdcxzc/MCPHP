<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/11/7
 * Time: 10:13
 */
namespace core;

class Init
{
    public static $classMap = [];
    static public function run(){

        $route = new \core\main\Route();
        $inputClass = ucfirst($route->ctrl);
        $action = lcfirst($route->action);
        $controllerFile = APP . '/controller/' . $inputClass.'.php';
        $controllerClass = '\\'.MODULE.'\controller\\'.$inputClass;
        if(is_file($controllerFile))
        {
            include $controllerFile;
            $controller = new $controllerClass();
            $controller->$action();
        }
        else
        {
            throw new \Exception('找不到控制器');
        }

    }

    static public function load($class)
    {

        if(isset($classMap[$class]))
        {
            return true;
        }
        else
        {
            $class = str_replace('\\','/',$class);
            $file = MCPHP .'/' . $class . '.php';
            if(is_file($file))
            {
                include $file;
                self::$classMap[$class] = $class;
            }
            else
            {
//                return false;
                throw new \Exception($class ."类没有找到!");
            }
        }


    }

}