<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0033)http://tools.php1.cn/?s=cssformat -->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>CSS代码格式化工具</title>
	<link rel="stylesheet" href="/public/tools/css/common.css" type="text/css">
	<link rel="stylesheet" href="/public/tools/css/index.css" type="text/css">
	<meta name="baidu_union_verify" content="1f4bf8fb796d8702f9dcff06a09ed8ff">
	<meta name="keywords" content="刘宁,个人网站,宁静致远,php,技术博客" />
	<meta name="description" content="刘宁个人博客，是记录博主学习和成长的一个自媒体博客。关注于web前端技术和PHP技术的学习研究,同时博客免费提供了各种技术学习资源（带源码）下载学习！" />
	<meta name="generator" content="Discuz! X3.2" />
	<meta name="author" content="Discuz! Team and Comsenz UI Team" />
	<meta name="copyright" content="2001-2013 Comsenz Inc." />
	<meta name="MSSmartTagsPreventParsing" content="True" />
	<meta http-equiv="MSThemeCompatible" content="Yes" />
	<meta name="application-name" content="宁静致远" />
	<meta name="msapplication-tooltip" content="宁静致远" />
	<link rel="shortcut icon" href="/public/images/favicon.ico">
	<!-- //百度统计 -->
	<script>
		var _hmt = _hmt || [];
		(function() {
			var hm = document.createElement("script");
			hm.src = "https://hm.baidu.com/hm.js?1ef7ac1602114b715ac1ed4759c7343f";
			var s = document.getElementsByTagName("script")[0]; 
			s.parentNode.insertBefore(hm, s);
		})();
	</script>
</head>
<body>

	<script src="/public/tools/js/push.js"></script><script type="text/javascript" src="/public/tools/js/cssformat.js"></script>
	<div class="top-nav">
		<div class="main">

			<div class="logo"><a href="" title="宁静致远"><img src="/public/tools/images/logo.png" alt="宁静致远" style="width: 143px;height: 55px;"></a></div>

			<div class="nav">
				<ul>

					<li style="position:relative"><a href="/"  title="首页">首页</a></li>
				<!-- 	<li style="position:relative"><a href="#" target="_blank" title="PHP教程">PHP教程</a></li>
					<li style="position:relative"><a href="#" target="_blank" title="前端开发">前端技术</a></li>
					<li style="position:relative"><a href="#" target="_blank" title="PHP问答">在线问答</a></li>
					<li style="position:relative"><a href="#" target="_blank" title="Web服务器">Web服务器</a></li> -->
					<li style="position:relative"><a href="<?php echo U('/index/tools')?>"  title="CSS代码格式化工具">CSS代码格式化工具</a></li>
					<li style="position:relative"><a href="<?php echo U('/index/timestamp')?>"  title="Unix时间戳(timestamp)转换工具">Unix时间戳(timestamp)转换工具</a></li>
					<li style="position:relative"><a href="<?php echo U('/index/qrcode')?>"  title="二维码生成工具">二维码生成工具</a></li>

				</ul>
			</div>
		</div>
	</div>
	<div class="toolMain">
		<h1>CSS代码格式化工具</h1>  
		<h2>请将CSS代码复制到下面表单中:</h2>
		<textarea class="toolarea" id="code">#b {
	width:1200px;
	padding:0 12px;
	background:#FFF;
	position:relative
}
.l {
	width:844px;
	float:left;
	border-right:1px solid #DDD;
	padding-right:10px;
	position:relative
}
.m {
	width:670px;
	float:left;
	border-right:1px solid #DDD;
	padding-right:10px;
	position:relative
}
.r {
	width:336px;
	float:right;
	padding-bottom:200px
}
.topbg {
	height:30px;
	background:url(http://img.lanrentuku.com/img/images/a.png) repeat -20px 0
}</textarea>
<input class="bt-green" onclick="$(&#39;code&#39;).value = CSSencode($(&#39;code&#39;).value);" value="横向排列" type="button">
<input class="bt-blue" onclick="$(&#39;code&#39;).value = CSSdecode($(&#39;code&#39;).value);" value="竖向排列" type="button">
</div>
<div style="clear: both"></div>
<script>
	(function(){
		var bp = document.createElement('script');
		var curProtocol = window.location.protocol.split(':')[0];
		if (curProtocol === 'https') {
			bp.src = 'https://zz.bdstatic.com/linksubmit/pusha.js';
		}
		else {
			bp.src = 'http://push.zhanzhang.baidu.com/pushar.js';
		}
		var s = document.getElementsByTagName("script")[0];
		s.parentNode.insertBefore(bp, s);
	})();
</script>
</body></html>