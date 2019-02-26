<?php
  include_once 'includes/dbh.inc.php';
 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Homepage</title>
	<link href="stylesheets/style.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>

</head>
<body>
	<div class=" BMDC logo"><img alt="City of Bradford Metropolitan District Council logo" height="130px" src="https://bradfordmdc.files.wordpress.com/2017/08/wordpress-featured-image-bradford-council-logo-2017c1.png?w=604&h=270&crop=1" width="300px"></div>
	<h1>Welcome to Bradford Metropolitan District Council</h1>


	<nav class="nav">
		<ul>
			<li>
				<a href="#">Department of Place</a>
			</li>
			<li>
				<a href="#">Department of Children Services</a>
			</li>
			<li>
				<a href="#">Department of Adult Services</a>
			</li>
		</ul>
	</nav>



<!--	<div class="login">
		<h2>Sign In</h2>
		<form action="login.php" class="box" method="post">
			<label>Username</label><br>
			<input class="value" placeholder="Username" type="text"><br>
			<label>Password</label><br>
			<input class="value" placeholder="Password" type="password"><br>
			<input class="login_btn" type="submit" value="Sign in"><br>
			<a href="register.html"><input class="register_btn" type="button" value="Register"></a>
		</form>
	</div> -->

<br /><br />
<div class="container" style="width:900px">
  <h2 allign="center">Test</h2>
  <br /><br />
  <div id="chart"></div>
</div>

<script>
  Morris.Line({
    element : 'chart',
    data:[<?php echo $chart_data; ?>],
    xkey: 'NameID',
    ykeys: ['AddressID','HouseNameNo', 'FirstName', 'Surname', 'TelNo'],
    labels: ['Address','HouseName', 'FirstName', 'Surname', 'TelNo'],
    hideHower: 'auto',
  });
</script>


</body>
</html>
