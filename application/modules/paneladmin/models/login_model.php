<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class login_model extends CI_Model {
	
	public function loginkontrol($data)
	{
		$kk = $this->xdb->query_array("SELECT * FROM admin WHERE username='".$data["user"]."' and password='".$data["password"]."' and is_active=1");
		if ($kk)
		{
			$session["userid"] = $kk[0]["id"];
			$session["username"] = $kk[0]["username"];
			$session["mail"] = $kk[0]["mail"];
			$session["0b59c1eca2014d487be844846"] = TRUE;
			$this->session->set_userdata($session);
			return $kk[0];
		}
		else
			return FALSE;
	}	
	
	
	
	
	

}