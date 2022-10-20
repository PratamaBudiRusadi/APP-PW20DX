<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mmahasiswa extends CI_Model {

	public function getData()
	{
		//tampilkan data dari "tb_mahasiswa"
        $this->db->from("tb_mahasiswa");
        //urutkan berdasarkan npm secara ascending"
        $this->db->order_by("npm","ASC");
        //esekusi query
        $query = $this->db->get()->result();
        //kirim hasil query ke controller "Mahasiswa"
        return $query;
	}
	
}
