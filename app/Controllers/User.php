<?php

	namespace App\Controllers;

	class User extends BaseController{

		public function index(){
			// get db dg builder dari basecontroller
	        $builder = $this->db->table('users');
	        $query   = $builder->get()->getResult();
	        $data['users'] = $query;

	        // panggil file get.php folder tanaman di views
	        return view('users/get', $data);
	    }

    	public function destroy($id){
	        $this->db->table('users')->where(['id_user'=>$id])->delete();
	        return redirect()->to(site_url('users/get'))->with('success','Data berhasil dihapus');
    	}
	}
?>