<?
	class Setting extends My_Controller{
		
		public function index(){
			$data['alert'] = $this->session->flashdata('success');
			$this->load->model('setting_model');
			$data['setting_data'] = $this->setting_model->index();
			$this->load->template('editsetting-html', $data);
		}
		
		public function update(){
			$this->form_validation->set_rules('app_name', 'Application Name', 'required');
			$this->form_validation->set_rules('org_name', 'Organization Name', 'required');
			if ($this->form_validation->run() == FALSE)
            {
				$this->load->model('setting_model');
				$data['setting_data'] = $this->setting_model->index();
				$this->load->template('editsetting-html',$data);
			}
			else{
				$config['upload_path']          = './images/';
				$config['allowed_types']        = 'gif|jpg|png';
				$config['file_name']            = 'logo.png';
				
				$this->upload->initialize($config);
				$this->upload->overwrite = true;
				if ( ! $this->upload->do_upload('logo'))	// no file uploaded or failed upload
				{
					$data['message'] = $this->upload->display_errors();
					$this->load->model('setting_model');
					$data['setting_data'] = $this->setting_model->index();
					$this->load->template('editsetting-html', $data);
				}
				else	// success
				{
					$app_name = $this->input->post('app_name');
					$org_name = $this->input->post('org_name');
					$data['info'] = $this->upload->data();
					$logo_name = $data['info']['file_name'];
					// echo $logo; echo "<pre>"; print_r($data['alert']);
					
					$this->load->model('setting_model');
					$query = $this->setting_model->update($app_name,$org_name,$logo_name);
					
					$this->session->set_flashdata('success', $query);
					redirect('settings');
					// $this->load->template('editsetting-html', $data);
				}
			}
			
			
			
				
			// $this->form_validation->set_rules('app_name', 'Application Name', 'required');
			// $this->form_validation->set_rules('org_name', 'Organization Name', 'required');
			// $this->form_validation->set_rules('logo', 'Organization Logo', 'required');
			// if ($this->form_validation->run() == FALSE)
            // {
				// $this->load->template('editsetting-html');
			// }
			// else{
				// $app_name = $this->input->post('app_name');
				// $org_name = $this->input->post('org_name');
				// $logo = $this->input->post('logo');
				// $config['upload_path']          = base_url().'images';
                // $config['allowed_types']        = 'gif|jpg|png';
                // $config['file_name']            = 'logo';
                // $config['overwrite']            = 'TRUE';
				// $this->load->library('upload', $config);
				 // $data = array('upload_data' => $this->upload->data());
                // if ( ! $this->upload->do_upload('logo'))
                // {
                        // $error = array('error' => $this->upload->display_errors());
						// echo $error;
						// die();
						// $this->load->template('editsetting-html', $error);

                        // $this->load->view('upload_form', $error);
                // }
                // else
                // {
                        // $data = array('upload_data' => $this->upload->data());
						// $this->load->template('editsetting-html', $data);

                        // $this->load->view('upload_success', $data);
                // }
				// die();
				// echo $logo;
                // echo "<pre>"; print_r($config);
				// die();
				// $this->load->model('category_model');
				// $query = $this->category_model->add($name);
				// echo $query;
				// $data['message'] = $query;
				// $this->session->set_flashdata('success', $query);
				// redirect('category');
				// $this->load->template('addcategory-html',$data);
			// }
		}
		
		public function viewcategory(){
			// if($name=="all"){
			if(!isset($_POST['name'])){
			$this->load->database();
			$query = $this->db->where('record_status','1')->order_by("id", "DESC")->get('category');
			$query = $query->result_array();
			// echo "<pre>"; print_r($query);
			}
			else{
				$name = $_POST['name'];
				$this->load->database();
				$query = $this->db->select('*')->from('category')->like('name',$name)->get();
				$query = $query->result_array();
				// echo "<pre>"; print_r($query);
			}
			$result = "";
			foreach($query as $q){
				$result .= "<tr><td><span class='ct_idd_".$q['id']."'>".$q['id']."</span></td><td><span class='ct_input_".$q['id']."'>".$q['name']."</span></td><td><a class='btn btn-success btn-xs ct_save_".$q['id']."' style='display:none;' onclick='categorySave(".$q['id'].")'>Save</a>&nbsp;<a class='btn btn-warning btn-xs ct_hide_".$q['id']."' onclick='categoryEdit(".$q['id'].")'>Edit</a>&nbsp;<a class='btn btn-danger btn-xs ct_hide_".$q['id']."' onclick='categoryDelete(".$q['id'].")'>Delete</a></td></tr>";
			}
			echo $result;
		}
		
		public function savecategory(){
			$id = $_POST['id'];
			$name = $_POST['name'];
			$this->load->model('category_model');
			$query = $this->category_model->edit($id,$name);
		}
		
		public function deletecategory(){
			$id = $_POST['id'];
			$this->load->model('category_model');
			$query = $this->category_model->delete($id);
		}
	}
?>