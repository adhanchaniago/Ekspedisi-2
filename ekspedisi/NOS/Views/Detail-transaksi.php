<!DOCTYPE html>
<html>
<head>
	<title>Detail Transaksi</title>
	<link rel="stylesheet" type="text/css" href="Views/styles/global.css" />
</head>
<body>
	<div id="header">
		<div class="logo">
			<img id="icon-logo" src="Views/images/nos.png">
		</div>

		<div class="navMenu">
			<ul class="menu">
				<li><a href="#">Admin</a></li>
			</ul>
		</div>
	</div>

	<div id="container">
		<div class="sidebar">
			<ul id="nav">
				<li class="add"><a href="index.php?operation=add">Add</a></li>
				<li class="list"><a href="index.php?operation=list">List</a></li>
			</ul>
		</div>

		<div class="content">
			<h1>Detail Transaksi <?php print $lists->nama_pengirim; ?></h1>

			<div id="box">
				<table>
					<thead>
						<tr>
							<th>Kolom</th>
							<th>Isian</th>
						</tr>
					</thead>
					<tbody>
						<?php
							$kolom = array('No. Resi', 'Nama Pengirim', 'Telepon Pengirim', 
								'Nama Penerima', 'Telepon Penerima', 'Alamat Penerima', 'Kode Pos',
								'Nama Barang', 'Jenis Barang', 'Berat Barang', 'Jenis Paket',
								'Asal Kota', 'Tujuan Kota','Tanggal Kirim', 'Tanggal Terima', 'Status', 'Harga');
							$i = 0;
						?>
						<?php foreach ($lists as $list): ?>
							<tr>
								<td><?php print $kolom[$i++]; ?></td>
								<td><?php 
									print ($i == 17) ? "Rp. ".$list.",-" : $list; 
									if($i==17) break;
								?></td>
							</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</body>
</html>