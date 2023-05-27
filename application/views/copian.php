<div class="container-fluid">
  <div class="row">
    <div class="col-md-6">
      <div class="card collapsed-card">
        <div class="card-header" id="filterHeading">
          <h3 class="card-title font-weight-bold text-primary">Filter Instansi</h3>
          <div class="card-tools">
          <button type="button" class="btn btn-block btn-xs btn-primary" data-toggle="collapse" data-target="#filterCollapse" aria-expanded="true" aria-controls="filterCollapse">
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