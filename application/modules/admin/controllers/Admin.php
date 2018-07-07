<?php
class Admin extends MY_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Admin_m');
	}
	function dashboard(){
		$data['deskripsi'] 	= "Dashboard";
		$data['isi']		= $this->load->view('isi_dashboard', NULL, TRUE);
		$this->load->view('admin_page', $data);	
	}

	function dataadmin(){
		$data['deskripsi'] 	= "Admin";
		$data['isi']		= $this->load->view('isi_admin', NULL, TRUE);
		$this->load->view('admin_page', $data);	
	}

	function pns(){
		$data['deskripsi'] 	= "PNS";
		$data['isi']		= $this->load->view('isi_pns', NULL, TRUE);
		$this->load->view('admin_page', $data);	
	}

	function aplikasi(){
		$data['deskripsi'] 	= "Aplikasi";
		$data['isi']		= $this->load->view('isi_aplikasi', NULL, TRUE);
		$this->load->view('admin_page', $data);	
	}

	function previledge(){
		$data['deskripsi'] 	= "Previledge";
		$data['isi']		= $this->load->view('isi_previledge', NULL, TRUE);
		$this->load->view('admin_page', $data);	
	}
}
