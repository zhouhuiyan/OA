<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:84:"D:\my\kecheng\thinkphp\OAofficeSystem\public/../application/blog\view\.\artlist.html";i:1541953145;}*/ ?>
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
				<p style="padding-left:20px;"><a href="<?php echo url('index/index'); ?>">首页</a> &gt; 文章列表</p>
			</div>
			<div class="content">
				<div class="art_title">
					<ul>
						<?php if(is_array($data) || $data instanceof \think\Collection || $data instanceof \think\Paginator): if( count($data)==0 ) : echo "" ;else: foreach($data as $key=>$val): ?>
						<li>
							<a href="<?php echo url('index/article',array('id'=>$key,'lid'=>$lid)); ?>"><?php echo $val['title']; ?></a>
						</li>
						<?php endforeach; endif; else: echo "" ;endif; ?>
					</ul>
				</div>
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