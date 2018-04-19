<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!-- saved from url=(0042)http://115.29.201.85:6811/member/index.php -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		
		<title>Download下载页</title>
		<meta name="description" content="">
		<meta name="keywords" content="">	
		<script type="text/javascript" src="/Public/layer/2.1/layer.js"></script>
<script type="text/javascript" src="/Public/laypage/1.2/laypage.js"></script>
		<link rel="stylesheet" href="/Public/download/bootstrap.css">
		<link rel="stylesheet" href="/Public/download/bootstrap-theme.css">
		<link rel="stylesheet" href="/Public/download/dow.css">
	</head>
	<body>
		<div class="container-fluid cp">
			<div class="container">
   		<div class="tcd">
        <script type="text/javascript">
   //         	var now=(new Date()).getHours();
			// if(now>0&&now<=6){
			// 	document.write("午夜好，");
			// }else if(now>6&&now<=11){
			// 	document.write("早上好，");
			// }else if(now>11&&now<=14){
			// 	document.write("中午好，");
			// }else if(now>14&&now<=18){
			// 	document.write("下午好，");
			// }else{
			// 	document.write("晚上好，");
			// }
	    </script>
	    <?php if ($_SESSION['name']) { ?>
   	   		<?php echo $_SESSION['name']; ?> </a> 
   	   		<a href="<?php echo U('home/login/quit');?>">[<?php echo (L("tt")); ?>]</a> 
	    <?php }else{ ?>
			<a href="<?php echo U('home/login/index');?>">[<?php echo (L("login")); ?>]</a>   <a href="<?php echo U('home/register/index');?>">[<?php echo (L("register")); ?>]</a>
	    <?php	} ?>

   	    </div>
		</div>
		</div>
	
		<div class="container-fluid">
			<div class="container" style="padding-left: 0px;padding-right: 0px;">
				<div class="col-xs-7 col-sm-7 col-lg-7 col-md-7 bimg">
					<img src="<?php echo $upload['zhutu'] ?>" width="100%">
				</div>
				<div class="col-xs-5 col-sm-5 col-lg-5 col-md-5 bibc">

					<a class="btn btn-success bibcd" href="<?php echo $upload['jc']; ?>"> 》<?php echo (L("jc")); ?> </a>
					
					<a class="btn btn-warning bibcd" href="<?php echo U('home/download/xx');?>"> 》<?php echo (L("xx")); ?> </a>
					
					<a class="btn btn-danger bibcd " href="<?php echo $upload['rj']; ?>"> 》<?php echo (L("rj")); ?> </a>
					
				<h3 class="bph"><?php echo (L("d1")); ?></h3>	
				<p class="bpp"><?php echo (L("d2")); ?></p>
				</div>
			</div>
			<div class="container cli">
				<div class="row clir">
					<ul class="lidd">
<!-- 					<?php foreach ($list as $k => $v) { ?>
						<li><a href="<?php echo U('home/download/page',array('id'=>$v['id']));?>"><?php echo $v['title']; ?></a></li>
					<?php } ?> -->
						
						<li><a href="<?php echo U('home/download/page');?>"><?php echo (L("bt1")); ?> </a></li>
						<li><a href="<?php echo U('home/download/page');?>"><?php echo (L("bt2")); ?> </a></li>
						<li><a href="<?php echo U('home/download/page');?>"><?php echo (L("bt3")); ?> </a></li>
						<li><a href="<?php echo U('home/download/page');?>"><?php echo (L("bt4")); ?> </a></li>
						<li><a href="<?php echo U('home/download/page');?>"><?php echo (L("bt5")); ?> </a></li>
						<li><a href="<?php echo U('home/download/page');?>"><?php echo (L("bt6")); ?> </a></li>
						<li><a href="<?php echo U('home/download/page');?>"><?php echo (L("bt7")); ?> </a></li>																				
					</ul>
				</div>
			</div>
		</div>
  <footer class="footer" style="width:100%;height:60px;background:#000;margin-top:15px;">
    <div class="container" style="margin: 0 auto;overflow: hidden;padding-top:25px;font-size:14px;">
      <div class="row">
        <div style="width:300px;float:left;color:#fff;">
          <p style="font-weight:100">© 2018 maxwin668.com. All Rights Reserved</p>
        </div>
        <div style="float:right;color:#fff;">
          <a href="<?php echo U('home/login/index');?>" target="_self" style="color: #a2a2a2;text-decoration: none;font-family: 微软雅黑;"><?php echo (L("fh")); ?></a>
        </div>
      </div>
    </div>
  </footer>		
	
</body></html>