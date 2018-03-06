<!DOCTYPE html>
<html lang="en">
<head>
	<title>IOT Workshop - MKCE</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="images/icon.jpg">
	<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7; IE=EmulateIE9">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="Designer" content="Balaji R">  
   <meta name="description" content="One Day Hands-On Training on IOT Using Arduino"/>
	<meta property="og:image" content="http://www.farmingarms.com/infotechiotworkshop/brochure.jpeg">
<meta property="og:url" content="http://www.farmingarms.com/infotechiotworkshop/index.php">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/index.css">
<!--===============================================================================================-->
<script type="text/javascript">
document.oncontextmenu = function() {
       alert("Context Menu Disabled");
    return false;
    }
</script>
	<style>
html { overflow-y: scroll;
    }

@-webkit-keyframes STAR-MOVE {
	from {
		left: 0;
		top: 0;
	}
	to { 
		left: -10000px;
		top: -2000px;
	}
}
footer {
	padding: 140px 0 40px;
	background: url('images/footer.jpg');
	-webkit-background-size: cover;
	background-size: cover;
}

#background {
	background: black url(images/background.png) repeat 5% 5%;
	
	    position: fixed;
    min-width: 100%; 
    min-height: 100%;
	top: 0; left: 0; right: 0; bottom: 0;
	z-index: -1000;
	-webkit-animation-name: STAR-MOVE;
	-webkit-animation-duration: 200s;
	-webkit-animation-timing-function: linear;
	-webkit-animation-iteration-count: infinite;
}

#midground {
	background: url(images/midground.png) repeat 20% 20%;
	position: absolute;
	top: 0; left: 0; right: 0; bottom: 0;
	z-index: 200;
	
	-webkit-animation-name: STAR-MOVE;
	-webkit-animation-duration: 150s;
	-webkit-animation-timing-function: linear;
	-webkit-animation-iteration-count: infinite;
}

#foreground {
	background: url(images/foreground.png) repeat 35% 35%;
	position: absolute;
	top: 0; left: 0; right: 0; bottom: 0;
	z-index: 300;
	
	-webkit-animation-name: STAR-MOVE;
	-webkit-animation-duration: 100s;
	-webkit-animation-timing-function: linear;
	-webkit-animation-iteration-count: infinite;
}

		body{
			z-index: 10000 !important;
		}
		.am1{
			margin-left:220px;
			margin-top:20px;
			color: #fff;
		}
		.am{
			margin-left:940px;
			margin-top:-90px;
			color: #fff;
		}
       .foo{
            /*background:#000;*/
            color: #fff;
            	padding: 40px 0 40px;
	background: url('images/footer.jpg');
	-webkit-background-size: cover;
	background-size: cover;
        }
		.header{
		line-height:200% !important;
		text-align:center;
         color:#fff !important;
}
.modal {
	padding: 0 25px !important;
}

.modal-dialog {
	width: 100%;
	max-width: 560px;
	margin: 0 auto;
}
@media only screen and (max-device-width: 480px){
		     .foo{
            background:#000;
            text-decoration: none;
            color: #fff;
        }
			.asa{
			 margin-top:-180px;
			}
				.am1{
			margin-left:0px;
		}
		.am{
			margin-top:60px;
			margin-left:0px;
		}
		}
	</style>
	<script>
		document.oncontextmenu = function() {
			 alert("Context Menu Disabled");
    return false;
		}
// Set the date we're counting down to
 var countDownDate = new Date("FEB 21, 2018 09:00:00").getTime();
//var countDownDate = new Date("Jan 17, 2018 15:19:00").getTime();
// Update the count down every 1 second
var x = setInterval(function() {

  // Get todays date and time
  var now = new Date().getTime();

  // Find the distance between now an the count down date
  var distance = countDownDate - now;

  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Display the result in the element with id="demo"
  document.getElementById("demo").innerHTML = days + "d " + hours + "h " + minutes + "m " + seconds + "s ";
if (seconds < 0) {
             // Chnage your redirection link here
             window.location = "http://www.farmingarms.com/infotechiotworkshop/register_complete.php";
         } 
}, 1000);
	</script>
</head>
<body oncontextmenu="return false">
    <div id="background"></div>
    <div id="midground"></div>
    <div id="foreground"></div>
			<div class="header">
				<center><a target="_blank" title="Collge logo" href="http://www.mkce.ac.in/"><img src="images/logo.jpg" width="400" height="70"/></a></center><br/>
			<h3><font face="algerian">M.KUMARASAMY COLLEGE OF ENGINEERING<br/>THALAVAPALAYAM,KARUR-639001</font></h3><br/>
				<h4 style="font-family: 'Rock Salt', cursive;">Department Of Information Technology</h4><br/>
				<h3 style="font-family: 'Black Ops One', cursive;">One Day Hands-On Training on IOT Using Arduino</h3><br/>
		</div>
	<div class="container-contact100">
		<div class="wrap-contact100">
			    <?php  session_start(); if(isset($_SESSION['err'])){ ?>
    <center><h2 style="color:red;"><?php echo $_SESSION['err']; ?></h2></center>
    <?php session_unset(); } ?>
			<form class="contact100-form validate-form" action="add_registration.php" method="POST">
				<span class="contact100-form-title">
					 
				</span>	
				<div class="wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">Full Name</span>
					<input class="input100" type="text" name="name" placeholder="Enter your name">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate = "Valid email is required: abc@gmail.com">
					<span class="label-input100">Email</span>
					<input class="input100" type="text" name="email" placeholder="Enter your email address">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate = "Institution Name is required">
					<span class="label-input100">Instiution Name</span>
					<input class="input100"  type="text" name="ins" placeholder="Enter your Institution Name">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 input100-select validate-input" data-validate = "Institution Name is required">
					<span class="label-input100">Department</span>
					<div>
						<select class="selection-2"   name="dept">
						<option  value="">Department</option>
						<option value="IT">B-Tech-IT</option>
            			<option value="CSE">BE-CSE</option>
            			<option value="EEE">BE-EEE</option>
            			<option value="ECE">BE-ECE</option>
						<option value="EIE">BE-EIE</option>
						<option value="MECH">BE-MECH</option>
						<option value="INDUSTRIAL">BE-INDUSTRIAL</option>
						<option value="AUTOMOBILE">BE-AUTOMOBILE</option>
						<option value="MECHANICS">BE-MECHANICS</option>
						<option value="CIVIL">BE-CIVIL</option>
						<option value="BBA">BBA</option>
						<option value="MCA">MCA</option>
						<option value="MBA">MBA</option>
						<option value="ARTS">ARTS</option>
						<option value="COMMERCE">COMMERCE</option>
						</select>
					</div>
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 input100-select validate-input">
					<span class="label-input100">Designation</span>
					<div>
						<select class="selection-2"  name="re">
							<option value="">Designation</option>
            				<option value="Student">Student</option>
           					 <option value="Staff">Staff</option>
						</select>
					</div>
					<span class="focus-input100"></span>
				</div>


				<div class="wrap-input100 input100-select validate-input">
					<span class="label-input100">Designation</span>
					<div>
						<select class="selection-2" name="year">
							<option value="">Year</option>
            			     <option value="I-Year">I-Year</option>
            				 <option value="II - Year">II-Year</option>
           					 <option value="III Year">III-Year</option>
           					 <option value="Final year">Final-Year</option>
					 		 <option value="others">Others</option>	
						</select>
					</div>
					<span class="focus-input100"></span>
				</div>



				<div class="wrap-input100 validate-input" data-validate = "Phone Number is required">
					<span class="label-input100">Mobile Number</span>
					<input class="input100" type="text" name="pno" minlength="10" maxlength="10" placeholder="Enter your Phone Number">
					<span class="focus-input100"></span>
				</div>
				
<!-- 				<p class="contact"><label for="phone">Accommodation</label></p>  
	Yes&nbsp;&nbsp;&nbsp;<input type="radio" value='Yes' required name="acc">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	No&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio"  checked="checked" value='No'  name="acc"><br/><br/>	-->
				
				<div class="wrap-input100 validate-input" data-validate = "Please enter the captcha">
					<span class="label-input100">Captcha</span>
						<input type="text"  class="input100" name="cap" placeholder="Please enter the captcha">
					<span class="focus-input100"></span>
				</div> 
				
				 <img src="captcha_code_file.php?rand=<?php echo rand();?>" id='captchaimg' width="40%"><br/><br/>
				  Can't read the image? click <a href='javascript: refreshCaptcha();' style="color:#F00;">here</a> to refresh
				<div class="container-contact100-form-btn">
					<div class="wrap-contact100-form-btn">
						<div class="contact100-form-bgbtn"></div>
						<button class="contact100-form-btn">
							<span>
								Submit
								<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
							</span>
						</button>
					</div>
				</div>
			</form>
		</div>
	</div>  
	<div id="dropDownSelect1"></div>


	 <div id="background"></div>
    <div id="midground"></div>
    <div id="foreground"></div>

	        <div class="foo">
						<center><a style="color:white;margin-top:-50px;" download="brochure.jpeg" href="brochure.jpeg" title="Brochure">Click here for Brochure Link
							</a></center>
		<div class="am1">
			<h3>Staff co-ordinator</h3>
<p style="color:#fff;">Mrs.R.Sujatha,AP/IT <br/>
	Ms.K.Gowsika,AP/IT</p></div>
		<div class="am">
			<h3>Students co-ordinator</h3>
<p style="color:#fff;">B.Karan Kumar: 814819556<br/>
	P.Prakash : 9655253217</p>
			</div><br/>
		<center>Designed By &nbsp;Balaji R - II Year, &nbsp; Department &nbsp; Of&nbsp; IT</center>
		<center>Copyrights © 2017, M.Kumarasamy College of Engineering,Karur</center>
			<center><img src="http://hitwebcounter.com/counter/counter.php?page=6878274&style=0006&nbdigits=4&type=page&initCount=0" title="Page Visitors Counter" Alt="Home Remedies For Wrinkles"   border="0" ></center>
    </div>
    					<script type='text/javascript'>
		function refreshCaptcha()
		{
			var img = document.images['captchaimg'];
			img.src = img.src.substring(0,img.src.lastIndexOf("?"))+"?rand="+Math.random()*1000;
		}
	</script>
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<script>
		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});
	</script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
