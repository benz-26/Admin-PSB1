  <div class="content-wrapper">
      <section class="content-header">
          <div class="container-fluid">
              <div class="row mb-2">
                  <div class="col-sm-3">
                      <h1>DAFTAR PENDAFTRAN</h1>
                  </div>
              </div>
          </div>
      </section>
      <section class="content">
          <div class="container-fluid">
              <div class="row">
                  <div class="col-12">
                      <div class="card">
                          <div class="card-body">
                              <table id="example1" class="table table-bordered table-striped">
                                  <thead>
                                      <tr>
                                          <th class="text-center">ID Pendaftaran</th>
                                          <th class="text-center">Nama</th>
                                          <th class="text-center">Alamat</th>
                                          <th class="text-center">Jenis Kelamin</th>
                                          <th class="text-center">Umur</th>
                                          <th class="text-center">Tanggal Lahir</th>
                                          <th class="text-center">Tempat Lahir</th>
                                          <th class="text-center">Actions</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      <?php foreach ($hasil->result_array() as $data) {                      ?>
                                          <tr>
                                              <td class="text-center"><?php echo $data['id_pendaftaran']; ?></td>
                                              <td class="text-center"><?php echo $data['nama']; ?></td>
                                              <td class="text-center"><?php echo $data['alamat']; ?></td>
                                              <td class="text-center"><?php echo $data['jenis_kelamin']; ?></td>
                                              <td class="text-center"><?php echo $data['umur']; ?></td>
                                              <td class="text-center"><?php echo $data['tanggal_lahir']; ?></td>
                                              <td class="text-center"><?php echo $data['tempat_lahir']; ?></td>
                                              <td>
                                                  <div class="table-responsive">
                                                      <div class="table table-striped table-hover ">
                                                          <a href="" data-toggle="modal" data-target="#editdata<?php echo  $data['id_pendaftaran'] ?>" class="btn btn-primary btn-block fas fa-edit">
                                                          </a>
                                                      </div>

                                                  </div>
                                                  <div class="table-responsive">
                                                      <div class="table table-striped table-hover ">
                                                          <a href="" data-toggle="modal" data-target="#hapus<?php echo  $data['id_pendaftaran'] ?>" class="btn btn-danger btn-block fas fa-trash-alt">
                                                          </a>
                                                      </div>
                                                  </div>
                          </div>
                          </td>
                          </tr>
                          <div class="modal" tabindex="-1" role="dialog" id="hapus<?php echo $data['id_pendaftaran'] ?>">
                              <div class="modal-dialog modal-lg">
                                  <div class="modal-content">
                                      <div class="modal-header">
                                          <h5 class="modal-title">Hapus Data</h5>
                                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;
                                          </button>
                                      </div>
                                      <div class="modal-body p-20">
                                          <form action="<?php echo base_url() ?>PSB/delete_user" method="post" enctype="multipart/form-data">
                                              <div class="row">
                                                  <div class="col-md-12">
                                                      <input type="hidden" name="id_pendaftaran" value="<?php echo $data['id_pendaftaran'] ?>?>" />
                                                      <p>Apakah kamu yakin ingin menghapus data ini?</i></b></p>
                                                  </div>
                                              </div>
                                              <div class="modal-footer">
                                                  <button type="button" class="btn btn-danger ripple" data-dismiss="modal">Tidak</button>
                                                  <button type="submit" class="btn btn-success ripple save-category">Ya</button>
                                              </div>
                                          </form>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="modal" tabindex="-1" role="dialog" id="editdata<?php echo $data['id_pendaftaran'] ?>">
                              <div class="modal-dialog modal-lg">
                                  <div class="modal-content">
                                      <div class="modal-header">
                                          <h5 class="modal-title">Edit Data</h5>
                                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                      </div>
                                      <form method="POST" action="<?php echo base_url() ?>PSB/update_regis" enctype="multipart/form-data">
                                          <div class="form-group row">
                                              <label for="id_pendaftaran" class="col-sm-2 col-form-label">ID pendaftaran</label>
                                              <div class="col-sm-9">
                                                  <input type="text" class="form-control" name="id_pendaftaran" id="id_pendaftaran" value="<?php echo $data['id_pendaftaran'] ?>" readonly>
                                              </div>
                                          </div>
                                          <div class="form-group row">
                                              <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                                              <div class="col-sm-9">
                                                  <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $data['nama'] ?>">
                                              </div>
                                          </div>
                                          <div class="form-group row">
                                              <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                                              <div class="col-sm-9">
                                                  <input type="text" class="form-control" name="alamat" id="alamat" value="<?php echo $data['alamat'] ?>">
                                              </div>
                                          </div>
                                          <fieldset class="form-group row">
                                              <legend class="col-form-label col-sm-2 float-sm-left pt-0">Jenis Kelamin</legend>
                                              <div class="col-sm-9">
                                                  <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="jenis_kelamin" id="P   ria" value="Pria" value="<?php echo $data['jenis_kelamin'] ?>">
                                                      <label class="form-check-label" for="pria">Pria</label>
                                                  </div>
                                                  <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="jenis_kelamin" id="Wanita" value="Wanita" value="<?php echo $data['jenis_kelamin'] ?>">
                                                      <label class="form-check-label" for="wanita">Wanita</label>
                                                  </div>
                                              </div>
                                          </fieldset>
                                          <div class="form-group row">
                                              <label for="umur" class="col-sm-2 col-form-label">Umur</label>
                                              <div class="col-sm-9">
                                                  <input type="text" class="form-control" name="umur" id="umur" value="<?php echo $data['umur'] ?>">
                                              </div>
                                          </div>
                                          <div class="form-group row">
                                              <label for="asal_sekolah" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                                              <div class="col-sm-9">
                                                  <input type="date" class="form-control" name="tanggal_lahir" id="tanggal_lahir" value="<?php echo $data['tanggal_lahir'] ?>">
                                              </div>
                                          </div>
                                          <div class="form-group row">
                                              <label for="asal_sekolah" class="col-sm-2 col-form-label">Tempat Lahir</label>
                                              <div class="col-sm-9">
                                                  <input type="text" class="form-control" name="tempat_lahir" id="tempat_lahir" value="<?php echo $data['tempat_lahir'] ?>">
                                              </div>
                                          </div>

                                          <div class="form-group row">
                                              <label for="sekolah_asal" class="col-sm-2 col-form-label"></label>
                                              <div class="col-sm-10">
                                                  <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
                                              </div>
                                          </div>
                                      </form>
                                  </div>
                              </div>
                          </div>
                      <?php }  ?>

                      </tbody>
                      </table>
                      </div>
                  </div>
              </div>
          </div>
  </div>
  </section>
  </div>