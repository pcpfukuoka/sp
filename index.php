<?php
	session_start();
	if(!isset($_SESSION["login_flg"]) || $_SESSION['login_flg'] == "false")
	{
		header("Location:login/index.php");
	}
?>
<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="UTF-8">
		<title>PCP2012</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
		<link rel="stylesheet" href="css/jquery.mobile-1.2.0.min.css" />
		<script src="js/jquery-1.8.2.min.js"></script>
		<script src="js/jquery.mobile-1.2.0.min.js"></script>
	</head>

	<body>
		<div data-role="page" id="top" align="center">
			<div data-role="header" data-position="fixed">
				<div data-role="navbar">
					<ul>
						<li><a href="">スケジュール</a></li>
						<li><a href="#/sp/contactbook/main.php">連絡帳</a></li>
						<li><a href="">授業</a></li>
						<li><a href="#/sp/Results_management/Per_ver.php">成績確認</a></li>
						<li><a href="#/sp/question/answer_list.php">アンケート</a></li>
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