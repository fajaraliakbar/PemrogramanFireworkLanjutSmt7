<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Cmahasiswa extends CI_Controller
{
	
	public function index ()
	{
		$data['mhs'] = $this->Modelku->ambilmhs();
		$this->load->view('Vmahasiswa',$data);
	}

	public function tambahmhs()
	{
		$this->load->view('tambahmahasiswa');

	}

	public function editmhs($id)
	{
		$data['mhs'] = $this->Modelku->editambilmhs($id);
		$this->load->view('editmahasiswa',$data);	

	}
}
