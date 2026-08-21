<?
	class Site_setting extends My_Controller{
		
		public function index(){
			$data['alert'] = $this->session->flashdata('success');
			$this->load->model('site_setting_model');
			$data['setting_data'] = $this->site_setting_model->index();
			$this->load->template('edit_site_setting-html', $data);
		}
		
		public function update_site_settings(){
			$this->form_validation->set_rules('email', 'Email', 'required');
			
			if ($this->form_validation->run() == FALSE)
            {
				$this->load->model('site_setting_model');
				$data['setting_data'] = $this->site_setting_model->index();
				$this->load->template('edit_site_setting-html', $data);
			}
			else{
				
				$header = $this->input->post('header');
				$banner = $this->input->post('banner');
				$ad_s1 = $this->input->post('ad_s1');
				$ad_s2 = $this->input->post('ad_s2');
				$ad_s3 = $this->input->post('ad_s3');
				$ad_r1 = $this->input->post('ad_r1');
				$ad_r2 = $this->input->post('ad_r2');
				$ad_r3 = $this->input->post('ad_r3');
				
				$config['upload_path']          = '../images/';
				$config['allowed_types']        = 'gif|jpg|png|jpeg';
				$this->upload->initialize($config);
				
				if ( ! $this->upload->do_upload('header'))	// no file uploaded or failed upload
				{
					$data['message'] = $this->upload->display_errors();
					$header = $this->input->post('old_header');
				}
				else	// success
				{
					$data['info'] = $this->upload->data();
					$header = $data['info']['file_name'];
				}
				
				if ( ! $this->upload->do_upload('banner'))	// no file uploaded or failed upload
				{
					$data['message'] = $this->upload->display_errors();
					$banner = $this->input->post('old_banner');
				}
				else	// success
				{
					$data['info'] = $this->upload->data();
					$banner = $data['info']['file_name'];
				}
				
				if ( ! $this->upload->do_upload('ad_s1'))	// no file uploaded or failed upload
				{
					$data['message'] = $this->upload->display_errors();
					$ad_s1 = $this->input->post('old_ad_s1');
				}
				else	// success
				{
					$data['info'] = $this->upload->data();
					$ad_s1 = $data['info']['file_name'];
				}
				
				if ( ! $this->upload->do_upload('ad_s2'))	// no file uploaded or failed upload
				{
					$data['message'] = $this->upload->display_errors();
					$ad_s2 = $this->input->post('old_ad_s2');
				}
				else	// success
				{
					$data['info'] = $this->upload->data();
					$ad_s2 = $data['info']['file_name'];
				}
				
				if ( ! $this->upload->do_upload('ad_s3'))	// no file uploaded or failed upload
				{
					$data['message'] = $this->upload->display_errors();
					$ad_s3 = $this->input->post('old_ad_s3');
				}
				else	// success
				{
					$data['info'] = $this->upload->data();
					$ad_s3 = $data['info']['file_name'];
				}
				
				if ( ! $this->upload->do_upload('ad_r1'))	// no file uploaded or failed upload
				{
					$data['message'] = $this->upload->display_errors();
					$ad_r1 = $this->input->post('old_ad_r1');
				}
				else	// success
				{
					$data['info'] = $this->upload->data();
					$ad_r1 = $data['info']['file_name'];
				}
				
				if ( ! $this->upload->do_upload('ad_r2'))	// no file uploaded or failed upload
				{
					$data['message'] = $this->upload->display_errors();
					$ad_r2 = $this->input->post('old_ad_r2');
				}
				else	// success
				{
					$data['info'] = $this->upload->data();
					$ad_r2 = $data['info']['file_name'];
				}
				
				if ( ! $this->upload->do_upload('ad_r3'))	// no file uploaded or failed upload
				{
					$data['message'] = $this->upload->display_errors();
					$ad_r3 = $this->input->post('old_ad_r3');
				}
				else	// success
				{
					$data['info'] = $this->upload->data();
					$ad_r3 = $data['info']['file_name'];
				}
				
				$this->load->model('site_setting_model');
				$query = $this->site_setting_model->update($this->input->post(),$header,$banner,$ad_s1,$ad_s2,$ad_s3,
				$ad_r1,$ad_r2,$ad_r3);
				
				$this->session->set_flashdata('success', $query);
				redirect('site_setting');
			}
		}
	}
?>