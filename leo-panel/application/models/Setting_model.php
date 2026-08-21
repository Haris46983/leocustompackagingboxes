<?php 
Class Setting_model extends CI_Model {
	
	function index(){
		$this->load->database();
		$query = $this->db->get('setting');
		$query = $query->result_array();
		// echo "<pre>"; print_r($query);
		return $query;
	}

	function update($app_name,$org_name,$logo_name){
		$this->load->database();
		$data = array(
        'app_name' => $app_name,
		'org_name' => $org_name,
		'logo' => $logo_name,
		);

		$this->db->update('setting', $data);
		return "Settings updated successfully. Changes will apply next time you login the application.";
	}
} 
?>