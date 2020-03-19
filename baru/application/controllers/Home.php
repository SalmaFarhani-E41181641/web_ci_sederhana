<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    function __construct(){
		// construct yg berisi session
		// untuk mengecek apakah sudah login atau belum
		// jika berhasil login maka secara otomatis memiliki session login
		parent::__construct();
	
		
	}
    public function index()
    {
        $this->load->view('v_home');
        $this->load->view('v_home_header');
        $this->load->view('v_home_footer');
    }

    public function berita()
    {
        $this->load->view('v_berita');
        $this->load->view('v_home_header');
        $this->load->view('v_home_footer');
    }
    public function sampah()
    {
        $this->load->view('v_sampah');
        $this->load->view('v_home_header');
        $this->load->view('v_home_footer');
    }
   
}