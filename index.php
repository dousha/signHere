<!DOCTYPE html>
<html>
<?php
	include("lib/header.php");
	include("lib/panel.php");
	include("lib/nav.php");
	include("lib/form.php");
	include("lib/popup.php");
	head('洛阳外国语学校在线报名系统');
?>
<body style="margin-top:5px;">
	<noscript>
		<p>
			This page requires Javascript and Cookies enabled to work.<br>
			For privacy issues. Well, you can't always be anonymous. You will
			have to provide us with your real identity in order to register 
			an account for your real life.<br>
			Though as always, you can <a href="privacy.html">check our Terms
			of Privacy</a>.
			If you resist on not enabling Javascript and Cookies, you may 
			reach <a href="manual_override.html">this page</a> to get our 
			address and register manually.
		</p>
		<p>
			此页面依赖 JavaScript 和 Cookie. 您需要启用它们来正常地注册。<br>
			关于隐私保护，可参阅<a href="privacy.html">隐私保护条款</a>。<br>
			如果出于某些原因您无法启用 JavaScript 或 Cookie, 您可以到
			<a href="manual_override.html">学校本部</a>来注册。
		</p>
	</noscript>
	<!--[if lt IE 9]>
		<table>
			<tbody>
				<tr>
					<td>您的浏览器已经过时</td>
				</tr>
				<tr>
					<td>如果您在使用 IE 9 或者更新版本的浏览器，请关闭兼容性视图。</td>
				</tr>
			</tbody>
		</table>
	<![endif]-->
	<!--[if IE 6]>
		<img href="assets/ie_haters.png" alt="您的浏览器已经严重过时">
		<p>
			怀旧、复古和不思进取是有差别的好么。
		</p>
	<![endif]-->
<?php
	$pm = new PanelManager();
	$p = $pm->create_panel();
	$pm->fill_panel_f($p, form_heading, form_body, form_footer);
?>
	<div id="popuper" class="container">
		<!-- This section is left blank intentionally for popup messages -->
	</div>
	<div class="container">
<?php
	$pm->render();
?>
	</div>
</body>
</html>
