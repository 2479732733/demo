<?php
namespace core;
class View{
    //模板文件
    protected $file;
    //模板变量
    protected $vars=[];//PHP5.4
    public function make($file){
        $this->file = 'view/'.$file.'.html';
        return $this;
    }
    public function with($name ,$value){

        $this->vars[$name]=$value;

        return $this;

    }
    public function __toString()
    {

        // TODO: Implement __toString() method.
        extract($this->vars);//把数组键值=>变成变量名和变量值
        include $this->file;
        return '';
    }
}