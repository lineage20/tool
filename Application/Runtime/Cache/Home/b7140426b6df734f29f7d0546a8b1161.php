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
<script type="text/javascript" src="/public/tools/js/unixtime.js"></script>
<div class="toolMain" style="padding:20px;width:1030px;padding-bottom:100px;border-radius: 10px;margin-bottom: 10px;">
    <h1>Unix时间戳(timestamp)转换工具</h1>
    <h2>Unix时间戳(Unix timestamp) → 北京时间（刷新页面即可复制当前时间的时间戳到下面输入框中）</h2>

    <p class="tt" style="height:40px;font-size:13pt;margin-top:10px;color:#da0">现在的Unix时间戳是：<span id="currentunixtime"></span></p>
    <script type="text/javascript">currentTime();</script>
    <form name="unix2beijing" action="">
        <input type="text" name="timestamp" id="firstTimestamp" class="tooltext" style="padding:5px;width:200px;">
        <input type="button" value="转换为北京时间 ->" onclick="unix2human();" class="bt-green" style="padding:3px; width:200px;" >
        <input name="result" type="text" class="tooltext" style="padding:5px;width:200px;">
    </form>
    <br>
    <h2 style="margin-top:25px;">北京时间 → Unix时间戳(Unix timestamp)</h2>
    <form name="beijing2unix" action="" style="margin-top:15px;">
    北京时间
    <input name="year" type="text" class="tooltext" style="width:66px;text-align:center" maxlength="4"> 年
    <input type="text" class="tooltext" style="width:36px;text-align:center" name="month" maxlength="2"> 月
    <input type="text" class="tooltext" style="width:36px;text-align:center" name="day" maxlength="2"> 日
    <input type="text" class="tooltext" style="width:36px;text-align:center" name="hour" maxlength="2"> 时
    <input type="text" class="tooltext" style="width:36px;text-align:center" name="minute" maxlength="2"> 分
    <input type="text" class="tooltext" style="width:36px;text-align:center" name="second" maxlength="2"> 秒
    <br /> <br />
    <input type="button" value="转换为Unix时间戳 ↓" class="bt-blue" onclick="human2unix();" style="padding:3px;width:200px;">
    <input type="text" name="result" class="tooltext" style="padding:5px;width:200px;">
    </form>

    <script type="text/javascript">
        var timeNow = new Date();
        document.getElementById("firstTimestamp").value = Math.round(timeNow.getTime() / 1000);
    </script>

        
        


</div>
<!-- <script language="javascript" type="text/javascript" charset="utf-8" src="/Public/js/jquery.min.js" ></script> -->
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