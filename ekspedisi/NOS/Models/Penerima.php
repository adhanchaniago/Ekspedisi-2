<?php

require_once 'Models/Service.php';

class Penerima{
	private $service = NULL;

	public function __construct(){
		$this->service = new Service();
	}

	public function createNewPenerima($namaPenerima, $teleponPenerima, $alamatPenerima, $kodePos){
		$this->service->insertPenerima($namaPenerima, $teleponPenerima, $alamatPenerima, $kodePos);

		return mysqli_insert_id($this->service->connection);

	}

}