<?php
session_start();
if(isset($_SESSION['usersession'])!="")
{
	header("Location:studentlogin.php");
}
require_once "dbconfig.php";
if(isset($_POST['btn-signup']))
{
	$a=$_POST['name'];
	
	$time=time();
	$actual_image_name=$_FILES['upload']['name'];		
	$reimg=$time.$actual_image_name;
	$size=$_FILES['upload']['size'];
	$tmp=$_FILES['upload']['tmp_name'];
	$ext=explode(".",$actual_image_name);
    $b=$_POST['author_name'];
    $c=$_POST['publication_name'];
    $d=$_POST['purchase_date'];
    $e=$_POST['price'];
    $f=$_POST['quantity'];
    $g=$_POST['available_quantity'];
    $h=$_POST['lib_issued'];




	
	$hashed_password=password_hash($d,PASSWORD_DEFAULT);
	$check_name=$DBcon->query("SELECT b_name from books WHERE b_name='$a' ");
	
	$count=$check_name->fetch_array();
	if($count==0)
	{
		$query="INSERT INTO student(b_name,b_image,b_author_name,b_publication_name,b_purchase_date,b_price,b_quantity,b_available_quantity,b_lib_issued) VALUES ( '$a','$reimg','$b','$c','$d','$e','$f','$g','$h')";
		if($DBcon->query($query))
		{
			
         echo "successfully added";
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
<!-- saved from url=(0048)http://localhost/LibraryManagement/add_books.php -->
<html lang="zxx" class=" js no-touch js no-touch js no-touch js no-touch js no-touch" style="overflow: hidden;"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Esteem  An Admin Panel Category Flat Bootstrap Responsive Website Template | Inputs  :: katareinfo</title>
<!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">

<meta name="keywords" content="Esteem Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //custom-theme -->
<link href="./add_books_files/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<link href="./add_books_files/component.css" rel="stylesheet" type="text/css" media="all">
<link href="./add_books_files/style_grid.css" rel="stylesheet" type="text/css" media="all">
<link href="./add_books_files/style.css" rel="stylesheet" type="text/css" media="all">
<!-- font-awesome-icons -->
<link href="./add_books_files/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome-icons -->
<link href="file://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
</head>
<body>
<!-- banner -->
<div class="wthree_agile_admin_info">
		  <!-- /w3_agileits_top_nav-->
		  <!-- /nav-->
		  <div class="w3_agileits_top_nav">
			<ul id="gn-menu" class="gn-menu-main">
			  		 <!-- /nav_agile_w3l -->
				<li class="gn-trigger">
					<a class="gn-icon gn-icon-menu"><i class="fa fa-bars" aria-hidden="true"></i><span>Menu</span></a>
					<nav class="gn-menu-wrapper">
						<div class="gn-scroller scrollbar1" tabindex="5000" style="overflow: hidden; outline: none;">
							<ul class="gn-menu agile_menu_drop">
								<li><a href="http://localhost/LibraryManagement/par4.php"> <i class="fa fa-tachometer"></i>All Students Information</a></li>
								<li>
									<a href="http://localhost/LibraryManagement/studentregistration.php"><i class="fa fa-cogs" aria-hidden="true"></i>Student Registration</a> 
									
								</li>
								<li>
									<a href="http://localhost/LibraryManagement/studentlogin.php"> <i class="fa fa-file-text-o" aria-hidden="true"></i>Student Login</a> 
									
								</li>
								<li><a href="http://localhost/LibraryManagement/librarianlogin.php"> <i class="fa fa-table" aria-hidden="true"></i>Logout</a></li>
								
								
								
								
								
								
							</ul>
						</div><!-- /gn-scroller -->
					<div id="ascrail2001" class="nicescroll-rails" style="width: 6px; z-index: 999; background: rgb(255, 255, 255); cursor: default; position: absolute; top: 0px; left: 277px; height: 597px; display: none;"><div style="position: relative; top: 0px; float: right; width: 6px; height: 0px; background-color: rgb(74, 156, 253); border: 0px; background-clip: padding-box; border-radius: 0px;"></div></div><div id="ascrail2001-hr" class="nicescroll-rails" style="height: 6px; z-index: 999; background: rgb(255, 255, 255); top: 591px; left: 0px; position: absolute; cursor: default; display: none;"><div style="position: relative; top: 0px; height: 6px; width: 0px; background-color: rgb(74, 156, 253); border: 0px; background-clip: padding-box; border-radius: 0px;"></div></div><div id="ascrail2002" class="nicescroll-rails" style="width: 6px; z-index: 999; background: rgb(255, 255, 255); cursor: default; position: absolute; top: 0px; left: 277px; height: 670px; display: none;"><div style="position: relative; top: 0px; float: right; width: 6px; height: 0px; background-color: rgb(74, 156, 253); border: 0px; background-clip: padding-box; border-radius: 0px;"></div></div><div id="ascrail2002-hr" class="nicescroll-rails" style="height: 6px; z-index: 999; background: rgb(255, 255, 255); top: 664px; left: 0px; position: absolute; cursor: default; display: none;"><div style="position: relative; top: 0px; height: 6px; width: 0px; background-color: rgb(74, 156, 253); border: 0px; background-clip: padding-box; border-radius: 0px;"></div></div><div id="ascrail2003" class="nicescroll-rails" style="width: 6px; z-index: 999; background: rgb(255, 255, 255); cursor: default; position: absolute; top: 0px; left: 277px; height: 670px; display: none;"><div style="position: relative; top: 0px; float: right; width: 6px; height: 0px; background-color: rgb(74, 156, 253); border: 0px; background-clip: padding-box; border-radius: 0px;"></div></div><div id="ascrail2003-hr" class="nicescroll-rails" style="height: 6px; z-index: 999; background: rgb(255, 255, 255); top: 664px; left: 0px; position: absolute; cursor: default; display: none;"><div style="position: relative; top: 0px; height: 6px; width: 0px; background-color: rgb(74, 156, 253); border: 0px; background-clip: padding-box; border-radius: 0px; left: 0px;"></div></div><div id="ascrail2004" class="nicescroll-rails" style="width: 6px; z-index: 99; background: rgb(255, 255, 255); cursor: default; position: absolute; top: 0px; left: 277px; height: 670px; display: none;"><div style="position: relative; top: 0px; float: right; width: 6px; height: 0px; background-color: rgb(74, 156, 253); border: 0px; background-clip: padding-box; border-radius: 0px;"></div></div><div id="ascrail2004-hr" class="nicescroll-rails" style="height: 6px; z-index: 99; background: rgb(255, 255, 255); top: 664px; left: 0px; position: absolute; cursor: default; display: none;"><div style="position: relative; top: 0px; height: 6px; width: 0px; background-color: rgb(74, 156, 253); border: 0px; background-clip: padding-box; border-radius: 0px; left: 0px;"></div></div><div id="ascrail2005" class="nicescroll-rails" style="width: 6px; z-index: 99; background: rgb(255, 255, 255); cursor: default; position: absolute; top: 0px; left: 277px; height: 670px; display: none;"><div style="position: relative; top: 0px; float: right; width: 6px; height: 0px; background-color: rgb(74, 156, 253); border: 0px; background-clip: padding-box; border-radius: 0px;"></div></div><div id="ascrail2005-hr" class="nicescroll-rails" style="height: 6px; z-index: 99; background: rgb(255, 255, 255); top: 664px; left: 0px; position: absolute; cursor: default; display: none;"><div style="position: relative; top: 0px; height: 6px; width: 0px; background-color: rgb(74, 156, 253); border: 0px; background-clip: padding-box; border-radius: 0px; left: 0px;"></div></div></nav>
				</li>
				<!-- //nav_agile_w3l -->
                <li class="second logo"><h1><a href="file:///C:/xampp1/htdocs/CSSDesign/designnew/main-page.html"><i class="fa fa-graduation-cap" aria-hidden="true"></i>Library Management</a></h1></li>
					
				
				
				

				<li class="second w3l_search">
				 
						
						</form>
					
				</li>
				<li class="second full-screen">
					<section class="full-top">
							
					</section>
				</li>

			</ul>
			<!-- //nav -->
			
		</div>
		<div class="clearfix"></div>
		<!-- //w3_agileits_top_nav-->
		
		<!-- /inner_content-->
				<div class="inner_content">
				    <!-- /inner_content_w3_agile_info-->

					<!-- breadcrumbs -->
						<div class="w3l_agileits_breadcrumbs">
							<div class="w3l_agileits_breadcrumbs_inner">
								<ul>
									
									
									
								</ul>
							</div>
						</div>
					<!-- //breadcrumbs -->

					<div class="inner_content_w3_agile_info two_in">
					  

							<!--/forms-->
													<div class="forms-main_agileits">
														
															<div class="graph-form agile_info_shadow">
															 <h3 class="w3_inner_tittle two">Student Details </h3>
																	<div class="form-body">
                            <form action="" method="POST" enctype="multipart/form-data">
		<table class="table table-bordered">
            <tr>
                <td><input type="text" name="name" class="form-control" placeholder="Books Name" required=""> </td>
            </tr>
            <tr>
                <td></br><input type="file"  name="upload" placeholder="Book Image" required="">Books Image</td>
            </tr>
            <tr>
                <td><input type="text" name="author_name" class="form-control" placeholder="Book Author Name" required=""> </td>
            </tr>
            <tr>
                <td><input type="text" name="publication_name" class="form-control" placeholder="Book Publication Name" required=""> </td>
            </tr>
            <tr>
                <td><input type="text" name="purchase_date" class="form-control" placeholder="Purchase Date" required=""> </td>
            </tr>
            <tr>
                <td><input type="text" name="price" class="form-control" placeholder="Books Price" required=""> </td>
            </tr>
            <tr>
                <td><input type="text" name="quantity" class="form-control" placeholder="Books Quantity" required=""> </td>
            </tr>
            <tr>
                <td><input type="text" name="available_quantity" class="form-control" placeholder="Books Available Quantity" required=""> </td>
            </tr>
            <tr>
                <td><input type="text" name="lib_issued" class="form-control" placeholder="Librarian Books Issued" required=""> </td>
            </tr>
            <tr>
                <td><input type="submit" name="btn-add" value="Insert Details" style="background-color:Gray"></td>
            </tr>
        </table>			
                        </form>	
						<button><a href="par4.php">Back</a></button>
		

			

																</div>

															</div>
																<!--/forms-inner-->
													  				<div class="forms-inner">
																	  <!--/set-1-->
																		
																			 <!--//set-1-->
																			  <!--/set-2-->
												
																			
																			
																			 <!--//set-2-->

																			 <!--/set-3-->
												
																				
																			<!--//set-3-->
																			<!--/set-4-->
																				
																		
																		   <!--//set-4-->
																		</div>
																	<!--//forms-inner-->
																</div> 
														<!--//forms-->											   
					
							<!-- /social_media-->
						  
						<!-- //social_media-->
				    </div>
					<!-- //inner_content_w3_agile_info-->
				</div>
		<!-- //inner_content-->
	</div>
<!-- banner -->
<!--copy rights start here-->
	
<!--copy rights end here-->
<!-- js -->

          <script type="text/javascript" src="./add_books_files/jquery-2.1.4.min.js.download"></script>
		  <script src="./add_books_files/modernizr.custom.js.download"></script>
		
		   <script src="./add_books_files/classie.js.download"></script>
		  <script src="./add_books_files/gnmenu.js.download"></script>
		  <script>
			new gnMenu( document.getElementById( 'gn-menu' ) );
		 </script>

<!-- //js -->
<script src="./add_books_files/screenfull.js.download"></script>
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
<script src="./add_books_files/jquery.nicescroll.js.download"></script>
<script src="./add_books_files/scripts.js.download"></script><div id="ascrail2000" class="nicescroll-rails" style="width: 6px; z-index: 1000; background: rgb(255, 255, 255); cursor: default; position: fixed; top: 0px; height: 100%; right: 0px; display: none; opacity: 0;"><div style="position: relative; top: 0px; float: right; width: 6px; height: 730px; background-color: rgb(74, 156, 253); border: 0px; background-clip: padding-box; border-radius: 10px;"></div></div><div id="ascrail2000-hr" class="nicescroll-rails" style="height: 6px; z-index: 1000; background: rgb(255, 255, 255); position: fixed; left: 0px; width: 100%; bottom: 0px; cursor: default; display: block; opacity: 0;"><div style="position: relative; top: 0px; height: 6px; width: 661px; background-color: rgb(74, 156, 253); border: 0px; background-clip: padding-box; border-radius: 10px; left: 0px;"></div></div><div id="ascrail2000" class="nicescroll-rails" style="width: 6px; z-index: 1000; background: rgb(255, 255, 255); cursor: default; position: fixed; top: 0px; height: 100%; right: 0px; display: none; opacity: 0;"><div style="position: relative; top: 0px; float: right; width: 6px; height: 730px; background-color: rgb(74, 156, 253); border: 0px; background-clip: padding-box; border-radius: 10px;"></div></div><div id="ascrail2000-hr" class="nicescroll-rails" style="height: 6px; z-index: 1000; background: rgb(255, 255, 255); position: fixed; left: 0px; width: 100%; bottom: 0px; cursor: default; display: block; opacity: 0;"><div style="position: relative; top: 0px; height: 6px; width: 661px; background-color: rgb(74, 156, 253); border: 0px; background-clip: padding-box; border-radius: 10px; left: 0px;"></div></div><div id="ascrail2000" class="nicescroll-rails" style="width: 6px; z-index: 1000; background: rgb(255, 255, 255); cursor: default; position: fixed; top: 0px; height: 100%; right: 0px; display: none; opacity: 0;"><div style="position: relative; top: 0px; float: right; width: 6px; height: 730px; background-color: rgb(74, 156, 253); border: 0px; background-clip: padding-box; border-radius: 10px;"></div></div><div id="ascrail2000-hr" class="nicescroll-rails" style="height: 6px; z-index: 1000; background: rgb(255, 255, 255); position: fixed; left: 0px; width: 100%; bottom: 0px; cursor: default; display: block; opacity: 0;"><div style="position: relative; top: 0px; height: 6px; width: 661px; background-color: rgb(74, 156, 253); border: 0px; background-clip: padding-box; border-radius: 10px; left: 0px;"></div></div><div id="ascrail2000" class="nicescroll-rails" style="width: 6px; z-index: 1000; background: rgb(255, 255, 255); cursor: default; position: fixed; top: 0px; height: 100%; right: 0px; opacity: 0;"><div style="position: relative; top: 0px; float: right; width: 6px; height: 106px; background-color: rgb(74, 156, 253); border: 0px; background-clip: padding-box; border-radius: 10px;"></div></div><div id="ascrail2000-hr" class="nicescroll-rails" style="height: 6px; z-index: 1000; background: rgb(255, 255, 255); position: fixed; left: 0px; width: 100%; bottom: 0px; cursor: default; display: block; opacity: 0;"><div style="position: relative; top: 0px; height: 6px; width: 661px; background-color: rgb(74, 156, 253); border: 0px; background-clip: padding-box; border-radius: 10px; left: 0px;"></div></div><div id="ascrail2000" class="nicescroll-rails" style="width: 6px; z-index: 1000; background: rgb(255, 255, 255); cursor: default; position: fixed; top: 0px; height: 100%; right: 0px; opacity: 0;"><div style="position: relative; top: 0px; float: right; width: 6px; height: 79px; background-color: rgb(74, 156, 253); border: 0px; background-clip: padding-box; border-radius: 10px;"></div></div><div id="ascrail2000-hr" class="nicescroll-rails" style="height: 6px; z-index: 1000; background: rgb(255, 255, 255); position: fixed; left: 0px; width: 100%; bottom: 0px; cursor: default; display: none; opacity: 0;"><div style="position: relative; top: 0px; height: 6px; width: 763px; background-color: rgb(74, 156, 253); border: 0px; background-clip: padding-box; border-radius: 10px;"></div></div>

<script type="text/javascript" src="./add_books_files/bootstrap-3.1.1.min.js.download"></script>



</body></html>