<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Eventmu Layanan Website Penyedia Event Untuk Kamu" />
    <title>Register &mdash; Uplant</title>
    <!-- General CSS Files -->
    <script src="<?= base_url() ?>/stisla/node_modules/jquery/dist/jquery.min.js"></script>
    <!-- General CSS Files -->

    <!-- load lokal bootstrap -->
    <link rel="stylesheet" href="<?= base_url() ?>/stisla/node_modules/bootstrap/dist/css/bootstrap.min.css">

    <!-- load lokal fontawesome -->
    <link rel="stylesheet" href="<?= base_url() ?>/stisla/node_modules/@fortawesome/fontawesome-free/css/all.min.css">

    <!-- CSS Libraries -->
    <script src="<?= base_url() ?>/stisla/node_modules/chart.js/dist/Chart.min.js"></script>
    <link rel="stylesheet" href="<?= base_url() ?>/stisla/node_modules/chart.js/dist/Chart.min.css">
    <!-- Template CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>/stisla/assets/css/style.css">
    <link rel="stylesheet" href="<?= base_url() ?>/stisla/assets/css/components.css">
</head>
<body>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
            <div class="login-brand">
              <img src="<?= base_url() ?>/stisla/assets/img/stisla-fill.svg" alt="logo" width="100" class="shadow-light rounded-circle">
            </div>
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

            <div class="card card-primary">
              <div class="card-header"><h4>Register</h4></div>

              <div class="card-body">
                <form method="POST" action="<?= site_url('auth/registerStores') ?>">
                  <?= csrf_field() ?>
                  <div class="row">
                    <div class="form-group col-6">
                      <label for="username">Nama</label>
                      <input id="username" type="text" class="form-control" name="username" autofocus>
                    </div>
                    <?php if ($validation->hasError('username')) : ?>
                      <div class="invalid-feedback">
                          <p class="text-red-500 text-xs italic"><?= $validation->getError('username') ?></p>
                      </div>
                    <?php endif ?>
                  </div>

                  <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email" type="email" class="form-control" name="email">
                    <?php if ($validation->hasError('email')) : ?>
                      <div class="invalid-feedback">
                          <p class="text-red-500 text-xs italic"><?= $validation->getError('email') ?></p>
                      </div>
                    <?php endif ?>
                  </div>

                  <div class="row">
                    <div class="form-group col-6">
                      <label for="password" class="d-block">Password</label>
                      <input id="password" type="password" class="form-control pwstrength" data-indicator="pwindicator" name="password">
                      <div id="pwindicator" class="pwindicator">
                        <div class="bar"></div>
                        <div class="label"></div>
                      </div>
                    </div>
                    <?php if ($validation->hasError('password')) : ?>
                      <div class="invalid-feedback">
                          <p class="text-red-500 text-xs italic"><?= $validation->getError('password') ?></p>
                      </div>
                    <?php endif ?>                    
                  </div>

                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">
                      Register
                    </button>
                  </div>
                </form>
                <div class="mt-5 text-muted text-center">
                    Sudah punya akun? <a href="<?= site_url('auth/index') ?>">Login</a>
                </div>
              </div>
            </div>
            <div class="simple-footer">
              Copyright &copy; Stisla 2018
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
        <!-- General JS Scripts -->
    <script src="<?= base_url() ?>/stisla/node_modules/jquery/dist/jquery.min.js"></script>


    <!-- popper -->
    <script src="<?= base_url() ?>/stisla/node_modules/popper.js/dist/umd/popper.min.js"></script>

    <script src="<?= base_url() ?>/stisla/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="<?= base_url() ?>/stisla/node_modules/jquery.nicescroll/dist/jquery.nicescroll.min.js"></script>
    <script src="<?= base_url() ?>/stisla/node_modules/chart.js/dist/Chart.bundle.min.js"></script>

    <script src="<?= base_url() ?>/stisla/assets/js/stisla.js"></script>

    <!-- JS Libraies -->

    <!-- Template JS File -->
    <script src="<?= base_url() ?>/stisla/assets/js/scripts.js"></script>
    <script src="<?= base_url() ?>/stisla/assets/js/custom.js"></script>
    <?= $this->renderSection('script'); ?>
    <!-- Page Specific JS File -->
</body>

</html>