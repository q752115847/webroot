<?php
namespace app\index\controller;

class Index
{
    public function index()
    {
        return $this->fetch('Index/index');
    }
}
