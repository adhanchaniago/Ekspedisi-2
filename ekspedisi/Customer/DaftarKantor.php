<!DOCTYPE HTML>
<html>
<head>
	<title>Kantor Pengiriman</title>
	<link rel="stylesheet" type="text/css" href="styles/CariKota.css" />
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

	<div id="daftar-kantor">
		<h2>Alamat Kantor</h2>
	<?php
	include "koneksi.php";		
	$q = mysqli_query ($connect, "SELECT * FROM daftar WHERE id=$_POST[kota]");
	echo "<table border=2 cellpadding=5 cellspacing=0 align=center style=width:60%>
	<th>Nama Kota</th> 
	<th>Alamat Kantor Pengiriman</th>";
	while ($hasil = mysqli_fetch_array($q)){
		echo " <tr>
		<td>$hasil[kota]</td>
		<td>";
			$str = $hasil['alamat'];
			$temp = explode("," , $str);
			foreach($temp as $value){
				echo $value."<br/>";
			}
			echo "</td></tr>";
		}
		echo "</table>";
		?>
		<br><br>
		<a href="CariKota.php">
			<button id="back">Back</button>	
		</a>		
	</div>
		
</body>
</html>
