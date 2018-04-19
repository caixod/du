<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!-- saved from url=(0031)http://115.29.201.85:6811/khfk/ -->
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
<link href="/Public/feedback/css" rel="stylesheet" type="text/css">

<link href="/Public/feedback/css(1)" rel="stylesheet" type="text/css"> 
    
<link rel="stylesheet" type="text/css" href="/Public/feedback/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="/Public/feedback/animations.css">
<link rel="stylesheet" type="text/css" href="/Public/feedback/font-awesome.min.css">
<link rel="stylesheet" href="/Public/feedback/main.css">
<link rel="stylesheet" type="text/css" href="/Public/feedback/smart-forms.css">
        
<script type="text/javascript" src="/Public/layer/2.1/layer.js"></script>
<script type="text/javascript" src="/Public/laypage/1.2/laypage.js"></script>
      <script type="text/javascript" src="/Public/feedback/jquery-1.9.1.min.js"></script>
      <script type="text/javascript" src="/Public/feedback/jquery.form.min.js"></script>
      <script type="text/javascript" src="/Public/feedback/jquery.validate.min.js"></script>
      <script type="text/javascript" src="/Public/feedback/additional-methods.min.js"></script>
        <script type="text/javascript" src="/Public/feedback/smart-form.js"></script> 
        
        <!--[if lte IE 9]>
            <script type="text/javascript" src="js/jquery.placeholder.min.js"></script>
        <![endif]-->    
        
        <!--[if lte IE 8]>
            <link type="text/css" rel="stylesheet" href="css/smart-forms-ie8.css">
        <![endif]-->
        
<script async="" src="/Public/feedback/modernizr-2.6.2-respond-1.1.0.min.js"></script>
</head>
<body class="suits">

<!--========================================
Body Content
==========================================-->

<div class="banner" style="height: 665px;">
    <div class="overlay"></div>
    <ul class="language">
    
      <span><a href="?l=en-us" data-value="english"><img src="/Public/login/lang_en.png"></a></span>
      <span><a href="?l=zh-cn" data-value="simplified"><img src="/Public/login/lang_cn.png"></a></span>
<!--      <span><a href="javascript:void(0)" data-value="transditional"><img src="/Public/login/lang_tai.png"></a></span> -->
<!--      <span><a href="javascript:void(0)" data-value="malay"><img src="/Public/login/lang_my.png"></a></span> -->
      <span><a href="?l=yn-yn" data-value="indonesia"><img src="/Public/login/lang_ind.png"></a></span>
      <span><a href="?l=tg-tg" data-value="thailand"><img src="/Public/login/lang_thai.png"></a></span>
<!--      <span><a href="javascript:void(0)" data-value="cambodia"><img src="/Public/login/lang_camb.png"></a></span>
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
      <div class="question-form clearfix" style="bottom: <?php switch (cookie('think_language')) { case null: echo "-30px"; break; case 'zh-cn': echo "15px"; break; case 'en-us': echo "85px"; break; case 'nn-nn': echo "80px"; break; case 'tg-tg': echo "80px"; break; case 'yn-yn': echo "120px"; break; default: echo "-30px"; break; } ?> ">
         
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

      <div class="question-form clearfix" style="bottom: <?php switch (cookie('think_language')) { case null: echo "-30px"; break; case 'zh-cn': echo "-30px"; break; case 'en-us': echo "65px"; break; case 'nn-nn': echo "70px"; break; case 'tg-tg': echo "70px"; break; case 'yn-yn': echo "100px"; break; default: echo "-30px"; break; } ?> ">

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
            <a  href="<?php echo U('home/down/index');?>" class="login" style="text-decoration:none; background-color:#A87742; color:#ffffff; border: 1px solid #A87742;width: 85px;text-align: center;" type="submit"><?php echo (L("download")); ?></a>
          <?php }else{ ?>
            <button id="btnSignCheck" class="login kkk" style="background-color:#A87742; color:#ffffff; border: 1px solid #A87742;width: 85px;text-align: center;" type="submit"><?php echo (L("login")); ?></button>
          <?php  } ?>
          
        </div>            
        <div class="qr" align="right" style="margin: 0 auto;text-align: center;"><img src="/Public/login/<?php echo (L("tu")); ?>" width="170" height="170"></div>
        <!-- <button class="btn">登入</button> </p> -->
           </form>
         <?php  } ?>           </form>
        </div>
    </div>
</div>
     
<div class="our-team text-center animatedParent" data-sequence="500" style="    padding: 0 0;    margin-top: -20px;">
    <div class="container">
        <div class="smart-wrap">
            <div class="smart-forms smart-container wrap-2">
            
                <div class="form-header ">
                        <h4 style="text-align:center"><?php echo (L("kefk")); ?></h4>
                </div><!-- end .form-header section -->
               				
				<form action="" enctype="multipart/form-data" method="post" id="form-user-aaa">
					<input type="hidden" name="action" value="post">
					<input type="hidden" name="diyid" value="1">
					<input type="hidden" name="do" value="2">
					<div class="form-body">
                    
                        <!--<div class="section">
                            <label class="field prepend-icon"><span class="field-icon"></span>  
                            </label>
                        </div><!-- end section -->
                        
                        <div class="section">
                             <label class="field prepend-icon"><span class="field-icon"></span>  
                                <input type="text" name="name" id="name" class="gui-input" placeholder="<?php echo (L("name")); ?>"></label>
                                </div>
                                <div class="section">
                             <label class="field prepend-icon"><span class="field-icon"></span>  
                                <input type="text" name="email" id="email" class="gui-input" placeholder="<?php echo (L("ll")); ?>">
                                <span class="field-icon"></span>
                            </label>
                        </div><!-- end section -->
                        
                         <!--<div class="section">
                           <label class="field select">
                                <select name='idea' id="department">
                                    <option value="">方案选择</option>
                                        <option value="Technical">1.</option>
                                        <option value="HR">2.</option>
                                        <option value="PR">3.</option>
                                        <option value="ICT">4.</option>
                                        <option value="Administration">5.</option>
                                        <option value="General">6.</option>
                                        <option value="Sales">7.</option> 
                                </select>
                                <i class="arrow double"></i>                    
                            </label>  
                        </div><!-- end section -->
                        
<!--  <div class="section">
 <label class="field select">
  <select name="fangan" id="fangan">
			<option value="方案选择"><?php echo (L("ff")); ?></option>
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			<option value="4">4</option>
			<option value="5">5</option>
			<option value="6">6</option>
			<option value="7">7</option>
	  </select>
 </label> 
</div> -->
                        
                        <div class="section">
                          <label class="field prepend-icon">
                                <input type="text" name="title" id="title" class="gui-input" placeholder="<?php echo (L("xw")); ?>">
                                   <span class="field-icon"></span>
                         </label>
                        </div><!-- end section -->
                        
                        <div class="section">
                            <label class="field prepend-icon">
                                <textarea class="gui-textarea" type="text" name="content" id="content" placeholder="<?php echo (L("sr")); ?>"></textarea>
                                <span class="field-icon"></span>
                                <span class="input-hint"><?php echo (L("zy")); ?></span>   
                            </label>
                        </div><!-- end section -->
                        
<input type="hidden" name="dede_fields" value="name,text;emil,text;idea,select;title,text;xinxi,multitext">
<input type="hidden" name="dede_fieldshash" value="60bcecf4dc36ac546d9fc6e7f4045d93"></div><table style="width:97%;" cellpadding="0" cellspacing="1">


                    </table>


                        <div class="section">
                          <div class="smart-widget sm-left sml-120">
                              
                               
                            </div><!-- end .smart-widget section --> 
                        </div><!-- end section -->
                        
                       <div class="result"></div><!-- end .result  section --> 
                    <div class="form-footer">
                        <button type="submit" name="submit" data-btntext-sending="Sending..." class="button btn-primary bp6 www"><?php echo (L("tj")); ?></button>
                        <button type="reset" name="reset" class="can button bp7"> <?php echo (L("qx")); ?> </button>
                    </div>                                                                                         
                    </form></div><!-- end .form-body section -->
<!-- end .form-footer section -->
                
            </div><!-- end .smart-forms section -->
        </div><!-- end .smart-wrap section -->
     
  </div>

&nbsp;

    
    


<footer class="footer">
    <div class="container">
      <div class="row">
        <div class="pull-left">
          <p>© 2018 maxwin668.com. All Rights Reserved</p>
        </div>
        <div class="pull-right">
        	 <a href="<?php echo U('home/login/index');?>" target="_self"><?php echo (L("fh")); ?></a>
        </div>
      </div>
    </div>
  </footer>

<!--=================================
Script Source
===================================-->

<script src="/Public/feedback/jquery.js"></script>
<script src="/Public/feedback/css3-animate-it.js"></script>
<script src="/Public/feedback/main.js"></script>

<script type="text/javascript" src="/Public/lib/jquery/1.9.1/jquery.min.js"></script> 
<script type="text/javascript" src="/Public/lib/layer/2.4/layer.js"></script>
<script type="text/javascript">
              $('.can').click(function(){
                $('#name').val('');
                $('#email').val('');
                $('#fangan').val('');
                $('#title').val('');
                $('#content').val('');
            });


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


    $('.www').click(function (ele) {

        ele.preventDefault();

        var data = $('#form-user-aaa').serialize();

        $.ajax({
          url: "<?php echo U('home/feedback/index');?>",
          type: 'POST',
          dataType: 'json',
          data: data,
        })
        .done(function(msg) {
                if (msg.status == 1) {
            layer.msg(msg.info,{icon:1,time:2500});
            // layer.msg(msg.info,{icon:1,time:1000}, function(){
               
            //     window.location.href="<?php echo U('home/download/index') ?>" 
            // });
          } else {
            layer.msg(msg.info,{icon:5,time:2500});
          }    
        })

    });



</script>  


</body></html>