<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Doctor extends CI_Controller {

	public function index()
	{
		$cek= $this->session->userdata('status');
		if($cek=='doctor')
			$this->load->view('p_doctor');
		else{
			redirect("auth");
		}
	}

	public function pass()
	{
		$cek= $this->session->userdata('username');
		if($cek=='Doctor')
			$this->load->view('p_doctor_pass');
		else
			redirect("auth");
	}

	public function list_uncheck()
	{
		$cek= $this->session->userdata('username');
		if($cek=='Doctor')
			$this->load->view('p_doctor_list_uncheck');
		else
			redirect("auth");
	}

	public function list_check()
	{
		$cek= $this->session->userdata('username');
		if($cek=='Doctor')
			$this->load->view('p_doctor_list_check');
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
	      redirect('doctor/pass');
	    }
		}

		//add slot
		public function addslot(){
			$tgl = $_POST['tgl'];
			$slot = $_POST['slot'];
			$cek = $this->db->get_where('appointment',array('date' => $tgl , 'slot' => $slot));
			if($cek->num_rows()==0){
					$data_insert = array(
							'date' => $tgl,
							'slot' => $slot,
							'checkin' => false,
					);
					$res = $this->db_model->InsertData('appointment',$data_insert);
					if($res>0){
						$this->session->set_flashdata('pesan','Add Slot Success');
						redirect('doctor');
					}else{
						$this->session->set_flashdata('pesan','Add User Fail');
						redirect('doctor');
					}
			}else {
				$this->session->set_flashdata('pesan','Slot exist');
				redirect('doctor');
			}
		}
}
