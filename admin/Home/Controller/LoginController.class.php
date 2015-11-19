<?php
namespace Home\Controller;
use Think\Controller;
class LoginController extends Controller {
	public function _initialize(){
		header("Content-type: text/html; charset=utf-8");
	}
    public function index(){
		//echo md5("han");die;
		if($_POST["submit"]){
			$username=$_POST["username"];
			$password=$_POST["password"];
			$r=$this->checkuser($username);
			if(empty($r)){$this->error('用户不存在');exit();}
			$re=$this->login($username,$password);
			if(!empty($re)){
				session("username",$re["username"]);
				session("userid",$re["id"]);
				$this->success('登陆成功', '?m=admin&c=index');
				exit();
			}else{
				$this->error('登陆失败');
			}
			
		}
        $this->display('login');
    }
    public function checkuser($username){
	    $obj_admin=M("admin_user");
	    $r=$obj_admin->where("username='".$username."'")->count();
	    return $r;
    }
    public function login($username,$password){
	    $password=md5($password);
	    $obj_admin=M("admin_user");
	    $r=$obj_admin->where("username='".$username."' and password='".$password."'")->find();
	    return $r;
    }
    public function logout(){
	    session("username",null);
	    session("userid",null);
	    $this->success('退出登陆成功', '?m=admin&c=login');
    }
}