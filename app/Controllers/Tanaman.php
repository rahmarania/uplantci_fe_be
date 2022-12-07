<?php

namespace App\Controllers;
use App\Controllers\Chart;

// panggil pdf func
use Dompdf\Dompdf;

// model
use App\Models\Tanamanmdl;
use App\Models\Chartmdl;

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

// use CodeIgniter\HTTP\RequestInterface;
// $request = \Config\Services::request();

class Tanaman extends BaseController
{   
    private $_chartmdl;
    protected $helpers = ['custom'];

    public function __construct(){
        $this->tanaman = new Tanamanmdl();
        $this->_chartmdl = new Chartmdl();
    }

    public function index()
    {

        // get db dg builder dari basecontroller
        $builder = $this->db->table('uplant');
        $query   = $builder->get()->getResult();
        $data['uplant'] = $query;
 
        // panggil file get.php folder tanaman di views
        return view('tanaman/get', $data);


    }

    // func add
    public function create()
    {
        // di views, tambah.php
        return view('tanaman/tambah');
    }

    public function store()
    {
        // $data = $this->request->getPost();
        // $this->db->table('uplant')->insert($data);

        $rules = $this->validate([
            'nama_tanaman'=>'required',
            'jenis'=>'required',
            'nama_ilmiah'=>'required',
            'deskripsi'=>'required',
            'gambar_tanaman'=>'max_size[gambar_tanaman,2048]|is_image[gambar_tanaman]|mime_in[gambar_tanaman,image/png,image/jpg,image/jpeg]|ext_in[gambar_tanaman,png,jpg,jpeg]'
        ]);

        // jika tdk memenuhi rules
        if(!$rules){
            session()->setFlashdata('error','Requirement tidak terpenuhi!');
            return redirect()->back()->withInput();
        }

        $gambar = $this->request->getFile('gambar_tanaman');
        $namaGambar = $gambar->getRandomName();
        $gambar->move('../public/uplant-main/assets/img',$namaGambar);
        $this->db->table('uplant')->insert([
            'nama_tanaman'=>$this->request->getPost('nama_tanaman'),
            'jenis'=>$this->request->getPost('jenis'),
            'nama_ilmiah'=>$this->request->getPost('nama_ilmiah'),
            'deskripsi'=>$this->request->getPost('deskripsi'),
            'gambar_tanaman'=>$namaGambar
        ]);

        if ($this->db->affectedRows() > 0) {
            // return ke form, ada alert
            return redirect()->to(site_url('tanaman'))->with('success', 'Data Berhasil Disimpan');
        }
    }

    // edit func
    public function edit($id = null)
    {
        if ($id != null) {
            $query = $this->db->table('uplant')->getWhere(['id_tanaman' => $id]);
            // kalau datanya ada
            if ($query->resultID->num_rows > 0) {
                $data['uplant'] = $query->getRow();
                return view('tanaman/edit', $data);
            }
        } else {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
    }

    // public function update($id){
    //     // $data = $this->request->getPost();
    //     // unset($data['_method']);
    //     // // $this->db->table('uplant')->where(['id_tanaman'=>$id])->update($data);        
    //     // return redirect()->to(site_url('tanaman'))->with('success','Data berhasil disimpan');
    //     $rules = $this->validate([
    //         'nama_tanaman'=>'required',
    //         'jenis'=>'required',
    //         'nama_ilmiah'=>'required',
    //         'gambar_tanaman'=>'is_image[gambar_tanaman]|max_size[gambar_tanaman,2048]|mime_in[gambar_tanaman,image/jpg,image/jpeg,image/png]|ext_in[gambar_tanaman,jpg,jpeg,png]',
    //     ]);
    //     if (!$rules) {
    //         session()->setFlashdata('error', 'Data tanaman gagal diubah');
    //         return redirect()->back()->withInput();
    //     }

    //     $img_plant = $this->request->getFile('gambar_tanaman');
    //     if ($img_plant->getError() == 4) {
    //         $name_img = $this->request->getPost('oldPict');
    //     } else {
    //         $name_img = $img_plant->getRandomName();
    //         $img_plant->move(WRITEPATH . '../public/uplant-main/assets/img', $name_img);

    //         unlink(WRITEPATH . '../public/uplant-main/assets/img' . $this->request->getPost('oldPict'));
    //     }


    //     $this->tanaman->update($id, [
    //         'nama_tanaman'=>$this->request->getPost('nama_tanaman'),
    //         'jenis'=>$this->request->getPost('jenis'),
    //         'nama_ilmiah'=>$this->request->getPost('nama_ilmiah'),
    //         'gambar_tanaman'=>$name_img
    //     ]);
    //     return redirect()->to(site_url('tanaman'))->with('success', 'Data berhasil diubah');
    // }

    // public function update($id)
    // {
    //     $datatanam = new Tanamanmdl();
    //     $gambaritem = $datatanam->find($id);

    //     $file = $this->request->getFile('gambar_tanaman');
    //     if($file->isValid() && !$file->hasMoved()){
    //         $gambarLama = $gambaritem['gambar_tanaman'];
    //         if(file_exists('../public/uplant-main/assets/img'.$gambarLama)){
    //             unlink('../public/uplant-main/assets/img'.$gambarLama);
    //         }
    //         $namaGambar = $file->getRandomName();
    //         $file->move('../public/uplant-main/assets/img', $namaGambar);
    //     }
    //     $data = [
    //         'nama_tanaman'=>$this->request->getPost('nama_tanaman'),
    //         'jenis'=>$this->request->getPost('jenis'),
    //         'nama_ilmiah'=>$this->request->getPost('nama_ilmiah'),
    //         'gambar_tanaman'=>$namaGambar
    //     ];
    //     $datatanam->save($data);
    //     return redirect()->to('tanaman')->with('success','Data tanaman berhasil diubah');
    // }

    // public function update()
    // {
    //     $model = $this->tanaman; 
     
    //     $rules = [
    //         'body' => 'required',
    //         'title' => 'required'
    //     ];
    //     $id =  $this->request->getVar('id');
     
    //     if($this->validate($rules)){
    //         $fileImage_name = $this->request->getVar('oldFile');
    //         if(isset($_FILES) && @$_FILES['image_file']['error'] != '4') {
    //             if($fileImage = $this->request->getFile('image_file')) {
    //                 if (! $fileImage->isValid()) {
    //                     throw new \RuntimeException($fileImage->getErrorString().'('.$fileImage->getError().')');
    //                 } else {
    //                     $fileImage->move('images/news');
    //                     $fileImage_name = $fileImage->getName();
    //                 }
    //             }
    //         }
     
    //         $data = [
    //             'body' => $this->request->getVar('body'),
    //             'title' => $this->request->getVar('title'),
    //             'publish_date'    => $this->request->getVar('publish_date'),
    //             'image' => $fileImage_name
    //         ];
             
    //         $model->update($id, $data);
     
    //         return redirect()->to(base_url('/news/list?page=1'));
     
    //     } else {
     
    //         $data['news'] = $model->getNews($id);
     
    //         $data['validation'] = $this->validator;
    //         $data['title'] = 'Update Berita';
    //         $data['menu'] = 'news';
    //         return view('news/edit', $data);
    //     }
     
    // }


    // public function update($id)
    // {
    //     $rules = $this->validate([
    //         'nama_tanaman' => 'required',
    //         'jenis' => 'required',
    //         'nama_ilmiah' => 'required',
    //         'gambar_tanaman' => 'is_image[gambar_tanaman]|max_size[gambar_tanaman,2048]|mime_in[gambar_tanaman,image/jpg,image/jpeg,image/png]|ext_in[gambar_tanaman,jpg,jpeg,png]',
    //     ]);
    //     if (!$rules) {
    //         session()->setFlashdata('error', 'Data tanaman gagal diubah');
    //         return redirect()->back()->withInput();
    //     }
            
    //     $query = $this->db->table('uplant')->getWhere(['id_tanaman' => $this->request->getPost('id')])->getRow();
    //     $img_plant = $this->request->getFile('gambar_tanaman');
        

    //     if(!empty($img_plant)){
    //         $name_img = $img_plant->getRandomName();
    //         $img_plant->move(WRITEPATH . '../public/uplant-main/assets/img', $name_img);
    //     }else{
    //         $name_img = null;
    //     }
    //     // print_r($name_img); die();
    //     $dt =  [
    //         'nama_tanaman' => $this->request->getPost('nama_tanaman'),
    //         'jenis' => $this->request->getPost('jenis'),
    //         'nama_ilmiah' => $this->request->getPost('nama_ilmiah'),
    //     ];

    //     if ($name_img != null) {
    //         $dt['gambar_tanaman'] = $name_img;
    //     }

    //     $this->tanaman->update($id,$dt);

    //     $fetchh = $_SERVER['DOCUMENT_ROOT'] . '/uplant-main/assets/img/' . $query->gambar_tanaman;
    //     // print_r($dt); die(); 

    //     // unlink($_SERVER['DOCUMENT_ROOT'] . '/uplant-main/assets/img/' . $query->gambar_tanaman);

    //     return redirect()->to('tanaman')->with('success', 'Data berhasil diubah');
    // }

    public function update($id)
    {
        $rules = $this->validate([
            'nama_tanaman' => 'required',
            'jenis' => 'required',
            'nama_ilmiah' => 'required',
            'deskripsi' => 'required',
            'gambar_tanaman' => 'is_image[gambar_tanaman]|max_size[gambar_tanaman,2048]|mime_in[gambar_tanaman,image/jpg,image/jpeg,image/png]|ext_in[gambar_tanaman,jpg,jpeg,png]',
        ]);
        if (!$rules) {
            session()->setFlashdata('error', 'Data tanaman gagal diubah');
            return redirect()->back()->withInput();
        }

        $gambar = $this->request->getFile('gambar_tanaman');
        if ($gambar->getError() == 4) {
            $namaGambar = $this->request->getPost('oldPict');
        } else {
            $gambar = $this->request->getFile('gambar_tanaman');
            $namaGambar = $gambar->getRandomName();
            $gambar->move('../public/uplant-main/assets/img',$namaGambar);
            // $this->db->table('uplant')->update($id,[
            //     'nama_tanaman'=>$this->request->getPost('nama_tanaman'),
            //     'jenis'=>$this->request->getPost('jenis'),
            //     'nama_ilmiah'=>$this->request->getPost('nama_ilmiah'),
            //     'gambar_tanaman'=>$namaGambar
            // ]);
            // unlink(WRITEPATH . '../../../public/uplant-main/assets/img' . $this->request->getPost('oldPict'));
        }



        $this->tanaman->update($id, [
            'nama_tanaman' => $this->request->getPost('nama_tanaman'),
            'jenis' => $this->request->getPost('jenis'),
            'nama_ilmiah' => $this->request->getPost('nama_ilmiah'),
            'deskripsi' => $this->request->getPost('deskripsi'),
            'gambar_tanaman' => $namaGambar,
        ]);

        return redirect()->to(site_url('tanaman'))->with('success', 'Data berhasil diubah');
    }

    public function destroy($id){
        $this->db->table('uplant')->where(['id_tanaman'=>$id])->delete();
        return redirect()->to(site_url('tanaman'))->with('success','Data berhasil dihapus');
    }

    // export excel
    public function exportexc(){
        $event = $this->db->table('uplant');
        $query   = $event->get()->getResult();
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        $sheet->setCellValue('A1', 'No');
        $sheet->setCellValue('B1', 'Nama Tanaman');
        $sheet->setCellValue('C1', 'Jenis');
        $sheet->setCellValue('D1', 'Nama Ilmiah');
        $sheet->setCellValue('E1', 'Deskripsi');

        $column = 2;
        foreach ($query as $key => $value) {
            $sheet->setCellValue('A' . $column, ($column - 1));
            $sheet->setCellValue('B' . $column, $value->nama_tanaman);
            $sheet->setCellValue('C' . $column, $value->jenis);
            $sheet->setCellValue('D' . $column, $value->nama_ilmiah);
            $sheet->setCellValue('E' . $column, $value->deskripsi);
            $column++;
        }
        $writer = new Xlsx($spreadsheet);
        ob_end_clean();
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename=tanaman.xlsx' );
        header('Cache-Control: max-age=0');

        $writer->save('php://output'); // download file
        exit();
    }

    // import excel
    public function import(){
        $file = $this->request->getFile('impexc');
        $ext = $file->getClientExtension();

        if($ext == 'xlsx' || $ext == 'xls'){
            if ($ext == 'xls') {
                $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xls();
            }else{
                $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
            }
        
            $spreadsheet = $reader->load($file);
            $t = $spreadsheet->getActiveSheet()->toArray();
            
            foreach ($t as $key => $value) {
                if($key == 0){
                    continue;
                }
                $data = ['nama_tanaman'=>$value[1],
                      'jenis'=>$value[2],
                      'nama_ilmiah'=>$value[3],
                      'deskripsi'=>$value[4],
                      'id_tanaman'=>0,
                     ];
                $this->tanaman->insert($data);
            }
                return redirect()->back()->with('success', 'Data berhasil diimport');
        }else{
                return redirect()->back()->with('error', 'Format tidak sesuai!');
            }
    }

    // export pdf
    public function exportpdf(){
        $laporan = $this->tanaman->findAll();

        $data = ['result'=>$laporan];
        $view = view('tanaman/export-pdf',$data);

        $dompdf = new Dompdf();
        $dompdf->loadHtml($view);

        $dompdf->setPaper('A4','landscape');
        $dompdf->render();
        $dompdf->stream();
    }

    public function show_perkat() {
        $jenis = 'Tanaman Hias';
        $data_tnm = $this->_chartmdl->getPerkat($jenis);
        
        $response = ['status'=>true,
                     'data'=>$data_tnm];
        echo json_encode($response);
    }

    public function detailItem($id)
    {
        // return view('webuser/beranda/detailItem', $data);

        // get db dg builder dari basecontroller
        $query = $this->db->table('uplant')->getWhere(['id_tanaman' => $id]);
        $query   = $query->getResult();
        $data['uplantdetail'] = $query;

        // panggil file get.php folder tanaman di views
        return view('webuser/beranda/detailItem', $data);
    }

    public function detailItemLog($id)
    {
        // return view('webuser/beranda/detailItem', $data);

        // get db dg builder dari basecontroller
        $query = $this->db->table('uplant')->getWhere(['id_tanaman' => $id]);
        $query   = $query->getResult();
        $data['uplantdetail'] = $query;

        // panggil file get.php folder tanaman di views
        return view('webuser/beranda/detailItemAdmin', $data);
    }

}
