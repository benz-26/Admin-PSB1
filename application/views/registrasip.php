<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-3">
                <div class="col-sm-3">
                    <h1>PENDAFTARAN</h1>
                </div>
                <div class="col-sm-6">
                    <button type='button' class='btn btn-dark btn-md'><a href="<?php echo base_url()?>PSB/registrasip_form"><i class="nav-icon fas fa-plus fa-fw"></i></a></button>
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
                                    <?php foreach ($hasil->result_array() as $data) {                      ?>
                                        <tr>
                                            <td class="text-center"><?php echo $data['id_pendaftaran']; ?></td>
                                            <td class="text-center"><?php echo $data['nama']; ?></td>
                                            <td class="text-center"><?php echo $data['alamat']; ?></td>
                                            <td class="text-center"><?php echo $data['jenis_kelamin']; ?></td>
                                            <td class="text-center"><?php echo $data['umur']; ?></td>
                                            <td class="text-center"><?php echo $data['tanggal_lahir']; ?></td>
                                            <td class="text-center"><?php echo $data['tempat_lahir']; ?></td>
                                            <td class="text-center">
                                                    <div class="table-responsive">
                                                        <div class="table table-striped table-hover ">
                                                            <a href="<?php echo base_url() ?>PSB/cetak_data/<?php echo $data['id_pendaftaran']; ?>" data-toggle="modal" data-target="#printdata<?php echo  $data['id_pendaftaran'] ?>" class="btn btn-warning btn-block "><i class="nav-icon fas fa-print fa-fw"></i> 
                                                            </a>
                                                        </div>
                                                    </div>
                                                </td>
                                            
                                        </tr>
                                        <div class="modal" tabindex="-1" role="dialog" id="printdata<?php echo $data['id_pendaftaran'] ?>">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">Print</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;
                                                            </button>
                                                        </div>
                                                        <div class="modal-body p-20">
                                                            <form action="<?php echo base_url() ?>PSB/cetak_data/<?php echo $data['id_pendaftaran']; ?>" method="post" enctype="multipart/form-data">
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <input type="hidden" name="id_pendaftaran" value="<?php echo $data['id_pendaftaran'] ?>?>" />
                                                                        <p>Apakah kamu yakin ingin Print data ini?</i></b></p>
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