<?= $this->extend('layout/default')?>

<?= $this->section('title')?>
<title>Tambah Artikel</title>
<?= $this->endSection()?>

<?= $this->section('content')?> 

    <section class="section">
      <div class="section-header">
        <div class="section-header-button">
          <!-- arahkan ke tambah.php -->
          <a href="<?=site_url('artikel')?>" class="btn btn-primary">Kembali</a>
        </div>
        <h1> Tambah Artikel</h1>
      </div>

      <div class="section-body">
        <div class="card">
          <div class="card-header">
            Data UPlant / Artikel
          </div>

          <div class="card-body col-md-6">
            <form action="<?=site_url('artikel')?>" method="post" autocomplete="off" enctype="multipart/form-data">
              <!-- buat security -->
              <?= csrf_field() ?>
              <div class="form-group">
                <label>Judul Artikel</label>
                <input type="text" name="judul_artikel" class="form-control" required autofocus="">
              </div>
              <div class="form-group">
                <label>Author</label>
                <input type="text" name="nama_author" class="form-control" required autofocus="">
              </div>
              <div class="form-group">
                <label>Tanggal Publish</label>
                <input type="date" name="tanggal_publish" class="form-control" required autofocus="">
              </div>
              <div class="form-group">
                <label>Ringkasan Isi</label>
                <input type="text" name="ringkasan_isi" class="form-control" required autofocus="">
              </div>
              <div class="form-group">
                <label>Link Artikel</label>
                <input type="text" name="linkart" class="form-control" autofocus="">
              </div>
              <div>
                <button type="submit" class="btn btn-success">Submit</button>   
                <button type="reset" class="btn btn-danger">Reset</button>    
              </div>
            </section>

<?= $this->endSection()?>
