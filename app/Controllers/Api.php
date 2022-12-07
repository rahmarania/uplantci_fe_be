<?php 
namespace App\Controllers;
use CodeIgniter\Controller;
use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;

class Api extends ResourceController
{
    use ResponseTrait;

    public function create() {
        $getraw = json_decode(file_get_contents("php://input"), true);
        $db = db_connect();

        // print_r($getraw); die();
        if($getraw['action'] == 'tambah' || $getraw['action'] == 'edit'){
            $data = array(
                        'nama_tanaman'=>$getraw['nama_tanaman'],
                        'jenis'=>$getraw['jenis'],
                        'nama_ilmiah'=>$getraw['nama_ilmiah'],
                    );

            if(empty($getraw['id_tanaman'])) {
                // proses insert

                // kalau ada error, data ga masuk ke db
                $db->transBegin();
                $db->table('uplant')->insert($data);

                if ($db->transStatus() === FALSE) {
                    // balikin ke semula
                    $db->transRollback();
                    $msg = array('status'=>false,
                                 'pesan'=>"Gagal " . $getraw['action'] . " data");
                } else {
                    // semua query berhasil, masuk db
                    $db->transCommit();
                    $msg = array('status'=>true,
                                 'pesan'=>"Berhasil " . $getraw['action'] . " data");
                }
                // print_r($data); die();
            }else{
                // proses update
                // print_r($getraw); die();

                $db->transBegin();
                $db->table('uplant')->where(['id_tanaman'=>$getraw['id_tanaman']])->update($data);

                if ($db->transStatus() === FALSE) {
                    // balikin ke semula
                    $db->transRollback();
                    $msg = array('status'=>false,
                                 'pesan'=>"Gagal " . $getraw['action'] . " data");
                } else {
                    // semua query berhasil, masuk db
                    $db->transCommit();
                    $msg = array('status'=>true,
                                 'pesan'=>"Berhasil " . $getraw['action'] . " data");
                }

            }
        }elseif($getraw['action'] == 'delete' ) {
            $db->transBegin();
            $db->table('uplant')->where(['id_tanaman'=>$getraw['id_tanaman']])->delete();

                if ($db->transStatus() === FALSE) {
                    // balikin ke semula
                    $db->transRollback();
                    $msg = array('status'=>false,
                                 'pesan'=>"Gagal " . $getraw['action'] . " data");
                } else {
                    // semua query berhasil, masuk db
                    $db->transCommit();
                    $msg = array('status'=>true,
                                 'pesan'=>"Berhasil " . $getraw['action'] . " data");
                }

        }elseif($getraw['action'] == 'tampil' ){
        $record = $db->table('uplant')
                ->select("COUNT(id_tanaman) jml_tanaman, jenis")
                ->groupBy('jenis')
                ->get()->getResultArray();

            $msg = array('status'=>true,
                         'record'=>$record);

        }
            echo json_encode($msg); die();
        

    }



 
}