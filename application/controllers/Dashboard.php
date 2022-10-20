<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
		//$this->load->library(array('session','email'));
		//$this->load->helper(array('captcha'));
		
		//pengririman parameter ke view
		//1. dengan variabel

		//$data["nama"] ="udin";
		//$data["kelas"] ="IF 20 DX";

		$data = array(
			"nama" => "Udin",
			"kelas" => "IF 20 DX",
			"jurusan" => "Informatika",
			"telepon" => "085346818828",
			"kelamin" => "Laki-Laki"
		);

		$this->load->view('dashboard_vw',$data);
	}
	function kirim_konstan()
	{
		$this->load->view('dashboard2_vw');
	}
}
