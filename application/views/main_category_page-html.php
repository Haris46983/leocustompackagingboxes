<style>
    .tab-nav-simple .nav-item .nav-link.active, .tab-nav-simple .nav-item.show .nav-link, .tab-nav-simple .nav-item:hover .nav-link {
    border-bottom-color: #ffb700;
}
@media (min-width: 992px){
.main-content-wrap {
    overflow: unset;
} }
</style>
         <main class="main">
            <div class="page-header" style="background-image: url('<?=base_url();?>assets/images/<?=($data['banner_image'] != "") ? $data['banner_image'] : 'category-banner1.jpg';?>'); background-color: #3C63A4;">
               <h3 class="page-subtitle"><?=$data['name'];?></h3>
               <ul class="breadcrumb">
                  <li><a href="<?=base_url();?>"><i class="d-icon-home"></i> </a></li>
				  <li class="delimiter">/</li>
                  <li><?=$data['name'];?></li>
               </ul>
            </div>
            <div class="page-content mb-10 pb-6 pt-6">
               <div class="container">
                  <div class="row gutter-lg main-content-wrap">
                     <aside class="col-lg-3 sidebar sidebar-fixed sidebar-toggle-remain shop-sidebar sticky-sidebar-wrapper">
                        <div class="sidebar-overlay"></div>
                        <a class="sidebar-close" href="#"><i class="d-icon-times"></i></a>
                        <a href="#" class="sidebar-toggle">
                        <i class="fas fa-chevron-right"></i>
                        </a>
                        <div class="sidebar-content">
                           <div class="sticky-sidebar" data-sticky-options="{'top': 10}">
                              <div class="widget widget-collapsible">
                                 <ul class="widget-body filter-items search-ul">
									<li style="padding:0px;">  <a  href="tel:<?=$this->site_settings['phone'];?>" style="text-align: center;background: #ffb600;padding: 20px;color: #fff;font-size: 15px;font-weight: bold;margin-bottom: 5px;"><i class="d-icon-phone"></i> <?=$this->site_settings['phone'];?></a> </li> 
									<li style="padding:0px;"> <a  href="<?=base_url('quote');?>" style="text-align: center; background: #ff0023; padding: 20px; color: #fff; font-size: 18px; font-weight: bold;margin-bottom: 5px;">Get Quote</a> </li> 
									<li style="padding:0px;"> <a   style="text-align: center;background: #ffb600;padding: 20px;color: #fff;font-size: 13px;font-weight: bold;margin-bottom: 5px;" href="mailto:<?=$this->site_settings['email'];?>" ><?=$this->site_settings['email'];?></a> </li> 
                                 </ul>
                              </div>                               
                              <div class="widget widget-collapsible">
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
					<div class="form-group col-md-12 col-xs-12">
						<label for="">Name<span class="required">*</span></label>
						<input type="text" name="name" value="" placeholder="" required="" class="form-control"> </div>
					<div class="form-group col-md-12 col-xs-12">
						<label for="">E-mail<span class="required">*</span></label>
						<input type="email" name="email" value="" placeholder="" required="" class="form-control"> </div>
					<div class="form-group col-md-12 col-xs-12">
						<label for="">Contact<span class="required">*</span></label>
						<input type="text" name="phone" value="" placeholder="" class="form-control"> </div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<label>Length</label>
						<input type="text" name="length" class="form-control"> </div>
					<div class="col-md-6">
						<label>Width</label>
						<input type="text" name="width" class="form-control"> </div>
					<div class="col-md-6">
						<label>Height</label>
						<input type="text" name="height" class="form-control"> </div>
					<div class="col-md-6  col-xs-12">
						<label for="">Unit <span class="required">*</span></label>
						<select name="unit" class="form-control">
							<option value="Inch">inch</option>
							<option value="cm">cm</option>
							<option value="mm">mm</option>
						</select>
					</div>
				</div>
				<div class="row pd_dnw">
					<div class="form-group col-md-12 col-xs-12">
						<label for="">Product<span class="required">*</span></label>
						<select class="form-control" name="stock">
						<?
						foreach($all_products as $s){
						?>
							<option value="<?=$s['name'];?>"><?=$s['name'];?></option>
						<?
						}
						?>
						</select>

				</div>
				<div class=" form-group">
				    <div class="row">
					<div class="col-md-6">
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
					<div class="col-md-6">
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
					</div></div>
				</div>				
				<div class=" form-group">
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
				</div></div>
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
                     </aside>
                     <div class="col-lg-9 main-content">
                       
                        <div class="row cols-2 cols-sm-3 product-wrapper">
						<?	
						foreach($sub as $s){
						?>
                           <div class="product-wrap">
                              <div class="product">
                                 <figure class="product-media">
                                    <a href="<?=base_url($data['seokey'].'/'.$s['seokey']);?>">
                                    <img src="<?=base_url();?>files/images/<?=($s['thumb_image'] != "") ? $s['thumb_image'] : 'product1.jpg';?>" alt="product" width="280" height="315">
                                    </a>
                                    <div class="product-action">
                                       <a href="<?=base_url($data['seokey'].'/'.$s['seokey']);?>" class="btn-product" title="Quick View">Read More
                                       </a>
                                    </div>
                                 </figure>
                                 <div class="product-details">
                                    <h3 class="product-name">
                                       <a href="<?=base_url($data['seokey'].'/'.$s['seokey']);?>"><?=$s['name'];?></a>
                                    </h3>
                                 </div>
                              </div>
                           </div>	
							<?
							}
							?>						   
                        </div>
                        <nav class="toolbox toolbox-pagination">
                           <ul class="pagination">
                              <?php echo $pagination; ?>
                           </ul>
                        </nav>
                     </div>
                  </div>
               </div>

            </div>
         </main>
