<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserController extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('UserModel');
    }

    public function index(){
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
                    'status' => 'lregis'
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
                    $this->session->set_flashdata('SuccessReg', 'Berhasil');
                    redirect('UserController/RegisterSuccess');
                } else {
                    $this->session->set_flashdata('FailReg', 'fail');
                    $this->load->view('register_success', $data_member);
                }
            } else {
                $this->load->view('register_success', $data_member);
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
                    $this->session->set_flashdata('SuccessReg', 'Berhasil');
                    redirect('UserController/RegisterSuccess');
                } else {
                    $this->session->set_flashdata('FailReg', 'fail');
                    $this->load->view('register_success', $data_member);
                }
        } else {
            $this->load->view('register_success', $data_member);
        }
    }

    public function RegisterAbout(){
        $this->form_validation->set_rules('anak','Telepon','required');
        $this->form_validation->set_rules('child','Alamat','required');
        $this->form_validation->set_rules('gaji','Kelurahan','required');
        $this->form_validation->set_rules('child-date','Alamat','required');
        $this->form_validation->set_rules('outcome','Kecamatan','required');

        $data_member = array (
            'anak' => $this->input->post('anak'),
            'child' => $this->input->post('child'),
            'gaji' => $this->input->post('gaji'),
            'child-date' => $this->input->post('child-date'),
            'outcome' => $this->input->post('outcome')
        );

        if($this->form_validation->run() != false) {
            if($this->UserModel->registerAbout($data_member)) {
                $this->session->set_flashdata('SuccessReg', 'Berhasil');
                redirect('UserController/Profile');
            } else {
                $this->session->set_flashdata('FailReg', 'fail');
                $this->load->view('register_success', $data_member);
            }
        } else {
            $this->load->view('register_success', $data_member);
        }
    }

    public function RegisterSuccess(){
        $this->load->view('register_success');
    }

    public function editRincian(){
        $data_member = array (
            'firstname' => $this->input->post('firstname', true),
            'email' => $this->input->post('email', true),
            'lastname' => $this->input->post('lastname', true),
            'phonenum' => $this->input->post('numphone', true),
            'address' => $this->input->post('address', true),
            'address2' => $this->input->post('address2', true),
            'address3' => $this->input->post('address3', true),
            'address4' => $this->input->post('address4', true),
            'address5' => $this->input->post('address5', true),
            'prov' => $this->input->post('prov', true),
            'address6' => $this->input->post('address6', true)
        );

        if ($this->UserModel->cekUser($data_member['email']) && $data_member['email']!=$this->session->userdata('email')) {
            echo "<script>alert('Email sudah ada!');</script>";
            //$this->session->set_flashdata('FailReg', 'fail');
        } else {
            if($this->UserModel->editProfile($data_member)) {
                echo "<script>alert('Berhasil Merubah!');</script>";
                //$this->session->set_flashdata('SuccessReg', 'Berhasil');
                redirect('UserController/Profile');
            } else {
                echo "<script>alert('Data gagal dirubah');</script>";
                //$this->session->set_flashdata('FailReg', 'fail');
                redirect('UserController/Profile');
            }
        }     

    }

    public function editAbout(){
        $this->form_validation->set_rules('anak','Telepon','required');
        $this->form_validation->set_rules('child','Alamat','required');
        $this->form_validation->set_rules('gaji','Kelurahan','required');
        $this->form_validation->set_rules('child-date','Alamat','required');
        $this->form_validation->set_rules('outcome','Kecamatan','required');

        $data_member = array (
            'anak' => $this->input->post('anak'),
            'child' => $this->input->post('child'),
            'gaji' => $this->input->post('gaji'),
            'child-date' => $this->input->post('child-date'),
            'outcome' => $this->input->post('outcome')
        );

        if($this->form_validation->run() != false) {
            if($this->UserModel->registerAbout($data_member)) {
                $this->session->set_flashdata('SuccessReg', 'Berhasil');
                redirect('UserController/Profile');
            } else {
                $this->session->set_flashdata('FailReg', 'fail');
                echo "<script>alert('Data gagal dirubah');</script>";
                redirect('UserController/Profile');
            }
        } else {
            redirect('UserController/Profile');
        }
    }

    public function editSecurity(){
        $this->form_validation->set_rules('password','Kata sandi','required');
        $this->form_validation->set_rules('repassword','Konfirmasi kata sandi','required');
        $this->form_validation->set_rules('comms','checkbox','required');
        $this->form_validation->set_rules('comms1','checkbox','required');

        $pw =  $this->input->post('password');

        if($this->form_validation->run() != false) {
            if($pw == $this->input->post('repassword')){
                if($this->UserModel->editSecure($pw)) {
                    $this->session->set_flashdata('SuccessReg', 'Berhasil');
                    redirect('UserController/Profile');
                } else {
                    $this->session->set_flashdata('FailReg', 'fail');
                    echo "<script>alert('Data gagal dirubah');</script>";
                    redirect('UserController/Profile');
                }
            } else {
                redirect('UserController/Profile');
            }
        } else {
            redirect('UserController/Profile');
        }
    }

    

    public function Profile(){
        $user = $this->session->userdata('email');
        $data_user = $this->UserModel->searchUser($user);
        $this->load->view('profile', $data_user);
        
    }


    public function Login(){
        $this->form_validation->set_rules('email','Email','required');
        $this->form_validation->set_rules('password','Password','required');
        $this->form_validation->set_rules('remember','remember me','required');

        $data_member = array (
            'password' => $this->input->post('password'),
            'email' => $this->input->post('email'),
        );

        if($this->form_validation->run() != false){
            $login = $this->UserModel->cekLogin($data_member);
            if ($login) {
                $data_session = array(
                    'email' => $data_member['email'],
                    'status' => 'login'
                );
                $this->session->set_userdata($data_session);
                redirect('UserController/Profile');
            } else {
                echo "<script>alert('Email dan password tidak valid!');</script>";
                $this->load->view('login');
            }        
        }else{
            $this->load->view('login');
        }

    }

    public function Logout(){
        $this->session->sess_destroy();
        redirect(base_url('login'));
    }
}