<?php
namespace app\index\controller;

class Index extends Comm
{
    public function index()
    {  
		return $this->fetch();
    }
}
