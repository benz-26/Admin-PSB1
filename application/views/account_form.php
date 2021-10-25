<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Account Registration</h1>
        </div>

      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card card-primary">
            <form id="quickForm" action="<?php echo base_url() ?>PSB/do_input_account" method="post">
              <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputPassword1">NIK</label>
                  <input type="text" name="nik" class="form-control" id="exampleInputPassword1" placeholder="Input Your NIK">
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">Nama</label>
                  <input type="text" name="nama" class="form-control" id="exampleInputPassword1" placeholder="Input Your Name">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Asal Sekolah</label>
                  <input type="text" name="asal_sekolah" class="form-control" id="asal_sekolah" placeholder="Input Asal Sekolah">
                </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
          </div>
        </div>
        <div class="col-md-6">
        </div>
      </div>
    </div>
  </section>
</div>
</body>

</html>