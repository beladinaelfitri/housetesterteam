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

    public function searchUser($email)
    {
        $this->db->select('*')->from('member');
        $this->db->where('email', $email);
        $hasil = $this->db->get();
        return $hasil->row();
    }

    public function editProfile($data) {
        $this->db->where('email', $this->session->userdata('email'));
        $this->db->set('firstname', $data['firstname']);
        $this->db->set('email', $data['email']);
        $this->db->set('lastname', $data['lastname']);
        $this->db->set('email', $data['email']);
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

    public function editSecure($data) {
        $this->db->where('email', $this->session->userdata('email'));
        $this->db->set('password', $data);

        $insert = $this->db->update('member');
        if ($insert){
            return TRUE;
        }else{
            return FALSE;
        }
    }

    public function deleteUser($email){
        $this->db->where('email', $email);
        $this->db->delete('member');
    }

    public function cariProduk($prod)
    {
        $this->db->select('*')->from('produk');
        $this->db->join('kategori','id_kategori');
        $this->db->where('id_produk', $prod);
        $hasil = $this->db->get();
        return $hasil->row();
    }

    public function listProduk(){
        $this->db->select('*')->from('produk');
        $hasil = $this->db->get();
        return $hasil->result();
    }

    public function tambahReview($data, $prod, $user){
        $this->db->set('id_produk', $prod);
        $this->db->set('id_member', $user);
        $this->db->set('judul', $data['judul']);
        $this->db->set('comment', $data['review']);
        $this->db->set('bulan_beli', $data['bln']);
        $this->db->set('tahun_beli', $data['thn']);
        $this->db->set('foto', $data['foto']);
        $this->db->set('video', $data['video']);
        $this->db->set('rev_time', $data['waktu']);

        $insert = $this->db->insert('review');
        if ($insert){
            return TRUE;
        }else{
            return FALSE;
        }
    }

    public function getReviewByProduct($prod)
    {
        $this->db->select('*')->from('review');
        $this->db->join('member','id_member');
        $this->db->where('id_produk', $prod);
        $hasil = $this->db->get();
        return $hasil->result();
    }

    public function getReviewById($user)
    {
        $this->db->select('*')->from('review');
        $this->db->join('produk','id_produk');
        $this->db->where('id_member', $user);
        $hasil = $this->db->get();
        return $hasil->result();
    }

    public function addPhoto($foto){
        $this->db->where('email', $this->session->userdata('email'));
        $this->db->set('photo', $foto);

        $insert = $this->db->update('member');
        if ($insert){
            return TRUE;
        }else{
            return FALSE;
        }
    }

    public function deleteRev($rev){
        $this->db->where('id_review', $rev);
        $this->db->delete('review');
    }
}