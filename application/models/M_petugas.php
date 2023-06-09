<?php

class M_petugas extends CI_Model {

    public function login($data) {
        $this->db->select('id_petugas,nama_petugas,level');
        $this->db->where($data);
        $query=$this->db->get('petugas');
        return $query->result_array();
    }

    public function tampilPengaduan() {
        $this->db->select('pengaduan.id_pengaduan.pengaduan.tgl_pengaduan.pengaduan.isi_laporan.pengaduan.status.masyarakat.nama');
        $this->db->from('pengaduan');
        $this->db->join('masyarakat', 'masyarakat.nik=pengaduan.nik', 'left');
        $query=$this->db->get();
        return $query->result_array();
    }

    public function tampilDetailAduan($id) {
        $this->db->select('pengaduan.id_pengaduan.pengaduan.tgl_pengaduan.pengaduan.isi_laporan.pengaduan.status.masyarakat.nama.pengaduan.foto');
        $this->db->from('pengaduan');
        $this->db->join('masyarakat', 'masyarakat.nik=pengaduan.nik', 'left');
        $this->db->where('pengaduan.id_pengaduan='.$id);
        $query=$this->db->get();
        return $query->result_array();
    }
}