<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserController extends CI_Controller {
    public function __construct(){

        parent::__construct();
    
        // Load model
        $this->load->model('UserModel');
    }

	public function Register()
	{
        
        // Jika Password dan Re-Enter Password sama, maka:
        if( $this->input->post('pass')==$this->input->post('re_pass')){
            if($this->user->Register()) {
                // Buat Flashdata dan arahkan kembali ke Landing
                $this->session->set_flashdata('SuccessReg', 'Success');
                redirect('Landing');
            } else {
                // Buat Flashdata dan arahkan kembali ke Landing/Register
                $this->session->set_flashdata('FailReg', 'fail');
                redirect('Landing/Register');
            }
        } else {
            // Buat flashdata
            $this->session->set_flashdata('FailReg', 'fail');
            // Arahkan kembali ke Landing/Register
            redirect('Landing/Register');
        }
    }

    public function Signin() {
        // Nomor 7
        // Panggil fungsi findUser
        $data = $this->User->findUser();
        // Jika User ditemukan
        if($data){
            // Jika rememberme dicentang
            $remember = $this->input->post('remember_me');
            if($remember) {
                // Buatkan cookie dengan isi username
                $this->load->helper('cookie');
                set_cookie("logged", $data['username'], $time + 3600);  
                // Arahkan kembali ke Landing
                redirect('Landing');
            } else {
                // Buatkan session dengan isi username
                $this->load->library('session');
                $this->session->set_userdata($data['username']);
                // Arahkan kembali ke Landing
                redirect('Landing');
            }
        } else {
            // Jika data tidak ditemukan
            // maka buat flashdata yang menandakan data tidak ditemukan
            $this->session->set_flashdata('falselogin', 'nodata');
            redirect('Landing');
        }
    }

    public function Logout() {
        $cookie = $this->input->cookie('logged');
        if(isset($cookie)) {
            delete_cookie('logged');
            redirect('Landing');
        } else {
            session_destroy();
            redirect('Landing');
        }
    }
}