<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>画像アップロード（iframe内）</title>
</head>
<body>
<?php
	$upload_dir = './';
	$filename = $_FILES['upload_image']['name'];
	move_uploaded_file($_FILES['upload_image']['tmp_name'], $upload_dir.$filename);
?>
<script type="text/javascript"><!--
    var container = parent.document.getElementById('container');
    image = parent.document.createElement('img');
    image.src = './<?php print($filename);?>';
    container.appendChild(image);
//--></script>
</body>
</html>