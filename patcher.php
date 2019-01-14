<?
	header("X-Powered-By: LLS/0.3");
	header('Server: LLS/0.3');
	header('Cache-Control: no-cache, no-store, max-age=0, must-revalidate');
	header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
	header('Copyright: LLSupport(CN)/LLSupport(SG)');
	error_reporting(~E_ALL & ~E_NOTICE);

	if(!$_GET['game']){
		header("HTTP/1.1 200 OK");
		header('Cache-Control: no-cache, no-store, max-age=0, must-revalidate');
		header("Location:/index.php");
		die();
	}else{
		if(!file_exists('includes/patcher/'.$_GET['game'].'.php')) {
			header('HTTP/1.1 404 Not Found');
			header('Cache-Control: no-cache, no-store, max-age=0, must-revalidate');
			header("Location:/index.php");
			die();
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta name="apple-mobile-web-app-capable" content="yes"/>
	<meta name="mobile-web-app-capable" content="yes">
	<meta content="black-translucent" name="apple-mobile-web-app-status-bar-style">
	<meta http-equiv="Cache-Control" content="no-siteapp"/>
	<meta name="apple-mobile-web-app-title" content="LLSupport">
	<meta content="telephone=no" name="format-detection"/>
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
    <title>KOMANI工具箱</title>
    <!-- CSS -->
	<link href="/assets/css/mdui.min.css" rel="stylesheet" />
	<link href="/assets/css/doc.css" rel="stylesheet" />
	<link href="/assets/css/main.css?v=<?=time()?>" rel="stylesheet"/>
	<link href="/assets/css/patcher.css?v=<?=time()?>" rel="stylesheet"/>
	<style type="text/css">
		.mdui-textfield-input{
			max-height: 200px;
		}
	</style>
	<!-- Script -->
	<script type="text/javascript" src="/assets/js/jquery.min.js"></script>
	<script type="text/javascript" src="/assets/js/jsencrypt.js"></script>
	<script type="text/javascript" src="/assets/js/smooth-scroll.js"></script>
	<script type="text/javascript" src="/assets/js/holder.js"></script>
	<script type="text/javascript" src="/assets/js/highlight.js"></script>
	<script type="text/javascript" src="/assets/js/mdui.js" ></script>
	<script type="text/javascript" src="/assets/js/FileSaver.min.js"></script>
    <script type="text/javascript" src="/assets/js/dllpatcher.js?v=<?=time()?>"></script>
	<script>
		var $$ = mdui.JQ;
	</script>
	<script type="text/javascript" src="/assets/js/main.js"></script>
</head>
<body class="mdui-loaded mdui-theme-primary-pink mdui-theme-accent-pink">
	<header class="mdui-appbar mdui-appbar-fixed">
		<div class="mdui-toolbar mdui-color-theme">
			<a class="mdui-typo-title" style="text-transform:capitalize;">KOMANI工具箱</a>
			<div class="mdui-toolbar-spacer"></div>
		</div>
	</header>
	<div class="mdui-container">
		<div class="br"></div><div class="br"></div>
		<div class="mdui-row gobtn">
			<a onclick="location.href='index.php'" class="mdui-btn mdui-btn-raised mdui-color-theme goup">返回</a>
		</div>
		<div class="br"></div>
		<? require_once 'includes/patcher/'.$_GET['game'].'.php'; ?>
	</div>
</body>
</html>