<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

    function registration(){

        // memanggil library form_validation
        $this->load->library('form_validation');
        // membuat validasi untuk field username, no.hp, password
        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('hp', 'Hp', 'required|trim', 'integer');
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[5]|matches[password2]',  [
            // syntax pemberitahuan jika password tidak sama
            'maches' => 'password dont macth!', 
            // syntax pemberitahuan untuk validasi panjang password
            'min_length' => 'password too short'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');
        // jika form validasi gagal maka akan diarahkan kembali ke tampilan Register
        if ($this->form_validation->run() == false) {
            $this->load->view('v_register');
            // jika berhasil maka data yang diinputkan akan dimasukkan ke database
        } else {
            $data =[
                'username'=> $this->input->post('username'),
                'hp'=> $this->input->post('hp'),
                'password'=> $this->input->post('password1'),
                'password'=> $this->input->post('password2')
            ];
            // menginputkan kedalam tabel user
            $this->db->insert('user', $data);
            // dan akan mengarah pada controller login dengan function login
            redirect('login/login');
        }
    }

}
