<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	
	<!-- start: Meta -->
	<meta charset="utf-8">
	<title>Bootstrap Metro Dashboard by Dennis Ji for ARM demo</title>
	<meta name="description" content="Bootstrap Metro Dashboard">
	<meta name="author" content="Dennis Ji">
	<meta name="keyword" content="Metro, Metro UI, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
	<!-- end: Meta -->
	
	<!-- start: Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- end: Mobile Specific -->
	
	<!-- start: CSS -->
	<link id="bootstrap-style" href="/Public/css/bootstrap.min.css" rel="stylesheet">
	<link href="/Public/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link id="base-style" href="/Public/css/style.css" rel="stylesheet">
	<link id="base-style-responsive" href="/Public/css/style-responsive.css" rel="stylesheet">
	
	<!-- end: CSS -->
	

	<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<link id="ie-style" href="/Public/css/ie.css" rel="stylesheet">
	<![endif]-->
	
	<!--[if IE 9]>
		<link id="ie9style" href="/Public/css/ie9.css" rel="stylesheet">
	<![endif]-->
		
	<!-- start: Favicon -->
	<link rel="shortcut icon" href="/Public/img/favicon.ico">
	<!-- end: Favicon -->
	
		
		
		
</head>

<body>
		<!-- start: Header -->
	<div class="navbar">
		<!--  引入头文件  --><div class="navbar-inner">
			<div class="container-fluid">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<a class="brand" href="index.html"><span>活动后台管理</span></a>
								
				<!-- start: Header Menu -->
				<div class="nav-no-collapse header-nav">
					<ul class="nav pull-right">
						<li class="dropdown hidden-phone">
							<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
								<i class="halflings-icon white warning-sign"></i>
							</a>
							<ul class="dropdown-menu notifications">
								<li class="dropdown-menu-title">
 									<span>选择活动</span>
									<a href="/admin.php?c=appmanagement&a=editapp"><i class="icon-plus"></i></a>
								</li>	
                            	<li>
                                    <a href="#">
										<span class="icon blue"><i class="icon-user"></i></span>
										<span class="message">我要承诺</span>
										<span class="time">v1.0</span> 
                                    </a>
                                </li>
								<li>
                                    <a href="#">
										<span class="icon blue"><i class="icon-user"></i></span>
										<span class="message">我要承诺第二种</span>
										<span class="time">v1.0</span> 
                                    </a>
                                </li>								
                                <li class="dropdown-menu-sub-footer">
                            		<a>View all notifications</a>
								</li>	
							</ul>
						</li>
						<!-- start: Notifications Dropdown -->
						<li class="dropdown hidden-phone">
							<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
								<i class="halflings-icon white tasks"></i>
							</a>
							<ul class="dropdown-menu tasks">
								<li class="dropdown-menu-title">
 									<span>You have 17 tasks in progress</span>
									<a href="#refresh"><i class="icon-repeat"></i></a>
								</li>
								<li>
                                    <a href="#">
										<span class="header">
											<span class="title">iOS Development</span>
											<span class="percent"></span>
										</span>
                                        <div class="taskProgress progressSlim red">80</div> 
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
										<span class="header">
											<span class="title">Android Development</span>
											<span class="percent"></span>
										</span>
                                        <div class="taskProgress progressSlim green">47</div> 
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
										<span class="header">
											<span class="title">ARM Development</span>
											<span class="percent"></span>
										</span>
                                        <div class="taskProgress progressSlim yellow">32</div> 
                                    </a>
                                </li>
								<li>
                                    <a href="#">
										<span class="header">
											<span class="title">ARM Development</span>
											<span class="percent"></span>
										</span>
                                        <div class="taskProgress progressSlim greenLight">63</div> 
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
										<span class="header">
											<span class="title">ARM Development</span>
											<span class="percent"></span>
										</span>
                                        <div class="taskProgress progressSlim orange">80</div> 
                                    </a>
                                </li>
								<li>
                            		<a class="dropdown-menu-sub-footer">View all tasks</a>
								</li>	
							</ul>
						</li>
						<!-- end: Notifications Dropdown -->
						<!-- start: Message Dropdown -->
						<li class="dropdown hidden-phone">
							<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
								<i class="halflings-icon white envelope"></i>
							</a>
							<ul class="dropdown-menu messages">
								<li class="dropdown-menu-title">
 									<span>You have 9 messages</span>
									<a href="#refresh"><i class="icon-repeat"></i></a>
								</li>	
                            	<li>
                                    <a href="#">
										<span class="avatar"><img src="/Public/img/avatar.jpg" alt="Avatar"></span>
										<span class="header">
											<span class="from">
										    	Dennis Ji
										     </span>
											<span class="time">
										    	6 min
										    </span>
										</span>
                                        <span class="message">
                                            Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                        </span>  
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
										<span class="avatar"><img src="/Public/img/avatar.jpg" alt="Avatar"></span>
										<span class="header">
											<span class="from">
										    	Dennis Ji
										     </span>
											<span class="time">
										    	56 min
										    </span>
										</span>
                                        <span class="message">
                                            Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                        </span>  
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
										<span class="avatar"><img src="/Public/img/avatar.jpg" alt="Avatar"></span>
										<span class="header">
											<span class="from">
										    	Dennis Ji
										     </span>
											<span class="time">
										    	3 hours
										    </span>
										</span>
                                        <span class="message">
                                            Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                        </span>  
                                    </a>
                                </li>
								<li>
                                    <a href="#">
										<span class="avatar"><img src="/Public/img/avatar.jpg" alt="Avatar"></span>
										<span class="header">
											<span class="from">
										    	Dennis Ji
										     </span>
											<span class="time">
										    	yesterday
										    </span>
										</span>
                                        <span class="message">
                                            Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                        </span>  
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
										<span class="avatar"><img src="/Public/img/avatar.jpg" alt="Avatar"></span>
										<span class="header">
											<span class="from">
										    	Dennis Ji
										     </span>
											<span class="time">
										    	Jul 25, 2012
										    </span>
										</span>
                                        <span class="message">
                                            Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                        </span>  
                                    </a>
                                </li>
								<li>
                            		<a class="dropdown-menu-sub-footer">View all messages</a>
								</li>	
							</ul>
						</li>
						<!-- end: Message Dropdown -->
						<li>
							<a class="btn" href="#">
								<i class="halflings-icon white wrench"></i>
							</a>
						</li>
						<!-- start: User Dropdown -->
						<li class="dropdown">
							<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
								<i class="halflings-icon white user"></i> <?php echo (session('username')); ?>
								<span class="caret"></span>
							</a>
							<ul class="dropdown-menu">
								<li class="dropdown-menu-title">
 									<span>Account Settings</span>
								</li>
								<li><a href="#"><i class="halflings-icon user"></i> Profile</a></li>
								<li><a href="?m=admin&c=login&a=logout"><i class="halflings-icon off"></i> Logout</a></li>
							</ul>
						</li>
						<!-- end: User Dropdown -->
					</ul>
				</div>
				<!-- end: Header Menu -->
				
			</div>
		</div>
	</div>
	<!-- start: Header -->
	
		<div class="container-fluid-full">
		<div class="row-fluid">
				
			<!-- start: Main Menu -->
			<!--  引入左侧导航文件  --><div id="sidebar-left" class="span2">
				<div class="nav-collapse sidebar-nav">
					<ul class="nav nav-tabs nav-stacked main-menu">
						<li><a href="?c=Activity&a=listActivity"><!--<i class="icon-envelope">--><i class="icon-list-alt"></i><span class="hidden-tablet"> 承诺管理</span></a></li>
						<li>
							<a class="dropmenu" href="#"><i class="icon-edit"></i><span class="hidden-tablet"> 留言管理</span><span class="label label-important"> 2 </span></a>
							<ul>
								<li><a class="submenu" href="?m=admin&c=message&a=listmessage&agree_id=1"><i class="icon-file-alt"></i><span class="hidden-tablet">承诺一</span></a></li>
								<li><a class="submenu" href="?m=admin&c=message&a=listmessage&agree_id=2"><i class="icon-file-alt"></i><span class="hidden-tablet">承诺二</span></a></li>
							</ul>	
						</li>
					</ul>
				</div>
			</div>
			<!-- end: Main Menu -->
			
			<noscript>
				<div class="alert alert-block span10">
					<h4 class="alert-heading">Warning!</h4>
					<p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
				</div>
			</noscript>

<!-- start: Content -->
			<div id="content" class="span10">
			
			
			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="index.html">Home</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li><a href="<?php echo u('admin/Message/listmessage');?>">消息列表</a></li>
			</ul>

			<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon user"></i><span class="break"></span>Members</h2>
						
						<div class="box-icon">
							<a href="?m=admin&c=Message&a=editmessage" title="添加消息"><i class="halflings-icon plus"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								  <th>排序</th>
								  <th>姓名</th>
								  <th>单位</th>
								  <th>内容</th>
								  <th>发布时间</th>
								  <th>操作</th>
								  
							  </tr>
						  </thead>   
						  <tbody>
							<?php if(is_array($re)): foreach($re as $key=>$vo): ?><tr>
								<td class="center"><input style="width: 30px; text-align: center;" type="text" value="<?php echo ($key+1); ?>"></td>
								<td><?php echo ($vo["name"]); ?></td>
								<td class="center"><a href="" title="<?php echo ($vo["company"]); ?>"><?php if(strlen($vo['company'])>60){echo substr($vo['company'],0,60)."....";}else{echo $vo['company'];} ?></a></td>
								
								<td class="center">
									<a href="" title="<?php echo ($vo["content"]); ?>"><?php if(strlen($vo['content'])>60){echo substr($vo['content'],0,60)."....";}else{echo $vo['content'];} ?></a>
								</td>
								<td class="center"><?php echo (date('Y-m-d H:m',$vo["create_time"])); ?></td>
								<td class="center">
									
<!--
									<a class="btn btn-info" href="<?php echo u('admin/Message/editmessage',array('id'=>$vo['id']));?>">
										<i class="halflings-icon white edit"></i>  
									</a>
-->
									<a class="btn btn-danger" href="?c=message&a=offlabelcon&m_del=1&id=<?php echo ($vo["id"]); ?>&agree_id=<?php echo ($vo["agree_id"]); ?>">
										<i class="halflings-icon white trash"></i> 
									</a>
								</td>
							</tr><?php endforeach; endif; ?>
						  </tbody>
					  </table>            
					</div>
				</div><!--/span-->
			
			</div><!--/row-->

			
    

	</div><!--/.fluid-container-->
	
			<!-- end: Content -->
			</div><!--/#content.span10-->
		</div><!--/fluid-row-->
		
		
		<div class="modal hide fade" id="myModal">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">×</button>
			<h3>Settings</h3>
		</div>
		<div class="modal-body">
			<p>Here settings can be configured...</p>
		</div>
		<div class="modal-footer">
			<a href="#" class="btn" data-dismiss="modal">Close</a>
			<a href="#" class="btn btn-primary">Save changes</a>
		</div>
	</div>
	
	<div class="clearfix"></div>
	
	<footer>

		<p>
			<span style="text-align:left;float:left">&copy; 2013 <a href="http://jiji262.github.io/Bootstrap_Metro_Dashboard/" alt="Bootstrap_Metro_Dashboard">Bootstrap Metro Dashboard</a></span>
			
		</p>

	</footer>
	
	<!-- start: JavaScript-->

		<script src="/Public/js/jquery-1.9.1.min.js"></script>
	<script src="/Public/js/jquery-migrate-1.0.0.min.js"></script>
	
		<script src="/Public/js/jquery-ui-1.10.0.custom.min.js"></script>
	
		<script src="/Public/js/jquery.ui.touch-punch.js"></script>
	
		<script src="/Public/js/modernizr.js"></script>
	
		<script src="/Public/js/bootstrap.min.js"></script>
	
		<script src="/Public/js/jquery.cookie.js"></script>
	
		<script src='/Public/js/fullcalendar.min.js'></script>
	
		<script src='/Public/js/jquery.dataTables.min.js'></script>

		<script src="/Public/js/excanvas.js"></script>
	<script src="/Public/js/jquery.flot.js"></script>
	<script src="/Public/js/jquery.flot.pie.js"></script>
	<script src="/Public/js/jquery.flot.stack.js"></script>
	<script src="/Public/js/jquery.flot.resize.min.js"></script>
	
		<script src="/Public/js/jquery.chosen.min.js"></script>
	
		<script src="/Public/js/jquery.uniform.min.js"></script>
		
		<script src="/Public/js/jquery.cleditor.min.js"></script>
	
		<script src="/Public/js/jquery.noty.js"></script>
	
		<script src="/Public/js/jquery.elfinder.min.js"></script>
	
		<script src="/Public/js/jquery.raty.min.js"></script>
	
		<script src="/Public/js/jquery.iphone.toggle.js"></script>
	
		<script src="/Public/js/jquery.uploadify-3.1.min.js"></script>
	
		<script src="/Public/js/jquery.gritter.min.js"></script>
	
		<script src="/Public/js/jquery.imagesloaded.js"></script>
	
		<script src="/Public/js/jquery.masonry.min.js"></script>
	
		<script src="/Public/js/jquery.knob.modified.js"></script>
	
		<script src="/Public/js/jquery.sparkline.min.js"></script>
	
		<script src="/Public/js/counter.js"></script>
	
		<script src="/Public/js/retina.js"></script>

		<script src="/Public/js/custom.js"></script>
	<!-- end: JavaScript-->
	
</body>
</html>