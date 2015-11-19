<?php
namespace Home\Controller;
use Think\Controller;
class MessageController extends Controller {
   public function _initialize(){
	   header("Content-type: text/html; charset=utf-8");
		if($_SESSION['userid']==null){
			$this->error('请先登陆,等着你哟！','?m=admin&c=login');
			exit();
		}
	}
    public function listmessage(){
	    $agree_id = $_REQUEST['agree_id'];
	    $obj_message = M("message");
	    $re=$obj_message->where(" m_del=0 and agree_id=".$agree_id)->order("id asc")->select();
	    $this->assign("re",$re);
        $this->display('listmessage');
    }
    //取消置顶或新栏目标识
	public function offlabelcon(){
	    $data['m_del'] = intval($_GET['m_del']);
		$agree_id = intval($_GET['agree_id']);
		$obj_message = M("message");
		if(($data['m_del'] != null) and !empty($_GET['id']) and !empty($agree_id)){
			$rs = $obj_message->where("agree_id=".$agree_id." and id=".$_GET['id'])->save($data);
			if($rs){
				$this->success('更新成功');
			}else{
				$this->error('更新失败');
			}
			
		}else{
			$this->error('选择错误');
		}

	}
	
}