<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
	<meta content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" name="viewport">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
	<meta name="apple-mobile-web-app-capable" content="yes"/>
	<meta name="apple-touch-fullscreen" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black"/>
    <meta name="format-detection" content="telephone=no,email=no"/>
    <meta name="author" content="haibao" />
    	<title></title>
    <link rel="stylesheet" href="/Public/css/agree/style1.css" />
    <script src="/Public/js/agree/jquery.js"></script>
	<script src="/Public/js/agree/main.js"></script> <!-- Resource jQuery -->
    <link rel="stylesheet" href="/Public/css/agree/reset.css"> <!-- CSS reset -->
	<link rel="stylesheet" href="/Public/css/agree/style.css"> <!-- Resource style -->
	<link rel="stylesheet" type="text/css" href="/Public/css/agree/main.css">
	<script type="text/javascript" src="/Public/js/agree/jquery-1.7.2.min.js"></script>
	<script>
		$(function(){
			//异步请求
		     $("#han_cn").click(function(){
			     $.ajax({url:'/index.php?m=app&c=index&a=click_num&type=1&agree_id=1',data:{},success:function(data){
				 	 if(data == "020"){
					 	 alert("您已经承诺过了，谢谢参与");
				 	 }else{
					 	$("#total").html(data); 
				 	 }
				     $("#anniu").attr("src","/Public/img/agree/annu0.png");
				     $("#han_cn").unbind("click");
			     }})
			     
		     })
		     $("#han_mycl").click(function(){
			     $.ajax({url:'/index.php?m=app&c=index&a=click_num&type=2&agree_id=1',data:{},success:function(data){
				     if(data == "020"){
					 	 alert("您已经点赞过了，谢谢参与");
				 	 }
				     $("#anniu3").attr("src","/Public/img/agree/annu30.png");
				     $("#han_mycl").unbind("click");
			     }})
			     
		     })
		})
	</script>
</head>
<body>
<div id="wrapper">
	<div id="content">
	
		<div class="box">
	<div class="D_title">
				<div class="logo">
				<img src="/Public/img/agree/logo.png">
				<h1>中国石油销售公司</h1>
				<h2>加油站便利店员工服务承诺</h2>
				</div>

				<div class="old_size">
				<p>微笑服务 热情导购</p>
				<p>明码标价 货真价实</p>
				<p>唱收唱付 便捷准确</p>
				<p>卫生清洁 安全放心</p>
				<p>诚信经营 童叟无欺</p>
				</div>
                
         			<img src="/Public/img/agree/2.png" style=" width:100%;">
					<div id="finger_box" style="background-size: 100% 100%;">
					<a href="#" id="han_cn"><input id="anniu" type="image" src="/Public/img/agree/annu.png" /></a>
					<div class="xuanyan">
					<p id="info">从我做起，以优质的服务，合格的油品，安全的操作，清洁的环境，为每一位客户加好油，服好务。愿意接受社会各界的监督，邀您共同见证。</p>
					</div> 
                    <div class="xian_solid"></div>
                    <p class="peple">您是第<span id="total"><?php echo ($total); ?></span>位承诺人</p>
                    <a href="/index.php?m=api&c=index&a=index&agree_id=2"><input id="anniu1" type="image" src="/Public/img/agree/annu10.png" /></a>
                   <div class="xian_anniu"> <p><a href="#0" class="cd-popup-trigger"><input id="anniu2" type="image" src="/Public/img/agree/annu2.png" /></a><a href="#" id="han_mycl"><input id="anniu3" type="image" src="/Public/img/agree/annu3.png" /></a></p></div>
                    </div>	
                    
			</div>
		
	</div>
	</div>
</div>

<div class="cd-popup" role="alert">
	<div class="cd-popup-container">
    <p></p>
    <form class="theme-signin" name="loginform" action="/index.php?m=app&c=index&a=message" method="post">
		 <div style="display: none">
        <input type="radio" name="agree_id" value="1" checked="checked" />承诺1
		</div>
		<ul class="cd-buttons">
			 <li><strong>姓名：</strong><input class="ipt" name="name" type="text" value="" size="20" /></li>
             <li><strong>单位：</strong><input class="ipt" name="company" type="text"  value="" size="20" /></li>
             <li><strong>留言：</strong>
             <!-- <input class="ipt" name="content" type="test"  value="" size="20" /> -->
             <textarea name="content" ></textarea>
             </li>
             <a href="#" ></a><li><input class="btn btn-primary" type="submit" name="submit" value="确定" /></li>
		</ul>
    </form>
		<a href="#" class="cd-popup-close img-replace">关闭</a>
	</div> <!-- cd-popup-container -->
</div>
</body>
</html>