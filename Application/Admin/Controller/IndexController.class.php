<?php
namespace Admin\Controller;
use Think\Controller;

/**
* 
*/
class IndexController extends Controller {
    public function index(){
        $this->display("index");
    }
    public function change(){
    	$User = M('imformation','','mysql://root:fuminmin@localhost/universal#utf8');
    	$list = $User->select();
        $this->assign('list',$list);
    	$this->display("change");
    }
    public function alter(){
   		$User = M('imformation','','mysql://root:fuminmin@localhost/universal#utf8'); 
       $data['title'] =$_POST['title'];
       $data['ps'] = $_POST['ps'];
       $data['adviser'] = $_POST['adviser'];
       $data['tel'] = $_POST['tel'];
/*       $User->where('id=0')->save($data); // 根据条件更新记录*/
       $result=$User->where('id=0')->save($data);
       
       if($result){
    //设置成功后跳转页面的地址，默认的返回页面是$_SERVER['HTTP_REFERER']
       $this->success('保存成功', U('Index/change'));
       } else {
    //错误页面的默认跳转页面是返回前一页，通常不需要设置
       $this->error('保存失败');
       }
    }
    

    public function login(){
       $User = M('manager','think_','mysql://root:fuminmin@localhost/universal#utf8'); 
       $data['name'] =$_POST['name'];
       $data['password'] = $_POST['password'];
       $result=$User->add($data);
       dump($data);
       if($result){
    //设置成功后跳转页面的地址，默认的返回页面是$_SERVER['HTTP_REFERER']
       $this->success('新增成功', U('Index/change'));
       } else {
    //错误页面的默认跳转页面是返回前一页，通常不需要设置
       $this->error('新增失败');
       }
    }
}