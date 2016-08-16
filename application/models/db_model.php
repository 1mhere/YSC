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
		$data = $this->db->query('select * from appointment where booked=1 and checkin ='.$where);
		return $data->result_array();
	}

	public function GetAllSlot(){
		$data = $this->db->query('select * from appointment');
		return $data->result_array();
	}

}
