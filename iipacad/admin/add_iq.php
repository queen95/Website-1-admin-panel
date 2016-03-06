<?php
	mysql_connect("localhost","root","") or die('connectivity issue');
	mysql_select_db("iipacad") or die('db issue');
	
	if($_POST['ques']!="")
		{
			 $ins="insert into add_iq set ques='".$_POST['ques']."',ans='".$_POST['ans']."' ";
			mysql_query($ins);
		}
?>
<html>
<head>
<title>Add Interview Ques</title>
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
			<div class="contentleft">Question &nbsp;:</div>
			<div class="contright"><input type="text" name="ques" value=""/></div>
		</div>
		<div class="clear"></div>
		<div>
			<div class="contentleft">Answer &nbsp;&nbsp;&nbsp;&nbsp;:</div>
			<div class="contright"><textarea name="ans"></textarea></div>
		</div>
		<div class="clear"></div>
		<div class="cellx">
		<input type="submit" value="Save" name="usave"/>
		</div>
	<form action="" method="post">
	</div>
	<div>
	<?php include("footer.php"); ?>
	</div> 
</div>
</body>
</html>
