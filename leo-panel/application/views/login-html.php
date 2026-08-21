<!DOCTYPE html>
<html lang="en" class="app">
<head>
<meta charset="utf-8" />
<link rel="shortcut icon" href="<? echo base_url();?>images/icon.png" />
<title>Admin Portal</title>
<meta name="ROBOTS" content="NOINDEX, NOFOLLOW">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<link rel="stylesheet" href="<?php echo base_url(); ?>css/app.v1.css" type="text/css" />
<!--[if lt IE 9]> <script src="<?php echo base_url(); ?>js/ie/html5shiv.js"></script> <script src="<?php echo base_url(); ?>js/ie/respond.min.js"></script> <script src="<?php echo base_url(); ?>js/ie/excanvas.js"></script> <![endif]-->
<script src="<?php echo base_url(); ?>js/jquery-3.1.0.min.js"></script>
<style>.form-control{
color:#FFF !important;}</style>
</head>
<body class="" style="background: #bf8f009e;">
<section id="content" class="m-t-lg wrapper-md animated fadeInUp">
  <div class="container aside-xl"> <a class="navbar-brand block" href="<?=base_url();?>"><img src="<?php echo base_url(); ?>images/logo.png" class="m-r-sm" style="white-space: nowrap;width: 100%;max-height:200px"></a>
    <section class="m-b-lg">
      <!--form method="POST" action="<?php //echo site_url('login') ?>"-->
	
	<?php echo form_open('authentication'); ?>
        <div class="text-center m-t m-b" style="color:green;"><?php if(isset($success_message)) echo $success_message; ?></div>
        <div class="list-group">
          <div class="list-group-item" style="margin-top:15px; background-color: #fff0;">
            <input style="background-color: #fff0;" type="text" name="username" placeholder="Username" class="form-control no-border" required>
          </div>
          <div class="list-group-item" style="margin-top:15px; background-color: #fff0;">
            <input style="background-color: #fff0;" type="password" name="password" placeholder="Password" class="form-control no-border" required>
          </div>
        </div>
        <button type="submit" class="btn btn-lg btn-primary btn-block" style="background: black;border: 1px solid black;color: red;">Sign in</button>
		
        <div class="text-center m-t m-b" style="color:red;"><?php if(isset($error_message)) echo $error_message; ?></div>
        <div class="line line-dashed"></div>
      </form>
	</section>
  </div>
</section>
<!-- footer -->

<!-- / footer -->
<!-- Bootstrap -->
<!-- App -->
<script src="<?php echo base_url(); ?>js/app.v1.js"></script>
<script src="<?php echo base_url(); ?>js/app.plugin.js"></script>
<script>
function fgpass(){
	$('#forgotpass').slideToggle();
}
</script>
</body>
</html>