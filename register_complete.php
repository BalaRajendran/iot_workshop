<!DOCTYPE html>
<html>
<head>
	<title>Registration Form</title>
<link rel="shortcut icon" href="images/icon.jpg">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="errorpage.css" rel="stylesheet" type="text/css" media="all" />
<link href="//fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
</head>
<body>
	<br><br><br><br>
	<div class="main-wthree">
		<h2>Ohh..</h2>
		<p><span class="sub-agileinfo">Sorry! </span>Registration Time Crossed,,,,</p>
		<!--form--><br/>
		<div style="color:white">Enter your Email Id for Notification</div>
			<form class="newsletter" action="register_complete.php" method="post">
				<input class="email" name="email" type="email" placeholder="Enter your Email..." required=" ">
				<input type="submit" name="submit" class="submit" value="">
			</form>
			<div style="color:white">
				<h3>Please contact our Coordinators!!</h3>
				<h3>Students co-ordinator</h3>
				<h3>B.Karan Kumar: 814819556<br/>
					P.Prakash : 9655253217</h3>
	</div>
		<!--//form-->
		</div>
			
<!--//mian-content-->
<!-- copyright -->
	<div class="copyright-w3-agile">
		<p> © 2018 M.KUMARASAMY COLLEGE OF ENGINEERING || <a href="http://mkc.ac.in/" target="_blank">MKCE </a></p>
	</div>
<!-- //copyright --> 
</body>
</html>
<?php require('dbcon.php'); ?>
<?php
if (isset($_POST['submit']))
{
	$email=$_POST['email'];
mysql_query("insert into common (email) values('$email')")or die(mysql_error());
	echo "<script type='text/javascript'>alert('Thanks ,we will send notification for forecome Events')</script>";
}
?>