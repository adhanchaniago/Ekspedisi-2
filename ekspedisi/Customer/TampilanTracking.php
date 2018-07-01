	<div id="hasil">
	<div>
		<h2 id="tracking">Hasil Tracking Layanan Ekspedisi</h2>
	</div>

	<div id="contTracking">
<?php
	function cek(){
		$resi = $_POST['resi'];
		$connection = new mysqli('localhost','admin','admin1','ekspedisi');
		$query = ("SELECT t.no_resi, p.nama_pengirim, pa.nama_penerima, b.nama_barang,
			t.asal_kota, t.tujuan_kota,	t.tgl_kirim, t.tgl_terima, t.status FROM transaksi t JOIN pengirim p ON t.id_pengirim = p.id_pengirim 
			JOIN penerima pa ON t.id_penerima = pa.id_penerima JOIN barang b ON t.id_barang = b.id_barang WHERE no_resi = $resi");

		$result = mysqli_query($connection,$query);
	while($row = mysqli_fetch_array($result)){
?>		
		
<?php
		echo 'No resi: '.$row[0].'<br>';
		echo 'Pengirim: '.$row[1].'<br>';
		echo 'Penerima: '.$row[2].'<br>';
		echo 'Barang: '.$row[3].'<br>';
		echo 'Kota asal: '.$row[4].'<br>';
		echo 'Kota tujuan: '.$row[5].'<br>';
		echo 'Tgl kirim: '.$row[6].'<br>';
		echo 'Tgl sampai: '; echo $row[7] == "0000-00-00" ? "-" : $row[7]; echo '<br>';
		echo 'Status: '.$row[8].'<br>';
?>
		
<?php
	}
	if (mysqli_num_rows ($result) != 1){
		echo 'Maaf, nomor resi yang anda masukkan tidak terdaftar<br>';
		echo 'Mohon cek kembali nomor resi anda';
?>
<?php	}
}
?>
		<div class="content" style="margin-top:10px;font-size:25px"><?php cek()?></div>
		</div>

		</div>