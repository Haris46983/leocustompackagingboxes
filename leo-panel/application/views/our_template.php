<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
 
<?php 
foreach($css_files as $file): ?>
    <link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
 
<?php endforeach; ?>
<?php foreach($js_files as $file): ?>
 
    <script src="<?php echo $file; ?>"></script>
<?php endforeach; ?>
 
</head>
<body>
    <section id="content">
	<section class="hbox stretch">
	<section class="vbox">
	<section class="scrollable padder">
	<section class="row m-b-md">
		<div style='height:20px;'></div>
		<div class="col-xs-12 panel panel-body">
		<?php echo $output; ?>
		</div>
    </section>
    </section>
    </section>
    </section>
    </section>
</body>
</html>