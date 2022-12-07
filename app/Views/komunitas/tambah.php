<?= $this->extend('layout/default')?>

<?= $this->section('title')?>
<title>Tambah Komunitas</title>
<?= $this->endSection()?>

<?= $this->section('content')?> 

    <section class="section">
      <div class="section-header">
        <div class="section-header-button">
          <!-- arahkan ke tambah.php -->
          <a href="<?=site_url('komunitas')?>" class="btn btn-primary">Kembali</a>
        </div>
        <h1> Tambah Komunitas</h1>
      </div>

      <div class="section-body">
        <div class="card">
          <div class="card-header">
            Data UPlant / Komunitas
          </div>

          <div class="card-body col-md-6">
            <form action="<?=site_url('komunitas')?>" method="post" autocomplete="off" enctype="multipart/form-data">
              <!-- buat security -->
              <?= csrf_field() ?>
              <div class="form-group">
                <label>Nama Komunitas</label>
                <input type="text" name="nama_komunitas" class="form-control" required autofocus="">
              </div>
              <div class="form-group">
                <label>Jumlah Anggota</label>
                <input type="number" name="jumlah_anggota" class="form-control" required autofocus="">
              </div>
              <div>
                <button type="submit" class="btn btn-success">Submit</button>   
                <button type="reset" class="btn btn-danger">Reset</button>    
              </div>
            </section>

<?= $this->endSection()?>
