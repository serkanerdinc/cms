<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class login_model extends CI_Model {
	
	public function loginkontrol($data)
	{
		$query = $this->db->query("SELECT * FROM admin WHERE username='".$data["user"]."' and password='".$data["password"]."' and is_active=1");
		$kk = $query->result_array();
        if ($kk)
		{
			$session["userid"] = $kk[0]["userid"];
			$session["username"] = $kk[0]["username"];
			$session["mail"] = $kk[0]["email"];
			$session["8f950a73d74a9e8fafdcebc961d7b14c"] = TRUE;
			$this->session->set_userdata($session);
			return $kk[0];
		}
		else
			return FALSE;
	}	
	
	
	
	
	

}