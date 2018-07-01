<?php
$connection = new mysqli('localhost','admin','admin1','ekspedisi');
$query = ("SELECT kota FROM daftar");

$result = mysqli_query($connection,$query);
$result2 = mysqli_query($connection,$query);
?>

<!DOCTYPE html>
<head>
	<title>Cek Harga</title>
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
				<form name="form1" action="Harga.php" method="post" />  
				<center>		
					<p></p>
					<p> Silahkan Isi Berdasarkan Kota Asal, Kota Tujuan, Berat Barang, dan Paket Pengiriman </p>
					<dl>  
						Kota Asal
						<select id="Asal" name="Asal">
							<?php while($row = mysqli_fetch_array($result)){ ?>
								<option><?php echo $row[0]; ?></option>
							<?php  } ?>
						</select><br/>
						Kota Tujuan
						<select id="Tujuan" name="Tujuan">
							<?php while($row = mysqli_fetch_array($result2)){ ?>
								<option><?php echo $row[0]; ?></option>
							<?php  } ?>
						</select><br/>
						Berat Barang
						<input type="text" name="Berat" id="Berat" size="30" placeholder="Satuan : Kilogram(kg)"><br/>
						Paket 
						<select type="text" name="Paket" id="Paket" > 
							<option>Regular</option> 
							<option>Express</option> 
							<option>Flash</option>  
						</select>
						<p> KETERANGAN : </p>
						<p> 1. Paket "Regular" lama pengiriman sekitar 5-7 hari </p>
						<p> 2. Paket "Express" lama pengiriman sekitar 3-4 hari </p>
						<p> 3. Paket "Flash" lama pengiriman sekitar 1-2 hari </p>
						<input type="submit" name="save" id="save" value="Cek Harga" onclick="saveForm(); return false;">
						</dl> 
						</center> 
					</form>    
				</div>
				<script type="text/javascript">  

					function numberCheck(berat) {
						var regex = /^\d+$/;
						return regex.test(berat);
					}

					function saveForm(){  
						var asal = document.getElementById('Asal').value;
						var tujuan = document.getElementById('Tujuan').value;
						var berat = document.getElementById('Berat').value;

						if(asal == ''){  
							alert('Kota asal harus diisi !');  
							document.getElementById('Asal').focus();  
							return false;  
						}  

						if(tujuan == ''){  
							alert('Kota tujuan harus diisi !');  
							document.getElementById('Tujuan').focus();  
							return false;  
						}

						if(berat == ''){  
							alert('Berat barang harus diisi !');  
							document.getElementById('Berat').focus();  
							return false;  
						} else if(!numberCheck(berat)){
							alert("Masukkan angka saja !");
							return;
						}
						document.getElementById('form1').submit();  
					} 

				</script>
</body>
</html>