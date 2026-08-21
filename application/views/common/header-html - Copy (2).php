<?
if(!isset($meta_title) || $meta_title == ""){
	$meta_title = $this->site_settings['meta_title'];
}

if(!isset($meta_keywords) || $meta_keywords == ""){
	$meta_keywords = $this->site_settings['meta_keywords'];
}

if(!isset($meta_description) || $meta_description == ""){
	$meta_description = $this->site_settings['meta_description'];
}

// echo $meta_title;
// echo "<br>";
// echo $meta_keywords;
// echo "<br>";
// echo $meta_description;

$page = $this->uri->segment(1);

$home = "";
$blog = "";
$doctor = "";

switch ($page) {
    case "":
	$home = "current-menu-item page_item";
	break;
	case "blog":
	$blog = "current-menu-item page_item";
	break;
	case "doctors-list":
	$doctor = "current-menu-item page_item";
	break;
	default:
	$home = "";
	break;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<!--[if IE]>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<![endif]-->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<title><?=$meta_title;?></title>

<!-- Favicons Icon -->
<link rel="icon" href="<?=base_url().'assets/images/'.$this->site_settings['favicon'];?>" type="image/x-icon" />
<link rel="shortcut icon" href="<?=base_url().'assets/images/'.$this->site_settings['favicon'];?>" type="image/x-icon" />

<!-- Mobile Specific -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="ROBOTS" content="NOINDEX, NOFOLLOW">
<meta name="description" content="<?=$meta_description;?>">
<meta name="keywords" content="<?=$meta_keywords;?>">

<!-- CSS Style -->
<link rel="stylesheet" href="<?=base_url();?>assets/css/animate.css" type="text/css">
<link rel="stylesheet" href="<?=base_url();?>assets/css/bootstrap.min.css" type="text/css">
<link rel="stylesheet" href="<?=base_url();?>assets/css/style.css" type="text/css">
<link rel="stylesheet" href="<?=base_url();?>assets/css/revslider.css" type="text/css">
<link rel="stylesheet" href="<?=base_url();?>assets/css/owl.carousel.css" type="text/css">
<link rel="stylesheet" href="<?=base_url();?>assets/css/owl.theme.css" type="text/css">
<link rel="stylesheet" href="<?=base_url();?>assets/css/font-awesome.css" type="text/css">
<link rel="stylesheet" href="<?=base_url();?>assets/css/blogmate.css" type="text/css">
<link rel="stylesheet" href="<?=base_url();?>assets/css/rating.css" type="text/css">

<!-- Google Fonts -->
<link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,300,700,800,400,600' rel='stylesheet' type='text/css'>

<?=$this->site_settings['header_html'];?>
</head>

<body>
<div class="page"> 
  <!-- Header -->
  <header class="header-container">
    <div class="header-top">
      <div class="container">
        <div class="row"> 
          <!-- Header Language -->
          <div class="col-xs-6">
            <div class="dropdown block-language-wrapper"> <a role="button" data-toggle="dropdown" data-target="#" class="block-language dropdown-toggle" href="mailto:<?=$this->site_settings['email'];?>"><i class="fa fa-envelop"></i><?=$this->site_settings['email'];?></a>
            </div>
            
            <!-- End Header Language --> 
            
            <div class="welcome-msg hidden-xs"><a style="all:unset; cursor:pointer;" href="tel:<?=$this->site_settings['phone'];?>"> <?=$this->site_settings['phone'];?> </a></div>
          </div>
          <div class="col-xs-6"> 
            
            <!-- Header Top Links -->
            <div class="toplinks">
              <div class="links">
                <div class=""><a title="My Account" href="#"><span class="hidden-xs">Track Your Order |</span></a></div> 
                <div class=""><a title="My Wishlist" href="#"><span class="hidden-xs">Sign In |</span></a></div> 
                <div class=""><a title="Checkout" href="#"><span class="hidden-xs">Sign Up</span></a></div>
              </div>
            </div>
            <!-- End Header Top Links --> 
          </div>
        </div>
      </div>
    </div>
	    <div class="header container">
      <div class="row">
        <div class="col-lg-4 col-sm-3 col-md-2"> 
          <!-- Header Logo --> 
          <a class="logo" title="<?=$this->site_settings['meta_title'];?>" href="<?=base_url();?>"><img alt="<?=$this->site_settings['alt_logo'];?>" src="<?=base_url();?>assets/images/<?=$this->site_settings['logo'];?>"></a> 
          <!-- End Header Logo --> 
        </div>
        <div class="col-lg-4 col-sm-6 col-md-8"> 
          <!-- Search-col -->
          <div class="search-box">
            <form action="" method="GET" id="search_mini_form" name="Categories">
              <input type="text" placeholder="Search here..." value="" maxlength="70" class="" name="search" id="search">
              <button id="submit-button" class="search-btn-bg"><span></span></button>
            </form>
          </div>
          <!-- End Search-col --> 
        </div>
        <!-- Top Cart -->
        <div class="col-lg-4 col-sm-3 col-md-2">
          <div class="top-cart-contain">
            <div class="mini-cart">
              <div data-toggle="dropdown" data-hover="dropdown" class="basket dropdown-toggle"> <a href="#"> <i class="glyphicon glyphicon-shopping-cart"></i>
                <div class="cart-box"><span class="title">cart</span><span id="cart-total">0 item </span></div>
                </a></div>
              <div>
                <div class="top-cart-content arrow_box">
                  <div class="block-subtitle">Recently added item(s)</div>
                  <ul id="cart-sidebar" class="mini-products-list">
                    <!--li class="item even"> <a class="product-image" href="#" title="Downloadable Product "><img alt="Downloadable Product " src="<?=base_url();?>assets/images/product1.jpg" width="80"></a>
                      <div class="detail-item">
                        <div class="product-details"> <a href="#" title="Remove This Item" onClick="" class="glyphicon glyphicon-remove">&nbsp;</a> <a class="glyphicon glyphicon-pencil" title="Edit item" href="#">&nbsp;</a>
                          <p class="product-name"> <a href="http://ow.ly/XqzNo" title="Downloadable Product">Sample Product </a> </p>
                        </div>
                        <div class="product-details-bottom"> <span class="price">$100.00</span> <span class="title-desc">Qty:</span> <strong>1</strong> </div>
                      </div>
                    </li>
                    <li class="item last odd"> <a class="product-image" href="#" title="  Sample Product "><img alt="  Sample Product " src="<?=base_url();?>assets/images/product1.jpg" width="80"></a>
                      <div class="detail-item">
                        <div class="product-details"> <a href="#" title="Remove This Item" onClick="" class="glyphicon glyphicon-remove">&nbsp;</a> <a class="glyphicon glyphicon-pencil" title="Edit item" href="#">&nbsp;</a>
                          <p class="product-name"> <a href="#" title="  Sample Product "> Sample Product </a> </p>
                        </div>
                        <div class="product-details-bottom"> <span class="price">$320.00</span> <span class="title-desc">Qty:</span> <strong>2</strong> </div>
                      </div>
                    </li-->
                  </ul>
                  <div class="top-subtotal">Subtotal: <span class="price">$0.00</span></div>
                  <div class="actions">
                    <button class="btn-checkout" type="button"><span>Checkout</span></button>
                    <button class="view-cart" type="button"><span>View Cart</span></button>
                  </div>
                </div>
              </div>
            </div>
            <div id="ajaxconfig_info"> <a href="#/"></a>
              <input value="" type="hidden">
              <input id="enable_module" value="1" type="hidden">
              <input class="effect_to_cart" value="1" type="hidden">
              <input class="title_shopping_cart" value="Go to shopping cart" type="hidden">
            </div>
          </div>
        </div>
        <!-- End Top Cart --> 
      </div>
    </div>
  </header>
  <!-- end header --> 
   <!-- Navbar -->
  <nav>
    <div class="container">
      <div class="nav-inner">
        <div class="logo-small"> <a class="logo" title="<?=$this->site_settings['meta_title'];?>" href="<?=base_url();?>"><img alt="<?=$this->site_settings['alt_logo'];?>" src="<?=base_url();?>assets/images/<?=$this->site_settings['logo'];?>"></a> </div>
        <!-- mobile-menu -->
        <div class="hidden-desktop" id="mobile-menu">
          <ul class="navmenu">
            <li>
              <div class="menutop">
                <div class="toggle"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span></div>
                <h2>Menu</h2>
              </div>
              <ul class="submenu">
                <li>
                  <ul class="topnav">
					<?
					$this->load->model('home_model');
					$first_menu = $this->home_model->get_all_first_menu();
					// echo "<pre>"; print_r($first_menu); echo "</pre>";
					
					foreach($first_menu as $f){
						$second_menu = $this->home_model->get_second_menu_by_first_menu_id($f['id']);
						// echo "<pre>"; print_r($second_menu); echo "</pre>";
						
						if($f['mega_menu'] == '1'){
							$mega_menu = $this->home_model->get_mega_menu_by_id($f['mega_menu_id']);
							// echo "<pre>"; print_r($mega_menu); echo "</pre>";
							if(!$mega_menu){
					?>
						<li class="level0 nav-10 level-top "> <a class="level-top" href="<?=$f['url'];?>"> <span><?=$f['name'];?></span> </a> </li>
					<?
							}
							else{
								$mega_menu = $mega_menu[0];
								$mega_menu_links1 = $this->home_model->get_mega_menu_links_by_mega_menu_id($mega_menu['id'],'1');
								$mega_menu_links2 = $this->home_model->get_mega_menu_links_by_mega_menu_id($mega_menu['id'],'2');
								$mega_menu_links3 = $this->home_model->get_mega_menu_links_by_mega_menu_id($mega_menu['id'],'3');
								$mega_menu_links4 = $this->home_model->get_mega_menu_links_by_mega_menu_id($mega_menu['id'],'4');
								$mega_menu_links5 = $this->home_model->get_mega_menu_links_by_mega_menu_id($mega_menu['id'],'5');
								// echo "<pre>"; print_r($mega_menu_links1); echo "</pre>";
					?>
						<li class="level0 nav-6 level-top first parent"> <a class="level-top" href="<?=$f['url'];?>"> <span><?=$f['name'];?></span> </a>
						<ul class="level0">
					<?
						if($mega_menu['heading_1'] != ""){
					?>
							<li class="level1 nav-1-1 first parent"> <a href="<?=$mega_menu['url_1'];?>"> <span><?=$mega_menu['heading_1'];?></span> </a>
							<ul class="level1">
					<?
							foreach($mega_menu_links1 as $l){
					?>
								<li class="level2 nav-1-1-1 first"> <a href="<?=$l['url'];?>"> <span><?=$l['name'];?></span> </a> </li>
					<?
							}
					?>
							</ul>
							</li>
					<?
						}
						if($mega_menu['heading_2'] != ""){
					?>
							<li class="level1 nav-1-1 first parent"> <a href="<?=$mega_menu['url_2'];?>"> <span><?=$mega_menu['heading_2'];?></span> </a>
							<ul class="level1">
					<?
							foreach($mega_menu_links2 as $l){
					?>
								<li class="level2 nav-1-1-1 first"> <a href="<?=$l['url'];?>"> <span><?=$l['name'];?></span> </a> </li>
					<?
							}
					?>
							</ul>
							</li>
					<?
						}
						if($mega_menu['heading_3'] != ""){
					?>
							<li class="level1 nav-1-1 first parent"> <a href="<?=$mega_menu['url_3'];?>"> <span><?=$mega_menu['heading_3'];?></span> </a>
							<ul class="level1">
					<?
							foreach($mega_menu_links3 as $l){
					?>
								<li class="level2 nav-1-1-1 first"> <a href="<?=$l['url'];?>"> <span><?=$l['name'];?></span> </a> </li>
					<?
							}
					?>
							</ul>
							</li>
					<?
						}
						if($mega_menu['heading_4'] != ""){
					?>
							<li class="level1 nav-1-1 first parent"> <a href="<?=$mega_menu['url_4'];?>"> <span><?=$mega_menu['heading_4'];?></span> </a>
							<ul class="level1">
					<?
							foreach($mega_menu_links4 as $l){
					?>
								<li class="level2 nav-1-1-1 first"> <a href="<?=$l['url'];?>"> <span><?=$l['name'];?></span> </a> </li>
					<?
							}
					?>
							</ul>
							</li>
					<?
						}
						if($mega_menu['heading_5'] != ""){
					?>
							<li class="level1 nav-1-1 first parent"> <a href="<?=$mega_menu['url_5'];?>"> <span><?=$mega_menu['heading_5'];?></span> </a>
							<ul class="level1">
					<?
							foreach($mega_menu_links5 as $l){
					?>
								<li class="level2 nav-1-1-1 first"> <a href="<?=$l['url'];?>"> <span><?=$l['name'];?></span> </a> </li>
					<?
							}
					?>
							</ul>
							</li>
					<?
						}
					?>
						</ul>
						</li>
					<?
							}
						}
						elseif(!$second_menu){
					?>
						<li class="level0 nav-10 level-top "> <a class="level-top" href="<?=$f['url'];?>"> <span><?=$f['name'];?></span> </a> </li>
					<?
						}
						elseif($second_menu){
					?>
						<li class="level0 nav-6 level-top first parent"> <a class="level-top" href="<?=$f['url'];?>"> <span><?=$f['name'];?></span> </a>
						<ul class="level0">
					<?
							foreach($second_menu as $s){
								$third_menu = $this->home_model->get_third_menu_by_second_menu_id($s['id']);
								// echo "<pre>"; print_r($third_menu); echo "</pre>";
								if(!$third_menu){
					?>
							<li class="level1 first"><a href="<?=$s['url'];?>"><span><?=$s['name'];?></span></a></li>
					<?
									
								}
								elseif($third_menu){
					?>
							<li class="level1 nav-1-1 first parent"> <a href="<?=$s['url'];?>"> <span><?=$s['name'];?></span> </a>
							<ul class="level1">
					<?
									foreach($third_menu as $t){
					?>
								<li class="level2 nav-1-1-1 first"> <a href="<?=$t['url'];?>"> <span><?=$t['name'];?></span> </a> </li>
					<?
									}
					?>
							</ul>
							</li>
					<?
								}
							}
					?>
						</ul>
						</li>
					<?
						}
						
					}
					?>
                  </ul>
                </li>
              </ul>
            </li>
          </ul>
          <!--navmenu--> 
        </div>
        
        <!--End mobile-menu -->
        <ul id="nav" class="hidden-xs">
		<?
		$this->load->model('home_model');
		$first_menu = $this->home_model->get_all_first_menu();
		// echo "<pre>"; print_r($first_menu); echo "</pre>";
		
		foreach($first_menu as $f){
			if($f['mega_menu'] == '1'){
		?>
			<li class="level0"> <a class="level-top" href="<?=$f['url'];?>"><span><?=$f['name'];?></span></a>
			<div class="level0-wrapper dropdown-6col">
              <div class="level0-wrapper2">
                <div class="nav-block nav-block-center">
				<ul class="level0">
		<?
				$mega_menu = $this->home_model->get_mega_menu_by_id($f['mega_menu_id']);
				// echo "<pre>"; print_r($mega_menu); echo "</pre>";
				if($mega_menu){
					$mega_menu = $mega_menu[0];
					$mega_menu_links1 = $this->home_model->get_mega_menu_links_by_mega_menu_id($mega_menu['id'],'1');
					$mega_menu_links2 = $this->home_model->get_mega_menu_links_by_mega_menu_id($mega_menu['id'],'2');
					$mega_menu_links3 = $this->home_model->get_mega_menu_links_by_mega_menu_id($mega_menu['id'],'3');
					$mega_menu_links4 = $this->home_model->get_mega_menu_links_by_mega_menu_id($mega_menu['id'],'4');
					$mega_menu_links5 = $this->home_model->get_mega_menu_links_by_mega_menu_id($mega_menu['id'],'5');
					// echo "<pre>"; print_r($mega_menu_links1); echo "</pre>";
		?>
				<li class="level3 nav-6-1 parent item"> <a href="<?=$mega_menu['url_1'];?>"><span><?=$mega_menu['heading_1'];?></span></a> 
				  <ul class="level1">
					<?
					foreach($mega_menu_links1 as $l){
					?>
					<li class="level2 nav-6-1-1"> <a href="<?=$l['url'];?>"><span><?=$l['name'];?></span></a> </li>
					<?
					}
					?>
				  </ul>
				</li>
				<li class="level3 nav-6-1 parent item"> <a href="<?=$mega_menu['url_2'];?>"><span><?=$mega_menu['heading_2'];?></span></a> 
				  <ul class="level1">
					<?
					foreach($mega_menu_links2 as $l){
					?>
					<li class="level2 nav-6-1-1"> <a href="<?=$l['url'];?>"><span><?=$l['name'];?></span></a> </li>
					<?
					}
					?>
				  </ul>
				</li>
				<li class="level3 nav-6-1 parent item"> <a href="<?=$mega_menu['url_3'];?>"><span><?=$mega_menu['heading_3'];?></span></a> 
				  <ul class="level1">
					<?
					foreach($mega_menu_links3 as $l){
					?>
					<li class="level2 nav-6-1-1"> <a href="<?=$l['url'];?>"><span><?=$l['name'];?></span></a> </li>
					<?
					}
					?>
				  </ul>
				</li>
				<li class="level3 nav-6-1 parent item"> <a href="<?=$mega_menu['url_4'];?>"><span><?=$mega_menu['heading_4'];?></span></a> 
				  <ul class="level1">
					<?
					foreach($mega_menu_links4 as $l){
					?>
					<li class="level2 nav-6-1-1"> <a href="<?=$l['url'];?>"><span><?=$l['name'];?></span></a> </li>
					<?
					}
					?>
				  </ul>
				</li>
				<li class="level3 nav-6-1 parent item"> <a href="<?=$mega_menu['url_5'];?>"><span><?=$mega_menu['heading_5'];?></span></a> 
				  <ul class="level1">
					<?
					foreach($mega_menu_links5 as $l){
					?>
					<li class="level2 nav-6-1-1"> <a href="<?=$l['url'];?>"><span><?=$l['name'];?></span></a> </li>
					<?
					}
					?>
				  </ul>
				</li>
		<?
				}
		?>
				</ul>
				</div>
              </div>
            </div>
			</li>
		<?
			}
			else{
			
			$second_menu = $this->home_model->get_second_menu_by_first_menu_id($f['id']);
			// echo "<pre>"; print_r($second_menu); echo "</pre>";
			if(!$second_menu){
		?>
			<li class="level0"><a href="<?=$f['url'];?>"><span><?=$f['name'];?></span> </a></li>
		<?
			}
			elseif($second_menu){
		?>
			<li class="level0 parent drop-menu"><a href="<?=$f['url'];?>"><span><?=$f['name'];?></span> </a>
			<ul class="level1">
		<?
				foreach($second_menu as $s){
					$third_menu = $this->home_model->get_third_menu_by_second_menu_id($s['id']);
					// echo "<pre>"; print_r($third_menu); echo "</pre>";
					if(!$third_menu){
		?>
				<li class="level1 first parent"><a href="<?=$s['url'];?>"><span><?=$s['name'];?></span></a> </li>
		<?
						
					}
					elseif($third_menu){
		?>
				<li class="level1 first parent"><a href="<?=$s['url'];?>"><span><?=$s['name'];?></span></a>
				<ul class="level2">
		<?
						foreach($third_menu as $t){
		?>
					<li class="level2 nav-2-1-1 first"><a href="<?=$t['url'];?>"><span><?=$t['name'];?></span></a></li>
		<?
						}
		?>
				</ul>
				</li>
		<?
					}
				}
		?>
			</ul>
			</li>
		<?
			}
			}
		}
		?>
        </ul>
      </div>
    </div>
  </nav>
  <!-- end nav --> 