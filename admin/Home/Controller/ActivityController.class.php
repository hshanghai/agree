<?php
namespace Home\Controller;
use Think\Controller;
class ActivityController extends Controller {
	/**
     +----------------------------------------------------------
     * 自动加载判断登录
     +----------------------------------------------------------
     * @access public
     +----------------------------------------------------------
     * @param 
    */
	public function _initialize(){
		if($_SESSION['userid']==null){
			$this->error('请先登陆,等着你哟！','?m=admin&c=login');
			exit();
		}
	}
	/**
     +----------------------------------------------------------
     * 活动列表
     +----------------------------------------------------------
     * @access public
     +----------------------------------------------------------
     * @param 
    */
	public function listActivity(){
		$A = M("activity");
		$info = $A->select();
		$this->assign("info",$info);
		$this->display("listactivity");
	}
	
	
	
    /**
     +----------------------------------------------------------
     * 删除活动计数表
     +----------------------------------------------------------
     * @access public
     +----------------------------------------------------------
     * @param $_GET['id']
    */
    public function delActivity(){
	    $id = I("get.id");
	    if($id){
		    $A = M("activity");
		    $data['activity_switch'] = I("get.activity_switch");
		    $rs = $A->where("id=".$id)->save($data);
		    if($rs){
			    $this->success('活动更新成功','?m=admin&c=activity&a=listactivity');
		    }else{
			    $this->error("更新失败");
		    }
	    }
    }
    
}