<?php

require_once 'Models/Service.php';

class Transaksi{

	private $service = NULL;

	public function __construct(){
		$this->service = new Service();
	}

	public function getAllTransaksi(){
		$resource = $this->service->selectAll();
		return $resource;
	}

	public function getTransaksi($id){
		$resource = $this->service->selectById($id);
		return $resource;	
	}

	public function createNewTransaksi($noResi, $idPengirim, $idPenerima, $idBarang, $jenisTransaksi, $asalKota, $tujuanKota, $tglKirim, $tglTerima, $status, $harga){
		$this->service->insert($noResi, $idPengirim, $idPenerima, $idBarang, $jenisTransaksi, $asalKota, $tujuanKota, $tglKirim, $tglTerima, $status, $harga);
	}

	public function deleteTransaksi($id){
		$this->service->delete($id);
	}

	public function updateTransaksi($id){
		$resource = $this->service->selectById($id);
		return $resource;	
	}

	public function update($noResi, $namaPenerima, $teleponPenerima, $alamatPenerima, $kodePos,
				$namaBarang, $jenisBarang, $beratBarang, $idPenerima, $idBarang, $namaPengirim, $teleponPengirim,
				$idPengirim, $jenisTransaksi, $asalKota, $tujuanKota, $tglKirim, $tglTerima, $status, $harga){
		$this->service->update($noResi, $namaPenerima, $teleponPenerima, $alamatPenerima, $kodePos,
				$namaBarang, $jenisBarang, $beratBarang, $idPenerima, $idBarang, $namaPengirim, $teleponPengirim,
				$idPengirim, $jenisTransaksi, $asalKota, $tujuanKota, $tglKirim, $tglTerima, $status, $harga);
	}
}