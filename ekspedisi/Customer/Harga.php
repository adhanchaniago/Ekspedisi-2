<!DOCTYPE html>
<head>
	<title>Harga</title>
	<link rel="stylesheet" type="text/css" href="styles/CekHarga.css" />
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
		<h2 id="tracking">Cek Harga Pengiriman</h2>
	</div>
		<div class="box-Harga">
		<?php
			$asal = $_POST['Asal'];
			$tujuan = $_POST['Tujuan'];
			$berat = $_POST['Berat'];
			$paket = $_POST['Paket'];
			$harga = 0;
			if($paket=="Regular"){
				$harga = 10000 * $berat;
			}elseif($paket=="Express"){
				$harga = 15000 * $berat;
			}elseif($paket=="Flash"){
				$harga = 20000 * $berat;
			}
			echo "Harga pengiriman dari kota ".$asal." ke kota ".$tujuan."<br/>";
			echo "dengan berat barang ".$berat." Kg dan paket ".$paket." adalah Rp. ".$harga." ,-";	
		?>
		<br/>
		<a href="CekHarga.php">
			<button>Back</button>	
		</a>
		</div>
</body>
</html>