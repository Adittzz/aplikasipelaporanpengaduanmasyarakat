<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DashboardM extends CI_Models {

    function id_pengaduan()
    {
        $this->db->select('*');
        $this->db->from('dashboard');
        $this->db->where('id_pengaduan', 0);

        return $this->db->get()->num_rows();
    }
}