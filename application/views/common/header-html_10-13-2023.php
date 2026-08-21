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
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
<title><?=$meta_title;?></title>

<!-- Favicons Icon -->
<link rel="icon" href="<?=base_url().'files/images/'.$this->site_settings['favicon'];?>" type="image/x-icon" />
<link rel="shortcut icon" href="<?=base_url().'files/images/'.$this->site_settings['favicon'];?>" type="image/x-icon" />

<!-- Mobile Specific -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="ROBOTS" content="NOINDEX, NOFOLLOW">
<meta name="description" content="<?=$meta_description;?>">
<meta name="keywords" content="<?=$meta_keywords;?>">

<link rel="preload" href="fonts/riode115b.ttf?5gap68" as="font" type="font/woff2" crossorigin="anonymous">
<link rel="preload" href="<?=base_url();?>files/vendor/fontawesome-free/webfonts/fa-solid-900.woff2" as="font" type="font/woff2" crossorigin="anonymous">
<link rel="preload" href="<?=base_url();?>files/vendor/fontawesome-free/webfonts/fa-brands-400.woff2" as="font" type="font/woff2" crossorigin="anonymous">
<script>
        WebFontConfig = {
            google: { families: ['Poppins:300,400,500,600,700,800'] }
        };
        (function (d) {
            var wf = d.createElement('script'), s = d.scripts[0];
            wf.src = 'js/webfont.js';
            wf.async = true;
            s.parentNode.insertBefore(wf, s);
        })(document);
    </script>
<link rel="stylesheet" type="text/css" href="<?=base_url();?>files/vendor/fontawesome-free/css/all.min.css">
<link rel="stylesheet" type="text/css" href="<?=base_url();?>files/vendor/animate/animate.min.css">

<link rel="stylesheet" type="text/css" href="<?=base_url();?>files/vendor/magnific-popup/magnific-popup.min.css">
<link rel="stylesheet" type="text/css" href="<?=base_url();?>files/vendor/owl-carousel/owl.carousel.min.css">
<link rel="stylesheet" type="text/css" href="<?=base_url();?>files/vendor/sticky-icon/stickyicon.css">
<link rel="stylesheet" type="text/css" href="<?=base_url();?>files/css/style.min.css">
<!-- <link rel="stylesheet" type="text/css" href="<?=base_url();?>files/css/demo1.min.css">-->
<style>
.header-top .divider {
  margin: 0 2rem 0 2rem;
}
</style>

<?=$this->site_settings['header_html'];?>
<script type="text/javascript" id="zsiqchat">var $zoho=$zoho || {};$zoho.salesiq = $zoho.salesiq || {widgetcode: "siqeee80db5aef1cc26950de74d4dc8375e75cafeed935fc51cb7632214b037db76", values:{},ready:function(){}};var d=document;s=d.createElement("script");s.type="text/javascript";s.id="zsiqscript";s.defer=true;s.src="https://salesiq.zohopublic.com/widget";t=d.getElementsByTagName("script")[0];t.parentNode.insertBefore(s,t);</script>
</head>
<body class="home">
      <div class="page-wrapper">
         <header class="header">
            <div class="header-top">
               <div class="container">
                  <div class="header-left">
                     <p class="welcome-msg"><a href="mailto:<?=$this->site_settings['email'];?>"><?=$this->site_settings['email'];?></a></p><span class="divider"></span> 
					 <p class="welcome-msg"><a href="tel:<?=$this->site_settings['phone'];?>"><?=$this->site_settings['phone'];?></a></p><span class="divider"></span>
					 <p class="welcome-msg"><a href="#">Free Delivery </a></p><span class="divider"></span>
					 <p class="welcome-msg"><a href="#">Free Design Support</a></p>
                  </div>
                  <div class="header-right">
                     <p class="welcome-msg"><img width="50px" src="<?=base_url();?>files/images/uk.webp"></p> 
					 <p class="welcome-msg"><img width="50px" src="<?=base_url();?>files/images/au.webp"></p>
					 <p class="welcome-msg"><img width="50px" src="<?=base_url();?>files/images/ca.webp"> </p>
					 <p class="welcome-msg"><img width="50px" src="<?=base_url();?>files/images/usa.webp"></p>
                  </div>                  
               </div>
            </div>
            <div class="header-middle sticky-header fix-top sticky-content">
               <div class="container">
                  <div class="header-left">
                     <a href="#" class="mobile-menu-toggle">
                     <i class="d-icon-bars2"></i>
                     </a>
                     <a href="<?=base_url();?>" class="logo">
                     <img alt="<?=$this->site_settings['alt_logo'];?>" src="<?=base_url();?>files/images/<?=$this->site_settings['logo'];?>" />
                     </a>
                     <div class="header-search hs-simple">
                        <form  action="<?= base_url('search'); ?>" method="GET" id="search_mini_form"  class="input-wrapper">
                           <input type="text" class="form-control"  name="keyword" id="search" autocomplete="off" placeholder="Search..." required />
                           <button class="btn btn-search" id="submit-button" type="submit" title="submit-button">
                           <i class="d-icon-search"></i>
                           </button>
                        </form>
                     </div>
                  </div>
                  <div class="header-right">
                     <a href="tel:<?=$this->site_settings['phone'];?>" class="icon-box icon-box-side">
                        <div class="icon-box-content d-lg-show">
                           <p><a href="tel:<?=$this->site_settings['phone'];?>"><button class="btn btn-rounded btn-outline btn-success">Call Now</button></a></p>
                        </div>
                     </a>
                     
                  </div>
               </div>
            </div>
            <div class="header-bottom d-lg-show">
               <div class="container " style="justify-content: center;">
                  <div class="header-center">
                     <nav class="main-nav">
                        <ul class="menu">

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
								$mega_menu = $mega_menu[0];
								$mega_menu_links1 = $this->home_model->get_mega_menu_links_by_mega_menu_id($mega_menu['id'],'1');
								$mega_menu_links2 = $this->home_model->get_mega_menu_links_by_mega_menu_id($mega_menu['id'],'2');
								$mega_menu_links3 = $this->home_model->get_mega_menu_links_by_mega_menu_id($mega_menu['id'],'3');
								$mega_menu_links4 = $this->home_model->get_mega_menu_links_by_mega_menu_id($mega_menu['id'],'4');
								// echo "<pre>"; print_r($mega_menu_links1); echo "</pre>";
						?>						   
                           <li>
                              <a href="<?= $f['url']; ?>"><?=$f['name'];?></a>
                              <div class="megamenu">
                                 <div class="row">
                                    <div class="col-6 col-sm-4 col-md-4 col-lg-3">
                                       <h4 class="menu-title"><a href="<?=$mega_menu['url_1'];?>"><?=$mega_menu['heading_1'];?></a></h4>
                                       <ul>
										<?
										foreach($mega_menu_links1 as $l){
										?>									   
                                          <li><a href="<?=$l['url'];?>"><?=$l['name'];?></a></li>
										<?
										}
										?>
                                    </div>
                                    <div class="col-6 col-sm-4 col-md-4 col-lg-3">
                                       <h4 class="menu-title"><a href="<?=$mega_menu['url_2'];?>"><?=$mega_menu['heading_2'];?></a></h4>
                                       <ul>
										<?
										foreach($mega_menu_links2 as $l){
										?>									   
                                          <li><a href="<?=$l['url'];?>"><?=$l['name'];?></a></li>
										<?
										}
										?>
                                    </div>
                                    <div class="col-6 col-sm-4 col-md-4 col-lg-3">
                                       <h4 class="menu-title"><a href="<?=$mega_menu['url_3'];?>"><?=$mega_menu['heading_3'];?></a></h4>
                                       <ul>
										<?
										foreach($mega_menu_links3 as $l){
										?>									   
                                          <li><a href="<?=$l['url'];?>"><?=$l['name'];?></a></li>
										<?
										}
										?>
                                    </div>									
                                    <div class="col-6 col-sm-4 col-md-4 col-lg-3">
                                       <h4 class="menu-title"><a href="<?=$mega_menu['url_4'];?>"><?=$mega_menu['heading_4'];?></a></h4>
                                       <ul>
										<?
										foreach($mega_menu_links4 as $l){
										?>									   
                                          <li><a href="<?=$l['url'];?>"><?=$l['name'];?></a></li>
										<?
										}
										?>
                                    </div>	                                   
                                 </div>
                              </div>
                           </li>
							<?
								}
								elseif($second_menu){
							?>						                             
                           <li>
                              <a href="<?=$f['url'];?>"><?=$f['name'];?></a>
                              <ul>
								<?
										foreach($second_menu as $s){
											$third_menu = $this->home_model->get_third_menu_by_second_menu_id($s['id']);
											// echo "<pre>"; print_r($third_menu); echo "</pre>";
											
											if(!$third_menu){
								?>							  
                                 <li><a href="<?=$s['url'];?>"><?=$s['name'];?></a></li>
								<?
									}
									elseif($third_menu){
								?>								 
                                 <li>
                                    <a href="<?=$s['url'];?>"><?=$s['name'];?></a>
                                    <ul style="column-count: 3;min-width: 50rem;">
									<?
										foreach($third_menu as $t){
									?>									
                                       <li><a href="<?=$t['url'];?>"><?=$t['name'];?></a></li>
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
							elseif(!$second_menu){
						?>		
                           <li>
                              <a href="<?=$f['url'];?>"><?=$f['name'];?></a>
                           </li>
						<?
							}
						}
						?>							   
                        </ul>
                     </nav>
                  </div>
               </div>
            </div>
         </header>
