<?php
	mysql_connect("localhost","root","") or die('connectivity issue');
	mysql_select_db("iipacad") or die('db issue');
	
	if($_POST['wtitle']!="")
		{
			 $ins="insert into why_iip set title='".$_POST['wtitle']."' ";
			mysql_query($ins);
		}
?>

<html>
<head>
<title>Why IIP</title>
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
			<div class="contleft" style="font-size:24px;">Title &nbsp;:</div>
			<div class="contright"><input type="text" name="wtitle" value=""/></div>
		</div>
		<div class="clear"></div>
		<div class="cellx">
		<input type="submit" value="Update" name="usave"/>
		</div>
	</form>
	</div>
	<div>
	<?php include("footer.php"); ?>
	</div>
</div>
</body>
</html>
