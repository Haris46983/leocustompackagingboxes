<?php
class Home_model extends CI_Model{
	
	public function __construct() {
        parent::__construct();
        $this->load->database();
    }
	
	public function get_site_setting(){
		
		$query = $this->db->get('site_settings');
		$query = $query->result_array();
		// echo "<pre>"; print_r($query); echo "</pre>";
		
		return $query[0];
	}
	
	public function get_all_banners(){
		
		$query = $this->db->order_by('priority ASC');
		$query = $this->db->get('banners');
		$query = $query->result_array();
		// echo "<pre>"; print_r($query); echo "</pre>";
		
		return $query;
	}
	
	public function get_third_menu_by_second_menu_id($id){
		
		$query = $this->db->where('parent_id',$id);
		$query = $this->db->where('position','third');
		$query = $this->db->where('display','1');
		$query = $this->db->order_by('priority ASC');
		$query = $this->db->get('menu');
		$query = $query->result_array();
		// echo "<pre>"; print_r($query); echo "</pre>";
		
		return $query;
	}
	
	public function get_second_menu_by_first_menu_id($id){
		
		$query = $this->db->where('parent_id',$id);
		$query = $this->db->where('position','second');
		$query = $this->db->where('display','1');
		$query = $this->db->order_by('priority ASC');
		$query = $this->db->get('menu');
		$query = $query->result_array();
		// echo "<pre>"; print_r($query); echo "</pre>";
		
		return $query;
	}
	
	public function get_all_first_menu(){
		
		$query = $this->db->where('position','first');
		$query = $this->db->where('display','1');
		$query = $this->db->order_by('priority ASC');
		$query = $this->db->get('menu');
		$query = $query->result_array();
		// echo "<pre>"; print_r($query); echo "</pre>";
		
		return $query;
	}
	
	public function get_mega_menu_by_id($id){
		
		$query = $this->db->where('id',$id);
		$query = $this->db->get('mega_menu');
		$query = $query->result_array();
		// echo "<pre>"; print_r($query); echo "</pre>";
		
		return $query;
	}
	
	public function get_mega_menu_links_by_mega_menu_id($mega_menu_id,$column){
		
		$query = $this->db->where('mega_menu_id',$mega_menu_id);
		$query = $this->db->where('column',$column);
		$query = $this->db->order_by('priority ASC');
		$query = $this->db->get('mega_menu_links');
		$query = $query->result_array();
		// echo "<pre>"; print_r($query); echo "</pre>";
		
		return $query;
	}
	
	public function get_home_section_1(){
		
		$query = $this->db->order_by('id ASC');
		$query = $this->db->get('home_section_1');
		$query = $query->result_array();
		// echo "<pre>"; print_r($query); echo "</pre>";
		
		return $query;
	}
	
	public function get_home_section_2(){
		
		$query = $this->db->order_by('id ASC');
		$query = $this->db->get('home_section_2');
		$query = $query->result_array();
		// echo "<pre>"; print_r($query); echo "</pre>";
		
		return $query;
	}
	
	public function get_home_clients(){
		
		$query = $this->db->order_by('id ASC');
		$query = $this->db->get('home_clients');
		$query = $query->result_array();
		// echo "<pre>"; print_r($query); echo "</pre>";
		
		return $query;
	}
	
	public function get_home_testimonials(){
		
		$query = $this->db->get('home_testimonials');
		$query = $query->result_array();
		// echo "<pre>"; print_r($query); echo "</pre>";
		
		return $query;
	}
	
	public function get_home_recent_blogs(){
		
		$query = $this->db->order_by('id DESC');
		$query = $this->db->limit(3,0);
		$query = $this->db->get('blog');
		$query = $query->result_array();
		// echo "<pre>"; print_r($query); echo "</pre>";
		
		return $query;
	}
	
	function check_subscribe_email($email){
		$query = $this->db->where('email',$email);
		$query = $this->db->get('subscribe_emails');
		$query = $query->result_array();
		// echo "<pre>"; print_r($query); echo "</pre>";die;
		
		return $query;
	}
	
	function add_subscribe_emails($email){
		$data['email'] = $email;
		$data['insert_datetime'] = date('Y-m-d H:i:s');
		$this->db->insert('subscribe_emails', $data);
	}
	
	function get_all_footer_links($position){
		$query = $this->db->where('position',$position);
		$query = $this->db->order_by('priority ASC');
		$query = $this->db->get('footer_links');
		$query = $query->result_array();
		// echo "<pre>"; print_r($query); echo "</pre>";die;
		
		return $query;
	}
	
	public function get_all_blogs(){
		
		$query = $this->db->get('blog');
		$query = $query->num_rows();
		// echo "<pre>"; print_r($query); echo "</pre>";
		
		return $query;
	}
	
	public function get_blogs($start,$limit){
		
		$query = $this->db->limit($limit, $start);
		$query = $this->db->get('blog');
		$query = $query->result_array();
		// echo "<pre>"; print_r($query); echo "</pre>";
		
		return $query;
	}
	
	public function get_recent_blogs(){
		
		$query = $this->db->order_by('date DESC');
		$query = $this->db->limit(6, 0);
		$query = $this->db->get('blog');
		$query = $query->result_array();
		// echo "<pre>"; print_r($query); echo "</pre>";
		
		return $query;
	}
	
	public function get_blog_by_seokey($seokey){
		
		$query = $this->db->where('seokey', $seokey);
		$query = $this->db->get('blog');
		$query = $query->result_array();
		// echo "<pre>"; print_r($query); echo "</pre>";
		
		return $query;
	}
	
	public function get_static_page_by_seokey($seokey){
		
		$query = $this->db->where('seokey',$seokey);
		$query = $this->db->get('static_pages');
		$query = $query->result_array();
		// echo "<pre>"; print_r($query); echo "</pre>";
		
		return $query;
	}
	
	public function get_main_category_by_seokey($seokey){
		
		$query = $this->db->where('seokey', $seokey);
		$query = $this->db->get('main_category');
		$query = $query->result_array();
		// echo "<pre>"; print_r($query); echo "</pre>";
		if($query)
			return $query[0];
		else
			return $query;
	}
	public function get_citywise_by_seokey($seokey){
		
		$query = $this->db->where('seokey', $seokey);
		$query = $this->db->get('citywise');
		$query = $query->result_array();
		// echo "<pre>"; print_r($query); echo "</pre>";
		if($query)
			return $query[0];
		else
			return $query;
	}	
	public function get_all_sub_category_by_main_category_id($id){
		
		$query = $this->db->select('s.*');
		$query = $this->db->join('main_sub_category as msc','msc.sub_category_id = s.id');
		$query = $this->db->where('msc.main_category_id', $id);
		$query = $this->db->get('sub_category as s');
		$query = $query->num_rows();
		// echo "<pre>"; print_r($query); echo "</pre>";
		
		return $query;
	}
	
	public function get_sub_category_by_main_category_id($id,$start,$limit){
		
		$query = $this->db->select('s.*');
		$query = $this->db->join('main_sub_category as msc','msc.sub_category_id = s.id');
		$query = $this->db->where('msc.main_category_id', $id);
		$query = $this->db->limit($limit, $start);
		$query = $this->db->get('sub_category as s');
		$query = $query->result_array();
		// echo "<pre>"; print_r($query); echo "</pre>";
		
		return $query;
	}
	public function get_citywise_by_products($id){
 

	
		$query = $this->db->select('p.*');
		$query = $this->db->join('rel_products_citywise_category as rc','rc.product_id = p.id');
        $query = $this->db->where('rc.citywise_id', $id);
		$query = $this->db->get('products as p');
		$query = $query->result_array();
		// echo "<pre>"; print_r($query); echo "</pre>";
		
		return $query;
	}	
	public function get_all_main_category(){
		
		$query = $this->db->order_by('name ASC');
		$query = $this->db->get('main_category');
		$query = $query->result_array();
		// echo "<pre>"; print_r($query); echo "</pre>";
		
		return $query;
	}
	public function get_all_products(){
		
// 		$query = $this->db->order_by('name ASC');
		$query = $this->db->get('products');
		$query = $query->result_array();
		// echo "<pre>"; print_r($query); echo "</pre>";
		
		return $query;
	}	
	public function get_sub_category_by_seokey($seokey){
		
		$query = $this->db->where('seokey', $seokey);
		$query = $this->db->get('sub_category');
		$query = $query->result_array();
		// echo "<pre>"; print_r($query); echo "</pre>";
		
		return $query[0];
	}
	
	public function get_all_products_by_sub_category_id($id){
		
		$query = $this->db->select('p.*');
		$query = $this->db->join('rel_products_sub_category as rel','rel.product_id = p.id');
		$query = $this->db->where('rel.sub_category_id', $id);
		$query = $this->db->get('products as p');
		$query = $query->num_rows();
		// echo "<pre>"; print_r($query); echo "</pre>";
		
		return $query;
	}
	
	public function get_products_by_sub_category_id($id,$start,$limit){
		
		$query = $this->db->select('p.*');
		$query = $this->db->join('rel_products_sub_category as rel','rel.product_id = p.id');
		$query = $this->db->where('rel.sub_category_id', $id);
		$query = $this->db->limit($limit, $start);
		$query = $this->db->get('products as p');
		$query = $query->result_array();
		// echo "<pre>"; print_r($query); echo "</pre>";
		
		return $query;
	}
	
	public function get_recent_sub_category_by_main_category_id($main_category_id){
		
		$query = $this->db->select('s.*');
		$query = $this->db->join('main_sub_category as msc','msc.sub_category_id = s.id');
		$query = $this->db->where('msc.main_category_id', $main_category_id);
		$query = $this->db->order_by('s.name ASC');
		$query = $this->db->limit(10, 0);
		$query = $this->db->get('sub_category as s');
		$query = $query->result_array();
		// echo "<pre>"; print_r($query); echo "</pre>";
		
		return $query;
	}
	
	function get_product_thumb_image($product_id){
		$query = $this->db->where('product_id', $product_id);
		$query = $this->db->where('thumb', '1');
		$query = $this->db->get('products_images');
		$query = $query->result_array();
		// echo "<pre>"; print_r($query); echo "</pre>";
		
		return $query;
	}
	
	function get_product_images($product_id){
		$query = $this->db->where('product_id', $product_id);
		$query = $this->db->order_by('priority ASC');
		$query = $this->db->get('products_images');
		$query = $query->result_array();
		// echo "<pre>"; print_r($query); echo "</pre>";
		
		return $query;
	}
	
	public function get_product_by_seokey($seokey){
		
		$query = $this->db->where('seokey', $seokey);
		$query = $this->db->get('products');
		$query = $query->result_array();
		// echo "<pre>"; print_r($query); echo "</pre>";
		
		if($query)
			return $query[0];
		else
			return $query;
	}
	
	public function get_sub_category_by_product_id($product_id){
		
		$query = $this->db->select('s.*');
		$query = $this->db->join('rel_products_sub_category as rel','rel.sub_category_id = s.id');
		$query = $this->db->where('rel.product_id', $product_id);
		$query = $this->db->get('sub_category as s');
		$query = $query->result_array();
		// echo "<pre>"; print_r($query); echo "</pre>";
		
		if($query)
			return $query[0];
		else
			return $query;
	}
	
	public function get_main_category_by_sub_category_id($sub_category_id){
		
		$query = $this->db->select('m.*');
		$query = $this->db->join('main_sub_category as msc','msc.main_category_id = m.id');
		$query = $this->db->where('msc.sub_category_id', $sub_category_id);
		$query = $this->db->get('main_category as m');
		$query = $query->result_array();
		// echo "<pre>"; print_r($query); echo "</pre>";
		
		if($query)
			return $query[0];
		else
			return $query;
	}
	
	public function get_related_products($product_id){
		
		$query = $this->db->select('p.*');
		$query = $this->db->join('related_products as rp','rp.rel_product_id = p.id');
		$query = $this->db->where('rp.product_id', $product_id);
		$query = $this->db->get('products as p');
		$query = $query->result_array();
		// echo "<pre>"; print_r($query); echo "</pre>";
		
		return $query;
	}
	
	function add_review($data){
		$data['insert_datetime'] = date('Y-m-d H:i:s');
		
		// echo "<pre>"; print_r($data); echo "</pre>";die;
		
		$this->db->insert('product_reviews', $data);
	}
	
	function get_product_total_rating($id){
		$query = $this->db->select('SUM(rating) AS rating')->where('product_id',$id)->get('product_reviews');
		$query = $query->result_array();
		// echo "<pre>"; print_r($query); echo "</pre>";
		
		if($query)
			return $query[0];
		else
			return $query;
	}
	
	function get_product_reviews($id){
		$query = $this->db->select('*')->where('product_id',$id)->order_by('rating DESC')->get('product_reviews');
		$query = $query->result_array();
		// echo "<pre>"; print_r($query); echo "</pre>";
		
		return $query;
	}
	
	public function get_product_stock($product_id){
		
		$query = $this->db->select('s.*');
		$query = $this->db->join('rel_products_stock_options as rel','rel.stock_id = s.id');
		$query = $this->db->where('rel.product_id', $product_id);
		$query = $this->db->get('products_stock_options as s');
		$query = $query->result_array();
		// echo "<pre>"; print_r($query); echo "</pre>";
		
		return $query;
	}
	
	public function get_product_color($product_id){
		
		$query = $this->db->select('s.*');
		$query = $this->db->join('rel_products_color_options as rel','rel.color_id = s.id');
		$query = $this->db->where('rel.product_id', $product_id);
		$query = $this->db->get('products_color_options as s');
		$query = $query->result_array();
		// echo "<pre>"; print_r($query); echo "</pre>";
		
		return $query;
	}
	function get_total_products_for_search($keyword){
		$this->db->like('name', $keyword);
		$this->db->or_like('upper_description', $keyword); 
		$this->db->or_like('bottom_description', $keyword);
		$this->db->or_like('meta_title', $keyword);
		$this->db->or_like('meta_keywords', $keyword);
		$this->db->or_like('meta_description', $keyword);
		$result = $this->db->get('products');
		$result = $result->num_rows();
		return $result;
	}	
	function get_products_for_search($keyword, $start, $limit){
		$this->db->like('name', $keyword);
		$this->db->or_like('upper_description', $keyword); 
		$this->db->or_like('bottom_description', $keyword);
		$this->db->or_like('meta_title', $keyword);
		$this->db->or_like('meta_keywords', $keyword);
		$this->db->or_like('meta_description', $keyword);
		$this->db->order_by('name ASC');
		$this->db->limit($limit,$start);
		$result = $this->db->get('products');
		$result = $result->result_array();
		return $result;
	}
	
	function get_namelinks_products($product_id){
		$query = $this->db->select('*')->where('product_id',$product_id)->get('name_links');
		$query = $query->result_array();
		// echo "<pre>"; print_r($query); echo "</pre>";
		
		return $query;
	}
	function get_namelinks_home(){
		$query = $this->db->select('*')->where('show_home','1')->get('name_links');
		$query = $query->result_array();
		// echo "<pre>"; print_r($query); echo "</pre>";
		
		return $query;
	}	
	public function get_namelinks_category($product_id){
		
		$query = $this->db->select('*')->where('sub_cat_id',$product_id)->get('name_links');
		$query = $query->result_array();
		// echo "<pre>"; print_r($query); echo "</pre>";
		
		return $query;
	}	
	
}
?>