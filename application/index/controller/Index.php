<?php
namespace app\index\controller;

class Index
{
    public function index()
    {
        return '欢迎您，网站正在维护！';
    }

    public function hello($name = 'ThinkPHP5')
    {
        return 'hello,' . $name;
    }
}
