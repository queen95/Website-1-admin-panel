<?php
	mysql_connect("localhost","root","") or die('connectivity issue');
	mysql_select_db("iipacad") or die('db issue');
	
	if($_POST['atitle']!="")
		{
			 $ins="insert into about_us set title='".$_POST['atitle']."',descrip='".$_POST['adescrip']."' ";
			mysql_query($ins);
		}
?>

<html>
<head>
<title>About Us</title>
<link href="css/style.css" rel="stylesheet"/>
</head>

<body>
<div class="main">
	<div>
	<?php include("header.php"); ?>
	</div>
	<div class="bg">
	<form action="" method="post">
		<div>
			<div class="contentleft">Title&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
			<div class="contright"><input type="text" name="atitle" value=""/></div>
		</div>
		<div class="clear"></div>
		<div>
			<div class="contentleft">Description&nbsp;</div>
			<div class="contright"><input type="text" name="adescrip" value=""/></div>
		</div>
		<div class="clear"></div>
		<div class="cellx">
		<input type="submit" value="Update" name="asave"/>
		</div>
	</form>
	</div>
	<div>
	<?php include("footer.php"); ?>
	</div
></div>
</body>
</html>
