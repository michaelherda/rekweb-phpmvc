<?php 

class About extends Controller {
	public function index($nama = 'michael', $pekerjaan='mahasiswa', $umur = 'umur'){
		$data['nama']=$nama;
		$data['pekerjaan']=$pekerjaan;
		$data['umur']=$umur;
		$this->view('templates/header');
		$this->view('about/index', $data);
		$this->view('templates/footer');
	}
	public function page(){
		$this->view('about/page');
	}

}