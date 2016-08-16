<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
  public function __construct(){
    parent::__construct();
    $this->load->model('db_model');
  }

	public function index()   //login
	{
			$cek = $this->session->userdata('username');
      if(!empty($cek)){ //jika pernah login
  			$st = $this->session->userdata('status');
  			if($st == 'doctor'){
  				redirect("doctor");
  			}else{
  				redirect("patient");
  			}
  		}
      	$this->load->view('p_login');
	}

  public function logout(){
		$cek= $this->session->userdata('username');
		if(empty($cek))
			header("location:".base_url()); //redirect
		else{
			$this->session->sess_destroy();
			header("location:".base_url());
		}
	}

  public function register()
  {
        $this->load->view('p_register');
  }

  public function do_insert(){
		$name = $_POST['username'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
    $password = $_POST['password'];
    $cek_login = $this->db->get_where('user',array('username' => $name));
    if($cek_login->num_rows()==0){
    		$data_insert = array(
    				'username' => $name,
    				'email' => $email,
    				'phone' => $phone,
            'password' => md5($password),
            'status' => 'patient'
        );
    		$res = $this->db_model->InsertData('user',$data_insert);
    		if($res>0){
          $this->session->set_userdata($data_insert);
    			$this->session->set_flashdata('pesan','Add User Success');
    			redirect('patient/kosong');
    		}else{
          $this->session->set_flashdata('pesan','Add User Fail');
    			redirect('auth/register');
        }
    }else {
      $this->session->set_flashdata('pesan','Username exist');
      redirect('auth/register');
    }
	}

}
