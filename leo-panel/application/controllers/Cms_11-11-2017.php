<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Cms extends CI_Controller {
 
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
	
	public function rates()
	{
		$crud = new grocery_CRUD();
		$crud->set_table('type_rate');
		$crud->set_subject('Rate Types');
		$output = $crud->render();
		
		$this->_example_output($output);        
	}
	
	public function property()
	{
		$crud = new grocery_CRUD();
		$crud->set_table('type_property');
		$crud->set_subject('Property Types');
		$output = $crud->render();
		
		$this->_example_output($output);        
	}
	
	public function term()
	{
		$crud = new grocery_CRUD();
		$crud->set_table('type_term');
		$crud->set_subject('Term Types');
		
		$crud->set_relation('rate_type','type_rate','name');
		
		$output = $crud->render();
		
		$this->_example_output($output);        
	}
	
	public function transaction()
	{
		$crud = new grocery_CRUD();
		$crud->set_table('type_transaction');
		$crud->set_subject('Transaction Types');
		$output = $crud->render();
		
		$this->_example_output($output);        
	}
	
	public function states()
	{
		$crud = new grocery_CRUD();
		$crud->set_table('states');
		$crud->set_subject('States');
		$output = $crud->render();
		
		$this->_example_output($output);        
	}
	
	public function site_settings()
	{
		$crud = new grocery_CRUD();
		$crud->set_table('site_settings');
		$crud->set_subject('Site Settings');
		$output = $crud->render();
		
		$this->_example_output($output);        
	}
	
}