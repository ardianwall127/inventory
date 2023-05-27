<?= $this->session->flashdata('pesan2'); ?>
<div class="card card-outline card-secondary">
    <div class="card-body">
      <form action="<?= base_url('kendaraan/tambah_aksi') ?>" method="POST">
        <div class="row">
          <div class="col-md-6">
          <div class="form-group">
              <label>Instansi</label>
              <select class="form-control" name="instansi">
                <option>Pangan</option>
                <option>Perkebunan</option>
                <option>Perikanan</option>
                <option >Pertanian</option>
                <option>Umum dan Kepegawaian</option>
              </select>
        </div>
            <div class="form-group">
              <label for="code-input-1">Nama Pemakai</label>
              <input type="text" name="nama_pemakai"class="form-control" required>
              <?= form_error('nama_pemakai', '<div class="text-small text-danger">', '</div>'); ?>
            </div>
            <div class="form-group">
              <label for="code-input-1">Tipe Motor</label>
              <input type="text" name="tipe_motor" class="form-control" required >
              <?= form_error('tipe_motor', '<div class="text-small text-danger">', '</div>'); ?>
            </div>
            <div class="form-group">
              <label for="code-input-1">Nomor Polisi</label>
              <input type="text" name="nomor_polisi" class="form-control" required>
              <?= form_error('nomor_polisi', '<div class="text-small text-danger">', '</div>'); ?>
            </div>
            <div class="form-group">
              <label for="code-input-1">Tahun Rakit</label>
              <input type="text" name="tahun_rakit" class="form-control" required>
              <?= form_error('tahun_rakit', '<div class="text-small text-danger">', '</div>'); ?>
            </div>
            <div class="form-group">
              <label for="code-input-1">Jumlah CC</label>
              <input type="text" name="jumlah_cc" class="form-control" required>
              <?= form_error('jumlah_cc', '<div class="text-small text-danger">', '</div>'); ?>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="code-input-2">Nomor Rangka</label>
              <input type="text" name="nomor_rangka" class="form-control" required>
              <?= form_error('nomor_rangka', '<div class="text-small text-danger">', '</div>'); ?>
            </div>
            <div class="form-group">
              <label for="code-input-2">Nomor Mesin</label>
              <input type="text" name="nomor_mesin" class="form-control" required>
              <?= form_error('nama_pemakai', '<div class="text-small text-danger">', '</div>'); ?>
            </div>
            <div class="form-group">
              <label for="code-input-2">Nomor BPKB</label>
              <input type="text" name="nomor_bpkb" class="form-control" required>
              <?= form_error('nomor_bpkb', '<div class="text-small text-danger">', '</div>'); ?>
            </div>
            <div class="form-group">
                  <label>Tanggal Servis</label>
                  <input type="date" class="form-control datetimepicker-input" name="tanggal_servis"/>
                </div>
            <div class="form-group">
                  <label>Tanggal Perpanjangan</label>
                    <input type="date" class="form-control datetimepicker-input" name="tanggal_perpanjangan"/>
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
        <button type="submit" class="btn btn-primary mr-2 ml-2 btn-sm"><i class="fas fa-save"></i> &nbsp;Simpan</button>
        <button type="reset" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> &nbsp;Reset</button>
      </form>
    </div>
  </div>



