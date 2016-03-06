<?php
	mysql_connect("localhost","root","") or die('connectivity issue');
	mysql_select_db("iipacad") or die('db issue');
	
	if($_POST['old']!="")
		{
			 $ins="insert into change_pass set old='".$_POST['old']."',new='".$_POST['new']."' ";
			mysql_query($ins);
		}
?>
<html>
<head>
<title>Change Password</title>
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
			<div class="contleft">Old Password &nbsp;:</div>
			<div class="contright"><input type="text" name="old" value=""/></div>
		</div>
		<div class="clear"></div>
		<div>
			<div class="contleft">New Password &nbsp;:</div>
			<div class="contright"><input type="text" name="new" value=""/></div>
		</div>
		<div class="clear"></div>
		<div class="cell">
		<input type="submit" value="Save" name="psave"/>
		</div>
	</form>
	</div>
	<div>
	<?php include("footer.php"); ?>
	</div> 
</div>
</body>
</html>
