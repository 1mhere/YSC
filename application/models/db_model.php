<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Db_model extends CI_Model {

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

	public function GetSlot($where="",$doc=""){
		$data = $this->db->query('select * from appointment where username is not null and done=0 and checkin ='.$where.' and doctor = "'.$doc.'" order by skip,date,slot');
		return $data->result_array();
	}

	public function GetUnbookedSlot($doc){
		$data = $this->db->query('select * from appointment where username is NULL and doctor = "'.$doc.'" order by date,slot');
		return $data->result_array();
	}

//get unbooked slot by date
	public function GetDateSlot($tgl=""){
		$data = $this->db->query('select * from appointment where username is NULL and date="'.$tgl.'" order by date,slot');
		return $data->result_array();
	}

	public function GetDoctor(){
		$data = $this->db->query('select * from userp where status = "doctor" order by expertise');
		return $data->result_array();
	}

	public function GetDoctorExp($exp){
		$data = $this->db->query('select * from userp where status = "doctor" and expertise = "'.$exp.'" ');
		return $data->result_array();
	}

	public function GetPatientSlot($where=""){
		$data = $this->db->query('select * from appointment where username = "'.$where.'" and done = 0');
		return $data->result_array();
	}

	public function GetAllSlot($doc=""){
		$data = $this->db->query('select * from appointment where doctor = "'.$doc.'" order by date asc, slot asc');
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
