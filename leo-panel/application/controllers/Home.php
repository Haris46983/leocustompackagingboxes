<?
class Home extends My_Controller{
	private $secret_key = 'ubqari123';
	
	function __construct()
	{
		parent::__construct();
		$this->load->model(array('home_model'));
		$this->load->database();
		$this->load->library("JWT");
	}
	
	public function index(){
		
		if(!isset($_SESSION['role'])){
			redirect('login');
			exit;
		}
		if(isset($_SESSION['role']) && $_SESSION['role']=="admin"){
			
			$data['total'] = $this->home_model->get_totals();
			$data['total_users'] = $this->home_model->get_total_users();
			$data['total_admin'] = $this->home_model->get_total_admins();
			$this->load->template('home-html',$data);
		
		} // admin home ends here
		elseif(isset($_SESSION['role']) && $_SESSION['role']=="user"){
			
			$this->load->template('user-home-html');
		
		} // admin home ends here
	}
	
	public function generate_token(){
		$this->load->library("JWT");
		
		$username = 'haris';
		$password = 'admin';
		$CONSUMER_SECRET = 'ubqari123';
		
		echo $this->jwt->encode(array(
		  'username'=>$username,
		  'password'=>$password,
		  'issuedAt'=>date(DATE_ISO8601, strtotime("now")),
		  
		), $CONSUMER_SECRET);
		
		/*
		eyJ0eXAiOiJqd3QiLCJhbGciOiJIUzI1NiJ9.eyJ1c2VybmFtZSI6ImhhcmlzIiwicGFzc3dvcmQiOiJhZG1pbiIsImlzc3VlZEF0IjoiMjAxOC0xMi0yN1QyMTo0ODoyNSswMTAwIn0.MFmT8Cvxgx0Yc3cZ7uyYH3zcVMyo_GytAJIqM1VBHyQ
		*/
		
		// $CONSUMER_KEY = 'key1234';
		// $CONSUMER_TTL = 100;
		/* echo $this->jwt->encode(array(
		  'consumerKey'=>$CONSUMER_KEY,
		  'userId'=>$user_id,
		  'issuedAt'=>date(DATE_ISO8601, strtotime("now")),
		  // 'ttl'=>$CONSUMER_TTL
		), $CONSUMER_SECRET); */
		
		/* $jwt = 'eyJ0eXAiOiJqd3QiLCJhbGciOiJIUzI1NiJ9.eyJjb25zdW1lcktleSI6ImtleTEyMzQiLCJ1c2VySWQiOiIxIiwiaXNzdWVkQXQiOiIyMDE4LTEyLTI3VDIwOjMwOjM2KzAxMDAiLCJ0dGwiOjEwMH0.ztKosJOIyZgW09c_LItRk2TLGM6vwcFyGsj0Br0geaA';
		// $jwt = 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJzdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkpvaG4gRG9lIiwiaWF0IjoxNTE2MjM5MDIyfQ.cZuKPh3VGWOxCgPZyBfv-nLLLHUwNn1IMsznRqnuBF8';
		
		$decode = $this->jwt->decode($jwt,$CONSUMER_SECRET);
		echo "<pre>"; print_r($decode); echo "</pre>";
		echo date('Y-m-d H:i:s',strtotime($decode->issuedAt));
		echo "<br>";
		echo date('Y-m-d H:i:s');
		if (date('Y-m-d H:i:s') > date('Y-m-d H:i:s',strtotime($decode->issuedAt))) { echo "<br>Expired!<br>"; }
		die; */
	}
	
	function user_login(){
		if(count($_POST)>0){
			if(isset($_POST['jwt']) && $_POST['jwt'] != ''){
				// echo "<pre>"; print_r($_POST); echo "</pre>";
				// $result = json_encode($_POST);
				
				try {
					$decode = $this->jwt->decode($_POST['jwt'], $this->secret_key);
					// echo "<pre>"; print_r($decode); echo "</pre>";
				}
				catch(Exception $e) {
					$result['status'] = 'failed';
					$result['message'] = $e->getMessage();
					echo json_encode($result);
					exit;
				}
				
				if (date('Y-m-d H:i:s',strtotime("-15 minutes")) > date('Y-m-d H:i:s',strtotime($decode->issuedAt))){
					$result['status'] = 'failed';
					$result['message'] = "Request data expired.";
					echo json_encode($result);
				}
				else{
					// print_r($decode);
					if(!isset($decode->username) || $decode->username == ''){
						$result['status'] = 'failed';
						$result['message'] = "Username field required.";
						echo json_encode($result);
					}
					elseif(!isset($decode->password) || $decode->password == ''){
						$result['status'] = 'failed';
						$result['message'] = "Password field required.";
						echo json_encode($result);
					}
					else{
						$username = $decode->username;
						$password = $decode->password;
						$password = md5($password);
						
						$query = $this->home_model->validate($username,$password);
						if(!$query){
							$result['status'] = 'failed';
							$result['message'] = 'Invalid Username or Password';
							echo json_encode($result);
						}
						else{
							$result['status'] = 'success';
							$result['user_id'] = $query[0]['id'];
							$result['user_name'] = $query[0]['name'];
							$result['token'] = $this->jwt->encode($result, $this->secret_key);
							
							echo json_encode($result);
						}
					}
				}
			}
			else{
				$result['status'] = 'failed';
				$result['message'] = "Empty data sent.";
				echo json_encode($result);
			}
		}
		else{
			$result['status'] = 'failed';
			$result['message'] = "No data sent";
			echo json_encode($result);
		}
	}
	
}
?>