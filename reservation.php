<!DOCTYPE html>
<html lang = "en">
	<head>
		<title>Hotel De Kabacan Online Reservation</title>
		<meta charset = "utf-8" />
		<meta name = "viewport" content = "width=device-width, initial-scale=1.0" />
		<link rel = "stylesheet" type = "text/css" href = "css/bootstrap.css " />
		<link rel = "stylesheet" type = "text/css" href = "css/style.css" />
	</head>
<body>
	<nav style = "background-color:rgba(0, 0, 0, 0.8);" class = " navbar-center-top">
		<div  class = "container-fluid">
			<div class = "navbar-header">
				<a class = "navbar-brand" >Hotel De Kabacan Online Reservation</a>
				
			</div>
		</div>
	</nav>	
	<ul id = "menu">
		<li><a href = "index.php">Home</a></li> /
		<li><a href = "aboutus.php">About the Hotel </a></li> /
		<li><a href = "gallery.php">Photos </a></li> /
		<li><a href = "cuisine_ de_ kabacan.php">Cuisine De Kabacan</a></li> /
		<li><a href = "reservation.php">Book a reservation</a></li> /
		<li class="current"><a href="location.php">location</a></li> /
		<li><a href = "policies.php">Policies</a></li> /
		<li><a href = "contactus.php">Contact </a></li> /
		<a href ="http://www.facebook.com/my_page">fb.com</a>/
	
	</ul>
	<div style = "margin-left:50;" class = "container">
		<div class = "panel panel-default">
			<div class = "panel-body">
				<strong><h3>Reservation in Here</h3></strong>
				<?php
					require_once 'admin/connect.php';
					$query = $conn->query("SELECT * FROM `room` ORDER BY `price` ASC") or die(mysql_error());
					while($fetch = $query->fetch_array()){
				?>
					<div class = "well" style = "height:300px; width:100%;">
						<div style = "float:right;">
							<img src = "photo/<?php echo $fetch['photo']?>" height = "250" width = "350"/>
						</div>
						<div style = "float:left; margin-left:10px;">
							<h3><?php echo $fetch['room_type']?></h3>
							<h4 style = "color:#ff0000;"><?php echo "Price: Php. ".$fetch['price'].".00"?></h4>
							<br /><br /><br /><br /><br /><br />
							<a style = "margin-right:580px;" href = "add_reserve.php?room_id=<?php echo $fetch['room_id']?>" class = "btn btn-info"><i class = "glyphicon glyphicon-list"></i> Reserve</a>
						</div>
					</div>
				<?php
					}
				?>
			</div>
		</div>
	</div>
	<br />
	<br />
	<div style = "text-align:right; margin-right:10px;" class = "navbar navbar-default navbar-fixed-bottom">
		
	</div>
</body>
<script src = "js/jquery.js"></script>
<script src = "js/bootstrap.js"></script>	
</html>