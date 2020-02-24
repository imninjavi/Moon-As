<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Download extends CI_Controller {

    function __construct(){
		parent::__construct();
		$this->load->helper('download');				
	}

	public function index()
	{
		force_download('assets/upload/Document1.pdf',NULL);
	}
}
