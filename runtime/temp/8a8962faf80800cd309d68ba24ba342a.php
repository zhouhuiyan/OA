<?php if (!defined('THINK_PATH')) exit(); /*a:6:{s:81:"D:\my\kecheng\thinkphp\OAofficeSystem\public/../application/oa\view\week\add.html";i:1541686286;s:74:"D:\my\kecheng\thinkphp\OAofficeSystem\application\oa\view\common\head.html";i:1541253332;s:76:"D:\my\kecheng\thinkphp\OAofficeSystem\application\oa\view\common\navbar.html";i:1541253489;s:77:"D:\my\kecheng\thinkphp\OAofficeSystem\application\oa\view\common\sidebar.html";i:1541596562;s:76:"D:\my\kecheng\thinkphp\OAofficeSystem\application\oa\view\common\footer.html";i:1541053303;s:76:"D:\my\kecheng\thinkphp\OAofficeSystem\application\oa\view\common\script.html";i:1540990239;}*/ ?>


    <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo \think\Config::get('appname'); ?></title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
	<meta name="keywords" content="关键词"/>
	<meta name="description" content="网站描述"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0"/>
	<link rel="stylesheet" href="/static/css/bootstrap.css"/>
	<link rel="stylesheet" href="/static/css/font-awesome.css"/>
	<link rel="stylesheet" href="/static/css/jquery-ui.css"/>
	<link rel="stylesheet" href="/static/css/ace-fonts.css"/>
	<link rel="stylesheet" href="/static/css/ace.css" class="ace-main-stylesheet" id="main-ace-style"/>
	<script src="/static/js/ace-extra.js"></script>
	<script src="/static/js/jquery.js"></script>
</head>
<script type="text/javascript" charset="utf-8" src="/static/ueditor/ueditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="/static/ueditor/ueditor.all.min.js"> </script>
<!--建议手动加在语言，避免在ie下有时因为加载语言失败导致编辑器加载失败-->
<!--这里加载的语言文件会覆盖你在配置项目里添加的语言类型，比如你在配置项目里配置的是英文，这里加载的中文，那最后就是中文-->
 <script type="text/javascript" charset="utf-8" src="/static/ueditor/lang/zh-cn/zh-cn.js"></script>
<body class="no-skin">
	<div id="navbar" class="navbar navbar-default">
		<div class="navbar-container" id="navbar-container">
			<button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
				<span class="sr-only">Toggle sidebar</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<div class="navbar-header pull-left">
				<a href="index.html" class="navbar-brand">
					<small><i class="fa fa-home"></i><?php echo \think\Config::get('appname'); ?></small>
				</a>
			</div>
			<div class="navbar-buttons navbar-header pull-right" role="navigation">
				<ul class="nav ace-nav">
					<li class="red">
						<a href="#" title="前台首页" target="_blank">
							<i class="ace-icon fa fa-home"></i>
						</a>
					</li>
					<li class="light-blue">
						<a data-toggle="dropdown" href="#" class="dropdown-toggle">
							<?php if(\think\Session::get('userinfo.photo')): ?>
							<img class="nav-user-photo" src="<?php echo \think\Session::get('userinfo.photo'); ?>" alt="admin" />					
							<?php else: ?>
							<img class="nav-user-photo" src="<?php echo \think\Config::get('default_headimg'); ?>" alt="admin" />
							<?php endif; ?>
							<span class="user-info">
							<small>欢迎光临</small><?php echo \think\Session::get('userinfo.member_name'); ?></span><i class="ace-icon fa fa-caret-down"></i>
						</a>
						<ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
							<li>
								<a href="profile.html"><i class="ace-icon fa fa-user"></i>个人资料</a>
							</li>
							<li class="divider"></li>
							<li>
								<a href="<?php echo url('login/outLogin'); ?>"><i class="ace-icon fa fa-power-off"></i>退出</a>
							</li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="ace-settings-container" id="ace-settings-container">
		<div class="btn btn-app btn-xs btn-warning ace-settings-btn" id="ace-settings-btn">
			<i class="ace-icon fa fa-cog bigger-130"></i>
		</div>
		<div class="ace-settings-box clearfix" id="ace-settings-box">
			<div class="pull-left width-50">
				<div class="ace-settings-item">
					<div class="pull-left">
						<select id="skin-colorpicker" class="hide">
							<option data-skin="no-skin" value="#438EB9">#438EB9</option>
							<option data-skin="skin-1" value="#222A2D">#222A2D</option>
							<option data-skin="skin-2" value="#C6487E">#C6487E</option>
							<option data-skin="skin-3" value="#D0D0D0">#D0D0D0</option>
						</select>
					</div>
					<span>&nbsp; 选择皮肤</span>
				</div>
				<div class="ace-settings-item">
					<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-navbar"/>
					<label class="lbl" for="ace-settings-navbar"> 固定导航条</label>
				</div>
				<div class="ace-settings-item">
					<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-sidebar"/>
					<label class="lbl" for="ace-settings-sidebar"> 固定侧边栏</label>
				</div>
				<div class="ace-settings-item">
					<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-breadcrumbs"/>
					<label class="lbl" for="ace-settings-breadcrumbs"> 固定面包屑</label>
				</div>
				<div class="ace-settings-item">
					<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-rtl"/>
					<label class="lbl" for="ace-settings-rtl"> 切换至左边</label>
				</div>
				<div class="ace-settings-item">
					<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-add-container"/>
					<label class="lbl" for="ace-settings-add-container">切换宽窄度</label>
				</div>
			</div>
			<div class="pull-left width-50">
				<div class="ace-settings-item">
					<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-hover"/>
					<label class="lbl" for="ace-settings-hover"> 子菜单收起</label>
				</div>
				<div class="ace-settings-item">
					<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-compact"/>
					<label class="lbl" for="ace-settings-compact"> 侧边栏紧凑</label>
				</div>
				<div class="ace-settings-item">
					<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-highlight"/>
					<label class="lbl" for="ace-settings-highlight"> 当前位置</label>
				</div>
			</div>
		</div>
	</div>
	<div class="main-container" id="main-container">
				<div id="sidebar" class="sidebar responsive">
			<div class="sidebar-shortcuts" id="sidebar-shortcuts">
				<div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
					<button class="btn btn-success">
						<i class="ace-icon fa fa-signal"></i>
					</button>
					<button class="btn btn-info">
						<i class="ace-icon fa fa-pencil"></i>
					</button>
					<button class="btn btn-warning">
						<i class="ace-icon fa fa-users"></i>
					</button>
					<button class="btn btn-danger">
						<i class="ace-icon fa fa-cogs"></i>
					</button>
				</div>
				<div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
					<span class="btn btn-success"></span>
					<span class="btn btn-info"></span>
					<span class="btn btn-warning"></span>
					<span class="btn btn-danger"></span>
				</div>
			</div>
			<ul class="nav nav-list">
				<li class="active">
					<a href="/">
						<i class="menu-icon fa fa-tachometer"></i>
						<span class="menu-text">首页</span>
					</a>
					<b class="arrow"></b>
				</li>
				<?php if(is_array($tree) || $tree instanceof \think\Collection || $tree instanceof \think\Paginator): $i = 0; $__LIST__ = $tree;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?>
				<li>
					<a href="#" class="dropdown-toggle">
						<i class="menu-icon fa fa-<?php echo $val['icon']; ?>"></i>
						<span class="menu-text"><?php echo $val['per_name']; ?></span>
						<b class="arrow fa fa-angle-down"></b>
					</a>
					<b class="arrow"></b>
					<ul class="submenu">
						<?php if(is_array($val['children']) || $val['children'] instanceof \think\Collection || $val['children'] instanceof \think\Paginator): $i = 0; $__LIST__ = $val['children'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
						<li>
							<a href="<?php echo url($item['address']); ?>"><i class="menu-icon fa fa-caret-right"></i><?php echo $item['per_name']; ?></a>
							<b class="arrow"></b>
						</li>
						<?php endforeach; endif; else: echo "" ;endif; ?>
					</ul>              
				</li>
				<?php endforeach; endif; else: echo "" ;endif; ?>
				<li>
					<a href="#" class="dropdown-toggle">
						<i class="menu-icon fa fa-user"></i>
						<span class="menu-text">个人中心</span>
						<b class="arrow fa fa-angle-down"></b>
					</a>
					<b class="arrow"></b>
					<ul class="submenu">
						<li>
							<a href="profile.html"><i class="menu-icon fa fa-user"></i>个人资料</a>
							<b class="arrow"></b>
						</li>
						<li>
							<a href="<?php echo url('login/outLogin'); ?>"><i class=""></i>退出</a>
							<b class="arrow"></b>
						</li>                    
					</ul>
				</li>
			</ul>
			<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
				<i class="ace-icon fa fa-angle-double-left" data-icon1="ace-icon fa fa-angle-double-left"
				data-icon2="ace-icon fa fa-angle-double-right"></i>
			</div>
		</div>
		<div class="main-content">
			<div class="main-content-inner">
				<div class="breadcrumbs" id="breadcrumbs">
					<ul class="breadcrumb">
						<li>
							<i class="ace-icon fa fa-home home-icon"></i>
							<a href="index.html">首页</a>
						</li>
						<li>
							<a href="<?php echo url('week/index'); ?>">我的周报</a>
						</li>
						<li class="active">添加周报</li>
					</ul>
				</div>
				<div class="page-content">			
					<div style="width:726px;margin:0px;text-align:center;">
						<h3 style="margin-left:60px;">添加周报</h3>
						<form method="POST" action="<?php echo url('week/add'); ?>" class='form-horizontal'>						
						 	<div class="form-group">
								<label class="col-sm-2 control-label" for="a">标题:</label>
								<div class="col-sm-10">
								<input type="text" name="title" class='form-control' id="a">	
								</div>
						 	</div>
						 	<div class="form-group">
								<label class="col-sm-2 control-label" for="a">分类:</label>
								<div class="col-sm-10">
								<select name="type" class="form-control">
									<option value="" selected>请选择类型</option>
									<?php if(is_array($types) || $types instanceof \think\Collection || $types instanceof \think\Paginator): $i = 0; $__LIST__ = $types;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$type): $mod = ($i % 2 );++$i;?>
									<option value="<?php echo $type['id']; ?>"><?php echo $type['type']; ?></option>
									<?php endforeach; endif; else: echo "" ;endif; ?>
								</select>	
								</div>
						 	</div>	
							<input type="hidden" name="author" value="<?php echo \think\Session::get('userinfo.id'); ?>">

							<div class="form-group"> 
								<label class="col-sm-2 control-label"> 内容: </label>
							<!-- <textarea name="content" style="width:300px;height:150px;"></textarea><br> -->
							<div class="col-sm-10">
								<script id="editor" type="text/plain" style="width:600px;height:400px;"></script>	
							</div>
							</div>	

							<input type="submit" class="btn btn-info">
							<input type="reset" class="btn">
							</form>
					</div>
					<script type="text/javascript">
						   var ue = UE.getEditor('editor');
					</script>
				</div>
			</div>
		</div>
		<div class="footer">
	<div class="footer-inner">
		<div class="footer-content">
			<span class="bigger-120">
			<small>Copyright &copy; 2018 zhy All Rights Reserved.</small>
			</span>
		</div>
	</div>   
</div>
<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
	<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
</a>    
	</div>
	<script src="/static/js/bootstrap.js"></script>
	<script src="/static/js/bootbox.js"></script>
	<script src="/static/js/ace/elements.scroller.js"></script>
	<script src="/static/js/ace/elements.colorpicker.js"></script>
	<script src="/static/js/ace/elements.aside.js"></script>
	<script src="/static/js/ace/ace.js"></script>
	<script src="/static/js/ace/ace.touch-drag.js"></script>
	<script src="/static/js/ace/ace.sidebar.js"></script>
	<script src="/static/js/ace/ace.sidebar-scroll-1.js"></script>
	<script src="/static/js/ace/ace.submenu-hover.js"></script>
	<script src="/static/js/ace/ace.widget-box.js"></script>
	<script src="/static/js/ace/ace.settings.js"></script>
	<script src="/static/js/ace/ace.settings-rtl.js"></script>
	<script src="/static/js/ace/ace.settings-skin.js"></script>
	<script src="/static/js/jquery-ui.js"></script>
	<script src="/static/js/layer/layer.js"></script>

</body>
</html>
	
