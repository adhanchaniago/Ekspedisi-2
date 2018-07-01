<!DOCTYPE HTML>
<html>
<head>
	<title>Kantor Pengiriman</title>
	<link rel="stylesheet" type="text/css" href="styles/CariKota.css" />
	<script language="javascript" src="js/daftar.js"></script>
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
	<div id="div2" class="bingkai2">
		<h2>Cari Lokasi Kantor</h2>
		<form name="form" name="form" action="DaftarKantor.php" method="POST" onsubmit="return validasi()">
			<label name="kota" align="center"></label>
			<select id="kota" name="kota">
				<option  value="Kota">Pilih Kota</option>
				<option  value ="1" name="Batu">Batu</option>
				<option  value ="2" name="Bangkalan">Bangkalan</option>
				<option  value ="3" name="Banyuwangi">Banyuwangi</option>
				<option  value ="4" name="Blitar">Blitar</option>
				<option  value ="5" name="Jember">Jember</option>
				<option  value ="6" name="Kediri">Kediri</option>
				<option  value ="7" name="Lamongan">Lamongan</option>
				<option  value ="8" name="Lumajang">Lumajang</option>
				<option  value ="9" name="Madiun">Madiun</option>
				<option  value ="10" name="Malang">Malang</option>
				<option  value ="11" name="Pasuruan">Pasuruan</option>
				<option  value ="12" name="Probolinggo">Probolinggo</option>
				<option  value ="13" name="Sidoarjo">Sidoarjo</option>
				<option  value ="14" name="Situbondo">Situbondo</option>
				<option  value ="15" name="Surabaya">Surabaya</option></select><br><br>
				<button type="submit" align="center">Cari</button>
			</div>	
</body>
</html>