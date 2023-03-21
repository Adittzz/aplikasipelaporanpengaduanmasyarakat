<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DashboardC extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Load Dependencies
		//is_logged_in();
	}

	// List all your items
	public function index()
	{
        $data['title'] = 'Dashboard';

        //$this->load->view('_part/backend_head', $data);
        //$this->load->view('_part/backend_sidebar_v');
        //$this->load->view('_part/backend_topbar_v');
        $this->load->view('user/dashboard', $data);
        //$this->load->view('_part/backend_footer_v');
        //$this->load->view('_part/backend_foot');
	}
}
