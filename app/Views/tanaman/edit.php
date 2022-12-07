<?= $this->extend('layout/default') ?>

<?= $this->section('title') ?>
<title>Edit Data Tanaman</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<section class="section">
  <div class="section-header">
    <div class="section-header-button">
      <!-- arahkan ke tambah.php -->
      <a href="<?= site_url('tanaman') ?>" class="btn btn-primary">Kembali</a>
    </div>
    <h1>Edit Data</h1>
  </div>

  <div class="section-body">
    <div class="card">
      <div class="card-header">
        Data UPlant / Tanaman
      </div>

      <div class="card-body col-md-6">
        <form action="<?= site_url('tanaman/' . $uplant->id_tanaman) ?>" method="post" autocomplete="off" enctype="multipart/form-data">
          <!-- buat security -->

          <input type="hidden" form-data="_method" value="PUT">
          <input type="hidden" name="oldPict" value="<?= $uplant->gambar_tanaman ?>">
          <input type="hidden" name="id" value="<?= $uplant->id_tanaman ?>">
          <?= csrf_field() ?>
          <input type="hidden" name="_method" value="PUT">
          <div class="form-group">
            <label>Nama Tanaman</label>
            <input type="text" name="nama_tanaman" value="<?= $uplant->nama_tanaman ?>" class="form-control" required autofocus="">
          </div>
          <div class="form-group" data-select2-id="7">
            <label>Jenis</label>
            <select class="form-control" name="jenis" tabindex="-1" aria-hidden="true" value="<?= $uplant->jenis ?>">
              <option selected disabled>Pilih Jenis</option>
              <option value="Tanaman Hias" <?= $uplant->jenis == 'Tanaman Hias' ? 'selected' : ' ' ?>>Tanaman Hias</option>
              <option value="Tanaman Obat" <?= $uplant->jenis == 'Tanaman Obat' ? 'selected' : ' ' ?>>Tanaman Obat</option>
              <option value="Tanaman Hidroponik" <?= $uplant->jenis == 'Tanaman Hidroponik' ? 'selected' : ' ' ?>>Tanaman Hidroponik</option>
              <option value="Tanaman Buah" <?= $uplant->jenis == 'Tanaman Buah' ? 'selected' : ' ' ?>>Tanaman Buah</option>
              <option value="Tanaman Sayur" <?= $uplant->jenis == 'Tanaman Sayur' ? 'selected' : ' ' ?>>Tanaman Sayur</option>
            </select>
          </div>
          <div class="form-group">
            <label>Nama Ilmiah</label>
            <input type="text" name="nama_ilmiah" value="<?= $uplant->nama_ilmiah ?>" class="form-control" required autofocus="">
          </div>
          <div class="form-group">
            <label>Deskripsi</label>
            <input type="text" name="deskripsi" value="<?= $uplant->deskripsi ?>" class="form-control" required autofocus="">
          </div>
<!--           <div class="form-group">
            <label>Gambar Tanaman</label>
            <br>
            <img src="<?=base_url('uplant-main/assets/img/' . $uplant->gambar_tanaman)?>" class="prev_img mt-2" width="200px">
            <input type="file" name="gambar_tanaman" id="gambar_tanaman" class="form-control" required autofocus="">
          </div> -->
          <div class="form-group">
            <label>Gambar Tanaman</label>
            <div class="custom-file">
                <input id="gambar_tanaman" type="file" name="gambar_tanaman" class="custom-file-input form-control"onchange="previewImg()">
                <label for="file_event" class="custom-file-label">Pilih File</label>
            </div>
            <img src="<?= base_url('uplant-main/assets/img/' . $uplant->gambar_tanaman) ?>" alt="" class="preview-img mt-2" width="200px">
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
