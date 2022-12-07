<?= $this->extend('layout/default') ?>

<?= $this->section('title') ?>
<title>Data Artikel</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<section class="section">
  <div class="section-header">
    <h1>UPlant</h1>
    <div class="section-header-button">
      <!-- arahkan ke tambah.php -->
      <a href="<?= site_url('artikel/tambah') ?>" class="btn btn-primary">Tambah Artikel</a>
    </div>
  </div>

  <!-- ini buat alert -->
  <?php if (session()->getFlashdata('success')) : ?>
    <div class="alert alert-success alert-dismissible show.fade">
      <div class="alert-body">
        <button class="close" data-dismiss="alert">x</button>
        <b>Success!</b>
        <?= session()->getFlashdata('success') ?>
      </div>
    </div>
  <?php endif; ?>

  <?php if (session()->getFlashdata('error')) : ?>
    <div class="alert alert-danger alert-dismissible show.fade">
      <div class="alert-body">
        <button class="close" data-dismiss="alert">x</button>
        <b>There is something error!</b>
        <?= session()->getFlashdata('error') ?>
      </div>
    </div>
  <?php endif; ?>

  <div class="section-body">
    <div class="card">
      <div class="card-header">
        Data UPlant / Artikel
        <hr>
      </div>

      <div class="card-body table-responsive">
        <table class="table table-striped table-md" id="datatab">
          </thead>
            <tr>
              <th>No.</th>
              <th>Judul Artikel</th>
              <th>Author</th>
              <th>Tanggal Publish</th>
              <th>Ringkasan Isi</th>
              <th>Link Artikel</th>
            </tr>
          </thead>
          <tbody>
            <?php $no = 1; ?>
            <?php foreach ($artikel as $key => $value) : ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $value->judul_artikel ?></td>
                <td><?= $value->nama_author ?></td>
                <td><?= $value->tanggal_publish ?></td>
                <td><?= $value->ringkasan_isi ?></td>
                <td><?= $value->linkart ?></td>
                <td class="text-center" style="width: 15%;">
                  <!-- edit arahkan ke id -->
                  <a href="<?= site_url('artikel/edit/' . $value->id_artikel); ?>" class="btn btn-warning btn-sm"><i class="fas fa-pen"></i></a>
                  <form action="<?=site_url('artikel/'.$value->id_artikel)?>" method="post" class="d-inline">
                    <?= csrf_field()?>
                    <input type="hidden" name="_method" value="DELETE">
                    <button href="" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin hapus data?');">
                      <i class="fas fa-trash"></i>
                    </button>
                  </form>
                </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>


<?= $this->endSection() ?>