<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registrasi extends CI_Controller {

	public function index()
	{
		$this->load->view('registrasi');
    }
    
    public function delegasi()
	{
		$this->load->view('reg_peserta');
    }
    
    public function pengurus()
	{
		$this->load->view('reg_pengurus');
	}
}
