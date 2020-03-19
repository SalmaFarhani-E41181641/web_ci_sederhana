<?php 
 
class Crud extends CI_Controller{
//  function yang dapat digunakan untuk semua function yang ada dalam controller ini
	function __construct(){
    parent::__construct();
    // memangggil m_data		
    $this->load->model('m_data');
    // memanggil helper url
	 $this->load->helper(array('url') , 'form_validation');
	 $this->form_validation->set_rules('nama_sampah', 'Nama_sampah', 'required|trim');
	 $this->form_validation->set_rules('jumlah_sampah', 'Jumlah_sampah', 'required|trim', 'integer');
	 $this->form_validation->set_rules('lokasi', 'Lokasi', 'required|trim');
     $this->form_validation->set_rules('hp', 'Hp', 'required|trim|max_length[13]');
	}
  
/**===========================================================*/
          /** Fungsi CREATE */
  
	function tambah(){
    // memanggil view view_create  
			$this->load->view('view_create');
		}
 
	function tambah_aksi(){
		$nama_sampah = $this->input->post('nama_sampah');
		$jumlah_sampah = $this->input->post('jumlah_sampah');
		$lokasi = $this->input->post('lokasi');
		$hp = $this->input->post('hp');
 
		$data = array(
			'nama_sampah' => $nama_sampah,
			'jumlah_sampah' => $jumlah_sampah,
			'lokasi' => $lokasi,
			'hp' => $hp
      );
      // m_data akan menginputkan variabel data ke dalam tabel sampah
		$this->m_data->input_data($data,'sampah');
		redirect('crud/utama');
	}
/**===========================================================*/
  
/**===========================================================*/
          /** Fungsi READ */
  
          function utama(){
            $data['sampah'] = $this->m_data->viewall();
            $this->load->view('v_tampil',$data);
          }

         
}





