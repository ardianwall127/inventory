<?= $this->session->flashdata('pesan'); ?>
<div class="container-fluid">
  <div class="row">
    <div class="col-md-3">
      <div class="card">
        <div class="card-header" id="filterHeading">
          <h3 class="card-title font-weight-bold text-black">Filter Instansi</h3>
            <div class="card-tools">
                    <button type="button" class="btn btn-link btn-xs btn-black" data-toggle="collapse" data-target="#filterCollapse" aria-expanded="true" aria-controls="filterCollapse">
                    <i class="fas fa-filter"></i>
                    </button>
            </div>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <div id="filterCollapse" class="collapse" aria-labelledby="filterHeading">
            <div class="card-body">            
                <form class="form-horizontal" action="<?php echo site_url('kendaraan/utama'); ?>" method="post">
                    <div class="form-group row">
                        <div class="col-sm-12">
                            <select class="form-control" name="filter_instansi">
                                <option value="">Semua Instansi</option>
                                <option value="Perkebunan">Perkebunan</option>
                                <option value="Perikanan">Perikanan</option>
                                <option value="Pertanian">Pertanian</option>
                                <option value="Pangan">Pangan</option>
                            </select>         
                        
                            <button type="submit" class="btn btn-primary btn-sm mt-3 text-center">Filter</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- /.card-body -->
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-12">
      <div class="card card-outline card-secondary">
        <div class="card-header">
          <h3 class="card-title p-1 font-weight-bold text-black">Data Sepeda Motor</h3>
          <div class="card-tools">
            <button data-toggle="modal" data-target="#tambah" class="btn btn-primary btn-sm mr-2"><i class="fa fa-plus-circle"></i> &nbsp;Tambah Sepeda Motor</button>  
          </div>
        </div>
        <!-- card body and table content -->

   

        <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
        <thead>
            <tr class="text-center">
                <th>No</th>
                <th>Nama Instansi</th>
                <th>Tipe Motor</th>
                <th>Nomor Polisi</th>
                <th>Action</th>
            </tr>
        </thead>

        
 
        <tbody>
        <?php $no = 1;
        foreach($motor as $mtr) : ?>
            <tr class="text-center">
                <td><?= $no++ ?></td>
                <td><?= $mtr->instansi ?></td>
                <td><?= $mtr->tipe_motor ?></td>
                <td><?= $mtr->no_polisi ?></td>
                <td>
                    <button data-toggle="modal" data-target="#edit<?= $mtr->id ?>" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></button>
                    <a href="<?= base_url('kendaraan/delete/'.$mtr->id) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Anda yakin ingin menghapus data ini ?')"><i class="fas fa-trash"></i></a>
                    <a href="<?= base_url('kendaraan/detail/'.$mtr->id) ?>" class="btn btn-primary btn-sm"><i class="fas fa-info-circle"></i></a>
                </td>
            </tr>
         <?php endforeach?>
        </tbody>
    </table>

</div>
</div>
</div>
</div>

<!-- Modal Edit Kendaraan-->
<?php foreach($motor as $mtr) : ?>
<div class="modal fade" id="edit<?= $mtr->id ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content w-100">
        <div class="modal-header">
                <h5 class="modal-title"><i class="ion-ios-gear text-danger"></i> &nbsp;Edit Data Sepeda Motor</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            
            <form action="<?= base_url('kendaraan/edit/' . $mtr->id) ?>" method="POST">
           
            <div class="row">
            <div class="col-md-6">
            <div class="form-group">
                <label for="">Instansi</label>
                <select class="form-control" name="instansi">
                    <option <?= ($mtr->instansi == 'Pangan') ? 'selected' : ''; ?>>Pangan</option>
                    <option <?= ($mtr->instansi == 'Perkebunan') ? 'selected' : ''; ?>>Perkebunan</option>
                    <option <?= ($mtr->instansi == 'Perikanan') ? 'selected' : ''; ?>>Perikanan</option>
                    <option <?= ($mtr->instansi == 'Pertanian') ? 'selected' : ''; ?>>Pertanian</option>
                    <option <?= ($mtr->instansi == 'Umum dan Kepegawaian') ? 'selected' : ''; ?>>Umum dan Kepegawaian</option>
                </select>
            </div>
                <div class="form-group">
                    <label for="code-input-1">Nama Pemakai</label>
                    <input type="text" name="nama_pemakai" class="form-control" value="<?= $mtr->nama_pemakai?>"required>
                </div>
                <div class="form-group">
                    <label for="code-input-1">Tipe Motor</label>
                    <input type="text" name="tipe_motor" class="form-control" required value="<?= $mtr->tipe_motor?>">
                </div>
                <div class="form-group">
                    <label for="code-input-1">Nomor Polisi</label>
                    <input type="text" name="nomor_polisi" class="form-control" required value="<?= $mtr->no_polisi ?>">
                </div>
                <div class="form-group">
                    <label for="code-input-1">Tahun Rakit</label>
                    <input type="text" name="tahun_rakit" class="form-control" required value="<?= $mtr->tahun_rakit ?>">
                </div>
                    <div class="form-group">
                    <label for="code-input-1">Jumlah CC</label>
                    <input type="text" name="jumlah_cc" class="form-control" required value="<?= $mtr->jumlah_cc ?>">
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="code-input-2">Nomor Rangka</label>
                    <input type="text" name="nomor_rangka" class="form-control" required value="<?= $mtr->no_rangka ?>" >
                </div>
                <div class="form-group">
                    <label for="code-input-2">Nomor Mesin</label>
                    <input type="text" name="nomor_mesin" class="form-control" required value="<?= $mtr->no_mesin ?>">
                </div>
                <div class="form-group">
                    <label for="code-input-2">Nomor BPKB</label>
                    <input type="text" name="nomor_bpkb" class="form-control" required value="<?= $mtr->no_bpkb ?>">
                </div>
                <div class="form-group">
                    <label>Tanggal Servis</label>
                    <input type="date" class="form-control datetimepicker-input" name="tanggal_servis" value="<?= $mtr->tanggal_servis ?>"/>
                    </div>
                <div class="form-group">
                    <label>Tanggal Perpanjangan</label>
                    <input type="date" class="form-control datetimepicker-input" name="tanggal_perpanjangan" value="<?= $mtr->tanggal_perpanjangan ?>"/>
                </div>
            </div>
            </div>
        </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> &nbsp;Simpan</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="ion-arrow-return-left"></i> &nbsp;Batal</button>
                </div>
        </form>
        </div>
    </div>
  </div>
</div>
<?php endforeach?>


<!-- Modal Tambah Kendaraan-->
<div class="modal fade" role="dialog" id="tambah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content w-100">
        <div class="modal-header">
                <h5 class="modal-title"><i class="ion-ios-gear text-danger"></i> &nbsp;Tambah Sepeda Motor</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
   
            <div class="modal-body">
            
                <form action="<?= base_url('kendaraan/tambah_aksi') ?>" class="form-horizontal" method="POST">
                <div class="row">
                <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleSelect1">Instansi</label>
                            <select class="form-control" name="instansi">
                                <option>Pangan</option>
                                <option>Perkebunan</option>
                                <option>Perikanan</option>
                                <option>Pertanian</option>
                                <option>Umum dan Kepegawaian</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="code-input-1">Nama Pemakai</label>
                            <input type="text" name="nama_pemakai" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="code-input-1">Tipe Motor</label>
                            <input type="text" name="tipe_motor" class="form-control" required >
                        </div>
                        <div class="form-group">
                            <label for="code-input-1">Nomor Polisi</label>
                            <input type="text" name="nomor_polisi" class="form-control" required >
                        </div>
                        <div class="form-group">
                            <label for="code-input-1">Tahun Rakit</label>
                            <input type="text" name="tahun_rakit" class="form-control" required >
                        </div>
                            <div class="form-group">
                            <label for="code-input-1">Jumlah CC</label>
                            <input type="text" name="jumlah_cc" class="form-control" required >
                        </div>
                </div>

                <div class="col-md-6">
                        <div class="form-group">
                            <label for="code-input-2">Nomor Rangka</label>
                            <input type="text" name="nomor_rangka" class="form-control" required >
                        </div>
                        <div class="form-group">
                            <label for="code-input-2">Nomor Mesin</label>
                            <input type="text" name="nomor_mesin" class="form-control" required >
                        </div>
                        <div class="form-group">
                            <label for="code-input-2">Nomor BPKB</label>
                            <input type="text" name="nomor_bpkb" class="form-control" required >
                        </div>
                        <div class="form-group">
                            <label>Tanggal Servis</label>
                            <input type="date" class="form-control datetimepicker-input" name="tanggal_servis" />
                        </div>
                        <div class="form-group">
                            <label>Tanggal Perpanjangan</label>
                            <input type="date" class="form-control datetimepicker-input" name="tanggal_perpanjangan" />
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Foto Sepeda Motor</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" name="gambar_motor" class="custom-file-input" id="exampleInputFile" value="userfile">
                                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text" id="">Upload</span>
                                    </div>
                            </div>
                         </div>
                    </div>
                </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-save"></i> &nbsp;Simpan</button>
                        <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal"><i class="ion-arrow-return-left"></i> &nbsp;Batal</button>
                    </div>
            </form>
        </div>
    </div>
  </div>
</div>