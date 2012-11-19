<?php
	session_start();
	$user_seq = $_SESSION['login_info[user]'];

	//データベースの呼出
	require_once("../lib/dbconect.php");
	$dbcon = DbConnect();
	
	//contact_bookから項目の取り出し
	$sql = "SELECT contact_book_seq, link_contact_book_seq, send_date, m_user.user_name AS reception_user_name, title 
			FROM contact_book 
			Left JOIN m_user ON contact_book.reception_user_seq = m_user.user_seq
			WHERE contact_book.send_user_seq = $user_seq
			AND send_flg = 1
			AND contact_book.delete_flg = 0
			ORDER BY send_date DESC;";
	$result = mysql_query($sql);
	$count = mysql_num_rows($result);
	
	//データベースを閉じる
	Dbdissconnect($dbcon);
?>

<html lang="ja">
	<head>
		<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
		<meta name="viewport" content="width=device-width, intital-scale=1">
		<link rel="stylesheet" href="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.css" />
		<script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
		<script src="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.js"></script>
		<title>下書き</title>
	</head>
	
	<body>
		<div data-role="page" id="Draft" align="center">
		<div data-role="header" data-position="fixed">
				<div data-role="navbar">
					<ul>
						<li><a href="">スケジュール</a></li>
						<li><a href="" class="ui-btn-active">連絡帳</a></li>
						<li><a href="">授業</a></li>
						<li><a href="">成績確認</a></li>
						<li><a href="">アンケート</a></li>
					</ul>
				</div>
			</div>
		<div data-role="content">
		<div align="center">
			<font size="7">下書き</font>
			<br>
		</div>
		<br>
		<hr color="blue">
		
		<!-- テーブルの作成 -->
		<div align="center">
			<table border="1">
				<tr bgcolor="yellow">
				<td align="center"width="150"><font size="5">日付</font></td>
				<td align="center"width="200"><font size="5">TO</font></td>
				<td align="center"width="400"><font size="5">件名</font></td>
				
				<?php
				for ($i = 0; $i < $count; $i++){
					$row = mysql_fetch_array($result);
				?>
					<tr>
						<td><?= $row['send_date'] ?></td>
						<td><?= $row['reception_user_name'] ?></td>
						<td>
							<!-- GETでcontact_book_seqを送る -->
							<a href="Send.php?id=<?= $row['contact_book_seq'] ?>"><?= $row['title'] ?></a>
						</td>
					</tr>
				<?php 
				}
				?>
			</table>
			<hr>
		</div>
		</div>
	    	
	    	<div data-role="footer" data-position="fixed">
				<p>PCP2012</p>
				<a href="#contactbook" data-transition="slide" data-role="button" data-icon="home" data-iconpos="notext" class="ui-btn-right">トップへ</a>
			</div>
	</body>
</html>