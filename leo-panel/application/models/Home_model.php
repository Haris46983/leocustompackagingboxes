<?php 
Class Home_model extends CI_Model {
	
	public function __construct() { 
		parent::__construct(); 
		$this->load->database();
	}
	
	function get_totals(){
		$query = $this->db->get('user_accounts');
		$query = $query->num_rows();
		// echo "<pre>"; print_r($query); echo "</pre>";
		
		return $query;
	}
	
	function get_total_users(){
		$query = $this->db->where('type','user');
		$query = $this->db->get('user_accounts');
		$query = $query->num_rows();
		// echo "<pre>"; print_r($query); echo "</pre>";
		
		return $query;
	}
	
	function get_total_admins(){
		$query = $this->db->where('type','admin');
		$query = $this->db->get('user_accounts');
		$query = $query->num_rows();
		// echo "<pre>"; print_r($query); echo "</pre>";
		
		return $query;
	}
	
	function validate($username,$password){
		
		$this->db->where('username', $username);
		$this->db->where('password', $password);
		$this->db->where('type', 'user');
		$query = $this->db->get('user_accounts');
		$query = $query->result_array();
		// echo "<pre>"; print_r($query);die;

		return $query;
    
	}
	
	
}
?>