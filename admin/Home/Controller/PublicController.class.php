<?php
namespace Home\Controller;
use Think\Controller;
class PublicController extends Controller {
	public function header(){
		$this->assign('header','这里是头文件');
		$this->display('header');
	}	
	public function left(){
		$this->display('left');
	}
}
?>