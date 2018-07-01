<!DOCTYPE html>
<html>
<head>
	<title>NOS</title>
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
			<h1>Daftar Transaksi</h1>

			<div id="box">
				<table>
					<thead>
						<tr>
							<th>No Resi</th>
							<th>Nama Pengirim</th>
							<th>Status</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($lists as $list): ?>
							<tr>
								<td><?php print $list->no_resi; ?></td>
								<td><a href="index.php?operation=show&id=<?php print $list->no_resi; ?>"><?php print $list->nama_pengirim; ?></a></td>
								<td><?php print $list->status; ?></td>
								<td><a href="index.php?operation=update&id=<?php print $list->no_resi; ?>"><img src="Views/images/update.png" id="action"></a>
								<a href="index.php?operation=delete&id=<?php print $list->no_resi; ?>"><img src="Views/images/delete.png" id="action"></a></td>
							</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</body>
</html>
