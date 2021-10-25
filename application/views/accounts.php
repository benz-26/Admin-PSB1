<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-3">
                    <h1>DAFTAR ACCOUNTS</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th class="text-center">ID account</th>
                                        <th class="text-center">NIK</th>
                                        <th class="text-center">Nama</th>
                                        <th class="text-center">Asal Sekolah</th>
                                        <th class="text-center">Status account</th>
                                        <th class="text-center">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($hasil->result_array() as $data) {                      ?>
                                        <tr>
                                            <td class="text-center"><?php echo $data['id_account']; ?></td>
                                            <td class="text-center"><?php echo $data['nik']; ?></td>
                                            <td class="text-center"><?php echo $data['nama']; ?></td>
                                            <td class="text-center"><?php echo $data['asal_sekolah']; ?></td>
                                            <td class="text-center"><?php echo $data['status_pendaftaran']; ?></td>
                                            <td>
                                                <div class="table-responsive">
                                                    <div class="table table-striped table-hover ">
                                                        <a href="" data-toggle="modal" data-target="#editdata<?php echo  $data['id_account'] ?>" class="btn btn-primary btn-block fas fa-edit">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="table-responsive">
                                                    <div class="table table-striped table-hover ">
                                                        <a href="" data-toggle="modal" data-target="#hapus<?php echo  $data['id_account'] ?>" class="btn btn-danger btn-block fas fa-trash-alt">
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <div class="modal" tabindex="-1" role="dialog" id="hapus<?php echo $data['id_account'] ?>">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Hapus Data</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;
                                                        </button>
                                                    </div>
                                                    <div class="modal-body p-20">
                                                        <form action="<?php echo base_url() ?>PSB/delete_useracc" method="post" enctype="multipart/form-data">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <input type="hidden" name="id_account" value="<?php echo $data['id_account'] ?>?>" />
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
                        </div>
                        <div class="modal" tabindex="-1" role="dialog" id="editdata<?php echo $data['id_account'] ?>">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Edit Data</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    </div>
                                    <form method="POST" action="<?php echo base_url() ?>PSB/update_account" enctype="multipart/form-data">
                                        <div class="form-group row">
                                            <label for="id_account" class="col-sm-2 col-form-label">ID account</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name="id_account" id="id_account" value="<?php echo $data['id_account'] ?>" readonly>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="nama" class="col-sm-2 col-form-label">NIK</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="nik" name="nik" value="<?php echo $data['nik'] ?>" readonly>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $data['nama'] ?>" readonly>
                                            </div>
                                        </div>
                                        <fieldset class="form-group row">
                                            <legend class="col-form-label col-sm-2 float-sm-left pt-0">Status Pendaftaran</legend>
                                            <div class="col-sm-9">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="status_pendaftaran" value="Diterima" id="Diterima" value="<?php echo $data['status_pendaftaran'] ?>">
                                                    <label class="form-check-label" for="jk_pria">Diterima</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="status_pendaftaran" value="Cadangan" id="Cadangan" value="<?php echo $data['status_pendaftaran'] ?> ">
                                                    <label class="form-check-label" for="cadangan">Cadangan</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="status_pendaftaran" value="Tidak Diterima" id="Tidak Diterima" value="<?php echo $data['status_pendaftaran'] ?>">
                                                    <label class="form-check-label" for="tidak_diterima">Tidak Diterima</label>
                                                </div>
                                            </div>
                                        </fieldset>
                                        <div class="form-group row">
                                            <label for="nama" class="col-sm-2 col-form-label">Asal Sekolah</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="asal_sekolah" name="asal_sekolah" value="<?php echo $data['asal_sekolah'] ?>">
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
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
</div>
<!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>