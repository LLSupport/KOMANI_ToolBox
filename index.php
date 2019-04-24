
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
	</script>
	<script type="text/javascript" src="/assets/js/main.js"></script>
</head>
<body class="mdui-loaded mdui-theme-primary-pink mdui-theme-accent-pink">
	<header class="mdui-appbar mdui-appbar-fixed">
		<div class="mdui-toolbar mdui-color-theme">
			<a class="mdui-typo-title" style="text-transform:capitalize;">KOMANI工具箱</a>
			<div class="mdui-toolbar-spacer"></div>
			<span class="mdui-btn mdui-btn-icon mdui-ripple mdui-ripple-white" onclick="window.open('https://github.com/LLSupport/KOMANI_ToolBox','MusicBox','height= 800,width=630,toolbar=no,menubar=no,location=no,status=no,scrollbars=no')">
    			<i class="mdui-icon material-icons">new_releases</i>
    		</span>
		</div>
	</header>
	<div class="mdui-container">
		<div class="br"></div><div class="br"></div><div class="br"></div><div class="br"></div><div class="br"></div><div class="br"></div>
		<div class="br"></div>
	    <div class="mdui-card">
	      	<div class="mdui-card-primary">
	       		<div class="mdui-card-primary-title">SDVX模拟器</div>
	        	<div class="mdui-card-primary-subtitle">Unnamed SDVX clone + SDVX曲包</div>
	      	</div>
	      	<div class="mdui-card-content">
	      		<div class="br"></div>
	      		<p>此为USC基础软件：</p>
	      		<a href="usc/base/usc_base.zip" class="mdui-btn mdui-btn-raised mdui-ripple mdui-color-theme-accent" target="_blank">USC</a><br>
	      		<p>此为1~4代SDVX歌曲曲包：<br>*下载解压放置USC软件中 /songs 文件夹内</p>
	      		<a href="usc/base/usc_1pack.zip" class="mdui-btn mdui-btn-raised mdui-ripple mdui-color-theme-accent" target="_blank">1 SDVX曲包</a>
	      		<a href="usc/base/usc_2pack.zip" class="mdui-btn mdui-btn-raised mdui-ripple mdui-color-theme-accent" target="_blank">2 SDVX曲包</a>
	      		<a href="usc/base/usc_3pack.zip" class="mdui-btn mdui-btn-raised mdui-ripple mdui-color-theme-accent" target="_blank">3 SDVX曲包</a>
	      		<a href="usc/base/usc_4pack.zip" class="mdui-btn mdui-btn-raised mdui-ripple mdui-color-theme-accent" target="_blank">4 SDVX曲包</a>
	      		<p>此为5代SDVX歌曲曲包（持续更新中）：<br>*下载解压放置USC软件中 /songs 文件夹内</p>
	      		<a href="usc_pack.php" class="mdui-btn mdui-btn-raised mdui-ripple mdui-color-theme-accent" target="_blank">5 SDVX曲包</a>
	      		<p><b>* 此功能由 @yuancon 收集打包，由 Noah 提供下载 *</b><br><b>* 主体软件来自于 https://github.com/Drewol/unnamed-sdvx-clone *</b></p>
	      	</div>
	    </div>
	    <div class="mdui-card">
	      	<div class="mdui-card-primary">
	       		<div class="mdui-card-primary-title">KOMANI-DLL修改器</div>
	        	<div class="mdui-card-primary-subtitle"></div>
	      	</div>
	      	<div class="mdui-card-content">
	      		<div class="mdui-row">
	      			<div class="mdui-row-xs-3 mdui-row-sm-6 mdui-row-md-8 mdui-row-lg-10 mdui-grid-list">
	      				<div class="mdui-col mdui-ripple" onclick="location.href='patcher.php?game=beatstream1'">
							<div class="mdui-card mdui-hoverable">
								<div class="mdui-card-media">
									<img src="/assets/img/game/beatstream.png" style="width: 100%;height: auto;">
								</div>
								<div class="mdui-card-actions">
									<div class="mdui-grid-tile-text">
										BeatStream 1
									</div>
								</div>
							</div>
						</div>
						<div class="mdui-col mdui-ripple" onclick="location.href='patcher.php?game=beatstream2'">
							<div class="mdui-card mdui-hoverable">
								<div class="mdui-card-media">
									<img src="/assets/img/game/beatstream2.png" style="width: 100%;height: auto;">
								</div>
								<div class="mdui-card-actions">
									<div class="mdui-grid-tile-text">
										BeatStream 2
									</div>
								</div>
							</div>
						</div>
						<div class="mdui-col mdui-ripple" onclick="location.href='patcher.php?game=tricoro'">
							<div class="mdui-card mdui-hoverable">
								<div class="mdui-card-media">
									<img src="/assets/img/game/tricoro.png" style="width: 100%;height: auto;">
								</div>
								<div class="mdui-card-actions">
									<div class="mdui-grid-tile-text gameTi">
										IIDX 20 Tricoro
									</div>
								</div>
							</div>
						</div>
						<div class="mdui-col mdui-ripple" onclick="location.href='patcher.php?game=spada'">
							<div class="mdui-card mdui-hoverable">
								<div class="mdui-card-media">
									<img src="/assets/img/game/spada.png" style="width: 100%;height: auto;">
								</div>
								<div class="mdui-card-actions">
									<div class="mdui-grid-tile-text gameTi">
										IIDX 21 Spada
									</div>
								</div>
							</div>
						</div>
						<div class="mdui-col mdui-ripple" onclick="location.href='patcher.php?game=pendual'">
							<div class="mdui-card mdui-hoverable">
								<div class="mdui-card-media">
									<img src="/assets/img/game/pendual.png" style="width: 100%;height: auto;">
								</div>
								<div class="mdui-card-actions">
									<div class="mdui-grid-tile-text gameTi">
										IIDX 22 Pendual
									</div>
								</div>
							</div>
						</div>
						<div class="mdui-col mdui-ripple" onclick="location.href='patcher.php?game=copula'">
							<div class="mdui-card mdui-hoverable">
								<div class="mdui-card-media">
									<img src="/assets/img/game/copula.png" style="width: 100%;height: auto;">
								</div>
								<div class="mdui-card-actions">
									<div class="mdui-grid-tile-text gameTi">
										IIDX 23 Copula
									</div>
								</div>
							</div>
						</div>
						<div class="mdui-col mdui-ripple" onclick="location.href='patcher.php?game=sinobuz'">
							<div class="mdui-card mdui-hoverable">
								<div class="mdui-card-media">
									<img src="/assets/img/game/sinobuz.png" style="width: 100%;height: auto;">
								</div>
								<div class="mdui-card-actions">
									<div class="mdui-grid-tile-text gameTi">
										IIDX 24 Sinobuz
									</div>
								</div>
							</div>
						</div>
						<div class="mdui-col mdui-ripple" onclick="location.href='patcher.php?game=cannon'">
							<div class="mdui-card mdui-hoverable">
								<div class="mdui-card-media">
									<img src="/assets/img/game/ballerz.png" style="width: 100%;height: auto;">
								</div>
								<div class="mdui-card-actions">
									<div class="mdui-grid-tile-text gameTi">
										IIDX 25 Cannon Ballers
									</div>
								</div>
							</div>
						</div>
						<div class="mdui-col mdui-ripple" onclick="location.href='patcher.php?game=prop'">
							<div class="mdui-card mdui-hoverable">
								<div class="mdui-card-media">
									<img src="/assets/img/game/prop.png" style="width: 100%;height: auto;">
								</div>
								<div class="mdui-card-actions">
									<div class="mdui-grid-tile-text gameTi">
										Jubeat Prop
									</div>
								</div>
							</div>
						</div>
						<div class="mdui-col mdui-ripple" onclick="location.href='patcher.php?game=quball'">
							<div class="mdui-card mdui-hoverable">
								<div class="mdui-card-media">
									<img src="/assets/img/game/qubell.png" style="width: 100%;height: auto;">
								</div>
								<div class="mdui-card-actions">
									<div class="mdui-grid-tile-text gameTi">
										Jubeat Qubell
									</div>
								</div>
							</div>
						</div>
						<div class="mdui-col mdui-ripple" onclick="location.href='patcher.php?game=clan'">
							<div class="mdui-card mdui-hoverable">
								<div class="mdui-card-media">
									<img src="/assets/img/game/clan.png" style="width: 100%;height: auto;">
								</div>
								<div class="mdui-card-actions">
									<div class="mdui-grid-tile-text gameTi">
										Jubeat Clan
									</div>
								</div>
							</div>
						</div>
						<div class="mdui-col mdui-ripple" onclick="location.href='patcher.php?game=ddr2014'">
							<div class="mdui-card mdui-hoverable">
								<div class="mdui-card-media">
									<img src="/assets/img/game/ddr2014.png" style="width: 100%;height: auto;">
								</div>
								<div class="mdui-card-actions">
									<div class="mdui-grid-tile-text gameTi">
										DDR 2014
									</div>
								</div>
							</div>
						</div>
						<div class="mdui-col mdui-ripple" onclick="location.href='patcher.php?game=ddra'">
							<div class="mdui-card mdui-hoverable">
								<div class="mdui-card-media">
									<img src="/assets/img/game/ddra.png" style="width: 100%;height: auto;">
								</div>
								<div class="mdui-card-actions">
									<div class="mdui-grid-tile-text gameTi">
										DDR A
									</div>
								</div>
							</div>
						</div>
						<div class="mdui-col mdui-ripple" onclick="location.href='patcher.php?game=lapis'">
							<div class="mdui-card mdui-hoverable">
								<div class="mdui-card-media">
									<img src="/assets/img/game/lapis.png" style="width: 100%;height: auto;">
								</div>
								<div class="mdui-card-actions">
									<div class="mdui-grid-tile-text gameTi">
										Pop'n 22 Lapistoria
									</div>
								</div>
							</div>
						</div>
						<div class="mdui-col mdui-ripple" onclick="location.href='patcher.php?game=eclale'">
							<div class="mdui-card mdui-hoverable">
								<div class="mdui-card-media">
									<img src="/assets/img/game/eclale.png" style="width: 100%;height: auto;">
								</div>
								<div class="mdui-card-actions">
									<div class="mdui-grid-tile-text gameTi">
										Pop'n 23 éclale
									</div>
								</div>
							</div>
						</div>
						<div class="mdui-col mdui-ripple" onclick="location.href='patcher.php?game=usaneko'">
							<div class="mdui-card mdui-hoverable">
								<div class="mdui-card-media">
									<img src="/assets/img/game/usaneko.png" style="width: 100%;height: auto;">
								</div>
								<div class="mdui-card-actions">
									<div class="mdui-grid-tile-text gameTi">
										Pop'n 24 うさぎと猫と少年の夢
									</div>
								</div>
							</div>
						</div>
						<div class="mdui-col mdui-ripple" onclick="location.href='patcher.php?game=groovin'">
							<div class="mdui-card mdui-hoverable">
								<div class="mdui-card-media">
									<img src="/assets/img/game/groovin.png" style="width: 100%;height: auto;">
								</div>
								<div class="mdui-card-actions">
									<div class="mdui-grid-tile-text gameTi">
										RB groovin'!! Upper
									</div>
								</div>
							</div>
						</div>
						<div class="mdui-col mdui-ripple" onclick="location.href='patcher.php?game=sdvx3'">
							<div class="mdui-card mdui-hoverable">
								<div class="mdui-card-media">
									<img src="/assets/img/game/sdvx.png" style="width: 100%;height: auto;">
								</div>
								<div class="mdui-card-actions">
									<div class="mdui-grid-tile-text gameTi">
										SDVX III
									</div>
								</div>
							</div>
						</div>
						<div class="mdui-col mdui-ripple" onclick="location.href='patcher.php?game=sdvx4'">
							<div class="mdui-card mdui-hoverable">
								<div class="mdui-card-media">
									<img src="/assets/img/game/sdvx4.png" style="width: 100%;height: auto;">
								</div>
								<div class="mdui-card-actions">
									<div class="mdui-grid-tile-text gameTi">
										SDVX IV HEAVENLY HAVEN
									</div>
								</div>
							</div>
						</div>
	      			</div>
	      		</div>
	      		<p><b>* 此功能由 mon.in 创作，由 Noah 进行二次编辑 *</b><br><b>* This software was created by mon.im and was modified by Noah *</b></p>
	      	</div>
	    </div>
	    <div class="br"></div>
	    <div class="mdui-card">
	      	<div class="mdui-card-primary">
	       		<div class="mdui-card-primary-title">Ar**** 加速器</div>
	        	<div class="mdui-card-primary-subtitle">用于 Ar**** 访问性改善等</div>
	      	</div>
	      	<div class="mdui-card-content">
	      		如要使用？将ea3-config.xml 内的<pre>&lt;network&gt;...&lt;/network&gt;</pre> 替换为以下内容
	      		<pre>
&lt;network&gt;
	&lt;ssl __type=&quot;bool&quot;&gt;1&lt;/ssl&gt;
	&lt;url_slash __type=&quot;bool&quot;&gt;0&lt;/url_slash&gt;
	&lt;services __type=&quot;str&quot;&gt;http://eamu.lovelivesupport.com&lt;/services&gt;
	&lt;sz_xrpc_buf __type=&quot;u32&quot;&gt;102400&lt;/sz_xrpc_buf&gt;
&lt;/network&gt;
	      		</pre>
	      	</div>
	    </div>
	    <div class="br"></div>
	    <div class="mdui-card">
	      	<div class="mdui-card-primary">
	       		<div class="mdui-card-primary-title">SDVX-CSV分析器</div>
	        	<div class="mdui-card-primary-subtitle">CSV导入数据进行分析(e-amusement)</div>
	      	</div>
	      	<div class="mdui-card-content">
	      		<form method="post" action="sdvx.php">
	      			<div class="mdui-textfield mdui-textfield-floating-label">
				  		<label class="mdui-textfield-label">CSV</label>
				  		<textarea class="mdui-textfield-input" name="csv" required></textarea>
				 		<div class="mdui-textfield-error">CSV不能为空</div>
					</div>
					<input class="mdui-btn mdui-btn-raised mdui-ripple mdui-color-theme-accent" type="submit" value="提交">
				</form>
	      	</div>
	    </div>
	</div>
</body>
</html>