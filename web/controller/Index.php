<?php
namespace web\controller;
use core\View;
use Gregwar\Captcha\CaptchaBuilder;
class Index{
protected $view;
public function __construct()
{
    $this->view = new View();
}

    public function show(){
        return $this->view->make('index')->with('version','版本:1.0 copyright:myphp');
    }
    public function index(){
        echo "这个是Index控制器里面的index方法";

    }
    public function login(){
//        dd($_SESSION);
        return $this->view->make('login');
    }
    public function code(){
        $builder = new CaptchaBuilder;
        $builder->build();
        $_SESSION['phrase'] = $builder->getPhrase();
        header('Content-type: image/jpeg');
        $builder->output();
    }
}