<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<title>手机号归属地查询</title>
<link rel="stylesheet" type="text/css" href="http://218.77.120.180/images/laws/style.css">
<link rel="stylesheet" type="text/css" href="http://218.77.120.180/images/yellow/cms.css">
<link rel="stylesheet" type="text/css" href="http://218.77.120.180/images/yellow/style.css">
<meta http-equiv="Content-Type" content="text/html; charset=utf8">
<meta name="keywords" content="手机号归属地查询">
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
<meta name="description" content="手机号归属地查询">
</head>
<body>
<center>
<br />
<br />
<form action="" method="POST" >
手机号：<input type="text" name="vid" />
<input type="submit" value="提交"  />
</form>
<br />

<?php
if(isset($_POST['vid'])){
	$vid = $_POST['vid'];
	if(!is_numeric($vid))
		die('手机号不正确！');
	$mob=substr($vid,0,7);
	$string=file_get_contents("./mobilebook.dat");
	$string=strstr($string,$mob);
	$num=strpos($string,"\n");
	$end=substr($string,0,$num);
	list($a,$area)=explode(",",$end);
	echo '<p>',$a,'：',$area,'</p>';
}
?>
</center>
</body>
</html>