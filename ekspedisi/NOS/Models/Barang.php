<?php

require_once 'Models/Service.php';

class Barang{
	private $service = NULL;

	public function __construct(){
		$this->service = new Service();
	}

	public function createNewBarang($namaBarang, $jenisBarang, $beratBarang){
		$this->service->insertBarang($namaBarang, $jenisBarang, $beratBarang);

		return mysqli_insert_id($this->service->connection);
	}
}