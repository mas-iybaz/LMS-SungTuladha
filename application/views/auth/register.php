<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SungTuladha - Register</title>

  <!-- Custom fonts for this template-->
  <link href="<?= base_url() ?>assets/auth-page/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?= base_url() ?>assets/auth-page/css/sb-admin-2.min.css" rel="stylesheet">
  <style>
    .bg-register-image {
      background: url("https://images.unsplash.com/photo-1468465283534-567e4e13af0f?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=600&ixid=eyJhcHBfaWQiOjF9&ixlib=rb-1.2.1&q=80&w=600") !important;
    }
  </style>

</head>

<body class="bg-gradient-gray-dark">

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
          <div class="col-lg-7">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Buat akun baru!</h1>
              </div>
              <?php if ($this->session->flashdata('error_message')) : ?>
                <div class="alert alert-danger" role="alert">
                  <?= $this->session->flashdata('error_message') ?>
                </div>
              <?php endif; ?>
              <?= form_open('register', 'class="user"') ?>
              <div class="form-group">
                <input type="text" class="form-control form-control-user" id="fullname" name="fullname" value="<?= set_value('fullname') ?>" placeholder="Nama Lengkap">
                <?= form_error('fullname', '<div class="text-danger pl-3">', '</div>') ?>
              </div>
              <div class="form-group">
                <input type="text" class="form-control form-control-user" id="email" name="email" value="<?= set_value('email') ?>" placeholder="Alamat Email">
                <?= form_error('email', '<div class="text-danger pl-3">', '</div>') ?>
              </div>
              <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                  <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password">
                  <?= form_error('password', '<div class="text-danger pl-3">', '</div>') ?>
                </div>
                <div class="col-sm-6">
                  <input type="password" class="form-control form-control-user" id="confirm_password" name="confirm_password" placeholder="Konfirmasi Password">
                  <?= form_error('confirm_password', '<div class="text-danger pl-3">', '</div>') ?>
                </div>
              </div>
              <button class="btn btn-primary btn-user btn-block" type="submit">
                Daftar
              </button>
              <?= form_close() ?>
              <hr>
              <div class="text-center">
                <a class="small" href="#">Lupa Password?</a>
              </div>
              <h6 class="text-gray text-center mt-2">atau</h6>
              <div class="text-center">
                <a class="small" href="<?= base_url('login') ?>">Sudah punya akun? Masuk!</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="<?= base_url() ?>assets/auth-page/vendor/jquery/jquery.min.js"></script>
  <script src="<?= base_url() ?>assets/auth-page/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?= base_url() ?>assets/auth-page/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?= base_url() ?>assets/auth-page/js/sb-admin-2.min.js"></script>

</body>

</html>