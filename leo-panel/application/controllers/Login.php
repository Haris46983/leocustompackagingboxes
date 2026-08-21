<?php
	class Login extends My_Controller{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model(array('login_model','home_model'));
			$this->load->database();
		}
		
		public function index(){
			
			$data['success_message'] = $this->session->flashdata('success_message');
			
			if(!isset($_SESSION['role'])){
				$this->load->view('login-html',$data);
			}
			else{
				redirect('home');
				exit;
			}
		}
		
		public function auth(){
			
			$this->form_validation->set_rules('username', 'Username', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required');
			if ($this->form_validation->run() == FALSE)
            {
                // echo "test"; die;
				$data['error_message'] = validation_errors();
				$this->load->view('login-html',$data);
			}
			else{
			 //   echo "testb"; die;
				$username = $this->input->post('username');
				$password = $this->input->post('password');
				$password = md5($password);
				// echo $username.$password;
				
				$query = $this->login_model->validate($username,$password);
				// echo "<pre>"; print_r($query); echo "</pre>";

				if(!$query){
					$data['error_message'] = "Invalid Username or Password";
					$this->load->view('login-html',$data);
				}
				else{
					// echo "<pre>"; print_r($query); echo "</pre>";
					// die;
					
					$_SESSION['id'] = $query[0]['id'];
					$_SESSION['name'] = $query[0]['name'];
					$_SESSION['role'] = $query[0]['type'];
					
					redirect('home');
					exit;
				}
			}
			
		}
		
		public function logout(){
			session_destroy();
			echo "<script>window.top.location='".site_url('login')."'</script>";
		}
		
		public function ChangePassword(){
			$this->load->template('change_password-html');
			// echo "<pre>"; print_r($_SESSION);
		}
		
		public function UpdatePassword(){
			
			$this->form_validation->set_rules('c_pass', 'Current Password', 'required');
			$this->form_validation->set_rules('n_pass', 'New Password', 'required');
			$this->form_validation->set_rules('cn_pass', 'Confirm New Password', 'required');
			
			if ($this->form_validation->run() == FALSE)
            {
				$this->load->template('change_password-html');
			}
			else{
				$current_password = $this->input->post('c_pass');
				$current_password = md5($current_password);
				$new_password = $this->input->post('n_pass');
				$new_password = md5($new_password);
				$confirm_new_password = $this->input->post('cn_pass');
				$confirm_new_password = md5($confirm_new_password);
				// echo $username.$password;
				
				$query = $this->login_model->update_password($current_password,$new_password,$confirm_new_password);
				$data['message'] = $query;
				$this->load->template('change_password-html',$data);
			}
		}
		
		public function resetpassword(){
			$this->form_validation->set_rules('email', 'Email', 'required');
			
			if ($this->form_validation->run() == FALSE)
			{
				$data['reset_error'] = validation_errors();
				
				$this->load->view('login-html',$data);
			}
			else{
				
				$email_check = $this->login_model->check_email($_POST['email']);
				// echo "<pre>"; print_r($email_check);
				// die;
				
				if(!$email_check){
					
					$data['reset_error'] = "Your email is not registered with us.";
					
					$this->load->view('login-html',$data);
				}
				else{
					
					$details = $this->login_model->reset_password($_POST['email']);
					
					$to = $_POST['email'];
					$subject = "New Password";
					$message = '<html><body>';
					$message .= '<h4>Your password has been reset successfully.</h4>';
					$message .= "<p>Your new password is: ".$details['password']." </p>";
					$message .= "<p>We recommend you to change your password immediately after login.</p>";
					$message .= "<p>Note: Passwords are case-sensitive.</p>";
					$message .= '<p>Thank you for choosing us.</p>';
					
					$headers = "From: packingboxes.us@packingboxes.us \r\n";
					$headers .= 'Content-Type: text/html; charset=ISO-8859-1' . "\r\n";

					mail($to,$subject,$message,$headers);
					
					$this->session->set_flashdata('success_message', $details['alert']);
					
					redirect('login');
					
					exit;
				}
				
			}
		}
	}
?>