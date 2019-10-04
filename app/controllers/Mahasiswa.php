<?php 

class Mahasiswa{
	public function index(){

		$this->view('templates/header', $data);
		$this->view('mahasiswa/index');
		$this->view('templates/footer');
	}1
}