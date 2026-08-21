<?
if(!isset($_SESSION['role'])){
	redirect('login');
	exit;
}

// echo "<pre>"; print_r($_SESSION); echo "</pre>";
// echo current_url();
$page = $this->uri->segment(1);
// echo $page;
// if($_SESSION['role']!="admin"){
	// switch ($page) {
    // case "item":
        // redirect('home');
        // break;
    // }
// }
?>
<!DOCTYPE html>
<html lang="en" class="app">
<head>
<meta charset="utf-8" />
<link rel="shortcut icon" href="<? echo base_url();?>images/icon.png" />
<title>Admin Portal</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<link rel="stylesheet" href="<?php echo base_url();?>css/app.v1.css" type="text/css" />
<!--link rel="stylesheet" href="<?php echo base_url();?>css/fpdf.css" type="text/css" /-->
<link rel="stylesheet" href="<?php echo base_url();?>js/datepicker/datepicker.css" type="text/css" />
<link rel="stylesheet" href="<?php echo base_url(); ?>js/calendar/bootstrap_calendar.css" type="text/css" />
<!--[if lt IE 9]> <script src="<?php echo base_url(); ?>js/ie/html5shiv.js"></script> <script src="<?php echo base_url(); ?>js/ie/respond.min.js"></script> <script src="<?php echo base_url(); ?>js/ie/excanvas.js"></script> <![endif]-->
<script>
   var page_url = "<?php echo $page; ?>";
   var base_url = '<?=site_url()?>/';
</script>
<!-- Bootstrap -->
<!-- App -->
<script src="<?php echo base_url(); ?>js/jquery-3.1.0.min.js"></script>
<script src="<?php echo base_url(); ?>js/app.v1.js"></script>
<script src="<?php echo base_url(); ?>js/charts/easypiechart/jquery.easy-pie-chart.js"></script>
<script src="<?php echo base_url(); ?>js/charts/sparkline/jquery.sparkline.min.js"></script>
<script src="<?php echo base_url(); ?>js/charts/flot/jquery.flot.min.js"></script>
<script src="<?php echo base_url(); ?>js/charts/flot/jquery.flot.tooltip.min.js"></script>
<script src="<?php echo base_url(); ?>js/charts/flot/jquery.flot.spline.js"></script>
<script src="<?php echo base_url(); ?>js/charts/flot/jquery.flot.pie.min.js"></script>
<script src="<?php echo base_url(); ?>js/charts/flot/jquery.flot.resize.js"></script>
<script src="<?php echo base_url(); ?>js/charts/flot/jquery.flot.grow.js"></script>
<script src="<?php echo base_url(); ?>js/charts/flot/demo.js"></script>
<script src="<?php echo base_url(); ?>js/calendar/bootstrap_calendar.js"></script>
<script src="<?php echo base_url(); ?>js/calendar/demo.js"></script>
<script src="<?php echo base_url(); ?>js/sortable/jquery.sortable.js"></script>
<script src="<?php echo base_url(); ?>js/app.plugin.js"></script>
<script src="<?php echo base_url(); ?>js/js.js"></script>
<!-- datepicker -->
<script src="<?php echo base_url(); ?>js/datepicker/bootstrap-datepicker.js"></script>

<script src="<?=base_url()?>js/jSignature-master/libs/modernizr.js"></script>
<script src="<?=base_url()?>js/jSignature-master/src/jSignature.js"></script>
<script src="<?=base_url()?>js/jSignature-master/src/plugins/jSignature.CompressorBase30.js"></script>
<script src="<?=base_url()?>js/jSignature-master/src/plugins/jSignature.CompressorSVG.js"></script>
<script src="<?=base_url()?>js/jSignature-master/src/plugins/jSignature.UndoButton.js"></script>
<!--script src="<?//=base_url()?>js/jSignature-master/src/plugins/signhere/jSignature.SignHere.js"></script--> 
<style>.bg-primary{
    background-color: #0e0e0e;}</style>
</head>
<body class="">
<section class="vbox">
  <header class="bg-primary header header-md navbar navbar-fixed-top-xs box-shadow">
    <div class="navbar-header aside-md dk" style="background-color: #ffffff;"> <a class="btn btn-link visible-xs" data-toggle="class:nav-off-screen" data-target="#nav"> <i class="fa fa-bars"></i> </a> <a href="<?php echo site_url('home'); ?>" class="navbar-brand"><img src="<?php echo base_url(); ?>images/logo.png" class="m-r-sm"></a> <a class="btn btn-link visible-xs" data-toggle="dropdown" data-target=".user"> <i class="fa fa-cog"></i> </a> </div>
    
    <ul class="nav navbar-nav navbar-right m-n hidden-xs nav-user user">
      <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <span class="thumb-sm avatar pull-left"> <img src="<?php if(!empty($_SESSION['image'])){echo base_url(); ?>images/<?echo $_SESSION['image'];?><?} else { echo base_url();?>images/a0.jpg<?}?>"> </span> <? echo $_SESSION['name'];?> <b class="caret"></b> </a>
        <ul class="dropdown-menu animated fadeInRight">
          <span class="arrow top"></span>
          <li> <a href="<?php echo site_url('change_password'); ?>">Change Password</a> </li>
          <li class="divider"></li>
          <li> <a href="<?php echo site_url('logout'); ?>" data-toggle="ajaxModal" >Logout</a> </li>
        </ul>
      </li>
    </ul>
  </header>
  <section>
    <section class="hbox stretch">
      <!-- .aside -->
      <aside class="bg-light aside-md hidden-print" id="nav">
        <section class="vbox">
          <section class="w-f scrollable">
            <div class="slim-scroll" data-height="auto" data-disable-fade-out="true" data-distance="0" data-size="10px" data-color="#333333">
              <nav class="nav-primary hidden-xs">
                <div class="text-muted text-sm hidden-nav-xs padder m-t-sm m-b-sm">Start</div>
                <ul class="nav nav-main" data-ride="collapse">
                  <li class="active"> <a href="<?php echo site_url('home'); ?>" class="auto"> <i class="fa fa-tachometer icon"> </i> <span class="font-bold">Dashboard</span> </a> </li>
                  <li> <a href="<?php echo site_url('cms/banners'); ?>" class="auto"> <i class="fa fa-film icon"> </i> <span class="font-bold">Banners</span> </a> </li>
                  <li> <a href="<?php echo site_url('cms/blog'); ?>" class="auto"> <i class="fa fa-book icon"> </i> <span class="font-bold">Blogs</span> </a> </li>
                  <li> <a href="<?php echo site_url('cms/menu'); ?>" class="auto"> <i class="fa fa-bars icon"> </i> <span class="font-bold">Menu</span> </a> </li>
                  <li> <a href="<?php echo site_url('cms/mega_menu'); ?>" class="auto"> <i class="fa fa-bars icon"> </i> <span class="font-bold">Mega Menu</span> </a> </li>
                  <li> <a href="<?php echo site_url('cms/mega_menu_links'); ?>" class="auto"> <i class="fa fa-bars icon"> </i> <span class="font-bold">Mega Menu Links</span> </a> </li>
                  <li> <a href="<?php echo site_url('cms/home_section_1'); ?>" class="auto"> <i class="fa fa-bars icon"> </i> <span class="font-bold">Home Section 1</span> </a> </li>
                  <li> <a href="<?php echo site_url('cms/home_clients'); ?>" class="auto"> <i class="fa fa-users icon"> </i> <span class="font-bold">Home Clients</span> </a> </li>
                  <li> <a href="<?php echo site_url('cms/home_section_2'); ?>" class="auto"> <i class="fa fa-bars icon"> </i> <span class="font-bold">Home Section 2</span> </a> </li>
                  <li> <a href="<?php echo site_url('cms/home_testimonials'); ?>" class="auto"> <i class="fa fa-pencil icon"> </i> <span class="font-bold">Home Testimonials</span> </a> </li>
                  <li> <a href="<?php echo site_url('cms/footer_links'); ?>" class="auto"> <i class="fa fa-bars icon"> </i> <span class="font-bold">Footer Links</span> </a> </li>
                  <li> <a href="<?php echo site_url('cms/citywise'); ?>" class="auto"> <i class="fa fa-bars icon"> </i> <span class="font-bold">City Wise</span> </a> </li>
                  <li> <a href="<?php echo site_url('cms/main_category'); ?>" class="auto"> <i class="fa fa-bars icon"> </i> <span class="font-bold">Main Category</span> </a> </li>
                  <li> <a href="<?php echo site_url('cms/sub_category'); ?>" class="auto"> <i class="fa fa-bars icon"> </i> <span class="font-bold">Sub Category</span> </a> </li>
                  <li> <a href="<?php echo site_url('cms/products_color_options'); ?>" class="auto"> <i class="fa fa-bars icon"> </i> <span class="font-bold">Product Color Options</span> </a> </li>
                  <li> <a href="<?php echo site_url('cms/products_stock_options'); ?>" class="auto"> <i class="fa fa-bars icon"> </i> <span class="font-bold">Product Stock Options</span> </a> </li>
                  <li> <a href="<?php echo site_url('cms/products_type_options'); ?>" class="auto"> <i class="fa fa-bars icon"> </i> <span class="font-bold">Product Type Options</span> </a> </li>
                  <li> <a href="<?php echo site_url('cms/products'); ?>" class="auto"> <i class="fa fa-bars icon"> </i> <span class="font-bold">Products</span> </a> </li>
                  <li> <a href="<?php echo site_url('cms/products_images'); ?>" class="auto"><i class="fa fa-bars icon"> </i>  <span class="font-bold">Product Images</span> </a> </li>
                  <li> <a href="<?php echo site_url('cms/name_link'); ?>" class="auto"> <i class="i i-bars icon"> </i> </i> <span class="font-bold">name_links</span> </a> </li>
                  <li> <a href="<?php echo site_url('cms/products_prices'); ?>" class="auto"> <i class="fa fa-dollar icon"> </i> <span class="font-bold">Product Prices</span> </a> </li>
                  <li> <a href="<?php echo site_url('cms/reviews'); ?>" class="auto"> <i class="fa fa-pencil icon"> </i> <span class="font-bold">Product Reviews</span> </a> </li>
                  <li> <a href="<?php echo site_url('cms/static_pages'); ?>" class="auto"> <i class="fa fa-files-o icon"> </i> <span class="font-bold">Static Pages</span> </a> </li>
                  <li> <a href="<?php echo site_url('cms/site_settings'); ?>" class="auto"> <i class="fa fa-gears icon"> </i> <span class="font-bold">Site Settings</span> </a> </li>
                  <li> <a href="<?php echo site_url('cms/users'); ?>" class="auto"> <i class="fa fa-user icon"> </i> <span class="font-bold">Users</span> </a> </li>
                  
                </ul>
                <div class="line dk hidden-nav-xs"></div>
              </nav>
              <!-- / nav -->
            </div>
          </section>
          <footer class="footer hidden-xs no-padder text-center-nav-xs"> <a href="#nav" data-toggle="class:nav-xs" class="btn btn-icon icon-muted btn-inactive m-l-xs m-r-xs"> <i class="i i-circleleft text"></i> <i class="i i-circleright text-active"></i> </a> </footer>
        </section>
      </aside>
      <!-- /.aside -->