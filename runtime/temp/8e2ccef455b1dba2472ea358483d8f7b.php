<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:84:"D:\my\kecheng\thinkphp\OAofficeSystem\public/../application/blog\view\.\article.html";i:1541989575;}*/ ?>
<!DOCTYPE html>
<html>
<head>
	<title>文章详情</title>
<link rel="stylesheet" href="/static/css/bootstrap.css"/>
	<!--  bootstrap.js依赖jquery  -->
<script src="/static/js/jquery.js"></script>
<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
<script src="/static/js/bootstrap.js"></script>
</head>
<style type="text/css">
.show{position:fixed;top:0;width:100%;height:80px;background:#eee;z-index: 100}
.show_box{width:1200px;margin:0 auto;}
	.nav li{line-height:40px;float:left;width:100px;background:#dfdfdf;text-align:center;margin-right:10px;border-radius:5px;}
	ul.nav:after{content:'';display:block;clear:both;}
	ul.nav{mwidth:800px;overflow:hidden;list-style:none;margin-top:20px;}
	.login{position:relative;top:-40px;}
</style>
<body style="background: #fcfcfc;">
		
	<div class="warp">
<div class="box">
		<div class="left">
			<div class="title">			
				<p style="padding-left:20px;"><a href="<?php echo url('index/index'); ?>">首页</a> &gt; <a href="<?php echo url('index/artlist',array('id'=>$lid)); ?>">分类</a> &gt;文章详情</p>
			</div>
			
			<div class="content">
				<div class="art_title">
					<h3 style="margin-bottom:50px;"><?php echo $data['title']; ?></h3>
					<div class="side"><p>作者:<?php echo $name[$data['add_userid']]; ?></p><p>时间:<?php echo date("Y-m-d H:s",$data['add_time'] ); ?></p></div>
				</div>
				<hr style="border-color: #999">
				
		<div><?php echo $data['content']; ?></div>
		</div>
		
		</div>
</div>
</div>
<style type="text/css">
.box{width:1200px;margin:0px auto;}
	.warp{width:100%;margin-top:100px;}
	.left{width:100%;background:#eee; float:left;margin-right:10px;border-radius:5px;}
	.title{width:100%;height:60px; background:#e3e3e3;border-radius:5px;font-size:30px;line-height:60px;margin-top:-30px;}
	.content{padding:20px 40px;}
	.art_title{text-align:center;}
	.side:after{content:'';display:block;clear: both;}
	.side{width:800px;margin:10px auto;color:#999;}
	.side p:nth-child(1){float:left;}
	.side p:nth-child(2){float:right;}
}
</style>
</body>
</html>