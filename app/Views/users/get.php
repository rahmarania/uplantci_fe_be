<?= $this->extend('layout/default') ?>

<?= $this->section('title') ?>
<title>Data User</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<section class="section">
  <div class="section-header">
    <h1>UPlant</h1>
    <div class="section-header-button">
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
        Data UPlant / User
        <hr>
      </div>

      <div class="card-body table-responsive">
        <table class="table table-striped table-md" id="datatab">
          </thead>
            <tr>
              <th>No.</th>
              <th>Nama User</th>
              <th>Email User</th>
              <th>Password User</th>
              <th>Terdaftar</th>
            </tr>
          </thead>
          <tbody>
            <?php $no = 1; ?>
            <?php foreach ($users as $key => $value) : ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $value->username ?></td>
                <td><?= $value->email ?></td>
                <td><?= $value->password ?></td>
                <td><?= $value->created_at ?></td>
                <td class="text-center" style="width: 15%;">
                  <form action="<?=site_url('users/'.$value->id_user)?>" method="post" class="d-inline">
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