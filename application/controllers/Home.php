<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {
	
	function __construct()
	{
		parent::__construct();
		$this->load->model(array('home_model'));
		$this->load->database();
	}
	
	public function index()
	{
		$data['banners'] = $this->home_model->get_all_banners();
		// echo "<pre>"; print_r($data['banners']); echo "</pre>";
		
		$data['home_section_1'] = $this->home_model->get_home_section_1();
		// echo "<pre>"; print_r($data['home_section_1']); echo "</pre>";
		
		$data['home_section_2'] = $this->home_model->get_home_section_2();
		// echo "<pre>"; print_r($data['home_section_2']); echo "</pre>";
		
		$data['home_clients'] = $this->home_model->get_home_clients();
		// echo "<pre>"; print_r($data['home_clients']); echo "</pre>";
		
		$data['home_testimonials'] = $this->home_model->get_home_testimonials();
		// echo "<pre>"; print_r($data['home_testimonials']); echo "</pre>";

		$data['m_category'] = $this->home_model->get_all_main_category();
		// echo "<pre>"; print_r($data['home_section_2']); echo "</pre>";
		
		$data['namelinks_products'] = $this->home_model->get_namelinks_home();
//  		echo "<pre>"; print_r($data['namelinks_products']); echo "</pre>";

		$data['recent_blogs'] = $this->home_model->get_home_recent_blogs();
		// echo "<pre>"; print_r($data['recent_blogs']); echo "</pre>";
		
		$this->load->template('home-html',$data);
		
	}
	
	function submit_subscribe_form(){
		// echo "<pre>"; print_r($_POST); echo "</pre>";
		
		$this->form_validation->set_rules('email', 'Email', 'required');
		if ($this->form_validation->run() == FALSE){
			$this->session->set_flashdata('subscribe_form_alert', "Email Field is required.");
			redirect($_POST['return_url']);
		}
		else{
			$check = $this->home_model->check_subscribe_email($_POST['email']);
			if($check){
				$this->session->set_flashdata('subscribe_form_alert', "Email already exists.");
				redirect($_POST['return_url']);
			}
			else{
				$this->home_model->add_subscribe_emails($_POST['email']);
				$this->session->set_flashdata('subscribe_form_success', "Your have successfully subscribed to our newsletter.");
				redirect($_POST['return_url']);
			}
		}
	}
	
	function blog(){
		
		$start = $this->input->get("page");
		if (empty($start)){
			$start = 0;
		} else {
			$start = $start - 1;
		}
		
		$config["base_url"] = base_url('blog')."?";
		$config["first_url"] = base_url('blog');
		$config["total_rows"] = $this->home_model->get_all_blogs();
		$config["per_page"] = 10;
		
		$start = $start * $config["per_page"];
		$config['page_query_string'] = TRUE;
		$config['use_page_numbers'] = TRUE;
		$config['query_string_segment'] = "page";
		
		$this->load->library("pagination",$config);
		$data["pagination"] = $this->pagination->create_links();
		
		$data['data'] = $this->home_model->get_blogs($start,$config["per_page"]);
		// echo "<pre>"; print_r($data['data']); echo "</pre>";
		
		$data['recent_blogs'] = $this->home_model->get_recent_blogs();
		// echo "<pre>"; print_r($data['recent_blogs']); echo "</pre>";
		
		$data['meta_title'] = 'Blog';
		
		$data['meta_keywords'] = 'Blog';
		
		$data['meta_description'] = 'Blog';
		
		$this->load->template('blogs-html',$data);
	}
	
	function blog_post($seokey){
		
		$data['data'] = $this->home_model->get_blog_by_seokey($seokey);
		
		$data['recent_blogs'] = $this->home_model->get_recent_blogs();
		
		// echo "<pre>"; print_r($data['data']); echo "</pre>";
		
		$data['data'] = $data['data'][0];
		
		$data['meta_title'] = $data['data']['meta_title'];
	
		$data['meta_keywords'] = $data['data']['meta_keywords'];
		
		$data['meta_description'] = $data['data']['meta_description'];
		
		$this->load->template('blog_post-html',$data);
		
	}
	
	function check_page($seokey){
		$static_page = $this->home_model->get_static_page_by_seokey($seokey);
		$main_category = $this->home_model->get_main_category_by_seokey($seokey);
		$product_page = $this->home_model->get_product_by_seokey($seokey);
		$citywise = $this->home_model->get_citywise_by_seokey($seokey);
		if($product_page){
			$this->view_product_page($seokey);
		}
		elseif($static_page){
			$this->view_static_page($static_page[0]);
		}
		elseif($main_category){
			$this->main_category_page($seokey);
		}
		elseif($citywise){
			$this->citywise_category_page($seokey);
		}		
		else{
			show_404();
		}
	}
	
	function view_static_page($page_data){
		
		$data['data'] = $page_data;
		$data['meta_title'] = $page_data['meta_title'];
		$data['meta_keywords'] = $page_data['meta_keywords'];
		$data['meta_description'] = $page_data['meta_description'];
		
		$this->load->template('static_page-html',$data);
	}
	
	function main_category_page($seokey){
		
		$data['success'] = $this->session->flashdata('success');
		
		$data['data'] = $this->home_model->get_main_category_by_seokey($seokey);
		// echo "<pre>"; print_r($data['data']); echo "</pre>";
		
		if($data['data']){
		
			$start = $this->input->get("page");
			if (empty($start)){
				$start = 0;
			} else {
				$start = $start - 1;
			}
			
			$config["base_url"] = base_url($seokey)."?";
			$config["first_url"] = base_url($seokey);
			$config["total_rows"] = $this->home_model->get_all_sub_category_by_main_category_id($data['data']['id']);
			$config["per_page"] = 30;
			
			$start = $start * $config["per_page"];
			$config['page_query_string'] = TRUE;
			$config['use_page_numbers'] = TRUE;
			$config['query_string_segment'] = "page";
			
			$this->load->library("pagination",$config);
			$data["pagination"] = $this->pagination->create_links();
			
			$data['sub'] = $this->home_model->get_sub_category_by_main_category_id($data['data']['id'],$start,$config["per_page"]);
			// echo "<pre>"; print_r($data['sub']); echo "</pre>";
			
			$data['all_main_category'] = $this->home_model->get_all_main_category();
			$data['all_products'] = $this->home_model->get_all_products();
			$data['meta_title'] = $data['data']['meta_title'];
		
			$data['meta_keywords'] = $data['data']['meta_keywords'];
			
			$data['meta_description'] = $data['data']['meta_description'];
			
			$this->load->template('main_category_page-html',$data);
		}
		else{
			show_404();
		}
	}
	function citywise_category_page($seokey){
		
		$data['success'] = $this->session->flashdata('success');
		
		$data['data'] = $this->home_model->get_citywise_by_seokey($seokey);
		// echo "<pre>"; print_r($data['data']); echo "</pre>";
		
		if($data['data']){
		
			$start = $this->input->get("page");
			if (empty($start)){
				$start = 0;
			} else {
				$start = $start - 1;
			}
			
			$config["base_url"] = base_url($seokey)."?";
			$config["first_url"] = base_url($seokey);
// 			$config["total_rows"] = $this->home_model->get_citywise_by_products($data['data']['id']);
// 			echo "<pre>"; print_r($data['data']); echo "</pre>";
			$config["per_page"] = 30;
			
			$start = $start * $config["per_page"];
			$config['page_query_string'] = TRUE;
			$config['use_page_numbers'] = TRUE;
			$config['query_string_segment'] = "page";
			
			$this->load->library("pagination",$config);
			$data["pagination"] = $this->pagination->create_links();
			
			$data['sub'] = $this->home_model->get_citywise_by_products($data['data']['id']);
// 			echo "<pre>"; print_r($data['sub']); echo "</pre>"; die;
			
			$data['all_main_category'] = $this->home_model->get_all_main_category();
			$data['all_products'] = $this->home_model->get_all_products();
			$data['meta_title'] = $data['data']['meta_title'];
		
			$data['meta_keywords'] = $data['data']['meta_keywords'];
			
			$data['meta_description'] = $data['data']['meta_description'];
			
			$this->load->template('citywise_page-html',$data);
		}
		else{
			show_404();
		}
	}	
	function sub_category_page($seokey1,$seokey2){
		
		$data['success'] = $this->session->flashdata('success');
		
		$data['main_category'] = $this->home_model->get_main_category_by_seokey($seokey1);
		// echo "<pre>"; print_r($data['data']); echo "</pre>";


		
		if($data['main_category']){
			$data['data'] = $this->home_model->get_sub_category_by_seokey($seokey2);
			// echo "<pre>"; print_r($data['data']); echo "</pre>";
			
			if($data['data']){
				
				$start = $this->input->get("page");
				if (empty($start)){
					$start = 0;
				} else {
					$start = $start - 1;
				}
				
				$config["base_url"] = base_url($seokey1.'/'.$seokey2)."?";
				$config["first_url"] = base_url($seokey1.'/'.$seokey2);
				$config["total_rows"] = $this->home_model->get_all_products_by_sub_category_id($data['data']['id']);
				$config["per_page"] = 30;
				
				$start = $start * $config["per_page"];
				$config['page_query_string'] = TRUE;
				$config['use_page_numbers'] = TRUE;
				$config['query_string_segment'] = "page";
				
				$this->load->library("pagination",$config);
				$data["pagination"] = $this->pagination->create_links();
				
				$data['products'] = $this->home_model->get_products_by_sub_category_id($data['data']['id'],$start,$config["per_page"]);
				// echo "<pre>"; print_r($data['products']); echo "</pre>";
				
				$data['all_sub_category'] = $this->home_model->get_recent_sub_category_by_main_category_id($data['main_category']['id']);
	
        		$data['namelinks_category'] = $this->home_model->get_namelinks_category($data['data']['id']);
        // 		echo "<pre>"; print_r($data['data']['id']); echo "</pre>";
        						
				$data['meta_title'] = $data['data']['meta_title'];
			
				$data['meta_keywords'] = $data['data']['meta_keywords'];
				
				$data['meta_description'] = $data['data']['meta_description'];
				
				$this->load->template('sub_category_page-html',$data);
				
			}
			else{
				show_404();
			}
		}
		else{
			show_404();
		}
	}
	
	function view_product_page($seokey){
		
		$data['data'] = $this->home_model->get_product_by_seokey($seokey);
		// echo "<pre>"; print_r($data['data']); echo "</pre>";
		
		$data['sub_category'] = $this->home_model->get_sub_category_by_product_id($data['data']['id']);
		// echo "<pre>"; print_r($data['sub_category']); echo "</pre>";
		
		$data['main_category'] = $this->home_model->get_main_category_by_sub_category_id($data['sub_category']['id']);
		// echo "<pre>"; print_r($data['main_category']); echo "</pre>";
		
		$data['related_products'] = $this->home_model->get_related_products($data['data']['id']);
		// echo "<pre>"; print_r($data['related_products']); echo "</pre>";

		$data['namelinks_products'] = $this->home_model->get_namelinks_products($data['data']['id']);
//  		echo "<pre>"; print_r($data['namelinks_products']); echo "</pre>";
		
		$data['rating'] = $this->home_model->get_product_total_rating($data['data']['id']);
		// echo "<pre>"; print_r($data['rating']); echo "</pre>";
		
		$data['all_reviews'] = $this->home_model->get_product_reviews($data['data']['id']);
		// echo "<pre>"; print_r($data['all_reviews']); echo "</pre>";
		
		$data['stock'] = $this->home_model->get_product_stock($data['data']['id']);
		// echo "<pre>"; print_r($data['stock']); echo "</pre>";
		
		$data['color'] = $this->home_model->get_product_color($data['data']['id']);
		// echo "<pre>"; print_r($data['color']); echo "</pre>";
		
		$data['meta_title'] = $data['data']['meta_title'];
		$data['meta_keywords'] = $data['data']['meta_keywords'];
		$data['meta_description'] = $data['data']['meta_description'];
		
		$this->load->template('product_page-html',$data);
		
	}
	
	function save_review(){
		// echo "<pre>"; print_r($_POST); echo "</pre>";die;
		
		$return_url = $_POST['return_url'];
		
		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('review', 'Review', 'required');
		$this->form_validation->set_rules('rating', 'Rating', 'required');
		
		if ($this->form_validation->run() == FALSE){
			$this->session->set_flashdata('rating_form_alert', validation_errors());
			redirect($return_url);
		}
		else{
			unset($_POST['return_url']);
			$this->home_model->add_review($_POST);
			$this->session->set_flashdata('rating_form_success', "Your review is successfully submitted!");
			redirect($return_url);
		}
	}
	public function quote_page()
	{

		$this->load->template('quote_page-html',$data);
		
	}	
	function request_quote(){
		// echo "<pre>"; print_r($_POST); echo "</pre>";die;
		
		$return_url = $_POST['return_url'];
		
		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('phone', 'Phone', 'required');
		$this->form_validation->set_rules('length', 'Length', 'required');
		$this->form_validation->set_rules('width', 'Width', 'required');
		$this->form_validation->set_rules('height', 'Height', 'required');
		$this->form_validation->set_rules('unit', 'Unit', 'required');
		$this->form_validation->set_rules('qty', 'Quantity 1', 'required');
		
		if ($this->form_validation->run() == FALSE){
			$this->session->set_flashdata('quote_form_alert', validation_errors());
			redirect($return_url);
		}
		else{
			
			//Email to user here
			$config['mailtype'] = 'html'; // or html
			$this->email->initialize($config);
			$this->email->to('info@leocustompackagingboxes.com');
			$this->email->from('quote@leocustompackagingboxes.com');
			$this->email->subject('New Request a Quote');
			$message = '<html><body>';
			$message .= '<h4>Name: <b>'.$_POST['name'].'</b></h4>';
			$message .= '<h4>Phone: <b>'.$_POST['phone'].'</b></h4>';
			$message .= '<h4>Email: <b>'.$_POST['email'].'</b></h4>';
			$message .= '<h4>Length: <b>'.$_POST['length'].'</b></h4>';
			$message .= '<h4>Width: <b>'.$_POST['width'].'</b></h4>';
			$message .= '<h4>Height: <b>'.$_POST['height'].'</b></h4>';
			$message .= '<h4>Unit: <b>'.$_POST['unit'].'</b></h4>';
			$message .= '<h4>Product: <b>'.$_POST['product'].'</b></h4>';
			$message .= '<h4>Stock: <b>'.$_POST['stock'].'</b></h4>';
			$message .= '<h4>Color: <b>'.$_POST['color'].'</b></h4>';
			$message .= '<h4>Quantity 1: <b>'.$_POST['qty'].'</b></h4>';
			$message .= '<h4>Quantity 2: <b>'.$_POST['qty2'].'</b></h4>';
			$message .= '<h4>Quantity 3: <b>'.$_POST['qty3'].'</b></h4>';
			
			$this->email->message($message);
			$this->email->send();
			// echo $this->email->print_debugger();
			//Email Ends here
			
			$this->session->set_flashdata('quote_form_success', "Your request quote is successfully submitted!");
			redirect($return_url);
		}
	}
    public function search()
    {
        // echo "<pre>"; print_r($_GET); echo "</pre>";

        if ($this->input->get()) {
            $params = $this->input->get(NULL, true);
            $keyword = $params["keyword"];
        } else {
            $keyword = "null";
        }

        $start = $this->input->get("page");
        if (empty($start)) {
            $start = 0;
        } else {
            $start = $start - 1;
        }

        $config["base_url"] = base_url('search') . "?keyword=" . $keyword;
        $config["first_url"] = base_url('search') . "?keyword=" . $keyword;
        $config["total_rows"] = $this->home_model->get_total_products_for_search($keyword);
        $config["per_page"] = 21;

        $start = $start * $config["per_page"];
        $config['page_query_string'] = TRUE;
        $config['use_page_numbers'] = TRUE;
        $config['query_string_segment'] = "page";

        $this->load->library("pagination", $config);
        $data["pagination"] = $this->pagination->create_links();

        $data['data'] = $this->home_model->get_products_for_search($keyword, $start, $config["per_page"]);
        // echo "<pre>"; print_r($data['data']); echo "</pre>";die;

        $data['all_main_category'] = $this->home_model->get_all_main_category();

        $data['meta_title'] = "Search: " . $keyword;

        $this->load->template('search-html', $data);
    }	
    function contact()
    {
        if (isset($_POST["contact_submit"])) {

            $form = $this->input->post(NULL, true);

            $message = "
			
		       		<br><br> Name: " . $form["name"] . "

		       		<br><br> Email: " . $form["email"] . "

                 	<br>Phone: " . $form["phone"] . "
                 	<br>Subject: " . $form["subject"] . "

			  		<br>Message : " . $form["comments"];

            $to = "quote@leocustompackagingboxes.com";


            $subject = "Contact Us - Leo Custom Packaging Boxes  ";

            $headers = "From: " . $form["name"] . " <" . $form["email"] . ">\r\n";

            $headers .= "MIME-Version: 1.0\n";

            $headers .= "Content-Type: text/html; charset=\"iso-8859-1\"\n";

            $headers .= "X-Priority: 1 (Highest)\n";

            $headers .= "X-MSMail-Priority: High\n";

            $headers .= "Importance: High\n";


            $this->session->set_flashdata("green_msg", "Thank you for the inquiry, our sales representative will contact soon!");

            @mail($to, $subject, $message, $headers);
            redirect(current_url());

        }
        $data["meta_title"] = "Contact Us - leocustompackagingboxes ";
        $data["meta_keywords"] = "Contact Us - leocustompackagingboxes ";
        $data["meta_description"] = "Contact Us - leocustompackagingboxes ";
        $this->load->template('contact_page-html', $data);
    }	
}
?>