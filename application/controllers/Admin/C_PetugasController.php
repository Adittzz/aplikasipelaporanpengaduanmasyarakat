<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Petugas extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('M_petugas');
    }

    public function index() {

        if($this->session->login_status_petugas=='ok') {
            redirect('petugas/halamanUtama');
        }else{
            $this->load->view('petugas/header');
            $this->load->view('petugas/login');
            $this->load->view('petugas/footer');
        }
    }

    public function halamanUtama() {
        $this->load->view('petugas/header');
        $this->load->view('petugas/halamanutama');
        $this->load->view('petugas/footer');
    }

    public function login() {
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if($this->form_validation->run()==FALSE) {
            $this->load->view('petugas/header');
            $this->load->view('petugas/login');
            $this->load->view('petugas/footer');
        }else{
            $pass=md5($this->input->post('password'));
            $data=array(
                'username'  =>$this->input->post('username'),
                'password' =>$pass
            );

            $data_login=$this->M_petugas->login($data);
            if(count($data_login)>0) {
                $this->session->set_userdata('login_status_petugas', 'ok');
                $this->session->set_userdata('id_petugas', $data_login[0]['id_petugas']);
                $this->session->set_userdata('nama_petugas', $data_login[0]['nama_petugas']);
                $this->session->set_userdata('level', $data_login[0]['level']);

                redirect('petugas/halamanUtama');
            }else{
                $data['error']='Username atau Password salah';
                $this->load->view('petugas/header');
                $this->load->view('petugas/login', $data);
                $this->load->view('petugas/footer');
            }
        }
    }

    public function logout() {
        unset(
            $_SESSION['id_status_petugas'],
            $_SESSION['id_petugas'],
            $_SESSION['nama_petugas'],
            $_SESSION['level'],
        );
        redirect('petugas/login');
    }

    public function pengaduan() {
        $data['aduan']=$this->M_petugas->tampilPengaduan();
        $this->load->view('petugas/header');
        $this->load->view('petugas/tabelpengaduan', $data);
        $this->load->view('petugas/footer');
    }

    public function detailaduan($id) {
        $data['detailaduan']=$this->M_petugas->tampilDetailAduan($id);
        $this->load->view('petugas/header');
        $this->load->view('petugas/detailaduan', $data);
        $this->load->view('petugas/footer');
    }
}