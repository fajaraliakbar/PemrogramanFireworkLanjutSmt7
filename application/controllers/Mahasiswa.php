<?php 


class Mahasiswa extends CI_Controller{

	public function tambahmhs()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nama','nama','required');


		if (!$this->form_validation->run()==false) {
			$this->Modelku->tambah_mhs();
			redirect('Kontrolku/');
		}else {
			redirect('Kontrolku/tambahmhs');
		}
	}
	public function editmhs()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nama','nama','required');

		if ($this->form_validation->run()!=false) {
			$this->Modelku->edit_mhs();
			redirect('Kontrolku');
		}else{
			redirect('Kontrolku/editmhs');
		}
	}

	public function hapusmhs($id) {
		if ($id != ""){
			$this->Modelku->hapus_mhs($id);
			redirect('Kontrolku');
		}else{
			redirect('Kontrolku');
		}
	}
	
}

