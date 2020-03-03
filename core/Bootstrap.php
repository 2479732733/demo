<?php
namespace core;
class Bootstrap{
    public static function run(){
        //开启session
        session_start();
        self::parseUrl();
    }

    //分析URL生产控制器常量
    public static function parseUrl(){
        if(isset($_GET['s'])){
            //分析s变量生成控制器方法
           $info =  explode('/',$_GET['s']);
//            dd($info);
            $class = "\web\controller\\".ucfirst($info[0]);
            $action = $info[1];
        }else{
            $class = "\web\controller\index";
            $action = "show";

        }
        echo (new $class)->$action();

    }

}

