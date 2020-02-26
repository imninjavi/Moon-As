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
        $this->load->view('reg_pengurus', array('error' => ' ' ));
        
    }
    
    public function regis_pengurus()
    {

        $this->form_validation->set_rules('nama', 'NAMA','required');
        $this->form_validation->set_rules('jenis_kelamin', 'JENIS KELAMIN','required');
        $this->form_validation->set_rules('nik','NIK','required');
        $this->form_validation->set_rules('ptk','PTK','required');
        $this->form_validation->set_rules('nim', 'NIM','required');
        $this->form_validation->set_rules('jabatan', 'JABATAN','required');
        $this->form_validation->set_rules('telp', 'NOMOR TELEPON','required');
        $this->form_validation->set_rules('agama', 'AGAMA','required');

        if($this->form_validation->run() == FALSE) {

            $this->load->view('reg_pengurus');
        } else {

            $config['upload_path']          = './doc_upload/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = 20480;

            $this->load->library('upload', $config);

            if ( ! $this->upload->do_upload('dokumen'))
            {
                $error = array('error' => $this->upload->display_errors());

                $this->load->view('reg_pengurus', $error);
            }
            else
            {
                $data_doc = array('upload_data' => $this->upload->data());
                $data['nama'] = $this->input->post('nama');
                $data['jenis_kelamin'] = $this->input->post('jenis_kelamin');
                $data['nik'] = $this->input->post('nik');
                $data['ptk'] = $this->input->post('ptk');
                $data['nim'] = $this->input->post('nim');
                $data['jabatan'] = $this->input->post('jabatan');
                $data['telp'] = $this->input->post('telp');
                $data['agama'] = $this->input->post('agama');

                $this->m_daftar->daftar_pengurus($data);
                
                $this->load->view('success', $data);
            }
            
        }
    }

    public function regis_peserta()
    {

        $this->form_validation->set_rules('nama', 'NAMA','required', 'Harus mengisi Niii');
        $this->form_validation->set_rules('jenis_kelamin', 'JENIS KELAMIN','required');
        $this->form_validation->set_rules('nik','NIK','required');
        $this->form_validation->set_rules('ptk','PTK','required');
        $this->form_validation->set_rules('nim', 'NIM','required');
        // $this->form_validation->set_rules('jabatan', 'JABATAN','required');
        $this->form_validation->set_rules('telp', 'NOMOR TELEPON','required');
        $this->form_validation->set_rules('agama', 'AGAMA','required');

        if($this->form_validation->run() == FALSE) {

            $this->load->view('reg_peserta');
        } else {

            $config['upload_path']          = './doc_upload/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = 20480;

            $this->load->library('upload', $config);

            if ( ! $this->upload->do_upload('dokumen'))
            {
                $error = array('error' => $this->upload->display_errors());

                $this->load->view('reg_pengurus', $error);
            }
            else
            {
                $data_doc = array('upload_data' => $this->upload->data());
                $data['nama'] = $this->input->post('nama');
                $data['jenis_kelamin'] = $this->input->post('jenis_kelamin');
                $data['nik'] = $this->input->post('nik');
                $data['ptk'] = $this->input->post('ptk');
                $data['nim'] = $this->input->post('nim');
                $data['jabatan'] = $this->input->post('jabatan');
                $data['telp'] = $this->input->post('telp');
                $data['agama'] = $this->input->post('agama');


                $this->m_daftar->daftar_peserta($data);
                
                $this->load->view('success', $data);
            }
            
        }
    }
}
