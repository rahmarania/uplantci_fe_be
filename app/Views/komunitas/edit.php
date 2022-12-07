<?= $this->extend('layout/default') ?>

<?= $this->section('title') ?>
<title>Edit Data Komunitas</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<section class="section">
  <div class="section-header">
    <div class="section-header-button">
      <!-- arahkan ke tambah.php -->
      <a href="<?= site_url('komunitas') ?>" class="btn btn-primary">Kembali</a>
    </div>
    <h1>Edit Data</h1>
  </div>

  <div class="section-body">
    <div class="card">
      <div class="card-header">
        Data UPlant / Komunitas
      </div>

      <div class="card-body col-md-6">
        <form action="<?= site_url('komunitas/' . $komunitas->id_komunitas) ?>" method="post" autocomplete="off">
          <!-- buat security -->
          <?= csrf_field() ?>
          <input type="hidden" name="_method" value="PUT">
          <div class="form-group">
            <label>Nama Komunitas</label>
            <input type="text" name="nama_komunitas" value="<?= $komunitas->nama_komunitas ?>" class="form-control" required autofocus="">
          </div>
          <div class="form-group" data-select2-id="7">
            <label>Jumlah Anggota</label>
            <input type="text" name="jumlah_anggota" value="<?= $komunitas->jumlah_anggota ?>" class="form-control" required autofocus="">
          </div>
          <div>
            <button type="submit" class="btn btn-success">Submit</button>
            <button type="reset" class="btn btn-danger">Reset</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>

<?= $this->endSection() ?>