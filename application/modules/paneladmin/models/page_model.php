<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class page_model extends CI_Model {

    public function TermSave($data,$TermType=1)
    {
    	$veri["term_type"] 	= $TermType;
    	$veri["name"] 		= $data["name"];
    	$veri["description"]= $data["description"];
    	$veri["keywords"] 	= $data["keywords"];
    	$veri["parent"] 	= $data["parent"];
    	$veri["count"] 		= 0;
    	$veri["is_active"] 	= 1;
    	
    	$data["slug"] == "" ? $veri["slug"] = url_title($data["name"]) : $veri["slug"] = $data["slug"];

		if($this->db->insert("terms",$veri)) 
			return $this->db->insert_id();
		else
			return false;
    }






}