<div class="row justify-content-end">
  <div class="col-auto">
    <a href="<?= base_url('kendaraan/utama') ?>" class="btn btn-primary btn-back btn-sm mb-3">
      <i class="fa fa-step-backward"></i>
      Back
    </a>
  </div>
</div>
<div class="card card-outline card-secondary">
  <div class="row">
    <div class="col-md-12">
        <div class="card-body">
          <div class="row">
            <div class="col-md-6 d-flex align-items-center justify-content-center">
                    <img class="img-fluid img-thumbnail" src="<?php echo base_url()?>assets/dist/img/samping.webp" alt="Motorcycle Image" style="max-width: 500px;"> 
            </div>
            <div class="col-md-6">
            <div class="w-100">
          <h2 class="font-weight-bold text-black">SEPEDA MOTOR</h2>
          <p><?= $detail->no_polisi ?></p>
           </div>
              
              <hr>

              <div class="row" >
                <div class="col-md-6 align-items-center">
                  <p>Instansi</p>
                  <p>Nama Pemakai</p>
                  <p>Tipe Motor</p>
                  <p>Nomor Polisi</p>
                  <p>Tahun Rakit</p>
                  <p>Jumlah CC</p>
                  <p>Nomor Rangka</p>
                  <p>Nomor Mesin</p>
                  <p>Nomor BPKB</p>
                  <p>Tanggal Service</p>
                  <p>Tanggal Perpanjangan</p>
                </div>
                <div class="col-md-6 align-items-center">
                  <p><strong><?= $detail->instansi ?></strong></p>
                  <p><strong><?= $detail->nama_pemakai ?></strong></p>
                  <p><strong><?= $detail->tipe_motor ?></strong></p>
                  <p><strong><?= $detail->no_polisi ?></strong></p>
                  <p><strong><?= $detail->tahun_rakit ?></strong></p>
                  <p><strong><?= $detail->jumlah_cc ?></strong></p>
                  <p><strong><?= $detail->no_rangka ?></strong></p>
                  <p><strong><?= $detail->no_mesin ?></strong></p>
                  <p><strong><?= $detail->no_bpkb ?></strong></p>
                  <p><strong><?= $detail->tanggal_servis ?></strong></p>
                  <p><strong><?= $detail->tanggal_perpanjangan ?></strong></p>
                </div>
              </div>  
            </div>
          </div>
        </div>
      </div>
    </div>

</div>
