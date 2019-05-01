<?
	header("X-Powered-By: LLS/0.3");
	header('Server: LLS/0.3');
	header('Cache-Control: no-cache, no-store, max-age=0, must-revalidate');
	header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
	header('Copyright: LLSupport(CN)/LLSupport(SG)');
	error_reporting(~E_ALL & ~E_NOTICE);
	
	if(isset($_POST['csv'])){
		$_POST['csv'] = str_replace('%20','',$_POST['csv']);
	    $_POST['csv'] = str_replace('%27','',$_POST['csv']);
	    $_POST['csv'] = str_replace('%2527','',$_POST['csv']);
	    $_POST['csv'] = str_replace('*','',$_POST['csv']);
	    $_POST['csv'] = str_replace('"','&quot;',$_POST['csv']);
	    $_POST['csv'] = str_replace("'",'',$_POST['csv']);
	    $_POST['csv'] = str_replace('"','',$_POST['csv']);
	    $_POST['csv'] = str_replace(';','',$_POST['csv']);
	    $_POST['csv'] = str_replace('<','&lt;',$_POST['csv']);
	    $_POST['csv'] = str_replace('>','&gt;',$_POST['csv']);
	    $_POST['csv'] = str_replace("{",'',$_POST['csv']);
	    $_POST['csv'] = str_replace('}','',$_POST['csv']);
	    $_POST['csv'] = str_replace('\\','',$_POST['csv']);
	}
	
	function vf($score,$level){
		$grade = ($score >= 9900000 ? 1.00 : ($score >= 9800000 ? 0.99 : ($score >= 9700000 ? 0.98 : ($score >= 9500000 ? 0.97 : ($score >= 9300000 ? 0.96 : ($score >= 9000000 ? 0.95 : ($score >= 8700000 ? 0.94 : ($score >= 7500000 ? 0.93 : ($score >= 6500000 ? 0.92 : 0.91)))))))));
		$vf = floor(25*($level + 1)*($score / 10000000)*$grade);
		return $vf;
	}
	function vf5($rank,$score,$level){
		switch ($rank) {
			case 'PLAYED':$rank_p = 0.5;break;
			case 'COMPLETE':$rank_p = 1;break;
			case 'EXCESSIVE COMPLETE':$rank_p = 1.02;break;
			case 'ULTIMATE CHAIN':$rank_p = 1.05;break;
			case 'PERFECT':$rank_p = 1.1;break;
		}
		$score_p = ($score >= 9900000 ? 1.05 : ($score >= 9800000 ? 1.02 : ($score >= 9700000 ? 1 : ($score >= 9500000 ? 0.97 : ($score >= 9300000 ? 0.94 : ($score >= 9000000 ? 0.91 : ($score >= 8700000 ? 0.88 : ($score >= 7500000 ? 0.85 : ($score >= 6500000 ? 0.82 : 0.8)))))))));
		$vf =  round((($level*2)*($score/10000000)*$rank_p*$score_p/100),3);
		return $vf;
	}
	function csvToArray($csv){
		$lines = preg_split('/\r\n/',$csv);
		$result = array();
		foreach($lines as $line){
			$header = array("song","difficulty","level","rank","grade","score","play_times","clear_times","uc_times","puc_times","vf","vf5");
			$obj = explode(',',$line);
			$vf = vf($obj[5],$obj[2]);
			array_push($obj,$vf);
			$vf5 = vf5($obj[3],$obj[5],$obj[2]);
			array_push($obj,$vf5);
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
	function getTop50($csv){
		$data = csvToArray($csv);
		foreach ($data as $key => $row) {
			$vf[$key] = $row['vf5'];
		}
		array_multisort($vf, SORT_DESC ,$data);
		return array_slice($data,0,50);
	}
	function Top20VF($csv){
		$data = getTop20($csv);
		foreach ($data as $row) {
			$totalVf += $row['vf']; 
		}
		return $totalVf;
	}
	function Top50VF($csv){
		$data = getTop50($csv);
		foreach ($data as $row) {
			$totalVf += $row['vf5']; 
		}
		return $totalVf;
	}
	function VFicon($csv){
		$vf = Top20VF($csv);
		$icon = ($vf >= '10000' ? '10' : ($vf >= '9500' ? '09' : ($vf >= '9000' ? '08' : ($vf >= '8000' ? '07' : ($vf >= '7000' ? '06' : ($vf >= '6000' ? '05' : ($vf >= '5000' ? '04' : ($vf >= '3000' ? '03' : ($vf >= '1000' ? '02' : '01')))))))));
		return 'force_icon_'.$icon.'.png';
	}
	function countPlay($csv){
		$data = csvToArray($csv);
		$tl1 = 0;$tl2 = 0;$tl3 = 0;$tl4 = 0;$tl5 = 0;$tl6 = 0;$tl7 = 0;$tl8 = 0;$tl9 = 0;$tl1 = 0;$tl10 = 0;$tl11 = 0;$tl12 = 0;$tl13 = 0;$tl14 = 0;$tl15 = 0;$tl16 = 0;$tl17 = 0;$tl18 = 0;$tl19 = 0;$tl20 = 0;
		foreach ($data as $key) {
			$count = ($key['level']>='20' ? $tl20++ :($key['level']>='19' ? $tl19++ : ($key['level']>='18' ? $tl18++ : ($key['level']>='17' ? $tl17++ : ($key['level']>='16' ? $tl16++ : ($key['level']>='15' ? $tl15++ : ($key['level']>='14' ? $tl14++ : ($key['level']>='13' ? $tl13++ : ($key['level']>='12' ? $tl12++ : ($key['level']>='11' ? $tl11++ : ($key['level']>='10' ? $tl10++ : ($key['level']>='9' ? $tl9++ : ($key['level']>='8' ? $tl8++ : ($key['level']>='7' ? $tl7++ : ($key['level']>='6' ? $tl6++ : ($key['level']>='5' ? $tl5++ : ($key['level']>='4' ? $tl4++ : ($key['level']>='3' ? $tl3++ : ($key['level']>='2' ? $tl2++ : $tl1++)))))))))))))))))));
			$allPlay++;
		}
		$play = array(
			1 => array('level'=>'01','played'=>$tl1,'per'=>round((($tl1 / $allPlay) * 100),2)),
			2 => array('level'=>'02','played'=>$tl2,'per'=>round((($tl2 / $allPlay) * 100),2)),
			3 => array('level'=>'03','played'=>$tl3,'per'=>round((($tl3 / $allPlay) * 100),2)),
			4 => array('level'=>'04','played'=>$tl4,'per'=>round((($tl4 / $allPlay) * 100),2)),
			5 => array('level'=>'05','played'=>$tl5,'per'=>round((($tl5 / $allPlay) * 100),2)),
			6 => array('level'=>'06','played'=>$tl6,'per'=>round((($tl6 / $allPlay) * 100),2)),
			7 => array('level'=>'07','played'=>$tl7,'per'=>round((($tl7 / $allPlay) * 100),2)),
			8 => array('level'=>'08','played'=>$tl8,'per'=>round((($tl8 / $allPlay) * 100),2)),
			9 => array('level'=>'09','played'=>$tl9,'per'=>round((($tl9 / $allPlay) * 100),2)),
			10 => array('level'=>'10','played'=>$tl10,'per'=>round((($tl10 / $allPlay) * 100),2)),
			11 => array('level'=>'11','played'=>$tl11,'per'=>round((($tl11 / $allPlay) * 100),2)),
			12 => array('level'=>'12','played'=>$tl12,'per'=>round((($tl12 / $allPlay) * 100),2)),
			13 => array('level'=>'13','played'=>$tl13,'per'=>round((($tl13 / $allPlay) * 100),2)),
			14 => array('level'=>'14','played'=>$tl14,'per'=>round((($tl14 / $allPlay) * 100),2)),
			15 => array('level'=>'15','played'=>$tl15,'per'=>round((($tl15 / $allPlay) * 100),2)),
			16 => array('level'=>'16','played'=>$tl16,'per'=>round((($tl16 / $allPlay) * 100),2)),
			17 => array('level'=>'17','played'=>$tl17,'per'=>round((($tl17 / $allPlay) * 100),2)),
			18 => array('level'=>'18','played'=>$tl18,'per'=>round((($tl18 / $allPlay) * 100),2)),
			19 => array('level'=>'19','played'=>$tl19,'per'=>round((($tl19 / $allPlay) * 100),2)),
			20 => array('level'=>'20','played'=>$tl20,'per'=>round((($tl20 / $allPlay) * 100),2))
		);
		return $play;
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
		var csv = <?=json_encode(csvToArray(isset($_POST['csv'])))?>;
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
		<div class="br"></div><div class="br"></div><div class="br"></div><div class="br"></div><div class="br"></div>
		<div class="mdui-row gobtn">
			<a onclick="location.href='index.php'" class="mdui-btn mdui-btn-raised mdui-color-theme goup">返回</a>
		</div><div class="br"></div>
	    <div class="mdui-card">
	      	<div class="mdui-card-primary">
	       		<div class="mdui-card-primary-title">SDVX-CSV分析器</div>
	        	<div class="mdui-card-primary-subtitle">CSV导入数据进行分析(e-amusement)</div>
	      	</div>
	      	<div class="mdui-card-content">
	      		<form method="post">
	      			<div class="mdui-textfield mdui-textfield-floating-label">
				  		<label class="mdui-textfield-label">CSV</label>
				  		<textarea class="mdui-textfield-input" name="csv" required></textarea>
				 		<div class="mdui-textfield-error">CSV不能为空</div>
					</div>
					<input class="mdui-btn mdui-btn-raised mdui-ripple mdui-color-theme-accent" type="submit" value="提交">
					<a class="mdui-btn mdui-btn-raised mdui-ripple mdui-color-theme-accent" href="sdvx.php?t=<?=time()?>">清空</a>
				</form>
	      	</div>
	    </div>
	    <div class="br"></div>
	    <div class="mdui-card" style="display:<?=(isset($_POST['csv']))?'display':'none'?>">
	      	<div class="mdui-card-primary">
	       		<div class="mdui-card-primary-title">VF Analysis</div>
	      	</div>
	      	<div class="mdui-card-content">
	      		Your VF on SOUND VOLTEX V VIVID WAVE:  <span style="color: red;"><?=(isset($_POST['csv']))?Top50VF($_POST['csv']):''?></span> (on test)<br>
	      		Your VF on SOUND VOLTEX IV HEAVENLY HAVEN: <span style="color: red;"><?=(isset($_POST['csv']))?Top20VF($_POST['csv']):''?></span><br>
	      		<img src="/assets/img/force_icon/<?=(isset($_POST['csv']) ? VFicon($_POST['csv']) : '')?>">
	      		<div class="br"></div>VIVID WAVE BEST50:<br>
	      		<div class="mdui-table-fluid">
		      		<table class="mdui-table">
		      			<thead>
		      				<tr><th>Name</th><th>Difficulty</th><th>Levels</th><th>Status</th><th>Grade</th><th>Score</th><th>Plays</th><th>Clear</th><th>UC</th><th>PUC</th><th>VF(4th)</th><th>VF(5th on test)</th></tr>
		      			</thead>
		      			<tbody>
		      				<?if(isset($_POST['csv'])){foreach(getTop50($_POST['csv']) as $tr){print("<tr><td>".$tr['song']."</td><td>".$tr['difficulty']."</td><td>".$tr['level']."</td><td>".$tr['rank']."</td><td>".$tr['grade']."</td><td>".$tr['score']."</td><td>".$tr['play_times']."</td><td>".$tr['clear_times']."</td><td>".$tr['uc_times']."</td><td>".$tr['puc_times']."</td><td>".$tr['vf']."</td><td>".$tr['vf5']."</td>");}}?>
		      			</tbody>
					</table>
		      	</div>
	      		<div class="br"></div>HEAVENLY HAVEN BEST20:<br>
	      		<div class="mdui-table-fluid">
		      		<table class="mdui-table">
		      			<thead>
		      				<tr><th>Name</th><th>Difficulty</th><th>Levels</th><th>Status</th><th>Grade</th><th>Score</th><th>Plays</th><th>Clear</th><th>UC</th><th>PUC</th><th>VF(4th)</th><th>VF(5th)</th></tr>
		      			</thead>
		      			<tbody>
		      				<?if(isset($_POST['csv'])){foreach(getTop20($_POST['csv']) as $tr){print("<tr><td>".$tr['song']."</td><td>".$tr['difficulty']."</td><td>".$tr['level']."</td><td>".$tr['rank']."</td><td>".$tr['grade']."</td><td>".$tr['score']."</td><td>".$tr['play_times']."</td><td>".$tr['clear_times']."</td><td>".$tr['uc_times']."</td><td>".$tr['puc_times']."</td><td>".$tr['vf']."</td><td>".$tr['vf5']."</td>");}}?>
		      			</tbody>
					</table>
		      	</div>
	      	</div>
	    </div>
	    <div class="br"></div>
	    <div class="mdui-card" style="display:<?=(isset($_POST['csv']))?'display':'none'?>">
	      	<div class="mdui-card-primary">
	       		<div class="mdui-card-primary-title">Level Maps</div>
	      	</div>
	      	<div class="mdui-card-content">
	      		<div class="mdui-table-fluid">
		      		<table class="mdui-table">
		      			<thead>
		      				<tr><th>Song levels</th><th>Plays</th><th>Percentage</th></tr>
		      			</thead>
		      			<tbody>
		      				<?if(isset($_POST['csv'])){foreach(countPlay($_POST['csv']) as $tr){print("<tr><td>".$tr['level']."</td><td>".$tr['played']."</td><td>".$tr['per']."%</td><td>");}}
		      				?>

		      			</tbody>
					</table>
		      	</div>
	      	</div>
	    </div>
	</div>
<?
?>
</body>
</html>