<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
   public function _initialize(){
		if($_SESSION['userid']==null){
			$this->error('请先登陆,等着你哟！','?m=admin&c=login');
			exit();
		}
	}
    public function index(){

        $this->display('index');
    }
}