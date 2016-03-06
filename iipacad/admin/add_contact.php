<?php
	mysql_connect("localhost","root","") or die('connectivity issue');
	mysql_select_db("iipacad") or die('db issue');
	
	if($_POST['aname']!="")
		{
			 $ins="insert into add_contact set c_name='".$_POST['aname']."',addr='".$_POST['address']."',ph_no='".$_POST['aphn']."',m_no='".$_POST['amobile']."',email='".$_POST['aemail']."' ";
			mysql_query($ins);
		}
?>

<html>
<head>
<title>Add Contact</title>
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
			<div class="contleft">Company Name &nbsp;:</div>
			<div class="contright"><input type="text" name="aname" value=""/></div>
		</div>
		<div class="clear"></div>
		<div>
			<div class="contleft">Address &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</div>
			<div class="contright"><textarea name="address"></textarea></div>
		</div>
		<div class="clear"></div>
		<div>
			<div class="contleft">Phone No. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</div>
			<div class="contright"><input type="text" name="aphn" value=""/></div>
		</div>
		<div class="clear"></div>
		<div>
			<div class="contleft">Mobile No. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</div>
			<div class="contright"><input type="text" name="amobile" value=""/></div>
		</div>
		<div class="clear"></div>
		<div>
			<div class="contleft">Email Id &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</div>
			<div class="contright"><input type="text" name="aemail" value=""/></div>
		</div>
		<div class="clear"></div>
		<div class="cell">
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
