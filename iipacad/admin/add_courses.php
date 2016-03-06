<?php
	mysql_connect("localhost","root","") or die('connectivity issue');
	mysql_select_db("iipacad") or die('db issue');
	
	if($_POST['cname']!="")
		{
			 $ins="insert into add_course set course_name='".$_POST['cname']."',fees='".$_POST['nfees']."',duration='".$_POST['ndur']."',course_descrip='".$_POST['udescrip']."' ";
			mysql_query($ins);
		}
?>
<html>
<head>
<title>Add Courses</title>
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
			<div class="contentleft">Courses Name &nbsp;:</div>
			<div class="contright"><input type="text" name="cname" value=""/></div>
		</div>
		<div class="clear"></div>
		<div>
			<div class="contentleft">Fees &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</div>
			<div class="contright" ><input type="text" name="nfees" value=""/></div>
		</div>
		<div class="clear"></div>
		<div>
			<div class="contentleft">Duration&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</div>
			<div class="contright"><input type="text" name="ndur" value=""/></div>
		</div>
		<div class="clear"></div>
		<div>
			<div class="contentleft">Courses Description &nbsp;:</div>
			<div class="contright"><textarea name="udescrip"></textarea></div>
		</div>
		<div class="clear"></div>
		<div>
			<div class="cellx">
				<input type="submit" name="update" value="Update"/>
			</div>
		</div>
	</form>
	</div>
	<div>
	<?php include("footer.php"); ?>
	</div>
</div>
</body>
</html>
