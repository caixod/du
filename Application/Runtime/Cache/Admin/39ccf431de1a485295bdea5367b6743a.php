<?php if (!defined('THINK_PATH')) exit();?><!--_meta 作为公共模版分离出去-->

<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<link rel="Bookmark" href="/favicon.ico" >
<link rel="Shortcut Icon" href="/favicon.ico" />
<!--[if lt IE 9]>
<script type="text/javascript" src="lib/html5shiv.js"></script>
<script type="text/javascript" src="lib/respond.min.js"></script>
<![endif]-->
<link rel="stylesheet" type="text/css" href="/Public/static/h-ui/css/H-ui.min.css" />
<link rel="stylesheet" type="text/css" href="/Public/static/h-ui.admin/css/H-ui.admin.css" />
<link rel="stylesheet" type="text/css" href="/Public/lib/Hui-iconfont/1.0.8/iconfont.css" />
<link rel="stylesheet" type="text/css" href="/Public/static/h-ui.admin/skin/default/skin.css" id="skin" />
<link rel="stylesheet" type="text/css" href="/Public/static/h-ui.admin/css/style.css" />
<!--[if IE 6]>/Public/
<script type="text/javascript" src="lib/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<!--/meta 作为公共模版分离出去-->

<title>新增文章 - 资讯管理 - H-ui.admin v3.1</title>
<meta name="keywords" content="H-ui.admin v3.1,H-ui网站后台模版,后台模版下载,后台管理系统模版,HTML后台模版下载">
<meta name="description" content="H-ui.admin v3.1，是一款由国人开发的轻量级扁平化网站后台模板，完全免费开源的网站后台管理系统模版，适合中小型CMS后台系统。">
</head>
<body>
<article class="page-container">
	<form action="<?php echo U('admin/upload/rjupload');?>" enctype="multipart/form-data" id="form-user-add" method="post" >
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">文件上传：</label>
			<div class="formControls col-xs-8 col-sm-9"> 
					<input type="file" name="photo" >
			</div>
		</div>


		<div class="row cl">
			<div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-2">
<!-- 			<input class="btn btn-primary radius" type="submit" value="上传"> -->
				<button  class="btn btn-primary radius" type="submit">上传</button>
			</div>
		</div>
	</form>
</article>

<!--_footer 作为公共模版分离出去-->
<script type="text/javascript" src="/Public/lib/jquery/1.9.1/jquery.min.js"></script> 
<script type="text/javascript" src="/Public/lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="/Public/static/h-ui/js/H-ui.min.js"></script> 
<script type="text/javascript" src="/Public/static/h-ui.admin/js/H-ui.admin.js"></script> <!--/_footer /作为公共模版分离出去-->

<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript" src="/Public/lib/My97DatePicker/4.8/WdatePicker.js"></script>
<script type="text/javascript" src="/Public/lib/jquery.validation/1.14.0/jquery.validate.js"></script> 
<script type="text/javascript" src="/Public/lib/jquery.validation/1.14.0/validate-methods.js"></script> 
<script type="text/javascript" src="/Public/lib/jquery.validation/1.14.0/messages_zh.js"></script>
<script type="text/javascript" src="/Public/lib/webuploader/0.1.5/webuploader.min.js"></script> 

<script type="text/javascript">
$(function(){
    // $('.btn').click(function (ele) {


    //     ele.preventDefault();
    //     var formData = new FormData($('#form-user-add')[0]);
    //     $.ajax({
    //         url: "<?php echo U('admin/upload/aaa'); ?>",
    //         type: "post",
    //         dataType: 'json',
    //         data: formData,
    //         async:false,
    //         cache:false,
    //         contentType:false,
    //         processData:false,
    //         success: function (msg) {
    //             if (msg.status == 1) {
    //             layer.msg(msg.info,{icon:1,time:1000}, function(){
                   
    //                 var index = parent.layer.getFrameIndex(window.name);
    //                 parent.location.reload();
    //                 parent.layer.close(index);
    //             });

    //             } else {
    //                 layer.msg(msg.info,{icon:5,time:5000});
    //             }
    //         }
    //     })
    // })
      
	
})
</script>
<!--/请在上方写此页面业务相关的脚本-->
</body>
</html>