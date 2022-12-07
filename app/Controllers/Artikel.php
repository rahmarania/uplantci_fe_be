<?php

	namespace App\Controllers;
	use App\Models\Komunitasmdl;

	class Artikel extends BaseController{
    	protected $helpers = ['custom'];

		public function index(){
	        // get db dg builder dari basecontroller
	        $builder = $this->db->table('artikel');
	        $query   = $builder->get()->getResult();
	        $data['artikel'] = $query;

	        // panggil file get.php folder tanaman di views
	        return view('artikel/get', $data);

		}

		public function indexuser(){
			// get db dg builder dari basecontroller
	        $builder = $this->db->table('artikel');
	        $query   = $builder->get()->getResult();

	        $data['artikeluser'] = $query;
	        

	        // panggil file get.php folder tanaman di views
	        return view('webuser/beranda/artikel', $data);

		}

		public function indexuserlog(){
			// get db dg builder dari basecontroller
	        $builder = $this->db->table('artikel');
	        $query   = $builder->get()->getResult();
	        // print_r("<pre>"); print_r($query); die();

	        $data['artikelLog'] = $query;


	        // panggil file get.php folder tanaman di views

	        return view('webuser/beranda/artikelLog', $data);
		}

		public function create()
	    {
	        // di views, tambah.php
	        return view('artikel/tambah');
	    }

		public function store()
	    {
	        $data = $this->request->getPost();
	        $this->db->table('artikel')->insert($data);

	        if ($this->db->affectedRows() > 0) {
	            // return ke form, ada alert
	            return redirect()->to(site_url('artikel'))->with('success', 'Data Berhasil Disimpan');
	        }
	    }

	    public function editar($id = null)
	    {
	        if ($id != null) {
	            $query = $this->db->table('artikel')->getWhere(['id_artikel' => $id]);
	            // kalau datanya ada
	            if ($query->resultID->num_rows > 0) {
	                $data['artikel'] = $query->getRow();
	                return view('artikel/edit', $data);
	            }
	        } else {
	            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
	        }
	    }

	    public function updatear($id){
	        $data = $this->request->getPost();
	        unset($data['_method']);

	        $this->db->table('artikel')->where(['id_artikel'=>$id])->update($data);
	        return redirect()->to(site_url('artikel'))->with('success','Data berhasil disimpan');
    	}

    	public function destroy($id){
	        $this->db->table('artikel')->where(['id_artikel'=>$id])->delete();
	        return redirect()->to(site_url('artikel'))->with('success','Data berhasil dihapus');
    	}

	}
?>