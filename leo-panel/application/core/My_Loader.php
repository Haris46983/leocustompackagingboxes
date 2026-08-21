<?
	class My_Loader extends CI_Loader{
		public function template($template_name, $vars = array(), $return = FALSE){
			
			$header = "templates/header";
			
			if(isset($_SESSION['role'])){
				if($_SESSION['role']=="user"){
					$header = "templates/user_header";
				}
			}
			
			if($return):
			$content  = $this->view($header, $vars, $return);
			$content .= $this->view($template_name, $vars, $return);
			$content .= $this->view('templates/footer', $vars, $return);
			return $content;
			else:
				$this->view($header, $vars);
				$this->view($template_name, $vars);
				$this->view('templates/footer', $vars);
			endif;
		}
	}
?>