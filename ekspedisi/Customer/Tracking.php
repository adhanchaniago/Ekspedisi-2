<!DOCTYPE html>
<html>
<head>
	<title>Customer</title>
	<link rel="stylesheet" type="text/css" href="Views/styles/global.css" />
	<link rel="stylesheet" type="text/css" href="styles/Tracking.css" />
	<link rel="stylesheet" type="text/css" href="styles/TampilanTracking.css" />
	<script src="js/jquery.min.js"></script>	
	<script src="js/ajax.js"></script>	
</head>
<body>
	<div id="header">
		<div class="logo">
			<img id="icon-logo" src="images/nos.png">
		</div>

		<div class="navMenu">
			<ul class="menu">
				<li><a href="Customer.php">Customer</a></li>
			</ul>
		</div>
	</div>

	<div>
		<h2 id="tracking">Tracking Layanan Ekspedisi</h2>
	</div>

	<div class="content-tracking">
		<form method="POST" action="" class="form-tracking" id="form-tracking">			
			<label id="position">Masukkan Nomor Resi</label>
			<input id="position" type="text" class="form-control" name="resi" placeholder="Nomor Resi" >
			<button id="position" type="submit" class="button" >Submit</button>
		</form>
	</div>

	<div id="detail">
		
	</div>

</body>
</html>
