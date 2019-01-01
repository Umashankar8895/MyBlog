<?php
class Loginmodel extends CI_Model
{
	public function login_valid($username,$password)
	{
		//$this->load->database();
		//$password=md5($password);
		$q=$this->db->where(['uname'=>$username,'pword'=>$password])->get('users');
		if($q->num_rows()){
			//return TRUE;
			return $q->row()->id;
		}else {
			return FALSE;

		}
	}
}
?>