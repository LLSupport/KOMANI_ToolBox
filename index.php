<?
	header("X-Powered-By: LLS/0.3");
	header('Server: LLS/0.3');
	header('Cache-Control: no-cache, no-store, max-age=0, must-revalidate');
	header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
	header('Copyright: LLSupport(CN)/LLSupport(SG)');

	function vf($score,$level){
		$grade = ($score >= 9900000 ? 1.00 : ($score >= 9800000 ? 0.99 : ($score >= 9700000 ? 0.98 : ($score >= 9500000 ? 0.97 : ($score >= 9300000 ? 0.96 : ($score >= 9000000 ? 0.95 : ($score >= 8700000 ? 0.94 : ($score >= 7500000 ? 0.93 : ($score >= 6500000 ? 0.92 : 0.91)))))))));
		$vf = floor(25*($level + 1)*($score / 10000000)*$grade);
		return $vf;
	}
	function csvToArray($csv){
		$lines = preg_split('/\r\n/',$csv);
		$result = array();
		foreach($lines as $line){
			$header = array("song","difficulty","level","rival","grade","score","play_times","clear_times","uc_times","puc_times","vf");
			$obj = explode(',',$line);
			$vf = vf($obj[5],$obj[2]);
			array_push($obj,$vf);
			$result[]=array_combine($header,$obj);
		}
		asort($result);
		return $result;
	}
	function getTop20($csv){
		$data = csvToArray($csv);
		foreach ($data as $key => $row) {
			$vf[$key] = $row['vf'];
		}
		array_multisort($vf, SORT_DESC ,$data);
		return array_slice($data,0,20);
	}
	function Top20VF($csv){
		$data = getTop20($csv);
		foreach ($data as $row) {
			$totalVf += $row['vf']; 
		}
		return $totalVf;
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
    <title>SDVX分析器</title>
    <!-- CSS -->
	<link href="/assets/css/mdui.min.css" rel="stylesheet" />
	<link href="/assets/css/doc.css" rel="stylesheet" />
	<link href="/assets/css/main.css" rel="stylesheet"/>
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
	<script>
		var $$ = mdui.JQ;
		var csv = <?=json_encode(csvToArray($_POST['csv']))?> ;
	</script>
	<script type="text/javascript" src="/assets/js/main.js"></script>
</head>
<body class="mdui-loaded mdui-theme-primary-pink mdui-theme-accent-pink">
	<header class="mdui-appbar mdui-appbar-fixed">
		<div class="mdui-toolbar mdui-color-theme">
			<a class="mdui-typo-title" style="text-transform:capitalize;">SDVX分析器</a>
			<div class="mdui-toolbar-spacer"></div>
		</div>
	</header>
	<div class="mdui-container">
		<div class="br"></div><div class="br"></div><div class="br"></div><div class="br"></div><div class="br"></div><div class="br"></div>
		<div class="mdui-card">
	      	<div class="mdui-card-primary">
	       		<div class="mdui-card-primary-title">CSV导入</div>
	        	<div class="mdui-card-primary-subtitle">CSV导入数据进行分析</div>
	      	</div>
	      	<div class="mdui-card-content">
	      		<form method="post">
	      			<div class="mdui-textfield mdui-textfield-floating-label">
				  		<label class="mdui-textfield-label">CSV</label>
				  		<textarea class="mdui-textfield-input" name="csv" required></textarea>
				 		<div class="mdui-textfield-error">CSV不能为空</div>
					</div>
					<input class="mdui-btn mdui-btn-raised mdui-ripple mdui-color-theme-accent" type="submit" value="提交">
					<a class="mdui-btn mdui-btn-raised mdui-ripple mdui-color-theme-accent" href="index.php?t=<?=time()?>">清空</a>
				</form>
	      	</div>
	    </div>
	    <div class="mdui-card" style="display:<?=($_POST['csv'])?'display':'none'?>">
	      	<div class="mdui-card-primary">
	       		<div class="mdui-card-primary-title">分析结果</div>
	      	</div>
	      	<div class="mdui-card-content">
	      		你的总VF为: <?=($_POST['csv'])?Top20VF($_POST['csv']):''?><div class="br"></div>
	      		你的 BEST20 曲目信息：<br>
	      		<div class="mdui-table-fluid">
		      		<table class="mdui-table">
		      			<thead>
		      				<tr><th>歌曲名</th><th>难易度</th><th>等级</th><th>状态</th><th>评价</th><th>分数</th><th>游玩次数</th><th>通关次数</th><th>UC次数</th><th>PUC次数</th><th>所得VF</th></tr>
		      			</thead>
		      			<tbody>
		      				<?if($_POST['csv']){foreach(getTop20($_POST['csv']) as $tr){print("<tr><td>".$tr['song']."</td><td>".$tr['difficulty']."</td><td>".$tr['level']."</td><td>".$tr['rival']."</td><td>".$tr['grade']."</td><td>".$tr['score']."</td><td>".$tr['play_times']."</td><td>".$tr['clear_times']."</td><td>".$tr['uc_times']."</td><td>".$tr['puc_times']."</td><td>".$tr['vf']."</td>");}}?>
		      			</tbody>
					</table>
		      	</div>
	      	</div>
	    </div>
	</div>
</body>
</html>