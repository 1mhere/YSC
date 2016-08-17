<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Db_model extends CI_Model {

	public function getLogin($usr,$pwd){
		$u = $usr;
		$p = md5($pwd);
		$cek_login = $this->db->get_where('user',array('username' => $u, 'password'=> $p));
		if($cek_login->num_rows()>0){
			$ambil = $cek_login->row();
			if($u == $ambil->username && $p== $ambil->password){
				$sess = array(
						'username' => $ambil->username,
						'email' => $ambil->email,
						'phone' => $ambil->phone,
						'status' => $ambil->status,

					);
				$this->session->set_userdata($sess);
				if($ambil->status == 'doctor'){
					redirect("doctor");
				}else{
					redirect("patient");
				}
			}else{
				$this->session->set_flashdata('pesan','Username/password salah');
			}
		}else{
			$this->session->set_flashdata('pesan','Username/password salah');
		}
	}

	public function InsertData($tabelName,$data){
		$res = $this->db->insert($tabelName,$data);
		return $res;
	}

	public function UpdateData($tabelName,$data,$where){
		$res = $this->db->update($tabelName,$data,$where);
		return $res;
	}

	public function DeleteData($tabelName,$where){
		$res = $this->db->delete($tabelName,$where);
		return $res;
	}

	public function GetSlot($where=""){
		$data = $this->db->query('select * from appointment where username is not null and done=0 and checkin ='.$where.' order by skip,date,slot');
		return $data->result_array();
	}

	public function GetUnbookedSlot(){
		$data = $this->db->query('select * from appointment where username is NULL order by date,slot');
		return $data->result_array();
	}

//get unbooked slot by date
	public function GetDateSlot($tgl=""){
		$data = $this->db->query('select * from appointment where username is NULL and date="'.$tgl.'" order by date,slot');
		return $data->result_array();
	}

	public function GetPatientSlot($where=""){
		$data = $this->db->query('select * from appointment where username = "'.$where.'" and done = 0');
		return $data->result_array();
	}

	public function GetAllSlot(){
		$data = $this->db->query('select * from appointment order by date asc, slot asc');
		return $data->result_array();
	}

	public function GetAllSlotDate($tgl=""){
		$data = $this->db->query('select * from appointment where date="'.$tgl.'" order by date,slot');
		return $data->result_array();
	}

	public function GetHistory($where=""){
		$data = $this->db->query('select * from appointment where username = "'.$where.'" and done = 1');
		return $data->result_array();
	}


}
