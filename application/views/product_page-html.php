<style>
    .tab-nav-simple .nav-item .nav-link.active, .tab-nav-simple .nav-item.show .nav-link, .tab-nav-simple .nav-item:hover .nav-link {
    border-bottom-color: #ffb700;
}
</style>
         <main class="main mt-6 single-product">
            <div class="page-content mb-10 pb-6">
               <div class="container">
				<?
					$p_images = $this->home_model->get_product_images($data['id']);
					// echo "<pre>"; print_r($p_images); echo "</pre>";
				?>
						   
                  <div class="product product-single row mb-7">
                     <div class="col-md-6 sticky-sidebar-wrapper">
                        <div class="product-gallery  sticky-sidebar" data-sticky-options="{'minWidth': 767}">
                           <div class="product-single-carousel owl-carousel owl-theme owl-nav-inner row cols-1 gutter-no">
							<?
							$reviews = count($all_reviews);
							@$total_rating = round($rating['rating']/$reviews,2);
							$total_rating_percent = round($total_rating*20,2);
							
							$x = 0;
							$active = "moreview_thumb_active";
							foreach($p_images as $img){
							$x++;
							?>						   
                              <figure class="product-image">
                                 <img src="<?=base_url();?>files/images/<?=$img['image'];?>" data-zoom-image="<?=base_url();?>files/images/<?=$img['image'];?>" alt="<?=$img['alt_image'];?>" width="800" height="900">
                              </figure>
							<?
							$active = "";
							}
							?>			
                           </div>
                           <div class="product-thumbs-wrap">
                              <div class="product-thumbs">
							<?
							$reviews = count($all_reviews);
							@$total_rating = round($rating['rating']/$reviews,2);
							$total_rating_percent = round($total_rating*20,2);
							
							$x = 0;
							$active = "moreview_thumb_active";
							foreach($p_images as $img){
							$x++;
							?>								  
                                 <div class="product-thumb <?=$active;?>">
                                    <img src="<?=base_url();?>files/images/<?=$img['image'];?>" alt="<?=$img['alt_image'];?>" width="109" height="122">
                                 </div>
							<?
							$active = "";
							}
							?>		
                              </div>
                              <button class="thumb-up disabled"><i class="fas fa-chevron-left"></i></button>
                              <button class="thumb-down disabled"><i class="fas fa-chevron-right"></i></button>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="product-details">
                           <div class="product-navigation">
                              <ul class="breadcrumb breadcrumb-lg">

							  <li> <a href="<?=base_url();?>"><i class="d-icon-home"></i></li>
							  <li class=""> <a href="<?=base_url($main_category['seokey']);?>"><?=$main_category['name'];?></a></li>
							  <li class=""> <a href="<?=base_url($main_category['seokey'].'/'.$sub_category['seokey']);?>"><?=$sub_category['name'];?></a></li>
							  <li class="category13"><strong><?=$data['name'];?></strong></li>								 
                              </ul>
                              
                           </div>
                           <h1 class="product-name"><?=$data['name'];?></h1>

                           <p class="product-short-desc"><?=$data['upper_description'];?>
                           </p>
                  <div class="tab tab-nav-simple product-tabs" style="background-color: #fff;border-radius: 15px;box-shadow: 0 0 10px rgb(255 182 0);padding: 15px;">
                     <ul class="nav nav-tabs justify-content-center" role="tablist">
                        <li class="nav-item">
                           <a class="nav-link active" href="#product-tab-description">Request A Quote</a>
                        </li> 
                     </ul>
                     <div class="tab-content">
                        <div class="tab-pane active in" id="product-tab-description">
                           <div class="row mt-6">
                              				<?
				if($this->session->flashdata('quote_form_success')){
				?>
				<div class="alert alert-success"><?=$this->session->flashdata('quote_form_success');?></div>
				<?
				}
				if($this->session->flashdata('quote_form_alert')){
				?>
				<div class="alert alert-danger"><?=$this->session->flashdata('quote_form_alert');?></div>
				<?
				}
				?>
			<form action="<?=base_url('home/request_quote');?>" method="post" class="product-form-style order-form" enctype="multipart/form-data">
				<input type="hidden" name="return_url" value="<?=current_url();?>" readonly>
				<div class="row">
					<div class="form-group col-md-4 col-xs-12">
						<label for="">Name<span class="required">*</span></label>
						<input type="text" name="name" value="" placeholder="" required="" class="form-control"> </div>
					<div class="form-group col-md-4 col-xs-12">
						<label for="">E-mail<span class="required">*</span></label>
						<input type="email" name="email" value="" placeholder="" required="" class="form-control"> </div>
					<div class="form-group col-md-4 col-xs-12">
						<label for="">Contact<span class="required">*</span></label>
						<input type="text" name="phone" value="" placeholder="" class="form-control"> </div>
				</div>
				<div class="row">
					<div class="col-md-3">
						<label>Length</label>
						<input type="text" name="length" class="form-control"> </div>
					<div class="col-md-3">
						<label>Width</label>
						<input type="text" name="width" class="form-control"> </div>
					<div class="col-md-3">
						<label>Height</label>
						<input type="text" name="height" class="form-control"> </div>
					<div class="col-md-3 col-sm-6 col-xs-12">
						<label for="">Unit <span class="required">*</span></label>
						<select name="unit" class="form-control">
							<option value="Inch">inch</option>
							<option value="cm">cm</option>
							<option value="mm">mm</option>
						</select>
					</div>
				</div>
				<div class="row pd_dnw">
					<div class="form-group col-md-4 col-xs-12">
						<label for="">Product<span class="required">*</span></label>
						<input type="text" name="product" value="<?=$data['name'];?>" required="" class="form-control" readonly> </div>
					<div class="col-md-4">
						<label>Paper Stock *</label>
						<select class="form-control" name="stock">
						<?
						foreach($stock as $s){
						?>
							<option value="<?=$s['title'];?>"><?=$s['title'];?></option>
						<?
						}
						?>
						</select>
					</div>
					<div class="col-md-4">
						<label>Color *</label>
						<select class="form-control" name="color">
						<?
						foreach($color as $s){
						?>
							<option value="<?=$s['title'];?>"><?=$s['title'];?></option>
						<?
						}
						?>
						</select>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<label>Quantity</label>
						<input type="text" name="qty" id="qty" value="" class="form-control"> </div>
					<div class="col-md-4">
						<label>Quantity 2 </label>
						<input type="text" name="qty2" id="qty2" value="" class="form-control"> </div>
					<div class="col-md-4">
						<label>Quantity 3</label>
						<input type="text" name="qty3" id="qty3" value="" class="form-control"> </div>
				</div>
				<br>
				<div class="row">
					<div class="col-md-12 text-center">
						<button class="btn btn-rounded btn-outline btn-success mt-3" style="color: #ffb600;border-color: #ffb800;" name="btnSubmit" value="Get Quote" type="submit">Request Quote</button>
					</div>
				</div>
			</form>
                           </div>
                        </div>
                        
                     </div>
                  </div>                           
                        </div>
                     </div>
                  </div>
                <div class="tab tab-nav-simple product-tabs">
                     <ul class="nav nav-tabs justify-content-center" role="tablist">
                        <li class="nav-item">
                           <a class="nav-link active" href="#product-tab-description">Materials</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="#product-tab-additional">Ad-Ons & Finishing</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="#product-tab-size-guide">Paper Weight</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="#product-tab-reviews">Shipping</a>
                        </li>
                     </ul>
                     <div class="tab-content">
                        <div class="tab-pane active in" id="product-tab-description">
                           <div class="row">
                               <div class="col-md-4">
                                   <?=$data['materials'];?>
                               </div>
                               <div class="col-md-8">
                                   <div class="owl-carousel owl-theme row cols-2 cols-md-3 cols-lg-4 cols-xl-5" data-owl-options="{
                     'items': 4,
                     'nav': false,
                     'loop': false,
                     'dots': true,
                     'margin': 20,
                     'responsive': {
                     '0': {
                     'items': 2
                     },
                     '768': {
                     'items': 3
                     },
                     '992': {
                     'items': 4
                     },
                     '1200': {
                     'items': 5,
                     'dots': false,
                     'nav': true
                     }
                     }
                     }">
				 
                     <div class="product text-center">
                        <figure class="product-media">
                           <a href="#">
                           <img src="<?=base_url();?>files/1.webp"  width="280" height="315" style="background-color: #f2f3f5;" />
                           </a>						   
                        </figure>
                        <div class="product-details">

                           <h3 class="product-name">
                              <a href="#">Kraft</a>
                           </h3>

                        </div>
                     </div>
                      <div class="product text-center">
                        <figure class="product-media">
                          <a href="#">
                           <img src="<?=base_url();?>files/2.webp"  width="280" height="315" style="background-color: #f2f3f5;" />
                           </a>						   
                        </figure>
                        <div class="product-details">

                           <h3 class="product-name">
                              <a href="#">Kraft</a>
                           </h3>

                        </div>
                     </div>  
                      <div class="product text-center">
                        <figure class="product-media">
                          <a href="#">
                           <img src="<?=base_url();?>files/3.webp"  width="280" height="315" style="background-color: #f2f3f5;" />
                           </a>						   
                        </figure>
                        <div class="product-details">

                           <h3 class="product-name">
                              <a href="#">Kraft</a>
                           </h3>

                        </div>
                     </div>
                      <div class="product text-center">
                        <figure class="product-media">
                           <a href="#">
                           <img src="<?=base_url();?>files/4.webp"  width="280" height="315" style="background-color: #f2f3f5;" />
                           </a>						   
                        </figure>
                        <div class="product-details">

                           <h3 class="product-name">
                              <a href="#">Kraft</a>
                           </h3>

                        </div>
                     </div> 
                     <div class="product text-center">
                        <figure class="product-media">
                           <a href="#">
                           <img src="<?=base_url();?>files/1.webp"  width="280" height="315" style="background-color: #f2f3f5;" />
                           </a>						   
                        </figure>
                        <div class="product-details">

                           <h3 class="product-name">
                              <a href="#">Kraft</a>
                           </h3>

                        </div>
                     </div>
                      <div class="product text-center">
                        <figure class="product-media">
                          <a href="#">
                           <img src="<?=base_url();?>files/2.webp"  width="280" height="315" style="background-color: #f2f3f5;" />
                           </a>						   
                        </figure>
                        <div class="product-details">

                           <h3 class="product-name">
                              <a href="#">Kraft</a>
                           </h3>

                        </div>
                     </div>  
                      <div class="product text-center">
                        <figure class="product-media">
                           <a href="#">
                           <img src="<?=base_url();?>files/3.webp"  width="280" height="315" style="background-color: #f2f3f5;" />
                           </a>						   
                        </figure>
                        <div class="product-details">

                           <h3 class="product-name">
                              <a href="#">Kraft</a>
                           </h3>

                        </div>
                     </div>
                      <div class="product text-center">
                        <figure class="product-media">
                           <a href="#">
                           <img src="<?=base_url();?>files/4.webp"  width="280" height="315" style="background-color: #f2f3f5;" />
                           </a>						   
                        </figure>
                        <div class="product-details">

                           <h3 class="product-name">
                              <a href="#">Kraft</a>
                           </h3>

                        </div>
                     </div>                      
                  </div>
                               </div>                               
                           </div>
                        </div>
                        <div class="tab-pane" id="product-tab-additional">

                <div class="row">
                               <div class="col-md-4">
                                   <?=$data['ad-ons-finishing'];?>
                               </div>
                               <div class="col-md-8">
                                   <div class="owl-carousel owl-theme row cols-2 cols-md-3 cols-lg-4 cols-xl-5" data-owl-options="{
                     'items': 4,
                     'nav': false,
                     'loop': false,
                     'dots': true,
                     'margin': 20,
                     'responsive': {
                     '0': {
                     'items': 2
                     },
                     '768': {
                     'items': 3
                     },
                     '992': {
                     'items': 4
                     },
                     '1200': {
                     'items': 5,
                     'dots': false,
                     'nav': true
                     }
                     }
                     }">
				 
                     <div class="product text-center">
                        <figure class="product-media">
                           <a href="#">
                           <img src="<?=base_url();?>files/1.webp"  width="280" height="315" style="background-color: #f2f3f5;" />
                           </a>						   
                        </figure>
                        <div class="product-details">

                           <h3 class="product-name">
                              <a href="#">Kraft</a>
                           </h3>

                        </div>
                     </div>
                      <div class="product text-center">
                        <figure class="product-media">
                          <a href="#">
                           <img src="<?=base_url();?>files/2.webp"  width="280" height="315" style="background-color: #f2f3f5;" />
                           </a>						   
                        </figure>
                        <div class="product-details">

                           <h3 class="product-name">
                              <a href="#">Kraft</a>
                           </h3>

                        </div>
                     </div>  
                      <div class="product text-center">
                        <figure class="product-media">
                          <a href="#">
                           <img src="<?=base_url();?>files/3.webp"  width="280" height="315" style="background-color: #f2f3f5;" />
                           </a>						   
                        </figure>
                        <div class="product-details">

                           <h3 class="product-name">
                              <a href="#">Kraft</a>
                           </h3>

                        </div>
                     </div>
                      <div class="product text-center">
                        <figure class="product-media">
                           <a href="#">
                           <img src="<?=base_url();?>files/4.webp"  width="280" height="315" style="background-color: #f2f3f5;" />
                           </a>						   
                        </figure>
                        <div class="product-details">

                           <h3 class="product-name">
                              <a href="#">Kraft</a>
                           </h3>

                        </div>
                     </div> 
                     <div class="product text-center">
                        <figure class="product-media">
                           <a href="#">
                           <img src="<?=base_url();?>files/1.webp"  width="280" height="315" style="background-color: #f2f3f5;" />
                           </a>						   
                        </figure>
                        <div class="product-details">

                           <h3 class="product-name">
                              <a href="#">Kraft</a>
                           </h3>

                        </div>
                     </div>
                      <div class="product text-center">
                        <figure class="product-media">
                          <a href="#">
                           <img src="<?=base_url();?>files/2.webp"  width="280" height="315" style="background-color: #f2f3f5;" />
                           </a>						   
                        </figure>
                        <div class="product-details">

                           <h3 class="product-name">
                              <a href="#">Kraft</a>
                           </h3>

                        </div>
                     </div>  
                      <div class="product text-center">
                        <figure class="product-media">
                           <a href="#">
                           <img src="<?=base_url();?>files/3.webp"  width="280" height="315" style="background-color: #f2f3f5;" />
                           </a>						   
                        </figure>
                        <div class="product-details">

                           <h3 class="product-name">
                              <a href="#">Kraft</a>
                           </h3>

                        </div>
                     </div>
                      <div class="product text-center">
                        <figure class="product-media">
                           <a href="#">
                           <img src="<?=base_url();?>files/4.webp"  width="280" height="315" style="background-color: #f2f3f5;" />
                           </a>						   
                        </figure>
                        <div class="product-details">

                           <h3 class="product-name">
                              <a href="#">Kraft</a>
                           </h3>

                        </div>
                     </div>                      
                  </div>
                               </div>                               
                           </div>                            
                        </div>
                        
                        <div class="tab-pane" id="product-tab-size-guide">

<div class="row">
                               <div class="col-md-4">
                                   <?=$data['paper-weight'];?>
                               </div>
                               <div class="col-md-8">
                                   <div class="owl-carousel owl-theme row cols-2 cols-md-3 cols-lg-4 cols-xl-5" data-owl-options="{
                     'items': 4,
                     'nav': false,
                     'loop': false,
                     'dots': true,
                     'margin': 20,
                     'responsive': {
                     '0': {
                     'items': 2
                     },
                     '768': {
                     'items': 3
                     },
                     '992': {
                     'items': 4
                     },
                     '1200': {
                     'items': 5,
                     'dots': false,
                     'nav': true
                     }
                     }
                     }">
				 
                     <div class="product text-center">
                        <figure class="product-media">
                           <a href="#">
                           <img src="<?=base_url();?>files/1.webp"  width="280" height="315" style="background-color: #f2f3f5;" />
                           </a>						   
                        </figure>
                        <div class="product-details">

                           <h3 class="product-name">
                              <a href="#">Kraft</a>
                           </h3>

                        </div>
                     </div>
                      <div class="product text-center">
                        <figure class="product-media">
                          <a href="#">
                           <img src="<?=base_url();?>files/2.webp"  width="280" height="315" style="background-color: #f2f3f5;" />
                           </a>						   
                        </figure>
                        <div class="product-details">

                           <h3 class="product-name">
                              <a href="#">Kraft</a>
                           </h3>

                        </div>
                     </div>  
                      <div class="product text-center">
                        <figure class="product-media">
                          <a href="#">
                           <img src="<?=base_url();?>files/3.webp"  width="280" height="315" style="background-color: #f2f3f5;" />
                           </a>						   
                        </figure>
                        <div class="product-details">

                           <h3 class="product-name">
                              <a href="#">Kraft</a>
                           </h3>

                        </div>
                     </div>
                      <div class="product text-center">
                        <figure class="product-media">
                           <a href="#">
                           <img src="<?=base_url();?>files/4.webp"  width="280" height="315" style="background-color: #f2f3f5;" />
                           </a>						   
                        </figure>
                        <div class="product-details">

                           <h3 class="product-name">
                              <a href="#">Kraft</a>
                           </h3>

                        </div>
                     </div> 
                     <div class="product text-center">
                        <figure class="product-media">
                           <a href="#">
                           <img src="<?=base_url();?>files/1.webp"  width="280" height="315" style="background-color: #f2f3f5;" />
                           </a>						   
                        </figure>
                        <div class="product-details">

                           <h3 class="product-name">
                              <a href="#">Kraft</a>
                           </h3>

                        </div>
                     </div>
                      <div class="product text-center">
                        <figure class="product-media">
                          <a href="#">
                           <img src="<?=base_url();?>files/2.webp"  width="280" height="315" style="background-color: #f2f3f5;" />
                           </a>						   
                        </figure>
                        <div class="product-details">

                           <h3 class="product-name">
                              <a href="#">Kraft</a>
                           </h3>

                        </div>
                     </div>  
                      <div class="product text-center">
                        <figure class="product-media">
                           <a href="#">
                           <img src="<?=base_url();?>files/3.webp"  width="280" height="315" style="background-color: #f2f3f5;" />
                           </a>						   
                        </figure>
                        <div class="product-details">

                           <h3 class="product-name">
                              <a href="#">Kraft</a>
                           </h3>

                        </div>
                     </div>
                      <div class="product text-center">
                        <figure class="product-media">
                           <a href="#">
                           <img src="<?=base_url();?>files/4.webp"  width="280" height="315" style="background-color: #f2f3f5;" />
                           </a>						   
                        </figure>
                        <div class="product-details">

                           <h3 class="product-name">
                              <a href="#">Kraft</a>
                           </h3>

                        </div>
                     </div>                      
                  </div>
                               </div>                               
                           </div>                            
                        </div>                        
                        <div class="tab-pane" id="product-tab-reviews">

 <div class="row">
                               <div class="col-md-4">
                                   <?=$data['shipping'];?>
                               </div>
                               <div class="col-md-8">
                                   <div class="owl-carousel owl-theme row cols-2 cols-md-3 cols-lg-4 cols-xl-5" data-owl-options="{
                     'items': 4,
                     'nav': false,
                     'loop': false,
                     'dots': true,
                     'margin': 20,
                     'responsive': {
                     '0': {
                     'items': 2
                     },
                     '768': {
                     'items': 3
                     },
                     '992': {
                     'items': 4
                     },
                     '1200': {
                     'items': 5,
                     'dots': false,
                     'nav': true
                     }
                     }
                     }">
				 
                     <div class="product text-center">
                        <figure class="product-media">
                           <a href="#">
                           <img src="<?=base_url();?>files/1.webp"  width="280" height="315" style="background-color: #f2f3f5;" />
                           </a>						   
                        </figure>
                        <div class="product-details">

                           <h3 class="product-name">
                              <a href="#">Kraft</a>
                           </h3>

                        </div>
                     </div>
                      <div class="product text-center">
                        <figure class="product-media">
                          <a href="#">
                           <img src="<?=base_url();?>files/2.webp"  width="280" height="315" style="background-color: #f2f3f5;" />
                           </a>						   
                        </figure>
                        <div class="product-details">

                           <h3 class="product-name">
                              <a href="#">Kraft</a>
                           </h3>

                        </div>
                     </div>  
                      <div class="product text-center">
                        <figure class="product-media">
                          <a href="#">
                           <img src="<?=base_url();?>files/3.webp"  width="280" height="315" style="background-color: #f2f3f5;" />
                           </a>						   
                        </figure>
                        <div class="product-details">

                           <h3 class="product-name">
                              <a href="#">Kraft</a>
                           </h3>

                        </div>
                     </div>
                      <div class="product text-center">
                        <figure class="product-media">
                           <a href="#">
                           <img src="<?=base_url();?>files/4.webp"  width="280" height="315" style="background-color: #f2f3f5;" />
                           </a>						   
                        </figure>
                        <div class="product-details">

                           <h3 class="product-name">
                              <a href="#">Kraft</a>
                           </h3>

                        </div>
                     </div> 
                     <div class="product text-center">
                        <figure class="product-media">
                           <a href="#">
                           <img src="<?=base_url();?>files/1.webp"  width="280" height="315" style="background-color: #f2f3f5;" />
                           </a>						   
                        </figure>
                        <div class="product-details">

                           <h3 class="product-name">
                              <a href="#">Kraft</a>
                           </h3>

                        </div>
                     </div>
                      <div class="product text-center">
                        <figure class="product-media">
                          <a href="#">
                           <img src="<?=base_url();?>files/2.webp"  width="280" height="315" style="background-color: #f2f3f5;" />
                           </a>						   
                        </figure>
                        <div class="product-details">

                           <h3 class="product-name">
                              <a href="#">Kraft</a>
                           </h3>

                        </div>
                     </div>  
                      <div class="product text-center">
                        <figure class="product-media">
                           <a href="#">
                           <img src="<?=base_url();?>files/3.webp"  width="280" height="315" style="background-color: #f2f3f5;" />
                           </a>						   
                        </figure>
                        <div class="product-details">

                           <h3 class="product-name">
                              <a href="#">Kraft</a>
                           </h3>

                        </div>
                     </div>
                      <div class="product text-center">
                        <figure class="product-media">
                           <a href="#">
                           <img src="<?=base_url();?>files/4.webp"  width="280" height="315" style="background-color: #f2f3f5;" />
                           </a>						   
                        </figure>
                        <div class="product-details">

                           <h3 class="product-name">
                              <a href="#">Kraft</a>
                           </h3>

                        </div>
                     </div>                      
                  </div>
                               </div>                               
                           </div>                            
                        </div>
                     </div>
                  </div>				  
                  <div class="tab tab-nav-simple product-tabs">

                     <div class="tab-content">
                        <div class="tab-pane active in" id="product-tab-description">
                           <div class="row mt-6">
                              <p><?=$data['bottom_description'];?></p>
                           </div>
                        </div>
                        
                     </div>
                  </div>
                  <section class="pt-3 mt-10">
                     <h2 class="title justify-content-center">Related Products</h2>
                     <div class="  owl-theme owl-nav-full row cols-2 cols-md-3 cols-lg-4" data-owl-options="{
                        'items': 5,
                        'nav': false,
                        'loop': false,
                        'dots': true,
                        'margin': 20,
                        'responsive': {
                        '0': {
                        'items': 2
                        },
                        '768': {
                        'items': 3
                        },
                        '992': {
                        'items': 4,
                        'dots': false,
                        'nav': true
                        }
                        }
                        }">
                         <?
						foreach($related_products as $rp){
							$p_image = $this->home_model->get_product_thumb_image($rp['id']);
				
							if(!$p_image)
								$p_image = $this->home_model->get_product_images($rp['id']);
							
							if(!$p_image){
								$p_image['image'] = 'product1.jpg';
								$p_image['alt_image'] = 'No Image Found';
							}
							else{
								$p_image = $p_image[0];
							}
							
							@$rating = $this->home_model->get_product_total_rating($rp['id']);
							// echo "<pre>"; print_r($rating); echo "</pre>";
							
							@$all_reviews = $this->home_model->get_product_reviews($rp['id']);
							// echo "<pre>"; print_r($all_reviews); echo "</pre>";
							
							$reviews = count($all_reviews);
							@$total_rating = round($rating['rating']/$reviews,2);
							$total_rating_percent = round($total_rating*20,2);
						?>                       
								<div class="product">
                                 <figure class="product-media">
                                    <a href="<?=base_url($rp['seokey']);?>">
                                    <img src="<?=base_url();?>files/images/<?=$p_image['image'];?>" alt="<?=$rp['name'];?>" width="280" height="315">
                                    </a>
                                    <div class="product-action">
                                       <a href="<?=base_url($rp['seokey']);?>" class="btn-product " title="Quick View">Read More
                                       </a>
                                    </div>
                                 </figure>
                                 <div class="product-details">
                                    <h3 class="product-name">
                                       <a href="<?=base_url($rp['seokey']);?>"><?=$rp['name'];?></a>
                                    </h3>
                                 </div>
                              </div>                        
						<?
						}
						?>						
                     </div>
                  </section>
                  
<section class="container banner-section mt-10">
<div class="banner banner-cta banner-radius" style="background-image: url(<?=base_url('files/map-location.jpg');?>); background-color: #403a38; ">
<div class="banner-content appear-animate d-flex flex-column align-items-center blurIn appear-animation-visible" data-animation-options="{
                            'name': 'blurIn',
                            'delay': '.3s'
                        }" style="animation-duration: 1.2s;">
 <h2 class="title title-center pt-5 ">Our Locations</h2>    
<img class="pb-10 pt-10" src="<?=base_url('files/banner.png');?>" title="car-loc" alt="car-loc" loading="lazy">
    
                 
                  <section class="container">
                         <div class="row">
                         <?
						foreach($namelinks_products as $rp){
							
						?>                       
    						<div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4" >
    							<div style="border: 2px solid #ffb600;text-align: center;background: black;color: white;"> 
                                    <a style="font-size: 22px;" href="<?=base_url($rp['link']);?>"><?=$rp['name'];?></a> 
                                </div>   
                            </div>
						<?
						}
						?>
						</div>
                  </section>    
</div>
</div>
</section>                  
               
               
               </div>
                <section class="pt-10 mt-7 pb-10 appear-animate fadeIn appear-animation-visible" data-animation-options="{
                   'delay': '.3s'
                   }" style="animation-duration: 1.2s;background: #ffb60038;">
                    <h2 class="title title-center">Order a Sample Kit</h2>
                   <div class="container">
                      <div class="row">
                          
                         <div class="col-xs-6 col-lg-5 mb-4">
                            <div class="category category-default1 category-absolute banner-radius overlay-zoom">
                               
                                  <figure class="category-media">
                                     <img src="<?=base_url('files/kits.jpg');?>"  style="background-color: #ececef;">
                                  </figure>
                            </div>
                         </div>
                         <div class="col-xs-6 col-lg-7 mb-4" style="background-color: #fff;border-radius: 15px;box-shadow: 0 0 10px rgb(255 182 0);padding: 15px;">
             <?php 
				$red_msg = $this->session->flashdata('red_msg');
				$green_msg = $this->session->flashdata('green_msg');
				
				if ($red_msg){
					?>
					<div class="alert alert-danger" style="color:#FFF;"><?php echo $red_msg; ?></div>
					<?php 
				}
				if ($green_msg){
					?>
					<div class="alert alert-success" style="color:#FFF;"><?php echo $green_msg; ?></div>			
					<?php 
				}
			?>
                    <form id="contact-form"  action="<?=base_url('home/contact');?>" method="post">


						<div class="row form-group over-hidden">
							
							<div class="col-md-6 mt-3">
								<input type="text" id="contact-name" name="name" placeholder="Enter Your Name" class="form-control required" required>
							</div>

							<div class="col-md-6 mt-3">
								<input type="email" id="contact-email" name="email" placeholder="Enter Your Email" class="form-control required" required>
							</div>


						</div>

						<div class="row form-group over-hidden">
							<div class="col-md-6 mt-3">
								<input type="text" id="contact-subject" placeholder="Type Phone" name="phone" class="form-control required" required>
							</div>
							
							<div class="col-md-6 mt-3">
								<input type="text" id="contact-subject" placeholder="Type Subject" name="subject" class="form-control required" required>
							</div>

						</div>

						<div class="form-group over-hidden mt-3">
							<textarea id="contact-message" placeholder="Type Your Message" name="comments" rows="3" cols="30" class="form-control" required> </textarea>
						</div>
						<div class="form-group m-t-2">
							<button class="btn btn-rounded btn-outline btn-success mt-3" style="color: #ffb600;border-color: #ffb800;" type="submit" id="contact-submit" name="contact_submit" value="submit"><i class="fa fa-send"></i>Send Message</button>
						</div>

					</form>
                         </div>                         
                                               
                      </div>
                   </div>
                </section>                  
            </div>
         </main>
