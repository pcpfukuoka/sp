<?php
		 //データベースの呼出
         require_once("../lib/dbconect.php");
         $dbcon = DbConnect();
         
         //ユーザーの件数の取り出し
	     $sql = "SELECT * FROM m_user";
	     $result = mysql_query($sql);
	     $kensu = mysql_num_rows($result);
        
	     //データベースを閉じる
	     DBdissconnect($dbcon);
?>

<html lang="ja">
	<head>
	
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="viewport" content="width=device-width, intital-scale=1">
		<link rel="stylesheet" href="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.css" />
		<script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
		<script src="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.js"></script>
	
	　　<title> 新規作成</title>
	  <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	  <meta http-equiv="Content-Style-Type" content="text/css">
	  <link rel="stylesheet" type="text/css" href="../css/button.css" />
	</head>
	
	<body>
	<div data-role="page" id="CreateNew" align="center">
			<div data-role="header" data-position="fixed">
				<div data-role="navbar">
					<ul>
						<li><a href="" class="ui-btn-active">スケジュール</a></li>
						<li><a href="">連絡帳</a></li>
						<li><a href="">授業</a></li>
						<li><a href="">成績確認</a></li>
						<li><a href="">アンケート</a></li>
					</ul>
				</div>
			</div>
			
			<div data-role="content">
		<form action="relay.php" method="POST" id="input">
			  <div align="center">
			    <font size = "7">新規作成</font><br>
			  </div>
			  
			  <hr color="blue">
			  <br><br>
			  
			  <font size="3">宛先</font>
			  <select name="to">
			  <?php
				   for ($i = 0; $i < $kensu; $i++)
				   {
				   		$row = mysql_fetch_array($result);
			  ?>
				    	<option value="<?=$row['user_seq']?>"><?= $row['user_name'] ?></option>
			  <?php
			    	}
			  ?>
			  	
			  </select>
			  <br>
			  <font size="3">件名</font>
			  <input size="40" type="text" name="title"><br><br>
		      <font size="3">本文</font><br>
		      <textarea rows="40" cols="50" name="contents"></textarea><br>
		      
		      <!--隠し文字-->
		      <input type="hidden" value="0" name="link_id">
		      <input class="button4" type="submit" value="送信" name = "send">
			  <input class="button4" type="submit" value="保存" name="Preservation"><br>
	    </form> 
	    	</div>
	    	
	    	<div data-role="footer" data-position="fixed">
				<p>PCP2012</p>
			</div>
    </body>  
</html>    
