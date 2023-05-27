<div class="container-fluid">
  <div class="row">
    <div class="col-md-6">
      <div class="card card-outline card-primary form-ubah-kategori collapsed-card">
        <div class="card-header">
          <h3 class="card-title font-weight-bold text-primary">Filter Instansi</h3>
          <div class="card-tools">
                <button class="btn btn-link" data-toggle="collapse" data-target="#filterCollapse" aria-expanded="true" aria-controls="filterCollapse">
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
              <label for="filter_instansi" class="col-sm-2 col-form-label">Filter Instansi</label>
              <div class="col-sm-10">
                <select class="form-control" name="filter_instansi">
                  <option value="">Semua Instansi</option>
                  <option value="Perkebunan">Perkebunan</option>
                  <option value="Perikanan">Perikanan</option>
                  <option value="Pertanian">Pertanian</option>
                 <option value="Pangan">Pangan</option>
                </select>                 
              </div>
            </div>
          </div>
        </div>
          <!-- /.card-body -->
          <button type="submit" class="btn btn-primary">Filter</button>
          <!-- /.card-footer -->
        </form>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-12">
      <div class="card card-outline card-primary">
        <div class="card-header">
          <h3 class="card-title p-1 font-weight-bold text-black">Data Sepeda Motor</h3>

 
          <div class="card-tools">
          <button data-toggle="modal" data-target="#tambah" class="btn btn-primary btn-sm"><i class="fa fa-plus-circle"></i> &nbsp;Tambah Sepeda Motor</button>  
          </div>


        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th>Id Barang</th>
              <th>Barang</th>
              <th>Kondisi</th>
              <th>Ruangan</th>
              <th>Tanggal Masuk</th>
              <th>User</th>
              <th>Tindakan</th>
            </tr>
            </thead>
            <tbody>

            <?php foreach($barang as $b) : ?>
              <tr>
                <td><?php echo $b['kd_barang']; ?></td>
                <td><?php echo $b['nama']; ?></td>
                <td><?php echo $b['kondisi']; ?></td>
                <td><?php echo $b['ruang']; ?></td>
                <td><?php echo $b['tgl_masuk']; ?></td>
                <td><?php echo $b['username']; ?></td>
                <td>                  
                  <?php if($this->session->userdata('role')=="Petugas") { ?>
                    <a href="<?php echo base_url('info/detail?id='.$b['kd_barang']); ?>" class="badge bg-info">Detail</a>
                    <a href="<?php echo base_url('barang/ubah?id='.$b['kd_barang']); ?>" class="badge bg-primary">Edit</a>
                    <!-- <a href="<?php echo base_url('barang/hapus?id='.$b['kd_barang']); ?>" class="badge bg-danger">Hapus</a> -->
                  <?php } else { ?>
                    <a href="<?php echo base_url('info/detail?id='.$b['kd_barang']); ?>" class="btn btn-info btn-sm font-weight-bold">Detail</a>
                  <?php } ?>
                </td>
              </tr>

            <?php endforeach; ?>
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      <!-- /.card -->
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->
</div>