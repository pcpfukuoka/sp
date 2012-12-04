<!DOCTYPE html>
<html lang="ja">
	<head>
	
		<?php
			session_start();
			if(!isset($_SESSION["login_flg"]) || $_SESSION['login_flg'] == "false")
			{
				header("Location:login/index.php");
			}
		?>
		<meta charset="UTF-8">
		<title>PCP2012</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
		<link rel="stylesheet" href="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.css" />
		<script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
		<script src="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.js"></script>
	</head>

	<body>
		<div data-role="page" id="top" align="center">
			<div data-role="header" data-position="fixed">
				<div data-role="navbar">
					<ul>
						<li><a href="">スケジュール</a></li>
						<li><a href="http://localhost/sp/contactbook/main.php">連絡帳</a></li>
						<li><a href="">授業</a></li>
						<li><a href="">成績確認</a></li>
						<li><a href="">アンケート</a></li>
					</ul>
				</div>
			</div>
			
			<div data-role="content">
			</div>
			
			<div data-role="footer" data-position="fixed">
				<p>PCP2012</p>
			</div>
		</div>
	</body>	
</html>