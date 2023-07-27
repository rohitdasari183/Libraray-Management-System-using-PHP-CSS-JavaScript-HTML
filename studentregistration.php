<?php
session_start();
if(isset($_SESSION['usersession'])!="")
{
	header("Location:studentlogin.php");
}
require_once "dbconfig.php";
if(isset($_POST['btn-signup']))
{
	$a=$_POST['firstname'];
	$b=$_POST['lastname'];
	$c=$_POST['username'];
	$d=$_POST['password'];
	$e=$_POST['email'];
	$f=$_POST['contact'];
	$g=$_POST['branch'];
	$h=$_POST['year'];
	$m=$_POST['enroll'];
	$i=$_POST['sem'];




	
	$hashed_password=password_hash($d,PASSWORD_DEFAULT);
	$check_name=$DBcon->query("SELECT s_email from student WHERE s_email='$e' ");
	
	$count=$check_name->fetch_array();
	if($count==0)
	{
		$query="INSERT INTO student(s_firstname,s_lastname,s_username,s_password,s_email,s_contact,s_branch,s_year,s_enroll,s_sem) VALUES ( '$a','$b','$c','$d','$e','$f','$g','$h','$m','$i')";
		if($DBcon->query($query))
		{
		  echo "successfully registered";
          header("location:par4.php");		
			
		}
		else
		{
			echo "error while registering";
		}
	}
	else
	{
		echo "Invalid Credentials";
	}
}
?>
<!DOCTYPE html>
<html lang="zxx">
<head>
<title>Esteem  An Admin Panel Category Flat Bootstrap Responsive Website Template | Sign Up :: katareinfo</title>
<!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Esteem Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //custom-theme -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/snow.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/component.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style_grid.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- font-awesome-icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome-icons -->
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
</head>
<body>
			<!-- /pages_agile_info_w3l -->

						<div class="pages_agile_info_w3l">
							<!-- /login -->
							   <div class="over_lay_agile_pages_w3ls two">
								<div class="registration">
								
												<div class="signin-form profile">
													<h1>Libraray Management System</h1></br></br></br>
													<h4>Student Registration Form</h4>
													<div class="login-form">
														<form action="" method="post">
															<input type="text" name="firstname" placeholder="First Name" required="">
																<input type="text" name="lastname" placeholder="Last name" required="">
																<input type="text" name="username" placeholder="Enter Username" required="">
																<input type="password" name="password" placeholder="Password" required="">
																<input type="text" name="email" placeholder="Enter Email Address" required="">
																<input type="text" name="contact" placeholder="Enter Contact Number" required="">
																<input type="text" name="branch" placeholder="Branch" required="">

																
																<input type="text" name="year" placeholder="Current Year" required="">
																<input type="text" name="enroll" placeholder="Enter Enrollment Number" required="">

																<input type="text" name="sem" placeholder="Semester" required="">






																
							
															<div class="tp">
																<input type="submit" name="btn-signup" value="Register">
															</div>
														</form>
													</div>
													
									
												</div>
										</div>
										<!--copy rights start here-->
											<div class="copyrights_agile two">
											</div>	
											<!--copy rights end here-->
						    </div>
						</div>
							<!-- /login -->
<!-- //pages_agile_info_w3l -->


<!-- js -->

          <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
		  <script src="js/modernizr.custom.js"></script>
		
		   <script src="js/classie.js"></script>
		  <script src="js/gnmenu.js"></script>
		  <script>
			new gnMenu( document.getElementById( 'gn-menu' ) );
		 </script>
	
<!-- //js -->

<script src="js/screenfull.js"></script>
		<script>
		$(function () {
			$('#supported').text('Supported/allowed: ' + !!screenfull.enabled);

			if (!screenfull.enabled) {
				return false;
			}

			

			$('#toggle').click(function () {
				screenfull.toggle($('#container')[0]);
			});	
		});
		</script>
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>
<script src="js/snow.js"></script>
 <script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>


</body>
</html>