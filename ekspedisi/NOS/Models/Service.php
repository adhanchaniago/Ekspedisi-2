<?php

class Service{
	public $connection;

	public function __construct(){
		$this->connection = mysqli_connect("localhost","admin","admin1","ekspedisi");
	}

	public function selectAll(){
		$action = mysqli_query($this->connection,"SELECT t.no_resi, p.nama_pengirim, t.status 
			FROM transaksi t JOIN pengirim p
			ON t.id_pengirim = p.id_pengirim");
		
		$list = array();
		while(($obj = mysqli_fetch_object($action)) != NULL){
			$list[] = $obj;
		}

		return $list;
	}

	public function selectById($id){
		$action = mysqli_query($this->connection,"SELECT t.no_resi, p.nama_pengirim, p.telepon_pengirim, 
			pa.nama_penerima, pa.telepon_penerima, pa.alamat_penerima, pa.kode_pos, b.nama_barang,
			b.jenis_barang, b.berat_barang, t.jenis_paket, t.asal_kota, t.tujuan_kota,
			t.tgl_kirim, t.tgl_terima, t.status, t.harga , t.id_pengirim , t.id_penerima, t.id_barang 
			FROM transaksi t JOIN pengirim p ON t.id_pengirim = p.id_pengirim 
			JOIN penerima pa ON t.id_penerima = pa.id_penerima JOIN barang b ON t.id_barang = b.id_barang 
			WHERE no_resi = $id") or die("error");
		return mysqli_fetch_object($action);
	}

	public function insert($noResi, $idPengirim, $idPenerima, $idBarang, $jenisTransaksi, $asalKota, 
		$tujuanKota, $tglKirim, $tglTerima, $status, $harga){
		$jenisTransaksi = ($jenisTransaksi != NULL) ? "$jenisTransaksi" : "NULL";			
		$asalKota = ($asalKota != NULL) ? "$asalKota" : "NULL";		
		$tujuanKota = ($tujuanKota != NULL) ? "$tujuanKota" : "NULL";		
		$tglKirim = ($tglKirim != NULL) ? "$tglKirim" : "NULL";		
		$tglTerima = ($tglTerima != NULL) ? "$tglTerima" : "NULL";		
		$status = ($status != NULL) ? "$status" : "NULL";		

		mysqli_query($this->connection, "INSERT INTO transaksi(no_resi, id_pengirim, id_penerima, 
			id_barang, jenis_paket, asal_kota, tujuan_kota, tgl_kirim, tgl_terima, status, harga) 
			VALUES ('$noResi', '$idPengirim', '$idPenerima', '$idBarang', '$jenisTransaksi', 
				'$asalKota', '$tujuanKota', '$tglKirim', '$tglTerima', '$status', $harga)");
	}

	public function insertPenerima($namaPenerima, $teleponPenerima, $alamatPenerima, $kodePos){
		$namaPenerima = ($namaPenerima != NULL) ? "$namaPenerima" : "NULL";	
		$teleponPenerima = ($teleponPenerima != NULL) ? "$teleponPenerima" : "NULL";	
		$alamatPenerima = ($alamatPenerima != NULL) ? "$alamatPenerima" : "NULL";
		$kodePos = ($kodePos != NULL) ? "$kodePos" : "NULL";

		mysqli_query($this->connection, "INSERT INTO penerima(nama_penerima, telepon_penerima, alamat_penerima, kode_pos) 
			VALUES ('$namaPenerima', '$teleponPenerima', '$alamatPenerima', '$kodePos')");
	}	

	public function insertBarang($namaBarang, $jenisBarang, $beratBarang){
		$namaBarang = ($namaBarang != NULL) ? "$namaBarang" : "NULL";	
		$jenisBarang = ($jenisBarang != NULL) ? "$jenisBarang" : "NULL";	
		$beratBarang = ($beratBarang != NULL) ? "$beratBarang" : "NULL";	

		mysqli_query($this->connection, "INSERT INTO barang(nama_barang, jenis_barang, berat_barang) VALUES ('$namaBarang', '$jenisBarang', '$beratBarang')");
	}

	public function insertPengirim($idPenerima, $idBarang, $namaPengirim, $teleponPengirim){
		$namaPengirim = ($namaPengirim != NULL) ? "$namaPengirim" : "NULL";	
		$teleponPengirim = ($teleponPengirim != NULL) ? "$teleponPengirim" : "NULL";	
		
		mysqli_query($this->connection, "INSERT INTO pengirim(id_penerima, id_barang, nama_pengirim, telepon_pengirim) VALUES ('$idPenerima', '$idBarang', '$namaPengirim', '$teleponPengirim')") or die("error");
	}	

	public function delete($id){
		mysqli_query($this->connection, "DELETE FROM transaksi WHERE no_resi = $id");
	}
	
	public function update($noResi, $namaPenerima, $teleponPenerima, $alamatPenerima, $kodePos,
				$namaBarang, $jenisBarang, $beratBarang, $idPenerima, $idBarang, $namaPengirim, 
				$teleponPengirim, $idPengirim, $jenisTransaksi, $asalKota, $tujuanKota, $tglKirim, 
				$tglTerima, $status, $harga){

		mysqli_query($this->connection, "UPDATE penerima SET nama_penerima = '$namaPenerima', 
			telepon_penerima = '$teleponPenerima', alamat_penerima = '$alamatPenerima', 
			kode_pos = '$kodePos' WHERE id_penerima = '$idPenerima'") or die("error");		

		mysqli_query($this->connection, "UPDATE barang SET nama_barang = '$namaBarang', 
			jenis_barang = '$jenisBarang', 
			berat_barang = '$beratBarang' WHERE id_barang = '$idBarang'") or die("error");		

		mysqli_query($this->connection, "UPDATE pengirim SET nama_pengirim = '$namaPengirim', 
			telepon_pengirim = '$teleponPengirim'
			WHERE id_pengirim = '$idPengirim'") or die("error");		

		mysqli_query($this->connection, "UPDATE transaksi SET jenis_paket = '$jenisTransaksi',
			 asal_kota = '$asalKota', tujuan_kota = '$tujuanKota', tgl_kirim = '$tglKirim', 
			 tgl_terima = '$tglTerima', status = '$status', 
			harga = '$harga' WHERE no_resi = '$noResi'") or die("error");		
	}

}