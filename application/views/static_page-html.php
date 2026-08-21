  <main class="main">
		<nav class="breadcrumb-nav">
		   <div class="container">
			  <ul class="breadcrumb">
				 <li><a href="<?=base_url();?>"><i class="d-icon-home"></i></a></li>
				 <li><a href="#" class="active"><?=$data['title'];?></a></li> 
			  </ul>
		   </div>
		</nav>
		 <div class="page-content with-sidebar">
		   <div class="container">
			  <div class="row gutter-lg">
				 <?=$data['text'];?>
			  </div>
		   </div>
		</div>		
	</main>	