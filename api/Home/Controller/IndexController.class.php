<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function han_rand(){
		header("Content-type: text/html; charset=utf-8");
		session_start();
		if(empty($_COOKIE['graee_rand'])){
			$rand = "han_".rand(100000,999999)."_".mktime();	
			//记录到cookie中
			SetCookie("graee_rand", $rand, time()+3600*24);//3600秒=1小时 过期时间为24小时
			//记录到session中
			$_SESSION['graee_rand']=$rand;
			//设置session存活时间
			$lifeTime = 24 * 3600; 
			session_set_cookie_params($lifeTime);
		}
		
	}
    public function index(){
	    $agree_id = $_REQUEST['agree_id']?$_REQUEST['agree_id']:1;
	    $obj_activity = M("activity");
	    $re = $obj_activity->where(" id=".$agree_id)->field("total")->find();
	    $this->assign("total",$re['total']);
        $agree_id==1?$this->display("index"):$this->display("index2");
        
    }
    public function message(){
	    $data['agree_id'] = $_REQUEST['agree_id'];
	    $data['name'] = $_REQUEST['name'];
	    $data['company'] = $_REQUEST['company'];
	    $data['content'] = $_REQUEST['content'];
	    $data['create_time'] = mktime();
	    $obj_message = M("message");
	    $re = $obj_message ->add($data);
	   // $re?$this->success("留言成功"):$this->error("留言失败");
	   echo  $re?"<script>history.back();</script>":$this->error("留言失败");
    }
    public function click_num(){
	    if(empty($_COOKIE['graee_rand'])){
		    $this->han_rand();
		    $type = intval($_REQUEST['type']);
		    $agree_id = $_REQUEST['agree_id'];
		    $obj_activity = M("activity");
		    $result = $obj_activity ->field("total,support")->where("id = ".$agree_id)->find();
		    if($type ==1)$result['total'] += 1;
		    if($type ==2)$result['support'] += 1;
		    $re = $obj_activity -> where("id = ".$agree_id)->save($result);
			// $re?$this->success("成功","/index.php"):$this->error("失败","/index.php");
			// echo  $re?"<script>window.location.href='/index.php';</script>":$this->error("失败","/index.php");
			$total = $obj_activity->where(" id=".$agree_id)->getField("total");
			echo $re?$total:"020";
	    }else{
		    echo $re = "020"; 
	    }
	    
    }
    
}