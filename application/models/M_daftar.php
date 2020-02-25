<?php
  defined('BASEPATH') OR exit('No direct script access allowed');
 
  class M_daftar extends CI_Model{

       function daftar_pengurus($data)
       {
            $this->db->insert('pengurus',$data);
       }

       function daftar_peserta($data)
       {
            $this->db->insert('delegasi',$data);
       }
  }