<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kendaraan extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('kendaraan_model');
    }
	public function utama()
	{
		$data['title'] = 'Sepeda Motor';

		$filter = $this->input->post('filter_instansi'); // Ambil nilai filter dari form

		$data['motor'] = $this->kendaraan_model->get_data('tb_motor', $filter)->result();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('kendaraan');
		$this->load->view('templates/footer');
	}
	public function tambah ()
	{
		$data['title'] = 'Tambah Sepeda Motor';

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('tambah_kendaraan');
		$this->load->view('templates/footer');
	}
	public function tambah_aksi()
	{
			$data = array(
				'instansi' => $this->input->post('instansi'),
				'nama_pemakai' => $this->input->post('nama_pemakai'),
				'tipe_motor' => $this->input->post('tipe_motor'),
				'no_polisi' => $this->input->post('nomor_polisi'),
				'tahun_rakit' => $this->input->post('tahun_rakit'),
				'jumlah_cc' => $this->input->post('jumlah_cc'),
				'no_rangka' => $this->input->post('nomor_rangka'),
				'no_mesin' => $this->input->post('nomor_mesin'),
				'no_bpkb' => $this->input->post('nomor_bpkb'),
				'tanggal_servis' => $this->input->post('tanggal_servis'),
				'tanggal_perpanjangan' => $this->input->post('tanggal_perpanjangan'),
				'gambar_motor' => $this->input->post('gambar_motor'),
			);

            if (!$this->kendaraan_model->isDataExists($data)) {
                // Insert the data into the database
                $this->kendaraan_model->insert_data($data, 'tb_motor');
                $this->session->set_flashdata('pesan', '<div class="alert alert-primary alert-dismissible fade show" role="alert">
                    Data berhasil ditambahkan!
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                    </div>');
                redirect('kendaraan/utama');
            } else {
                $this->session->set_flashdata('pesan2', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    Data sudah ada di database!
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                    </div>');
					redirect('kendaraan/tambah');
            }
        }

	public function detail ($id)
	{
		$data['title'] = 'Detail Sepeda Motor';
		$detail = $this->kendaraan_model->detail_kendaraan($id);
		$tada ['detail'] = $detail;

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('detail_kendaraan', $tada);
		$this->load->view('templates/footer');
	}
	public function delete ($id)
	{
		$where = array ('id'=> $id);

		$this->kendaraan_model->delete_data($where, 'tb_motor');
		$this->session->set_flashdata('pesan', '<div class="alert alert-success  alert-dismissible fade show" role="alert">
			Data berhasil dihapus!
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			</button>
			</div>');
		redirect('kendaraan/utama');
	}

	public function edit($id)
	{
		$data = array(
			'id' => $id,
			'instansi' => $this->input->post('instansi'),
			'nama_pemakai' => $this->input->post('nama_pemakai'),
			'tipe_motor' => $this->input->post('tipe_motor'),
			'no_polisi' => $this->input->post('nomor_polisi'),
			'tahun_rakit' => $this->input->post('tahun_rakit'),
			'jumlah_cc' => $this->input->post('jumlah_cc'),
			'no_rangka' => $this->input->post('nomor_rangka'),
			'no_mesin' => $this->input->post('nomor_mesin'),
			'no_bpkb' => $this->input->post('nomor_bpkb'),
			'tanggal_servis' => $this->input->post('tanggal_servis'),
			'tanggal_perpanjangan' => $this->input->post('tanggal_perpanjangan'),
			'gambar_motor' => $this->input->post('gambar_motor'),
		);
			// Insert the data into the database
			$this->kendaraan_model->update_data($data, 'tb_motor');
			$this->session->set_flashdata('pesan', '<div class="alert alert-primary alert-dismissible fade show" role="alert">
				Data berhasil diubah!
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				</div>');
			redirect('kendaraan/utama');
		}
	

	public function getServisDeadlines($id)
	 {
        // Retrieve assignment data from the database for the given childId
        $assignments = $this->kendaraan_model->getService($id);

        // Send response
        $response = array('assignments' => $assignments);
        echo json_encode($response);
    }

	

}