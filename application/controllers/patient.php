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

	public function do_insert(){
		$name = $_POST['username'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
    $password = $_POST['password'];
    if($name != "" and $password != ""){
      $cek_login = $this->db->get_where('userp',array('username' => $name));
      if($cek_login->num_rows()==0){
          $data_insert = array(
              'username' => $name,
              'email' => $email,
              'phone' => $phone,
              'password' => md5($password),
              'status' => 'patient',
          );
          $res = $this->db_model->InsertData('userp',$data_insert);
          if($res>0){
            $this->session->set_userdata($data_insert);
            $this->session->set_flashdata('pesan','Add User Success');
            redirect('patient/kosong');
          }else{
            $this->session->set_flashdata('pesan','Add User Fail');
            redirect('auth/register_patient');
          }
      }else {
        $this->session->set_flashdata('pesan','Username exist');
        redirect('auth/register_patient');
      }
    }else{
      $this->session->set_flashdata('pesan','Invalid input');
      redirect('auth/register_patient');
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

	public function instruction()
	{
		$cek= $this->session->userdata('status');
		if($cek=='patient')
			$this->load->view('p_patient_instruction');
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

	public function setDoc($doc)
	{
		$cek= $this->session->userdata('status');

		if($cek=='patient'){
			$data['data'] = $this->db_model->GetUnbookedSlot($doc);
			$data_insert = array(
					'username' => $this->session->userdata('username'),
					'email' => $this->session->userdata('email'),
					'phone' => $this->session->userdata('phone'),
					'password' => $this->session->userdata('phone'),
					'status' => 'patient',
					'doctor' => $doc,
			);
			$this->session->set_userdata($data_insert);
			$this->load->view('p_patient_app',$data);
		}else{
			redirect("auth");
		}
	}

	public function showAllDateChosenDoc()
	{
		$cek= $this->session->userdata('status');
		$doc= $this->session->userdata('doctor');
		if($cek=='patient'){
			$data['data'] = $this->db_model->GetUnbookedSlot($doc);
			$this->load->view('p_patient_app',$data);
		}else{
			redirect("auth");
		}
	}

	public function appdate()
	{
		$tgl= $_POST['tgl'];
		$cek= $this->session->userdata('status');
		$doc= $this->session->userdata('doctor');

		if($cek=='patient'){
			$data['data'] = $this->db_model->GetDateSlot($tgl,$doc);
			$this->load->view('p_patient_app',$data);
		}else{
			redirect("auth");
		}
	}

	public function doctorExpList()
	{
		$exp= $_POST['exp'];
		$cek= $this->session->userdata('status');

		if($cek=='patient'){
			$data['data'] = $this->db_model->GetDoctorExp($exp);
			$this->load->view('p_patient_doctorlist',$data);
		}else{
			redirect("auth");
		}
	}

	public function doctorList()
	{
		$cek= $this->session->userdata('status');
		if($cek=='patient'){
			$data['data'] = $this->db_model->GetDoctor();
			$this->load->view('p_patient_doctorlist',$data);
		}else{
			redirect("auth");
		}
	}

	//edit password
		public function do_update(){
			$username= $this->session->userdata('username');
			$newpass= $_POST['newpass'];
			$confirm = $_POST['confirm'];

			if($newpass != ""){
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
					$this->session->set_flashdata('pesan','Failed : The Password Did not Match');
					redirect('patient/pass');
				}
			}else{
				$this->session->set_flashdata('pesan','Failed : The Password cannot be empty');
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
	  			$this->session->set_flashdata('pesan','Appointment already created!');
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
