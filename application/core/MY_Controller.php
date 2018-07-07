<?php

class MY_Controller extends MX_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->module('Admin');
	}

	function home_run()
	{
		$this->admin->call_admin();
	}
}
?>