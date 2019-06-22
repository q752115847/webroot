<?php
namespace app\index\controller;

use think\Controller;

class Comm extends Controller
{
    public function initialize()
    {  
		if(Cookie::has('name')){
			$this->redirect('Login/login');
		}
    }
}
