<?php
	mysql_connect("localhost","root","") or die('connectivity issue');
	mysql_select_db("iipacad") or die('db issue');
	
	if($_POST['unews']!="")
		{
			 $ins="insert into add_news set news_title='".$_POST['unews']."',news_descrip='".$_POST['udescrip']."' ";
			mysql_query($ins);
		}
?>
<html>
<head>
<title>Add News</title>
<link href="css/style.css" rel="stylesheet"/>
</head>

<body>
<div class="main">
	<div>
	<?php include("header.php"); ?>
	</div>
	<div class="bg">
	  <div class="heading">Add News</div>
	  <form action="" method="post">	
	  <div class="grid">
	  	<div class="row">
			<div class="cell1">News Title</div>
			<div class="cell2"><input type="text" name="unews" value=""/></div>
		</div>
		
		<div class="row">
			<div class="cell1">News Description</div>
			<div class="cell2"><textarea name="udescrip" cols="22"></textarea></div><!--use cols to increase length of text ares and rows to increse the height-->
		</div>
		<div class="cell"><input type="submit" value="Submit" name="usubmit"/>
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
