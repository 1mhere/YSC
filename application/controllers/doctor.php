<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Doctor extends CI_Controller {

	public function index()
	{
		$cek= $this->session->userdata('status');
		$doc= $this->session->userdata('username');
		if($cek=='doctor'){
			$data['data'] = $this->db_model->GetAllSlot($doc);
			$this->load->view('p_doctor',$data);
		}else{
			redirect("auth");
		}
	}

	public function pass()
	{
		$cek= $this->session->userdata('status');
		if($cek=='doctor')
			$this->load->view('p_doctor_pass');
		else
			redirect("auth");
	}

	public function list_uncheck()
	{
		$cek= $this->session->userdata('status');
		$doc= $this->session->userdata('username');
		if($cek=='doctor'){
				$data['data'] = $this->db_model->GetSlot(0,$doc);
				$this->load->view('p_doctor_list_uncheck',$data);
		}else
			redirect("auth");
	}

	public function list_check()
	{
		$cek= $this->session->userdata('status');
		$doc= $this->session->userdata('username');
		if($cek=='doctor'){
				$data['data'] = $this->db_model->GetSlot(1,$doc);
				$this->load->view('p_doctor_list_check',$data);
		}else
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
	  		$res = $this->db_model->UpdateData('userp',$data_update,$where);
	  		if($res>=1){
	  			$this->session->set_flashdata('pesan','Change Password Success');
	  			redirect('auth');
	  		}
	    }else{
				$this->session->set_flashdata('pesan','The Password Did not Match');
	      redirect('doctor/pass');
	    }
		}

		//add slot
		public function addslot(){
			$tgl = $_POST['tgl'];
			$slot = $_POST['slot'];

			if ($tgl != "" ){
				$cek = $this->db->get_where('appointment',array('date' => $tgl , 'slot' => $slot));
				if($cek->num_rows()==0){
						$data_insert = array(
								'date' => $tgl,
								'slot' => $slot,
								'doctor' => $this->session->userdata('username'),
								'checkin' => false,
						);
						$res = $this->db_model->InsertData('appointment',$data_insert);
						if($res>0){
							$this->session->set_flashdata('pesan','Add Slot Success');
							redirect('doctor');
						}else{
							$this->session->set_flashdata('pesan','Add Slot Fail');
							redirect('doctor');
						}
				}else {
					$this->session->set_flashdata('pesan','Slot exist');
					redirect('doctor');
				}
			}else{
				$this->session->set_flashdata('pesan','Invalid Input');
				redirect('doctor');
			}

		}

		public function do_delete($id){
				$where = array('id' => $id);
					$res= $this->db_model->DeleteData('appointment',$where);
				if($res>=1){
					$this->session->set_flashdata('info','Delete data success');
					redirect('doctor');
				}
		}

		public function done($id){
			$data_update = array(
					'Done' => 1
				);
			$where = array('id' => $id);
			$res = $this->db_model->UpdateData('appointment',$data_update,$where);
			if($res>=1){
				$this->session->set_flashdata('pesan','Patient Done!');
				redirect('doctor/list_check');
			}
		}

		public function not_show($id){
			$cek = $this->db->get_where('appointment',array('id' => $id));
			$ambil = $cek->row();
	      $data_update = array(
	  				'checkin' => 0,
						'skip' => $ambil->skip + 1,
	  			);
	  		$where = array('id' => $id);
	  		$res = $this->db_model->UpdateData('appointment',$data_update,$where);
	  		if($res>=1){
	  			$this->session->set_flashdata('pesan','Patient kembali ke unchecked list');
	  			redirect('doctor/list_check');
	  		}
		}

		public function check_in($id){
	      $data_update = array(
	  				'checkin' => 1
	  			);
	  		$where = array('id' => $id);
	  		$res = $this->db_model->UpdateData('appointment',$data_update,$where);
	  		if($res>=1){
	  			$this->session->set_flashdata('pesan','Patient kembali ke unchecked list');
	  			redirect('doctor/list_uncheck');
	  		}
		}

		public function skip($id){
				$cek = $this->db->get_where('appointment',array('id' => $id));
				$ambil = $cek->row();
				$data_update = array(
						'skip' => $ambil->skip + 1,
					);
				$where = array('id' => $id);
				$res = $this->db_model->UpdateData('appointment',$data_update,$where);
				if($res>=1){
					$this->session->set_flashdata('pesan','Patient kembali ke unchecked list');
					redirect('doctor/list_uncheck');
				}
		}

		public function appdate()
		{
			$tgl= $_POST['tgl'];
			$cek= $this->session->userdata('status');
			if($cek=='doctor'){
				$data['data'] = $this->db_model->GetAllSlotDate($tgl);
				$this->load->view('p_doctor',$data);
			}else{
				redirect("auth");
			}
		}

}
