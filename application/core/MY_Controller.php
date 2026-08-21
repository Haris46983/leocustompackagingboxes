<?php
	class MY_Controller extends CI_Controller {
		
		// public $variable = array();
		public $site_settings = array();
		// public $patients = array();
		// public $physicians = array();
		// public $static_pages = array();
			
		function __construct()
		{
			parent::__construct();
			
			// echo "<pre>"; print_r($_SESSION); echo "</pre>";
			
			// $url = $this->uri->segment(1);
			
			//Setting Page restriction role-wise
			// $pages_not_for_doctor = array("patient-messages-list","patient-chat","my-patient-profile");
			
			// $pages_not_for_patient = array("doctor-messages-list","doctor-chat","my-profile");
			
			// if(isset($_SESSION['type'])){
				// if($_SESSION['type']=="doctor"){
					// if(in_array($url,$pages_not_for_doctor))
						// redirect(base_url('dashboard'));
				// }
				// if($_SESSION['type']=="patient"){
					// if(in_array($url,$pages_not_for_patient))
						// redirect(base_url('dashboard'));
				// }
			// }
			
			$this->load->model('home_model');
			$site_settings = $this->home_model->get_site_setting();
			$this->site_settings = $site_settings;
			// $this->patients = $this->home_model->get_sub_pages_by_service_page_by_id('1'); 
			// $this->physicians = $this->home_model->get_sub_pages_by_service_page_by_id('2');
			// $this->static_pages = $this->home_model->get_all_static_pages(); 
		}
	}
?>