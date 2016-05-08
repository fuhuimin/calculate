<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
    	$User = M('imformation','','mysql://root:fuminmin@localhost/universal#utf8');
    	$list = $User->select();
        $this->assign('list',$list);
       $this->display();
    }
}