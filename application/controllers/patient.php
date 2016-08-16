<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Patient extends CI_Controller {

	public function index()
	{
		$cek= $this->session->userdata('status');
		if($cek=='patient')
			$this->load->view('p_patient');
		else{
			redirect("auth");
		}

	}

	public function pass()
	{
		$cek= $this->session->userdata('status');
		if($cek=='patient')
			$this->load->view('p_patient_pass');
		else
			redirect("auth");
	}

	public function kosong()
	{
		$cek= $this->session->userdata('status');
		if($cek=='patient')
			$this->load->view('p_patient_empty');
		else
			redirect("auth");
	}

	public function app()
	{
		$cek= $this->session->userdata('status');
		if($cek=='patient')
			$this->load->view('p_patient_app');
		else
			redirect("auth");
	}

	//edit password
		public function do_update(){
			$username= $this->session->userdata('username');
			$newpass= $_POST['newpass'];
			$confirm = $_POST['confirm'];

			if($newpass == $confirm){
				$data_update = array(
						'password' => md5($newpass)
					);
				$where = array('username' => $username);
				$res = $this->db_model->UpdateData('user',$data_update,$where);
				if($res>=1){
					$this->session->set_flashdata('pesan','Change Password Success');
					redirect('auth');
				}
			}else{
				$this->session->set_flashdata('pesan','The Password Did not Match');
				redirect('patient/pass');
			}
		}
}
