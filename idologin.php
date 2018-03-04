<!DOCTYPE html>
<html>
<head>
	<title>login</title>
	<link rel="stylesheet" type="text/css" href="ido.css">

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by FreeHTML5.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="FreeHTML5.co" />

	
  <!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by FreeHTML5.co
		
	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- <link href='https://fonts.googleapis.com/css?family=Work+Sans:400,300,600,400italic,700' rel='stylesheet' type='text/css'> -->
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

</head>
<body>
<?php
mysql_connect("localhost","root","12345678");
mysql_select_db("test");

if(isset($_POST['submit']))
{
$username=$_POST['username'];
$password=$_POST['password'];
$repeatpassword=$_POST['repeatpassword'];
$email=$_POST['email'];
$sexe=$_POST['sexe'];

mysql_query(
"insert into users values('','$username','$password','$email','$sexe')"
);
}

?>
	<center>
		<div id="fh5co-header" class="fh5co-cover" role="banner" style="background-image:url(images/img_bg_1.jpg); ">
<form method="POST" action="index.html">
	<label>username:</label>
	<input type="text" name="username"><br><br>
	<label>password:</label>
	<input type="password" name="password"><br><br>
	<label>repeat password:</label>
	<input type="password" name="repeatpassword"><br><br>
	<label>email:</label>
	<input type="email" name="email"><br><br>
	<label>sexe:</label>
	<select>
		<option>home</option>
		<option>femme</option>
	</select><br><br>
	<input class="btn btn-default"  type="submit" name="submit" >
	<p class="btn btn-default"><a href="ido1.php" style="color: black;">login</a></p>
</form>


</center>
</div>
</body>
</html>