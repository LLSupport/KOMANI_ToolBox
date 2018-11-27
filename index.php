<?
header("X-Powered-By: LLS/0.3");
header('Server: LLS/0.3');
header('Content-Type: text/html; charset=utf-8');
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
		$data = csvToArray($_POST['csv']);
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
	<title>SDVX统计器</title>
	<meta charset="utf-8">
</head>
<body>
	请从KOMANI的SDVX用户后台生成CSV并复制此处提交：<br>
	<form method="post">
		<textarea name="csv"></textarea>
		<input type="submit" value="提交">
	</form>
	<a href="index.php?t=<?=time()?>">清空</a>
	<?
		if ($_POST['csv']) {
			print("<hr>你的VF为：".Top20VF($_POST['csv'])."<br><br>");	
			print("你的 BEST20 曲目信息：<br><br><table border='2'><tr><td>歌曲名</td><td>难易度</td><td>等级</td><td>状态</td><td>评价</td><td>分数</td><td>游玩次数</td><td>通关次数</td><td>UC次数</td><td>PUC次数</td><td>所得VF</td></tr>");
			foreach(getTop20($_POST['csv']) as $tr){
				print("<tr><td>".$tr['song']."</td><td>".$tr['difficulty']."</td><td>".$tr['level']."</td><td>".$tr['rival']."</td><td>".$tr['grade']."</td><td>".$tr['score']."</td><td>".$tr['play_times']."</td><td>".$tr['clear_times']."</td><td>".$tr['uc_times']."</td><td>".$tr['puc_times']."</td><td>".$tr['vf']."</td>");
			}
			print("</table>");
		}	
	?>
	
	</table>
</body>
</html>