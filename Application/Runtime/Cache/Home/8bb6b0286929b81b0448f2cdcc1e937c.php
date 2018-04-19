<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0069)http://115.29.201.85:6811/member/index_do.php?fmdo=user&dopost=regnew -->
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<title>大赢家-百家乐自动投注软件- 会员注册</title>
<link href="/Public/register/login.css" rel="stylesheet" type="text/css">
<script src="/Public/register/j.js" language="javascript" type="text/javascript"></script>
<script src="/Public/register/base.js" language="javascript" type="text/javascript"></script>
<script src="/Public/register/CheckPassStrength.js" type="text/javascript" language="javascript"></script>
<script type="text/javascript" src="/Public/layer/2.1/layer.js"></script>
<script type="text/javascript" src="/Public/laypage/1.2/laypage.js"></script>
<script type="text/javascript" language="javascript" src="/Public/register/reg_new.js"></script>
<script type="text/javascript" language="javascript">
<!--


-->
</script>
</head>
<body>
<!--
<div class="header">
  <div class="auto960">
    <ul class="userMenu fRight">
      <li> <a title="网站主页" href="../">网站主页</a> </li>
      <li> <a title="注册" href="../member/index_do.php?fmdo=user&dopost=regnew">注册</a> </li>
      <li> <a title="登录" href="../member/login.php">登录</a> </li>
      <li class="help"> <a title="DEDECMS 帮助中心" href="http://help.dedecms.com">帮助</a> </li>
    </ul>
    <span>
    <script type="text/javascript">
 var now=(new Date()).getHours();
 if(now>0&&now<=6){
document.write("午夜好，");
 }else if(now>6&&now<=11){
 document.write("早上好，");
 }else if(now>11&&now<=14){
 document.write("中午好，");
 }else if(now>14&&now<=18){
 document.write("下午好，");
 }else{
 document.write("晚上好，");
 }
</script>
    <i class="green">游客</i> 你可以选择到 </span> </div>
</div>
<div class="wrapper">
  <div class="logo fLeft"> <a href="/"> <img  style="margin:8px 0 0 25px;"alt="会员中心" src="../member/templets/images/login_logo.gif"/></a></div>
  <div class="banner fRight"> <img src="../member/templets/images/530x56.gif" width="530" height="56" /></div>
</div>-->
<div style="width:100%;height:200px;background:#000000;margin: 0 auto;text-align: center;">
<img src="/Public/register/logo.png">
</div>
<div id="login" class="bor" style="margin-top:15px;">

  <!--<div class="stip1"></div>-->
  <div class="theme fLeft">
    <form method="post" action="<?php echo U('home/register/index');?>" id="form-user-add" name="form2">
      <input type="hidden" value="regbase" name="dopost">
      <input type="hidden" value="1" name="step">
      <input type="hidden" value="个人" name="mtype">
      <p style="text-align: right;" class="mB10">
      </p><ul>
        <!--<li class="mL68">(带<i class="red"> * </i>号的表示为必填项目，用户名必须大于3位小于20位，密码必须大于3位)</li>
        <li><span>帐号类型：</span>
          <label><input type="radio" name="mtype" class="usermtype" value="个人" checked/>个人</label> &nbsp; <label><input type="radio" name="mtype" class="usermtype2" value="企业" />企业</label> &nbsp;        </li>-->
        <li style="list-style:none; "><span style="letter-spacing: 0.8px;width:200px;"><?php echo (L("dln")); ?>:&nbsp;</span>
          <input type="text" class="intxt w200" id="txtUsername" name="name">
         <i class="red">*</i> <!-- <em id="_userid"><font color="red"><b>×用户名已经存在！</b></font></em> --> </li>
        <li style="list-style:none; "><span style="width:200px;"><?php echo (L("dlp")); ?>:&nbsp; </span>
          <input type="password" onkeyup="setPasswordLevel(this, document.getElementById(&#39;passwordLevel&#39;));" style="font-family: verdana;" class="intxt w200" id="txtPassword" name="password">
          <i class="red">*</i> </li>
<!--         <li><span>密码强度：</span>
          <input id="passwordLevel" class="rank r0" disabled="disabled" name="Input">
        </li> -->
        <li style="list-style:none; "><span style="width:200px;"><?php echo (L("req")); ?>:&nbsp; </span>
          <input type="password" class="intxt w200" size="20" value="" id="userpwdok" name="re_password">
          <i class="red">*</i> <!-- <em id="_userpwdok"><font color="red"><b>×密码不能小于3位</b></font></em> --> </li>
	    <li style="list-style:none; "><span id="uwname" style="width:200px;"><?php echo (L("ren")); ?>:&nbsp; </span>
          <input type="text" class="intxt w200" size="20" id="uname" name="username">
          <i class="red">*</i> <em id="_uname"> </em></li><em id="_uname">
                    <li style="list-style:none; "><span style="font-style:normal;width:200px;"><?php echo (L("ll")); ?>:&nbsp;  </span>
            <input type="text" class="intxt w200" id="email" name="email"><i class="red"> *</i>

<!--             <i class="red">*</i> <em id="_email">(每个电子邮邮箱只能注册一个帐号)</em> </li> -->



          <!--<li><span>安全问题：</span>
            <select name='safequestion' id='safequestion'><option value='0' selected>没安全提示问题</option>
<option value='1'>你最喜欢的格言什么？</option>
<option value='2'>你家乡的名称是什么？</option>
<option value='3'>你读的小学叫什么？</option>
<option value='4'>你的父亲叫什么名字？</option>
<option value='5'>你的母亲叫什么名字？</option>
<option value='6'>你最喜欢的偶像是谁？</option>
<option value='7'>你最喜欢的歌曲是什么？</option>
</select>
          <em id="_safequestion">(忘记密码时重设密码用)</em> </li>-->
		  <li style="list-style:none; "><span style="font-style:normal;width:200px;"><?php echo (L("phone")); ?>:&nbsp; </span>
          <input id="safeanswer" class="intxt w200" type="text" value="" name="phone">
          </li>
          <li style="list-style:none; "><span style="font-style:normal;width:200px;"><?php echo (L("wx")); ?>:&nbsp; </span>
          <input id="safeanswer" class="intxt w200" type="text" value="" name="vxin">
          </li>
        <!--<li><span>性别：</span>
            <input type="radio" value="男" name="sex"/>
            男
        <input type="radio" value="女" name="sex"/>
            女
            <input type="radio" checked="checked" value="" name="sex"/>
          保密        </li>-->
                    <li style="list-style:none; "><span style="font-style:normal;width:200px;"> <?php echo (L("yzm")); ?>:&nbsp; </span>
<!--         <div class="formControls col-8 col-offset-3">
          <input class="input-text size-L" type="text" name="verifycode" placeholder="验证码" onblur="if(this.value==''){this.value='验证码:'}" onclick="if(this.value=='验证码:'){this.value='';}" value="验证码:" style="width:108px;">
          <img style="width:100px;height:40px" src="<?php echo U('Login/yanzhengma'); ?>" id="verify_code"> <a id="kanbuq" href="javascript:;">换一张</a> </div> -->
            <input type="text" class="intxt w200" style="width: 50px; text-transform: uppercase;"  name="vdcode"><img id="verify" style="cursor:pointer;width:80px;height:25px;" class="img"  src="<?php echo U('Home/Register/yanzhengma');?>" onClick="this.src=this.src+'?'+Math.random();" title="看不清楚?点击刷新验证码?">

           <?php echo (L("kbq")); ?><a onclick="changeVerify()" id="code" href="javascript:;"><?php echo (L("kbqkbq")); ?></a> </li>
  <!--                <a href="javascript:void(0)" onclick="changeVerify()">点击更换</a></li> -->



                 </em></ul><em id="_uname">


      <div><span style="height: 110px; width: 15%;font-style:normal;" class="fLeft"><?php echo (L("hyxy")); ?>:&nbsp;</span>
        <div class="contract"> <?php echo (L("one")); ?><br>
          <?php echo (L("two")); ?><br>
          <?php echo (L("three")); ?></div>
      </div>
      <br>
      <ul>
        <li style="list-style:none; "><span>&nbsp;</span>
          <input type="checkbox" checked="" value="" id="agree" name="agree">
          <?php echo (L("yyy")); ?> </li>
        <li style="list-style:none;  "><span>&nbsp;</span>
          <button type="submit" id="btnSignCheck" class="buttonGreen142 kkk" style="background: #333;"><?php echo (L("bb")); ?></button>
        </li>
      </ul>
    
  </em></form></div><em id="_uname">
  <br class="clear">
</em></div><em id="_uname">

<!--
<div class="footer" style="width:100%;height:100px;background:#000;">
	<div style="width:1500px;">
		  <ul>
			<div style="float:left;">
			  <p>© 2018 maxwin668.com. All Rights Reserved</p>
			</div>
			<div style="float:right;">
			  <a href="/">首页</a>
			</div>       
		  </ul>
	</div>
</div>-->

<footer class="footer" style="width:100%;height:100px;background:#000;margin-top:15px;">
    <div class="container" style="    width: 960px;
    margin: 0 auto;
    overflow: hidden;padding-top:25px;font-size:14px;">
      <div class="row">
        <div style="width:300px;float:left;color:#fff;">
          <p style="font-weight:100">© 2018 maxwin668.com. All Rights Reserved</p>
        </div>
        <div style="float:right;color:#fff;">
        	 <a href="<?php echo U('home/login/index');?>" target="_self" style="color: #a2a2a2;
    text-decoration: none;
    font-family: 微软雅黑;"><?php echo (L("fh")); ?></a>
        </div>
      </div>
    </div>
  </footer>

</em></body></html>

<script type="text/javascript" src="/Public/lib/jquery/1.9.1/jquery.min.js"></script> 
<script type="text/javascript" src="/Public/lib/layer/2.4/layer.js"></script>


<script type="text/javascript">
  var reMethod = "POST",pwdmin = 3;

    function changeVerify(){
        var randomnum = Math.random();
        var img       = document.getElementById('verify');
        img.src       = "<?php echo U('Home/Register/yanzhengma');?>?a="+randomnum;
    }



function changeAuthCode() {
  var num =   new Date().getTime();
  var rand = Math.round(Math.random() * 10000);
  num = num + rand;
  $('#ver_code').css('visibility','visible');
  if ($("#vdimgck")[0]) {
    $("#vdimgck")[0].src = "../include/vdimgck.php?tag=" + num;
  }
  return false; 
}

function hideVc()
{
  $('#ver_code').css('visibility','hidden');
}


$(document).ready(function(){ 
  $("#passwordLevel").removeClass().addClass("rank r0");
  $("#vdcode").focus(function(){
    var leftpos = $("#vdcode").position().left;
    var toppos = $("#vdcode").position().top - 42;
    $('#ver_code').css('left', leftpos+'px');
    $('#ver_code').css('top', toppos+'px');
    $('#ver_code').css('visibility','visible');
  });
  $("input[type='password']").click(function(){
    hideVc()
  });
  $("#txtUsername").click(function(){
    hideVc()
  });
  $("input[type='radio']").focus(function(){
    hideVc()
  });
  /*
  $("#vdcode").blur(function(){
      $('#ver_code').css('visibility','hidden');
  });
  */
})



    $('.kkk').click(function (ele) {

        ele.preventDefault();

        var data = $('#form-user-add').serialize();

        $.ajax({
          url: "<?php echo U('home/register/index');?>",
          type: 'POST',
          dataType: 'json',
          data: data,
        })
        .done(function(msg) {
                if (msg.status == 1) {
            layer.msg(msg.info,{icon:1,time:1000}, function(){
               
                window.location.href="<?php echo U('home/login/index') ?>" 
            });
          } else {
            layer.msg(msg.info,{icon:5,time:2500});
          }    
        })

    });


</script>