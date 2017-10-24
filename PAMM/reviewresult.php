<?php
session_start();
$_SESSION['drug1']=$_POST['drug'];

$drug1 = $_SESSION['drug1'];

?>




<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="Mainbody.css" rel="stylesheet" type="text/css"/>
<link href="800px.css" rel="stylesheet" type="text/css" media="screen and (max-width: 800px)"/>
<link href="Menu.css" rel="stylesheet" type="text/css"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Layout Tutorial</title>
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
-->
</style></head>

<body>
<div id="Container">
<div id="Header">Probabilistic Aspect Mining Model for Drug Reviews</div>
<div id="Menu">
<ul> <a href="homee.html">
<li>Home</li></a>

<li><a href="review.html">Review</a></li>

<li><a href="share.html">Share</a></li>
<li><a href="logout.html">logout</a>


</li>
</ul>

</div>
<div id="sidebar">
<iframe width="200" height="400" scrolling="yes" src="reviewstats.php">
</iframe>
</div>
<div id="Mainbody"><iframe width="800" height="400"
src="review1.php">
</iframe></div>
<div id="Footer"></div>

</div>
</body>
</html>
