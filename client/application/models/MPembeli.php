<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MPembeli extends CI_Model {

 public function view_all(){
 	return $this->db->get('agen');
 }
 
 function select_where($table,$where){		
		return $this->db->get_where($table,$where);
	}

}