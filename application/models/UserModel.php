<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserModel extends CI_Model {
    public function registerUser($data) {
        // Menerima masukkan Username yang akan dicek
        $this->db->set('firstname', $data['firstname']);
        $this->db->set('email', $data['email']);
        $this->db->set('regis_time', $data['regis_time']);
        $this->db->set('lastname', $data['lastname']);
        $this->db->set('jk', $data['jk']);
        $this->db->set('bulan', $data['bulan']);
        $this->db->set('tahun', $data['tahun']);
        $this->db->set('password', $data['pw']);

        $insert = $this->db->insert('member');
        if ($insert){
            return TRUE;
        }else{
            return FALSE;
        }
    }

    public function registerDeliv($data) {
        $this->db->where('email', $this->session->userdata('email'));
        $this->db->set('hp', $data['phonenum']);
        $this->db->set('alamat', $data['address']);
        $this->db->set('alamat_dua', $data['address2']);
        $this->db->set('kel', $data['address3']);
        $this->db->set('kec', $data['address4']);
        $this->db->set('kab', $data['address5']);
        $this->db->set('prov', $data['prov']);
        $this->db->set('kodepos', $data['address6']);

        $insert = $this->db->update('member');
        if ($insert){
            return TRUE;
        }else{
            return FALSE;
        }
    }

    public function registerAbout($data) {
        $this->db->where('email', $this->session->userdata('email'));
        $this->db->set('jum_orang', $data['anak']);
        $this->db->set('anak', $data['child']);
        $this->db->set('gaji', $data['gaji']);
        $this->db->set('tahun_anak', $data['child-date']);
        $this->db->set('belanja', $data['outcome']);

        $insert = $this->db->update('member');
        if ($insert){
            return TRUE;
        }else{
            return FALSE;
        }
    }

    public function cekUser($user){
        $query = $this->db->get_where('member', array('email'=>$user));
        $q = $query->num_rows();
        if ($q > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function cekLogin($user){
        $this->db->where('email',$user['email']);
        $this->db->where('password',$user['password']);
        $res = $this->db->get('member');
        if($res->num_rows() > 0){
            return true;
        } else{
            return false;
        }
    }

    public function cekEmail($user){
        $this->db->select('email')->from('member');
        $this->db->where('email', $user);
        return $this->db->get();
    }

    public function cekPw($user){
        $this->db->select('password')->from('member');
        $this->db->where('password', $user);
        return $this->db->get();
    }

    public function searchUser($email)
    {
        $this->db->select('*')->from('member');
        $this->db->where('email', $email);
        $hasil = $this->db->get();
        return $hasil->row_array();
    }

    public function editProfile($data) {
        // Menerima masukkan Username yang akan dicek
        $this->db->set('firstname', $data['firstname']);
        $this->db->set('email', $data['email']);
        $this->db->set('lastname', $data['lastname']);
        $this->db->where('email', $this->session->userdata('email'));
        $this->db->set('hp', $data['phonenum']);
        $this->db->set('alamat', $data['address']);
        $this->db->set('alamat_dua', $data['address2']);
        $this->db->set('kel', $data['address3']);
        $this->db->set('kec', $data['address4']);
        $this->db->set('kab', $data['address5']);
        $this->db->set('prov', $data['prov']);
        $this->db->set('kodepos', $data['address6']);

        $insert = $this->db->update('member');
        if ($insert){
            return TRUE;
        }else{
            return FALSE;
        }
    }

    
   

//     public function Register() {
//         // Nomor 5
//         // Pastikan password yang di insert ke database sudah di enkripsi dengan MD5
//         // Pastikan tanggal dan jam yang dimasukkan ke database sudah sesuai saat login
//         date_default_timezone_set('Asia/Jakarta');
//         $firstname = $this->input->post("firstname");
//         $email = $this->input->post("email");
//         $data = array(
//             "firstname" => $firstname,
//             "email" => $email,
//             "RegisTime" => date('Y-m-d')
//         );
//         // Panggil Fungsi isExist
//         // Jika isExist mengembalikan True, maka Register return False
//         // Jika tidak maka masukkan data ke database
//         if($this->isExist($username)) {
//             return false;
//         } else {
//             // Masukkan data ke table Register
//             $this->db->insert('register', $data);
//             // Masukkan data ke table login
//             $this->db->insert('login', $datal);
//             return true;
//         }
//     }

//     public function isExist($username) {
//         // Menerima masukkan Username yang akan dicek
//         $query = $this->db->get_where('register', array('Username'=>$username));
//         $q = $query->num_rows();
//         if ($q > 0) {
//             return TRUE;
//         } else {
//             return false;
//         }
//     }

//     public function findUser() {
//         // Nomor 7
//         // Ambil data yang diinputkan user
//         $username = $this->input->post("your_name");
//         $pass = $this->input->post("your_pass");
//         // Cari apakah data ada pada table login
//         //$this->db->where('username', $username);
//         //$this->db->where('pass', md5($pass));
//         // Kembalikan hasil dari pencarian
//         //return $this->db->get('login')->row_array();
//         $r = $this->db->get_where('login', array('username' => $username, 'pass' => $pass));
//         return $r->row_array();
//     }

//     public function imageUpload($imgName) {
//         $this->db->insert('image_path', array('ImgName' => $imgName));
//     }

//     public function getImage() {
//         // Nomor 8
//         // Mengambil data dari table 'image_path' dan mengembalikan data berupa array
//     }
}