<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Download extends CI_Controller {

    function __construct(){
		parent::__construct();
		$this->load->helper('download');				
	}

	public function index()
	{
        // force_download('assets/upload/MUNAS 2020.zip',NULL);
    }
    
    public function pra_pendaftaran()
    {
        force_download('assets/upload/BERKAS PRA PENDAFTARAN MUNAS 2020.zip',NULL);
    }

    public function pasca_pendaftaran()
    {
        force_download('assets/upload/BERKAS PASCA PENDAFTARAN MUNAS 2020.zip',NULL);
    }
}
