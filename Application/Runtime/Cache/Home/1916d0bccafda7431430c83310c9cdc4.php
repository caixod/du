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
			<div class="container" >
				<div style="">
					<h3 style="text-align: center;">详细说明</h3>
				</div>
			</div>
			<div class="container" >
				<div style="">
					<h3 style="text-align: center;">xxxxxx</h3>
				</div>
			</div>
		</div>

	

	<div style="height:700px;width=100%"></div>
  <footer class="footer" style=" width:100%;height:60px;background:#000;margin-top:15px;">
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