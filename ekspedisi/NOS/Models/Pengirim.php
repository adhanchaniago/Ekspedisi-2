<?php

require_once 'Models/Service.php';

class Pengirim{
	private $service = NULL;

	public function __construct(){
		$this->service = new Service();
	}

	public function createNewPengirim($idPenerima, $idBarang, $namaPengirim, $teleponPengirim){
		$this->service->insertPengirim($idPenerima, $idBarang, $namaPengirim, $teleponPengirim);

		return mysqli_insert_id($this->service->connection);
	}
}