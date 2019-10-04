<?php 

class About {
	public function index($nama = 'michael', $pekerjaan='mahasiswa'){
		$this->view('about/index');
	}
	public function page(){
		$this->view('about/page');
	}

}