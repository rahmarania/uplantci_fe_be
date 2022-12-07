<?php

	namespace App\Controllers;

	class BerandaWeb extends BaseController{
    protected $helpers = ['custom'];

		public function index(){	        
			$builder = $this->db->table('uplant');
	        $query   = $builder->getWhere(['jenis' => 'Tanaman Hias'])->getResult();
	        $query2   = $builder->getWhere(['jenis' => 'Tanaman Obat'])->getResult();
	        $query3   = $builder->getWhere(['jenis' => 'Tanaman Hidroponik'])->getResult();
	        $query4   = $builder->getWhere(['jenis' => 'Tanaman Buah'])->getResult();
	        $query5   = $builder->getWhere(['jenis' => 'Tanaman Sayur'])->getResult();
	        $data['uplant'] = $query;
	        $data['uplant2'] = $query2;
	        $data['uplant3'] = $query3;
	        $data['uplant4'] = $query4;
	        $data['uplant5'] = $query5;
        	// print_r("<pre>"); print_r($query); die();
	        
			return view('webuser/beranda/indexout',$data);	

		}

		public function noLogin(){
			$builder = $this->db->table('uplant');
	        $query   = $builder->getWhere(['jenis' => 'Tanaman Hias'])->getResult();
	        $query2   = $builder->getWhere(['jenis' => 'Tanaman Obat'])->getResult();
	        $query3   = $builder->getWhere(['jenis' => 'Tanaman Hidroponik'])->getResult();
	        $query4   = $builder->getWhere(['jenis' => 'Tanaman Buah'])->getResult();
	        $query5   = $builder->getWhere(['jenis' => 'Tanaman Sayur'])->getResult();
	        $data['uplant'] = $query;
	        $data['uplant2'] = $query2;
	        $data['uplant3'] = $query3;
	        $data['uplant4'] = $query4;
	        $data['uplant5'] = $query5;

        	// print_r("<pre>"); print_r($query); die();
	        
			return view('webuser/beranda/index',$data);	

		}

		public function about(){
			return view('webuser/beranda/about');
		}

		
		public function acara(){
			return view('webuser/beranda/acara');
		}

		public function artikel(){
			return view('webuser/beranda/artikel');
		}

		public function kontak(){
			return view('webuser/beranda/kontak');
		}

		public function aboutLog(){
			return view('webuser/beranda/aboutLog');
		}
		
		public function acaraLog(){
			return view('webuser/beranda/acaraLog');
		}

		public function artikelLog(){
			return view('webuser/beranda/artikelLog');
		}

		public function kontakLog(){
			return view('webuser/beranda/kontakLog');
		}

		public function komunitas(){
			return view('webuser/beranda/komunitas');
		}

	}
