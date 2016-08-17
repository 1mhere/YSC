<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Patient extends CI_Controller {

	public function index()
	{
		$cek= $this->session->userdata('status');
		$name= $this->session->userdata('username');
		if($cek=='patient'){
			$cek_login = $this->db->get_where('appointment',array('username' => $name, 'done' => 0));
			if($cek_login->num_rows()>0){
					$data['data'] = $this->db_model->GetPatientSlot($name);
					$this->load->view('p_patient',$data);
			}else{
					$this->load->view('p_patient_empty');
			}
		}
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
		if($cek=='patient'){
			$data['data'] = $this->db_model->GetUnbookedSlot();
			$this->load->view('p_patient_app',$data);
		}else{
			redirect("auth");
		}
	}

	public function appdate()
	{
		$tgl= $_POST['tgl'];
		$cek= $this->session->userdata('status');
		if($cek=='patient'){
			$data['data'] = $this->db_model->GetDateSlot($tgl);
			$this->load->view('p_patient_app',$data);
		}else{
			redirect("auth");
		}
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
				$res = $this->db_model->UpdateData('userp',$data_update,$where);
				if($res>=1){
					$this->session->set_flashdata('pesan','Change Password Success');
					redirect('auth');
				}
			}else{
				$this->session->set_flashdata('pesan','The Password Did not Match');
				redirect('patient/pass');
			}
		}



//make an appointment
		public function MakeApp($id){
			$name = $this->session->userdata('username');
	      $data_update = array(
	  				'username' => $name,
	  			);
	  		$where = array('id' => $id);
	  		$res = $this->db_model->UpdateData('appointment',$data_update,$where);
	  		if($res>=1){
	  			$this->session->set_flashdata('pesan','Appointmern already created!');
	  			redirect('patient');
	  		}
		}

		//cancel appointment
		public function CancelApp($id){
				$data_update = array(
						'username' => NULL,
					);
				$where = array('id' => $id);
				$res = $this->db_model->UpdateData('appointment',$data_update,$where);
				if($res>=1){
					$this->session->set_flashdata('pesan','Appointmern already created!');
					redirect('patient');
				}
		}

		public function pHistory()
		{
			$name= $this->session->userdata('username');
			$cek= $this->session->userdata('status');
			if($cek=='patient'){
				$data['data'] = $this->db_model->GetHistory($name);
				$this->load->view('p_patient_history',$data);
			}else{
				redirect("auth");
			}
		}
}
