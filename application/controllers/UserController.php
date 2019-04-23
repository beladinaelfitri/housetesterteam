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

	public function Register(){
        $this->form_validation->set_rules('firstname','Nama depan','required');
        $this->form_validation->set_rules('email','Email','required');

        $data_member = array(
            'firstname' => $this->input->post('firstname'),
            'email' => $this->input->post('email'),
        );

        if($this->form_validation->run() != false){
            if ($this->UserModel->cekUser($data_member['email'])) {
                $this->load->view('login', $data_member);
            } else {
                $data_session = array(
                    'email' => $data_member['email'],
                    'firstname' => $data_member['firstname'],
                    'status' => 'login'
                );
                $this->session->set_userdata($data_session);
                $this->load->view('register_success', $data_member);
                redirect('UserController/RegisterProfile');
            }        
        }else{
            $this->load->view('register');
        }
    }

    public function RegisterProfile(){
        date_default_timezone_set('Asia/Jakarta');
        $this->form_validation->set_rules('firstname','Nama depan','required');
        $this->form_validation->set_rules('email','Email','required');
        $this->form_validation->set_rules('lastname','Nama keluarga','required');
        $this->form_validation->set_rules('jk','Jenis kelamin','required');
        $this->form_validation->set_rules('bulan','Bulan','required');
        $this->form_validation->set_rules('tahun','Tahun','required');
        $this->form_validation->set_rules('password','Kata sandi','required');
        $this->form_validation->set_rules('repassword','Konfirmasi kata sandi','required');
        $this->form_validation->set_rules('pp','checkbox','required');

        $data_member = array (
            'firstname' => $this->input->post('firstname'),
            'email' => $this->input->post('email'),
            'lastname' => $this->input->post('lastname'),
            'jk' => $this->input->post('jk'),
            'bulan' => $this->input->post('bulan'),
            'tahun' => $this->input->post('tahun'),
            'pw' => $this->input->post('password'),
            'regis_time' => date('d F, Y')
        );

        if($this->form_validation->run() != false) {
            if($data_member['pw'] == $this->input->post('repassword')){
                if($this->UserModel->registerUser($data_member)) {
                    // Buat Flashdata dan arahkan kembali ke Landing
                    $this->session->set_flashdata('SuccessReg', 'Berhasil');
                    redirect('UserController/RegisterSuccess');
                } else {
                    // Buat Flashdata dan arahkan kembali ke Landing/Register
                    //$this->session->set_flashdata('FailReg', 'fail');
                    //redirect('Landing/Register');
                    $this->load->view('login', $data_member);
                }
            } else {
                // Buat flashdata
                //$this->session->set_flashdata('FailReg', 'fail');
                // Arahkan kembali ke Landing/Register
                //redirect('Landing/Register');
                $this->load->view('login', $data_member);
            }
        } else {
            $this->load->view('register_success', $data_member);
        }
    }

    public function RegisterDelivery(){
        $this->form_validation->set_rules('phonenum','Telepon','required');
        $this->form_validation->set_rules('address','Alamat','required');
        $this->form_validation->set_rules('address2','Alamat 2','required');
        $this->form_validation->set_rules('address3','Kelurahan','required');
        $this->form_validation->set_rules('address4','Kecamatan','required');
        $this->form_validation->set_rules('address5','Kabupaten','required');
        $this->form_validation->set_rules('prov','Provinsi','required');
        $this->form_validation->set_rules('address6','Kodepos','required');

        $data_member = array (
            'phonenum' => $this->input->post('phonenum'),
            'address' => $this->input->post('address'),
            'address2' => $this->input->post('address2'),
            'address3' => $this->input->post('address3'),
            'address4' => $this->input->post('address4'),
            'address5' => $this->input->post('address5'),
            'prov' => $this->input->post('prov'),
            'address6' => $this->input->post('address6')
        );

        if($this->form_validation->run() != false) {
            if($this->UserModel->registerDeliv($data_member)) {
                    // Buat Flashdata dan arahkan kembali ke Landing
                    $this->session->set_flashdata('SuccessReg', 'Berhasil');
                    redirect('UserController/RegisterSuccess');
                } else {
                    // Buat Flashdata dan arahkan kembali ke Landing/Register
                    //$this->session->set_flashdata('FailReg', 'fail');
                    //redirect('Landing/Register');
                    $this->load->view('login', $data_member);
                }
        } else {
            $this->load->view('register_success', $data_member);
        }
    }

    public function RegisterAbout(){
        $this->form_validation->set_rules('anak','Telepon','required');
        $this->form_validation->set_rules('child','Alamat','required');
        $this->form_validation->set_rules('gaji','Kelurahan','required');
        $this->form_validation->set_rules('outcome','Kecamatan','required');

        $data_member = array (
            'anak' => $this->input->post('anak'),
            'child' => $this->input->post('child'),
            'gaji' => $this->input->post('gaji'),
            'outcome' => $this->input->post('outcome')
        );

        if($this->form_validation->run() != false) {
            if($this->UserModel->registerAbout($data_member)) {
                // Buat Flashdata dan arahkan kembali ke Landing
                $this->session->set_flashdata('SuccessReg', 'Berhasil');
                redirect('UserController/Profile');
            } else {
                // Buat Flashdata dan arahkan kembali ke Landing/Register
                //$this->session->set_flashdata('FailReg', 'fail');
                //redirect('Landing/Register');
                $this->load->view('login', $data_member);
            }
        } else {
            $this->load->view('register_success', $data_member);
        }
    }

    public function RegisterSuccess(){
        $this->load->view('register_success');
    }

    public function Profile(){
        $user = $this->session->userdata('email');
        $data_user = $this->UserModel->searchUser($user);
        $this->load->view('profile', $data_user);
    }

    public function editProfile(){
        $this->form_validation->set_rules('firstname','Nama Depan','required');
        $this->form_validation->set_rules('lastname','Nama keluarga','required');
        $this->form_validation->set_rules('email','Email','required');
        $this->form_validation->set_rules('phonenum','Telepon','required');
        $this->form_validation->set_rules('address','Alamat','required');
        $this->form_validation->set_rules('address2','Alamat 2','required');
        $this->form_validation->set_rules('address3','Kelurahan','required');
        $this->form_validation->set_rules('address4','Kecamatan','required');
        $this->form_validation->set_rules('address5','Kabupaten','required');
        $this->form_validation->set_rules('prov','Provinsi','required');
        $this->form_validation->set_rules('address6','Kodepos','required');


        $data_member = array (
            'firstname' => $this->input->post('firstname'),
            'email' => $this->input->post('email'),
            'lastname' => $this->input->post('lastname'),
            'phonenum' => $this->input->post('phonenum'),
            'address' => $this->input->post('address'),
            'address2' => $this->input->post('address2'),
            'address3' => $this->input->post('address3'),
            'address4' => $this->input->post('address4'),
            'address5' => $this->input->post('address5'),
            'prov' => $this->input->post('prov'),
            'address6' => $this->input->post('address6')
        );

        if($this->form_validation->run() != false){
            if ($this->UserModel->cekUser($data_member['email'])) {
                $this->session->set_flashdata('FailReg', 'fail');
            } else {
                if($this->UserModel->editProfile($data_member)) {
                    // Buat Flashdata dan arahkan kembali ke Landing
                    $this->session->set_flashdata('SuccessReg', 'Berhasil');
                    $this->load->view('profile');
                } else {
                    // Buat Flashdata dan arahkan kembali ke Landing/Register
                    //$this->session->set_flashdata('FailReg', 'fail');
                    //redirect('Landing/Register');
                    $this->load->view('login', $data_member);
                }
            }        
        }else{
            $this->load->view('profile');
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