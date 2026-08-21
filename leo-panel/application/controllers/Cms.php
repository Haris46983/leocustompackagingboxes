<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
// class Cms extends CI_Controller {
class Cms extends My_Controller {
 
	function __construct()
	{
		parent::__construct();
	 
		/* Standard Libraries of codeigniter are required */
		$this->load->database();
		$this->load->helper('url');
		/* ------------------ */ 
		 
		$this->load->library('grocery_CRUD');
	 
	}
 
	function _example_output($output = null)
	{
		$this->load->template('our_template.php',$output);    
		// $this->load->view('our_template.php',$output);    
	}
	
	public function users()
	{
		$crud = new grocery_CRUD();
		
		// $crud->set_theme('datatables');
		
		$crud->set_table('user_accounts');
		
		$crud->set_subject('Users');
		
		$crud->set_field_upload('image','images/');
		
		$crud->where('user_accounts.id != 1');
		
		// $crud->unset_fields('insert_datetime','insert_by','update_datetime','update_by');
		
		$crud->change_field_type('password','password');
		
		$crud->set_relation('insert_by','user_accounts','name');
		$crud->set_relation('update_by','user_accounts','name');
		
		$crud->unset_columns('password');
		$crud->unset_read_fields('password');
		
		$crud->field_type('insert_by', 'readonly', $_SESSION['id']);
		$crud->field_type('update_by', 'readonly', $_SESSION['id']);
		$crud->field_type('insert_datetime', 'hidden');
		$crud->field_type('update_datetime', 'hidden');
		
		$crud->required_fields('name','username','password','type');
		
		$crud->callback_before_insert(array($this,'encrypt_password_callback'));
		
		$crud->callback_before_update(array($this,'edit_encrypt_password_callback'));
		
		$crud->callback_edit_field('password',array($this,'decrypt_password_callback'));
		
		$crud->unique_fields(array('username'));
		
		$output = $crud->render();
		 
		$this->_example_output($output);        
	}
	
	function encrypt_password_callback($post_array, $primary_key = null)
	{
		$check = preg_match('/^[a-f0-9]{32}$/', $post_array['password']);
		if($check == '0')
			$post_array['password'] = md5($post_array['password']);
		else
			$post_array['password'] = $post_array['password'];
		
		$post_array['insert_datetime'] = date('Y-m-d H:i:s');
		$post_array['insert_by'] = $_SESSION['id'];
		
		return $post_array;
	}
	
	function edit_encrypt_password_callback($post_array, $primary_key = null)
	{
		$check = preg_match('/^[a-f0-9]{32}$/', $post_array['password']);
		if($check == '0')
			$post_array['password'] = md5($post_array['password']);
		else
			$post_array['password'] = $post_array['password'];
		
		$post_array['update_datetime'] = date('Y-m-d H:i:s');
		$post_array['update_by'] = $_SESSION['id'];
		
		return $post_array;
	}
	
	function decrypt_password_callback($value)
	{
		// $this->load->library('encrypt');
		
		// $key = 'super-secret-key';
		// $decrypted_password = $this->encrypt->decode($value, $key);
		$decrypted_password = $value;
		return "<input type='password' name='password' value='$decrypted_password' />";
	}
	
	public function main_category(){
		
		$crud = new grocery_CRUD();
		$crud->set_table('main_category');
		$crud->set_subject('Main Category');
		
		$crud->unique_fields(array('seokey','name'));
		$crud->unset_texteditor('meta_title','meta_keywords','meta_description');
		
		$crud->required_fields('name','seokey');
		
		$crud->set_field_upload('banner_image','../files/images/');
		$crud->set_field_upload('thumb_image','../files/images/');
		
		$crud->set_relation('insert_by','user_accounts','name');
		$crud->set_relation('update_by','user_accounts','name');
		$crud->field_type('insert_by', 'readonly', $_SESSION['id']);
		$crud->field_type('update_by', 'readonly', $_SESSION['id']);
		$crud->field_type('insert_datetime', 'hidden');
		$crud->field_type('update_datetime', 'hidden');
		
		$crud->callback_before_insert(array($this,'insert_datetime_callback'));
		$crud->callback_before_update(array($this,'update_datetime_callback'));
		
		$crud->columns(array('name','seokey','insert_datetime','insert_by','update_datetime','update_by'));
		
		$output = $crud->render();
		$this->_example_output($output); 
	}
	public function citywise(){
		
		$crud = new grocery_CRUD();
		$crud->set_table('citywise');
		$crud->set_subject('citywise');
		
		$crud->unique_fields(array('seokey','name'));
		$crud->unset_texteditor('meta_title','meta_keywords','meta_description');
		
		$crud->required_fields('name','seokey');
		
		$crud->set_field_upload('banner_image','../files/images/');
		$crud->set_field_upload('thumb_image','../files/images/');
		
		$crud->set_relation('insert_by','user_accounts','name');
		$crud->set_relation('update_by','user_accounts','name');
		$crud->field_type('insert_by', 'readonly', $_SESSION['id']);
		$crud->field_type('update_by', 'readonly', $_SESSION['id']);
		$crud->field_type('insert_datetime', 'hidden');
		$crud->field_type('update_datetime', 'hidden');
		
		$crud->callback_before_insert(array($this,'insert_datetime_callback'));
		$crud->callback_before_update(array($this,'update_datetime_callback'));
		
		$crud->columns(array('name','seokey','insert_datetime','insert_by','update_datetime','update_by'));
		
		$output = $crud->render();
		$this->_example_output($output); 
	}	
	public function sub_category(){
		
		$crud = new grocery_CRUD();
		$crud->set_table('sub_category');
		$crud->set_subject('Sub Category');
		
		$crud->set_relation_n_n('Main_Categories', 'main_sub_category', 'main_category', 'sub_category_id', 'main_category_id', 'name');
		
		$crud->unique_fields(array('seokey','name'));
		$crud->unset_texteditor('meta_title','meta_keywords','meta_description');
		
		$crud->required_fields('name','seokey');
		
		$crud->set_field_upload('banner_image','../files/images/');
		$crud->set_field_upload('thumb_image','../files/images/');
		
		$crud->set_relation('insert_by','user_accounts','name');
		$crud->set_relation('update_by','user_accounts','name');
		$crud->field_type('insert_by', 'readonly', $_SESSION['id']);
		$crud->field_type('update_by', 'readonly', $_SESSION['id']);
		$crud->field_type('insert_datetime', 'hidden');
		$crud->field_type('update_datetime', 'hidden');
		
		$crud->callback_before_insert(array($this,'insert_datetime_callback'));
		$crud->callback_before_update(array($this,'update_datetime_callback'));
		
		$crud->columns(array('name','seokey','insert_datetime','insert_by','update_datetime','update_by'));
		
		$output = $crud->render();
		$this->_example_output($output); 
	}
	
	public function products_color_options(){
		$crud = new grocery_CRUD();
		$crud->set_table('products_color_options');
		$crud->set_subject('Product Color Options');
		
		$crud->unique_fields(array('title'));
		
		$crud->required_fields('title');
		
		$output = $crud->render();
		$this->_example_output($output); 
	}
	
	public function products_stock_options(){
		$crud = new grocery_CRUD();
		$crud->set_table('products_stock_options');
		$crud->set_subject('Product Stock Options');
		
		$crud->unique_fields(array('title'));
		
		$crud->required_fields('title');
		
		$output = $crud->render();
		$this->_example_output($output); 
	}
	
	public function products_type_options(){
		$crud = new grocery_CRUD();
		$crud->set_table('products_type_options');
		$crud->set_subject('Product Type Options');
		
		$crud->unique_fields(array('title'));
		
		$crud->required_fields('title');
		
		$output = $crud->render();
		$this->_example_output($output); 
	}
	
	public function products_images(){
		$crud = new grocery_CRUD();
		$crud->set_table('products_images');
		$crud->set_subject('Product Images');
		
		$crud->required_fields('image');
		
		$crud->set_field_upload('image','../files/images/');
		
		$crud->set_relation('product_id','products','name');
		
		$crud->display_as('product_id','Product');
		
		$output = $crud->render();
		$this->_example_output($output); 
	}
	
	public function products(){
		
		$crud = new grocery_CRUD();
		$crud->set_table('products');
		$crud->set_subject('Products');
		
		$crud->set_relation_n_n('Products_Sub_Categories', 'rel_products_sub_category', 'sub_category', 'product_id', 'sub_category_id', 'name');
		$crud->set_relation_n_n('Related_Products', 'related_products', 'products', 'product_id', 'rel_product_id', 'name');
		$crud->set_relation_n_n('Product_Color_Options', 'rel_products_color_options', 'products_color_options', 'product_id', 'color_id', 'title');
		$crud->set_relation_n_n('Product_Stock_Options', 'rel_products_stock_options', 'products_stock_options', 'product_id', 'stock_id', 'title');
		$crud->set_relation_n_n('Product_Type_Options', 'rel_products_type_options', 'products_type_options', 'product_id', 'type_id', 'title');
		$crud->set_relation_n_n('citywise_Categories', 'rel_products_citywise_category', 'citywise', 'product_id', 'citywise_id', 'name');
		$crud->unique_fields(array('seokey','name'));
		$crud->unset_texteditor('meta_title','meta_keywords','meta_description');
		
		$crud->required_fields('name','seokey');
		
		// $crud->set_field_upload('image','../files/images/');
		
		$crud->set_relation('insert_by','user_accounts','name');
		$crud->set_relation('update_by','user_accounts','name');
		$crud->field_type('insert_by', 'readonly', $_SESSION['id']);
		$crud->field_type('update_by', 'readonly', $_SESSION['id']);
		$crud->field_type('insert_datetime', 'hidden');
		$crud->field_type('update_datetime', 'hidden');
		
		$crud->callback_before_insert(array($this,'insert_datetime_callback'));
		$crud->callback_before_update(array($this,'update_datetime_callback'));
		
		$crud->columns(array('name','seokey','is_cart','insert_datetime','insert_by','update_datetime','update_by'));
		
		$output = $crud->render();
		$this->_example_output($output); 
	}
	
	function insert_datetime_callback($post_array, $primary_key = null)
	{
		$post_array['insert_datetime'] = date('Y-m-d H:i:s');
		$post_array['insert_by'] = $_SESSION['id'];
		
		return $post_array;
	}
	
	function update_datetime_callback($post_array, $primary_key = null)
	{
		$post_array['update_datetime'] = date('Y-m-d H:i:s');
		$post_array['update_by'] = $_SESSION['id'];
		
		return $post_array;
	}
	
	public function products_prices()
	{
		$crud = new grocery_CRUD();
		$crud->set_table('products_prices');
		$crud->set_subject('Products Prices');
		
		$crud->required_fields('price');
		
		$crud->set_relation('product_id','products','name');
		$crud->set_relation('stock_id','products_stock_options','title');
		$crud->set_relation('color_id','products_color_options','title');
		
		$crud->display_as('product_id','Product');
		$crud->display_as('stock_id','Stock');
		$crud->display_as('color_id','Color');
		
		$crud->set_relation('insert_by','user_accounts','name');
		$crud->set_relation('update_by','user_accounts','name');
		$crud->field_type('insert_by', 'readonly', $_SESSION['id']);
		$crud->field_type('update_by', 'readonly', $_SESSION['id']);
		$crud->field_type('insert_datetime', 'hidden');
		$crud->field_type('update_datetime', 'hidden');
		
		$crud->callback_before_insert(array($this,'insert_datetime_callback'));
		$crud->callback_before_update(array($this,'update_datetime_callback'));
		
		$crud->columns(array('name','seokey','is_cart','insert_datetime','insert_by','update_datetime','update_by'));
		
		$output = $crud->render();
		$this->_example_output($output);
		
	}
	
	public function banners()
	{
		$crud = new grocery_CRUD();
		$crud->set_table('banners');
		$crud->set_subject('Banners');
		
		$crud->set_field_upload('image','../files/images/');
		
		$crud->required_fields('image');
		
		$crud->set_relation('insert_by','user_accounts','name');
		$crud->set_relation('update_by','user_accounts','name');
		$crud->field_type('insert_by', 'readonly', $_SESSION['id']);
		$crud->field_type('update_by', 'readonly', $_SESSION['id']);
		$crud->field_type('insert_datetime', 'hidden');
		$crud->field_type('update_datetime', 'hidden');
		
		$crud->callback_before_insert(array($this,'insert_datetime_callback'));
		$crud->callback_before_update(array($this,'update_datetime_callback'));
		
		// $crud->columns(array('name','seokey','is_cart','insert_datetime','insert_by','update_datetime','update_by'));
		
		$output = $crud->render();
		$this->_example_output($output);
		
	}
	
	public function blog()
	{
		$crud = new grocery_CRUD();
		$crud->set_table('blog');
		$crud->set_subject('Blogs');
		
		$crud->unique_fields(array('seokey','title'));
		$crud->unset_texteditor('meta_title','meta_keywords','meta_description');
		
		$crud->required_fields('seokey','title');
		
		$crud->set_field_upload('image','../files/images/');
		
		$crud->set_relation('insert_by','user_accounts','name');
		$crud->set_relation('update_by','user_accounts','name');
		$crud->field_type('insert_by', 'readonly', $_SESSION['id']);
		$crud->field_type('update_by', 'readonly', $_SESSION['id']);
		$crud->field_type('insert_datetime', 'hidden');
		$crud->field_type('update_datetime', 'hidden');
		
		$crud->callback_before_insert(array($this,'insert_datetime_callback'));
		$crud->callback_before_update(array($this,'update_datetime_callback'));
		
		$crud->columns(array('image','title','seokey','insert_datetime','insert_by','update_datetime','update_by'));
		
		$output = $crud->render();
		$this->_example_output($output);
		
	}
	
	public function static_pages()
	{
		$crud = new grocery_CRUD();
		$crud->set_table('static_pages');
		$crud->set_subject('Static Pages');
		
		$crud->unique_fields(array('seokey','title'));
		$crud->unset_texteditor('meta_title','meta_keywords','meta_description');
		
		$crud->required_fields('seokey','title');
		
		$crud->set_relation('insert_by','user_accounts','name');
		$crud->set_relation('update_by','user_accounts','name');
		$crud->field_type('insert_by', 'readonly', $_SESSION['id']);
		$crud->field_type('update_by', 'readonly', $_SESSION['id']);
		$crud->field_type('insert_datetime', 'hidden');
		$crud->field_type('update_datetime', 'hidden');
		
		$crud->callback_before_insert(array($this,'insert_datetime_callback'));
		$crud->callback_before_update(array($this,'update_datetime_callback'));
		
		$crud->columns(array('title','seokey','insert_datetime','insert_by','update_datetime','update_by'));
		
		$output = $crud->render();
		$this->_example_output($output);
		
	}
	
	public function site_settings()
	{
		$crud = new grocery_CRUD();
		$crud->set_table('site_settings');
		$crud->set_subject('Site Settings');
		
		$crud->unset_add();
		$crud->unset_delete();
		
		$crud->set_field_upload('favicon','../files/images/');
		$crud->set_field_upload('logo','../files/images/');
		
		$crud->columns(array('logo','meta_title','email','phone','address'));
		$crud->unset_texteditor('header_html','footer_html','meta_title','meta_keywords','meta_description');
		
		$output = $crud->render();
		
		$this->_example_output($output);        
	}
	
	function menu(){
		$crud = new grocery_CRUD();
		$crud->set_table('menu');
		$crud->set_subject('Menu');
		
		$crud->set_relation('parent_id','menu','name');
		
		$crud->display_as('parent_id','Parent Menu');
		$crud->display_as('mega_menu','Is mega menu?');
		$crud->display_as('mega_menu_id','Mega Menu');
		
		$crud->set_relation('mega_menu_id','mega_menu','name');
		
		$output = $crud->render();
		
		$this->_example_output($output); 
	}
	
	function mega_menu(){
		$crud = new grocery_CRUD();
		$crud->set_table('mega_menu');
		$crud->set_subject('Mega Menu');
		
		$output = $crud->render();
		
		$this->_example_output($output); 
	}
	
	function mega_menu_links(){
		$crud = new grocery_CRUD();
		$crud->set_table('mega_menu_links');
		$crud->set_subject('Mega Menu Links');
		
		$crud->display_as('mega_menu_id','Mega Menu');
		$crud->set_relation('mega_menu_id','mega_menu','name');
		
		$output = $crud->render();
		
		$this->_example_output($output); 
	}
	
	function home_section_1(){
		$crud = new grocery_CRUD();
		$crud->set_table('home_section_1');
		$crud->set_subject('Home Section 1');
		
		$crud->set_field_upload('image','../files/images/');
		
		$output = $crud->render();
		
		$this->_example_output($output); 
	}
	
	function home_clients(){
		$crud = new grocery_CRUD();
		$crud->set_table('home_clients');
		$crud->set_subject('Home Clients');
		
		$crud->set_field_upload('image','../files/images/');
		
		$output = $crud->render();
		
		$this->_example_output($output); 
	}
	
	function home_section_2(){
		$crud = new grocery_CRUD();
		$crud->set_table('home_section_2');
		$crud->set_subject('Home Section 2');
		
		$crud->set_field_upload('image','../files/images/');
		
		$output = $crud->render();
		
		$this->_example_output($output); 
	}
	
	function home_testimonials(){
		$crud = new grocery_CRUD();
		$crud->set_table('home_testimonials');
		$crud->set_subject('Home Testimonials');
		
		$crud->set_field_upload('image','../files/images/');
		
		$crud->unset_texteditor('text');
		
		$output = $crud->render();
		
		$this->_example_output($output); 
	}
	
	function footer_links(){
		$crud = new grocery_CRUD();
		$crud->set_table('footer_links');
		$crud->set_subject('Footer Links');
		
		$output = $crud->render();
		
		$this->_example_output($output); 
	}
	
	public function reviews()
	{
		$crud = new grocery_CRUD();
		$crud->set_table('product_reviews');
		$crud->set_subject('Product Reviews');
		
		$crud->set_relation('product_id','products','name');
		
		$crud->display_as('product_id','Product');
		// $crud->unset_edit();
		$crud->unset_columns(array('is_valid'));
		$output = $crud->render();
		
		$this->_example_output($output);        
	}
	public function name_link(){
		
		$crud = new grocery_CRUD();
		$crud->set_table('name_links');
		$crud->set_subject('name_links');
        $crud->set_relation('product_id','products','name');
        $crud->set_relation('sub_cat_id','sub_category','name');
		$output = $crud->render();
		$this->_example_output($output); 
	}
}