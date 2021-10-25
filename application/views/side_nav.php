<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__shake" src="<?php echo base_url() ?>/images/ilus (2).svg" height="80" width="80">
    </div>

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="<?php echo base_url() ?>PSB/index" class="nav-link">HOME</a>
        </li>
      </ul>
    </nav>
    <!-- sidebar -->

    <aside class="main-sidebar sidebar-dark-primary elevation-5 rounded">
      <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="<?php echo base_url() ?>/images/foto-default.jpg" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block">HAI ADMIN!</a>
          </div>
        </div>
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
              <a href="<?php echo base_url() ?>PSB/accounts" class="nav-link">
                <i class="nav-icon fas fa-users"></i>
                <p>
                  ACCOUNTS
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url() ?>PSB/registrasi" class="nav-link">
                <i class="nav-icon fas fa-book"></i>
                <p>
                  PENDAFTARAN
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url() ?>PSB/logout" class="nav-link">
                <i class="nav-icon fas fa-times"></i>
                <p>
                  LOGOUT
                </p>
              </a>
            </li>
          </ul>
        </nav>
      </div>
    </aside>