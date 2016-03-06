<?php
	mysql_connect("localhost","root","") or die('connectivity issue');
	mysql_select_db("iipacad") or die('db issue');
	
	if($_POST['uname']!="")
		{
			 $ins="insert into users set name='".$_POST['uname']."',email='".$_POST['uemail']."',password='".$_POST['upass']."',mobile_no='".$_POST['umob']."' ";
			mysql_query($ins);
		}
?>
<html>

<head>
	<title>Register</title>
	<link href="css/style.css" rel="stylesheet"/>
</head>

<body>
	<div class="main">
			<!-- header -->
		<div class="first">
			<div class="first1">
				<img src="images/logo.png" width="210" height="160" alt="logo"/>
			</div>
			<div class="first2">
				LOOKING FOR THE BEST PLACE FOR<br/>PROGRAMMING
			</div>
			<div>
			<div>
			<div class="reg"><a href="register.php">Register |</a> </div>
			<div class="regx"><a href="login.php">&nbsp;Login</a></div>
			</div>
			<div class="first3">
				<div class="websitetop">www.iipacademy.com</div>
				<div class="mailtop">Info@iipacademy.com</div>
				<div class="phntop">+91-9269698122</div>
			</div>
			</div>
			<div class="clear"></div>
		</div>
			<!-- top menu panel -->
		<div class="second">
			<div class="hometop"><a href="index.php">Home</a></div>
			<div class="aboutustop"><a href="aboutus.php">About Us</a></div>
			<div class="coursestop"><a href="courses.php">Courses</a></div>
			<div class="gallerytop"><a href="gallery.php">Gallery</a></div>
			<div class="enquirytop"><a href="enquiry.php">Enquiry</a></div>
			<div class="contactustop"><a href="contactus.php">Contact Us</a></div>
			<div class="clear"></div>
		</div>
			<!-- left menu panel-->
		<div class="thirdaboutus">
			<div class="third1">
			 	<div class="homelist"><a href="index.php">Home</a></div>
				<div class="aboutuslist"><a href="aboutus.php">About Us</a></div>
				<div class="courseslist"><a href="courses.php">Courses</a></div>
				<div class="gallerylist"><a href="gallery.php">Gallery</a></div>
				<div class="enquirylist"><a href="enquiry.php">Enquiry</a></div>
				<div class="contactlist"><a href="contactus.php">Contact Us</a></div>
			</div>
				<!-- central content -->
			<div class="aboutuspage">
				<h1>Register</h1>
				<div style="margin-left:170px;">
				<form action="" method="post">
				<table border="1" cellspacing="0" bordercolor="000000">
					<tr>
						<td class="cell">Name</td>
						<td class="cell"><input type="text" name="uname" value=""/></td>
					</tr>
					<tr>
						<td class="cell">Email id</td>
						<td class="cell"><input type="text" name="uemail" value=""/></td>
					</tr>
					<tr>
						<td class="cell">Password</td>
						<td class="cell"><input type="text" name="upass" value=""/></td>
					</tr>
					<tr>
						<td class="cell">Mobile no:</td>
						<td class="cell"><input type="text" name="umob" value=""/></td>
					</tr>
					<tr>
						<td colspan="2" align="center" style="padding:5px 0px 5px 0px;"><input type="submit" value="Register" name="reg"/> </td>
					</tr>
				</table>
				</form>
				</div>
			</div>
			<div class="clear"></div>
		</div>
			<!-- footer -->
		<div class="foot">
			<div class="foot_left"></div>
			<div class="foot_middle"><div class="foot_content">Home | About Us | Courses | Gallery | Enquiry</div></div>
			<div class="foot_right"></div>
			<div class="clear"></div>
		</div>
	</div>
</body>

</html>