<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!-- saved from url=(0026)http://115.29.201.85:6811/ -->
<html class=" js flexbox canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers applicationcache svg inlinesvg smil svgclippaths"><!--<![endif]--><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">



<title>maxwin668大赢家</title>
<!--=================================
Meta tags
=================================-->
<meta name="description" content="">
<meta content="yes" name="apple-mobile-web-app-capable">
<meta name="viewport" content="minimum-scale=1.0, width=device-width, maximum-scale=1, user-scalable=no">
<!--=================================
Style Sheets
=================================-->
<link href="/Public/login/css" rel="stylesheet" type="text/css">

<link href="/Public/login/css(1)" rel="stylesheet" type="text/css"> 
    
<link rel="stylesheet" type="text/css" href="/Public/login/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="/Public/login/animations.css">
<link rel="stylesheet" type="text/css" href="/Public/login/font-awesome.css">
<link rel="stylesheet" href="/Public/login/main.css">

<script async="" src="/Public/login/modernizr-2.6.2-respond-1.1.0.min.js"></script>
<script type="text/javascript" src="/Public/layer/2.1/layer.js"></script>
<script type="text/javascript" src="/Public/laypage/1.2/laypage.js"></script>
</head>
<body class="suits">

<!--========================================
Body Content
==========================================-->

<div class="banner">
    <div class="overlay"></div>
		<div class="cus-right">
           <a href="<?php echo U('home/login/quit');?>" target="_self"><?php echo (L("tt")); ?></a> 
<!--            <a href="<?php echo U('home/download/index');?>" target="_self"><?php echo (L("download")); ?></a> -->

        	 <a href="<?php echo U('home/feedback/index');?>" target="_self"><?php echo (L("kefk")); ?></a>
        </div>

		<ul class="language">
		
			<span><a href="?l=en-us" data-value="english"><img src="/Public/login/lang_en.png"></a></span>
			<span><a href="?l=zh-cn" data-value="simplified"><img src="/Public/login/lang_cn.png"></a></span>
<!-- 			<span><a href="javascript:void(0)" data-value="transditional"><img src="/Public/login/lang_tai.png"></a></span> -->
<!-- 			<span><a href="javascript:void(0)" data-value="malay"><img src="/Public/login/lang_my.png"></a></span> -->
			<span><a href="?l=yn-yn" data-value="indonesia"><img src="/Public/login/lang_ind.png"></a></span>
			<span><a href="?l=tg-tg" data-value="thailand"><img src="/Public/login/lang_thai.png"></a></span>
<!-- 			<span><a href="javascript:void(0)" data-value="cambodia"><img src="/Public/login/lang_camb.png"></a></span>
			<span><a href="javascript:void(0)" data-value="myanmar"><img src="/Public/login/lang_mya.png"></a></span> -->
			<span><a href="?l=nn-nn" data-value="vietnam"><img src="/Public/login/lang_viet.png"></a></span>

			<!--<select id="e1">
				<option value="1">English<img src="/images/lang_en.png"></option>
				<option value="2">Simplified<img src="/images/lang_cn.png"></option>				
				<option value="2">Malay<img src="/images/lang_my.png"></option>
			</select>-->
		</ul>
		<div class="container">
       
			<img class="logo" src="/Public/login/<?php echo (L("sss")); ?>" alt="/">
		    <div class="bannerText" style="width:750px"> 
			<br>
		    <h1><?php echo (L("lxtz")); ?></h1>
		    <h3><?php echo (L("dubo")); ?></h3>
			<br>
       </div>

        <?php if ($_SESSION['name']) { ?> 

        <div class="question-form clearfix" style="bottom: <?php switch (cookie('think_language')) { case 'zh-cn': echo "-30px"; break; case 'en-us': echo "70px"; break; case 'nn-nn': echo "50px"; break; case 'tg-tg': echo "50px"; break; case 'yn-yn': echo "50px"; break; default: echo "-30px"; break; } ?> ">


     <form name="form1" method="POST" action="" id="form-user-add">


                <h3><?php echo (L("hy")); ?>!</h3>
                <h4><?php echo $_SESSION['name']; ?></h4>
         
        <div>
          <a href="<?php echo U('home/register/index');?>" class="login" style="background-color:#555555; color:#ffffff; border: 1px solid #555555; width:85px;text-decoration: none;text-align: center;">
          <b style="font-weight:100"><?php echo (L("register")); ?></b></a> 
          <a href="<?php echo U('Home/login/mima');?>" class="login" style="background-color:#333333; color:#ffffff; border: 1px solid #333333; width:118px;text-decoration: none;text-align: center;">
          <b style="font-weight:100"><?php echo (L("wj")); ?></b></a>
          <!-- <button class="btn">登入</button> -->
          <?php if ($_SESSION['name']) { ?>
            <a  href="<?php echo U('home/download/index');?>" class="login" style="text-decoration:none; background-color:#A87742; color:#ffffff; border: 1px solid #A87742;width: 85px;text-align: center;" type="submit"><?php echo (L("download")); ?></a>
          <?php }else{ ?>
            <button id="btnSignCheck" class="login kkk" style="background-color:#A87742; color:#ffffff; border: 1px solid #A87742;width: 85px;text-align: center;" type="submit"><?php echo (L("login")); ?></button>
          <?php  } ?>
        </div>            
        <div class="qr" align="right" style="margin: 0 auto;text-align: center;"><img src="/Public/login/<?php echo (L("tu")); ?>" width="170" height="170"></div>
        <!-- <button class="btn">登入</button> </p> -->
           </form>
        <?php }else{ ?>

        <div class="question-form clearfix" style="bottom: <?php switch (cookie('think_language')) { case 'zh-cn': echo "-30px"; break; case 'en-us': echo "30px"; break; case 'nn-nn': echo "50px"; break; case 'tg-tg': echo "50px"; break; case 'yn-yn': echo "50px"; break; default: echo "-30px"; break; } ?> ">


     <form name="form1" method="POST" action="" id="form-user-add">
        <input type="hidden" name="fmdo" value="login">
        <input type="hidden" name="dopost" value="login">
        <input type="hidden" name="keeptime" value="604800">

                <h3><?php echo (L("login")); ?></h3>
                <h4><?php echo (L("vip")); ?></h4>
                <input type="txtUsername" name="name" placeholder="<?php echo (L("dln")); ?>" style=" width: 100%;
    border: 0;border: none;color: #0e576c;background: #fff;border-radius: 0;height: 30px;
    padding: 5px;font-size: 11px;padding-left: 15px;text-transform: inherit;margin-bottom: 18px;">
                <input id="txtPassword" type="password" name="password" placeholder="<?php echo (L("dlp")); ?>">
                <input id="vdcode" type="text" name="vdcode" placeholder="<?php echo (L("yzm")); ?>" style="width: 75%;">
<img  style="cursor:pointer;" width="68px" height="20px"  class="img"  src="<?php echo U('Home/Register/yanzhengma');?>" onClick="this.src=this.src+'?'+Math.random();" title="看不清楚?点击刷新验证码?">
        <div>
          <a href="<?php echo U('home/register/index');?>" class="login" style="background-color:#555555; color:#ffffff; border: 1px solid #555555; width:85px;text-decoration: none;text-align: center;">
          <b style="font-weight:100"><?php echo (L("register")); ?></b></a> 
          <a href="<?php echo U('Home/login/mima');?>" class="login" style="background-color:#333333; color:#ffffff; border: 1px solid #333333; width:118px;text-decoration: none;text-align: center;">
          <b style="font-weight:100"><?php echo (L("wj")); ?></b></a>
          <!-- <button class="btn">登入</button> -->
          <!--<a href="#" id="btnSignCheck" type="submit" class="login" style="background-color:#A87742; color:#ffffff; border: 1px solid #A87742;"><b>登入</b></a>-->
          <?php if ($_SESSION['name']) { ?>
            <a  href="<?php echo U('home/download/index');?>" class="login" style="text-decoration:none; background-color:#A87742; color:#ffffff; border: 1px solid #A87742;width: 85px;text-align: center;" type="submit"><?php echo (L("download")); ?></a>
          <?php }else{ ?>
            <button id="btnSignCheck" class="login kkk" style="background-color:#A87742; color:#ffffff; border: 1px solid #A87742;width: 85px;text-align: center;" type="submit"><?php echo (L("login")); ?></button>
          <?php  } ?>
        </div>            
        <div class="qr" align="right" style="margin: 0 auto;text-align: center;"><img src="/Public/login/<?php echo (L("tu")); ?>" width="170" height="170"></div>
        <!-- <button class="btn">登入</button> </p> -->
           </form>
         <?php  } ?>
         
        </div>
    </div>
</div>
     
<div class="our-team text-center animatedParent" data-sequence="500">
    <div class="container">
        <div class="head-pos"><h2><?php echo (L("si")); ?>
        </h2>
        </div>        
        <div class="row">
			<div class="col-md-4 col-sm-7 col-md-12">
			 <div class="animated fadeInLeft go" data-id="1">
                 <img src="/Public/login/<?php echo (L("tt1")); ?>" alt=""> 
			</div>
          </div>
            <div class="col-md-4 col-sm-7 col-md-12">
                <div class="animated fadeInLeft go" data-id="2">
                    <img src="/Public/login/<?php echo (L("tt2")); ?>" alt="">
                   
                </div>
            </div><div class="col-md-4 col-sm-7">
          <div class="animated fadeInLeft go" data-id="3">
                    <img src="/Public/login/<?php echo (L("tt3")); ?>" alt="">
                    
              </div>
            </div>
            <div class="col-md-4 col-sm-7">
                <div class="animated fadeInLeft go" data-id="4">
                    <img src="/Public/login/<?php echo (L("tt4")); ?>" alt="">
                   
                </div>
            </div>
        </div>
  </div>
</div>
&nbsp;

    
    


<footer class="footer">
    <div class="container">
      <div class="row">
        <div class="pull-left">
          <p>© 2018 maxwin668.com. All Rights Reserved</p>
        </div>
       
      </div>
    </div>
  </footer>

<!--=================================
Script Source
===================================-->


<script type="text/javascript" src="/Public/lib/jquery/1.9.1/jquery.min.js"></script> 
<script type="text/javascript" src="/Public/lib/layer/2.4/layer.js"></script>



<!-- <script src="/Public/login/jquery.js"></script>
<script src="/Public/login/css3-animate-it.js"></script>
<script src="/Public/login/main.js"></script>
 -->
</body></html>


<script type="text/javascript">
  
    $('.kkk').click(function (ele) {

        ele.preventDefault();

        var data = $('#form-user-add').serialize();

        $.ajax({
          url: "<?php echo U('home/login/index');?>",
          type: 'POST',
          dataType: 'json',
          data: data,
        })
        .done(function(msg) {
                if (msg.status == 1) {
            layer.msg(msg.info,{icon:1,time:1000}, function(){
               
                window.location.href="<?php echo U('home/download/index') ?>" 
            });
          } else {
            layer.msg(msg.info,{icon:5,time:2500});
          }    
        })

    });


</script>