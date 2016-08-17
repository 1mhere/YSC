<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Patient extends CI_Controller {

	public function index()
	{
		$cek= $this->session->userdata('status');
		$name= $this->session->userdata('username');
		if($cek=='patient'){
			$data['data'] = $this->db_model->GetPatientSlot($name);
			$this->load->view('p_patient',$data);
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

		public function GetSlot($where=""){
			$data = $this->db->query('select * from appointment where booked=1 and checkin ='.$where);
			return $data->result_array();
		}

//make an appointment
		public function MakeApp($id){
			$name = $this->session->userdata('username');
	      $data_update = array(
	  				'username' => $name,
						'booked' => 1,
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
				$where = array('id' => $id);
					$res= $this->db_model->DeleteData('appointment',$where);
				if($res>=1){
					$this->session->set_flashdata('pesan','Appointment already cancelled');
					redirect('patient/kosong');
				}
		}
}
