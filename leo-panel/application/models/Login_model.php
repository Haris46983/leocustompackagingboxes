<?php
class Login_model extends CI_Model{
	
	function __construct()
	{
		parent::__construct();
		
		$this->load->database();
	}
	
	function index(){
		
		$query = $this->db->get('setting');
		$query = $query->result_array();
		return $query;
	}
	
	function validate($username,$password){
		
		$this->db->where('username', $username);
		$this->db->where('password', $password);
		
		$query = $this->db->get('user_accounts');
		$query = $query->result_array();
		// echo "<pre>"; print_r($query);die;

		return $query;
    
	}
	
	function update_password($current_password,$new_password,$confirm_new_password){
		
		$password = $this->db->where('id',$_SESSION['id'])->where('type',$_SESSION['role'])->get('user_accounts');
		$password = $password->result_array();
		// echo "<pre>"; print_r($password);die;
		
		if($password[0]['password']!=$current_password){
			return "You have entered wrong current password. Please try again";
		}
		elseif($new_password!=$confirm_new_password){
			return "Your new password and confirm new password do not match. Please try again.";
		}
		else{
			
			$this->db->query("UPDATE user_accounts SET password='$new_password' WHERE id='".$_SESSION['id']."' AND type='".$_SESSION['role']."'");
			return "Password updated successfully";
		}
		
	}
}
?>