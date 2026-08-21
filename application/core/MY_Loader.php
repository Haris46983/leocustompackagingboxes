<?php
	class MY_Loader extends CI_Loader{
		public function template($template_name, $vars = array(), $return = FALSE){
			
			/* if(isset($_SESSION['type']) && $_SESSION['type']=="doctor"){
				$header = "common/doctor_header-html";
			}
			elseif(isset($_SESSION['type']) && $_SESSION['type']=="patient"){
				$header = "common/patient_header-html";
			} */
			$header = "common/header-html";
			
			$footer = "common/footer-html";
			
			if($return):
			$content  = $this->view($header, $vars, $return);
			$content .= $this->view($template_name, $vars, $return);
			$content .= $this->view($footer, $vars, $return);
			return $content;
			else:
				$this->view($header, $vars);
				$this->view($template_name, $vars);
				$this->view($footer, $vars);
			endif;
		}
		
	}
?>