<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserController extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('UserModel');
    }

    public function index(){
        // if ($this->session->userdata('login')==1) {
        // nanti redirect ke homepage
        //     redirect('BelajarController/index');
        // }
        $this->load->view('register');
    }

    public function register_success($data_regis){
        $this->load->view('register_success', $data_regis);
    }

	public function Register(){
       
        $this->form_validation->set_rules('firstname','Nama depan','required');
        $this->form_validation->set_rules('email','Email','required');

        if($this->form_validation->run() != false){
            $data_member = array(
                'firstname' => $this->input->post('firstname'),
                'email' => $this->input->post('email'),
                'regis_time' => date('Y-m-d')
            );

            if ($this->UserModel->cekUser($data_member['email'])) {
                $this->load->view('login', $data_member);
            } else {
                $data_session = array(
                    'email' => $data_member['email'],
                    'status' => 'login'
                );
                $this->session->set_userdata($data_session);
                $this->load->view('register_success', $data_member);

                $this->RegisterProfile($data_member);
            }        
        }else{
            $this->load->view('register');
        }
    }

    public function RegisterProfile($data_member){
        date_default_timezone_set('Asia/Jakarta');
        $this->form_validation->set_rules('lastname','Nama keluarga','required');
        $this->form_validation->set_rules('jk','Jenis kelamin','required');
        $this->form_validation->set_rules('bulan','Bulan','required');
        $this->form_validation->set_rules('pw','Kata sandi','required');
        $this->form_validation->set_rules('repw','Konfirmasi kata sandi','required');
        $this->form_validation->set_rules('comms','informasi','required');
        $this->form_validation->set_rules('pp','checkbox','required');

        if($this->form_validation->run() != false) {
            $data_member = array (
                'lastname' => $this->input->post('lastname'),
                'jk' => $this->input->post('jk'),
                'bulan' => $this->input->post('bulan'),
                'pw' => $this->input->post('pw'),
                'repw' => $this->input->post('repw')
            );
            if($data_member['pw'] == $data_member['repw']){
                if($this->UserModel->Register()) {
                    // Buat Flashdata dan arahkan kembali ke Landing
                    $this->session->set_flashdata('SuccessReg', 'Success');
                    redirect('UserController/RegisterDelivery');
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
    }

//     public function Signin() {
//         // Nomor 7
//         // Panggil fungsi findUser
//         $data = $this->User->findUser();
//         // Jika User ditemukan
//         if($data){
//             // Jika rememberme dicentang
//             $remember = $this->input->post('remember_me');
//             if($remember) {
//                 // Buatkan cookie dengan isi username
//                 $this->load->helper('cookie');
//                 set_cookie("logged", $data['username'], $time + 3600);  
//                 // Arahkan kembali ke Landing
//                 redirect('Landing');
//             } else {
//                 // Buatkan session dengan isi username
//                 $this->load->library('session');
//                 $this->session->set_userdata($data['username']);
//                 // Arahkan kembali ke Landing
//                 redirect('Landing');
//             }
//         } else {
//             // Jika data tidak ditemukan
//             // maka buat flashdata yang menandakan data tidak ditemukan
//             $this->session->set_flashdata('falselogin', 'nodata');
//             redirect('Landing');
//         }
//     }

//     public function Logout() {
//         $cookie = $this->input->cookie('logged');
//         if(isset($cookie)) {
//             delete_cookie('logged');
//             redirect('Landing');
//         } else {
//             session_destroy();
//             redirect('Landing');
//         }
//     }
}