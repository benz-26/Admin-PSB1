<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Registration Page (v2)</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="<?php echo base_url()?>https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url()?>plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?php echo base_url()?>plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url()?>dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page" style="background-image: url(<?php echo base_url()?>/images/bg-1.jpg) ; background-position: center; background-repeat: no-repeat; background-size: cover;">
<div class="register-box">
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
    <img src="<?php echo base_url()?>/dist/img/login.svg" width="40%"><b></a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Register new Account</p>

      <form action="<?php echo base_url()?>PSB/do_register" method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="nama" placeholder="Full name">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="email" class="form-control" name="email" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control"name="password" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">

            <a href="<?php echo base_url()?>PSB/do_login" class="text-center">I ALREADY HAVE AN ACCOUNT</a>
            </div>
          </div>
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">REGISTER</button>
          </div>
        </div>
      </form>

    </div>
  </div>
</div>
<!-- /.register-box -->

