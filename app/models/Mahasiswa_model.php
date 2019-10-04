<?php 

class Mahasiswa_model{
	private $mhs = [
		[

			"nama" => "Michael Herda",
			"nrp"=> "173040005",
			"email"=> "michaelherdaxx@mail.unpas.ac.id",
			"jurusan"=>"Teknik Informatika"


		],

		[

			"nama" => "Eki Jabber",
			"nrp"=> "1730400016",
			"email"=> "eki@mail.unpas.ac.id",
			"jurusan"=>"Teknik Informatika"


		],
		
		[

			"nama" => "Erdiqa",
			"nrp"=> "173040002",
			"email"=> "Erx@mail.unpas.ac.id",
			"jurusan"=>"Teknik Informatika"


		]


	];

	public function getAllMahasiswa(){

		return $this->mhs;
	}
}
