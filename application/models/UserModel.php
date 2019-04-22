<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserModel extends CI_Model {
    public function Register() {
        // Nomor 5
        // Pastikan password yang di insert ke database sudah di enkripsi dengan MD5
        // Pastikan tanggal dan jam yang dimasukkan ke database sudah sesuai saat login
        date_default_timezone_set('Asia/Jakarta');
        $firstname = $this->input->post("firstname");
        $email = $this->input->post("email");
        $data = array(
            "firstname" => $firstname,
            "email" => $email,
            "RegisTime" => date('Y-m-d')
        );
        // Panggil Fungsi isExist
        // Jika isExist mengembalikan True, maka Register return False
        // Jika tidak maka masukkan data ke database
        if($this->isExist($username)) {
            return false;
        } else {
            // Masukkan data ke table Register
            $this->db->insert('register', $data);
            // Masukkan data ke table login
            $this->db->insert('login', $datal);
            return true;
        }
    }

    public function isExist($username) {
        // Menerima masukkan Username yang akan dicek
        $query = $this->db->get_where('register', array('Username'=>$username));
        $q = $query->num_rows();
        if ($q > 0) {
            return TRUE;
        } else {
            return false;
        }
    }

    public function findUser() {
        // Nomor 7
        // Ambil data yang diinputkan user
        $username = $this->input->post("your_name");
        $pass = $this->input->post("your_pass");
        // Cari apakah data ada pada table login
        //$this->db->where('username', $username);
        //$this->db->where('pass', md5($pass));
        // Kembalikan hasil dari pencarian
        //return $this->db->get('login')->row_array();
        $r = $this->db->get_where('login', array('username' => $username, 'pass' => $pass));
        return $r->row_array();
    }

    public function imageUpload($imgName) {
        $this->db->insert('image_path', array('ImgName' => $imgName));
    }

    public function getImage() {
        // Nomor 8
        // Mengambil data dari table 'image_path' dan mengembalikan data berupa array
    }
}