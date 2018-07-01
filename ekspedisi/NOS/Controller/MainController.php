<?php

require_once 'Models/Transaksi.php';
require_once 'Models/Penerima.php';
require_once 'Models/Barang.php';
require_once 'Models/Pengirim.php';

class MainController{
	private $transaksi = NULL;
	private $penerima = NULL;
	private $barang = NULL;
	private $pengirim = NULL;

	public function __construct(){
		$this->transaksi = new Transaksi();	
		$this->penerima = new Penerima();
		$this->barang = new Barang();
		$this->pengirim = new Pengirim();
	}

	public function redirect($location){
		header('Location: '.$location);
	}

	public function requestTransaksi(){
		$operation = isset($_GET['operation']) ? $_GET['operation']:NULL;

		if(!$operation || $operation == 'list'){
			$this->listTransaksi();
		}elseif(!$operation || $operation == 'add'){
			$this->addTransaksi();
		}elseif(!$operation || $operation == 'delete'){
			$this->deleteTransaksi();
		}elseif(!$operation || $operation == 'show'){
			$this->showTransaksi();
		}elseif(!$operation || $operation == 'update'){
			$this->updateTransaksi();
		}	
	}

	// public function run(){
	// 	if($this->home()){
	// 		$this->requestTransaksi();	
	// 	}else{
	// 		echo "masuk terus";
	// 		include 'Views/Home.php';
	// 	}	
	// }

	// public function home(){
	// 	$valid = false;
		
	// 	if(isset($_POST['submitted'])){
	// 		$username = isset($_POST['username']) ? $_POST['username'] : NULL;
	// 		$password = isset($_POST['password']) ? $_POST['password'] : NULL;

	// 		if($username == "admin" && $password = "admin1"){
	// 			$valid = true;
	// 		}
	// 	}
		
	// 	$_SESSION['username'] = "admin";

	// 	return $valid;
	// }

	public function listTransaksi(){
		$lists = $this->transaksi->getAllTransaksi();
		
		include 'Views/ViewTransaksi.php';	
		
	}

	public function addTransaksi(){
		$title = "Tambahkan transaksi";

		//penerima
		$namaPenerima = '';
		$teleponPenerima = '';
		$alamatPenerima = '';
		$kodePos = '';

		//barang
		$namaBarang = '';
		$jenisBarang = '';
		$beratBarang = '';

		//pengirim
		$idPenerima = '';
		$idBarang = '';
		$namaPengirim = '';
		$teleponPengirim = '';

		//transaksi
		$noResi = '';
		$idPengirim = '';
		$jenisTransaksi = '';
		$asalKota = '';
		$tujuanKota = '';
		$tglKirim = '';
		$tglTerima = '';
		$status = '';

		if(isset($_POST['form-submitted'])){
			//penerima
			$namaPenerima = isset($_POST['namaPenerima']) ? $_POST['namaPenerima'] : NULL;
			$teleponPenerima = isset($_POST['teleponPenerima']) ? $_POST['teleponPenerima'] : NULL;
			$alamatPenerima = isset($_POST['alamatPenerima']) ? $_POST['alamatPenerima'] : NULL;
			$kodePos = isset($_POST['kodePos']) ? $_POST['kodePos'] : NULL;

			//barang
			$namaBarang = isset($_POST['namaBarang']) ? $_POST['namaBarang'] : NULL;
			$jenisBarang = isset($_POST['jenisBarang']) ? $_POST['jenisBarang'] : NULL;
			$beratBarang = isset($_POST['beratBarang']) ? $_POST['beratBarang'] : NULL;

			//pengirim
			$idPenerima = $this->penerima->createNewPenerima($namaPenerima, $teleponPenerima, $alamatPenerima, $kodePos);

			$idBarang = $this->barang->createNewBarang($namaBarang, $jenisBarang, $beratBarang);
			$namaPengirim = isset($_POST['namaPengirim']) ? $_POST['namaPengirim'] : NULL;
			$teleponPengirim = isset($_POST['teleponPengirim']) ? $_POST['teleponPengirim'] : NULL;

			//transaksi
			$idPengirim = $this->pengirim->createNewPengirim($idPenerima, $idBarang, $namaPengirim, $teleponPengirim);
			$noResi = '201600'.$idPengirim;
			$jenisTransaksi = isset($_POST['jenisTransaksi']) ? $_POST['jenisTransaksi'] : NULL;
			$asalKota = isset($_POST['asalKota']) ? $_POST['asalKota'] : NULL;
			$tujuanKota = isset($_POST['tujuanKota']) ? $_POST['tujuanKota'] : NULL;
			$tglKirim = isset($_POST['tglKirim']) ? $_POST['tglKirim'] : NULL;
			$tglTerima = NULL;
			$status = 'otw';
			$harga = '';

			if($jenisTransaksi == 'Regular'){
				$harga = 10000 * $beratBarang;
			}elseif($jenisTransaksi == 'Express'){
				$harga = 15000 * $beratBarang;
			}elseif($jenisTransaksi == 'Flash'){
				$harga = 20000 * $beratBarang;
			}

			$this->transaksi->createNewTransaksi($noResi, $idPengirim, $idPenerima, $idBarang, $jenisTransaksi, $asalKota, $tujuanKota, $tglKirim, $tglTerima, $status, $harga);
			$this->redirect('index.php');

		}

		include 'Views/Transaksi-form.php';
	}

	public function deleteTransaksi(){
		$id = isset($_GET['id']) ? $_GET['id']:NULL;
		$this->transaksi->deleteTransaksi($id);

		$this->redirect('index.php');
	}

	public function showTransaksi(){
		$id = isset($_GET['id']) ? $_GET['id']:NULL;

		$lists = $this->transaksi->getTransaksi($id);

		include 'Views/Detail-transaksi.php';			
	}

	public function updateTransaksi(){
		$id = isset($_GET['id']) ? $_GET['id']:NULL;

		$lists = $this->transaksi->getTransaksi($id);

		if(isset($_POST['form-submitted'])){
			//penerima
			$namaPenerima = isset($_POST['namaPenerima']) ? $_POST['namaPenerima'] : NULL;
			$teleponPenerima = isset($_POST['teleponPenerima']) ? $_POST['teleponPenerima'] : NULL;
			$alamatPenerima = isset($_POST['alamatPenerima']) ? $_POST['alamatPenerima'] : NULL;
			$kodePos = isset($_POST['kodePos']) ? $_POST['kodePos'] : NULL;

			//barang
			$namaBarang = isset($_POST['namaBarang']) ? $_POST['namaBarang'] : NULL;
			$jenisBarang = isset($_POST['jenisBarang']) ? $_POST['jenisBarang'] : NULL;
			$beratBarang = isset($_POST['beratBarang']) ? $_POST['beratBarang'] : NULL;

			//pengirim
			$idPenerima = isset($_POST['idPenerima']) ? $_POST['idPenerima'] : NULL;
			$idBarang = isset($_POST['idBarang']) ? $_POST['idBarang'] : NULL;
			$namaPengirim = isset($_POST['namaPengirim']) ? $_POST['namaPengirim'] : NULL;
			$teleponPengirim = isset($_POST['teleponPengirim']) ? $_POST['teleponPengirim'] : NULL;

			//transaksi
			$idPengirim = isset($_POST['idPengirim']) ? $_POST['idPengirim'] : NULL;
			$noResi = isset($_POST['noResi']) ? $_POST['noResi'] : NULL;
			$jenisTransaksi = isset($_POST['jenisTransaksi']) ? $_POST['jenisTransaksi'] : NULL;
			$asalKota = isset($_POST['asalKota']) ? $_POST['asalKota'] : NULL;
			$tujuanKota = isset($_POST['tujuanKota']) ? $_POST['tujuanKota'] : NULL;
			$tglKirim = isset($_POST['tglKirim']) ? $_POST['tglKirim'] : NULL;
			$tglTerima = isset($_POST['tglTerima']) ? $_POST['tglTerima'] : NULL;
			$status = isset($_POST['status']) ? $_POST['status'] : NULL;
			$harga = '';

			if($jenisTransaksi == 'Regular'){
				$harga = 10000 * $beratBarang;
			}elseif($jenisTransaksi == 'Express'){
				$harga = 15000 * $beratBarang;
			}elseif($jenisTransaksi == 'Flash'){
				$harga = 20000 * $beratBarang;
			}

			$this->transaksi->update($noResi, $namaPenerima, $teleponPenerima, $alamatPenerima, $kodePos,
				$namaBarang, $jenisBarang, $beratBarang, $idPenerima, $idBarang, $namaPengirim, $teleponPengirim,
				$idPengirim, $jenisTransaksi, $asalKota, $tujuanKota, $tglKirim, $tglTerima, $status, $harga);
			$this->redirect('index.php');

		}

		include 'Views/Update-transaksi.php';				
	}
}