<?php

	namespace App\Controllers;

	class Komunitas extends BaseController{

		public function index(){
	        $builder = $this->db->table('komunitas');
	        $query   = $builder->get()->getResult();
	        $data['komunitas'] = $query;	        

	        // panggil file get.php folder tanaman di views
	        return view('komunitas/get', $data);
	    }
		public function create()
	    {
	        // di views, tambah.php
	        return view('komunitas/tambah');
	    }

		public function store()
	    {
	        $data = $this->request->getPost();
	        $this->db->table('komunitas')->insert($data);

	        if ($this->db->affectedRows() > 0) {
	            // return ke form, ada alert
	            return redirect()->to(site_url('komunitas'))->with('success', 'Data Berhasil Disimpan');
	        }
	    }

	    public function editkom($id = null)
	    {
	        if ($id != null) {
	            $query = $this->db->table('komunitas')->getWhere(['id_komunitas' => $id]);
	            // kalau datanya ada
	            if ($query->resultID->num_rows > 0) {
	                $data['komunitas'] = $query->getRow();
	                return view('komunitas/edit', $data);
	            }
	        } else {
	            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
	        }
	    }

	    public function updatekom($id){
	        $data = $this->request->getPost();
	        unset($data['_method']);

	        $this->db->table('komunitas')->where(['id_komunitas'=>$id])->update($data);
	        return redirect()->to(site_url('komunitas'))->with('success','Data berhasil disimpan');
    	}

    	public function destroy($id){
	        $this->db->table('komunitas')->where(['id_komunitas'=>$id])->delete();
	        return redirect()->to(site_url('komunitas'))->with('success','Data berhasil dihapus');
    	}

	}
?>