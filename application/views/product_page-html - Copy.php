<div class="breadcrumbs">
    <div class="container">
      <div class="row">
        <ul>
          <li class="home"> <a href="<?=base_url();?>">Home</a><span>&mdash;›</span></li>
          <li class=""> <a href="<?=base_url($main_category['seokey']);?>"><?=$main_category['name'];?></a><span>&mdash;›</span></li>
          <li class=""> <a href="<?=base_url($main_category['seokey'].'/'.$sub_category['seokey']);?>"><?=$sub_category['name'];?></a><span>&mdash;›</span></li>
          <li class="category13"><strong><?=$data['name'];?></strong></li>
        </ul>
      </div>
    </div>
  </div>
  <!-- end breadcrumbs --> 
  <!-- main-container -->
  
	<?
		$p_images = $this->home_model->get_product_images($data['id']);
		// echo "<pre>"; print_r($p_images); echo "</pre>";
	?>
  
  <section class="main-container col1-layout">
    <div class="main container">
      <div class="col-main">
        <div class="row">
          <div class="product-view">
            <div class="product-essential">
              <form action="#" method="post" id="product_addtocart_form">
                <input name="form_key" value="6UbXroakyQlbfQzK" type="hidden">
                <div class="product-img-box col-lg-6 col-sm-6 col-xs-12">
                  <ul class="moreview" id="moreview">
					<?
					$reviews = count($all_reviews);
					$total_rating = round($rating['rating']/$reviews,2);
					$total_rating_percent = round($total_rating*20,2);
					
					$x = 0;
					$active = "moreview_thumb_active";
					foreach($p_images as $img){
					$x++;
					?>
                    <li class="moreview_thumb thumb_<?=$x;?>" <?=$active;?>> <img class="moreview_thumb_image" src="<?=base_url();?>assets/images/<?=$img['image'];?>" alt="<?=$img['alt_image'];?>"> <img class="moreview_source_image" src="<?=base_url();?>assets/images/<?=$img['image'];?>" alt="<?=$img['alt_image'];?>"> <span class="roll-over">Roll over image to zoom in</span> <img  class="zoomImg" src="<?=base_url();?>assets/images/<?=$img['image'];?>" alt="<?=$img['alt_image'];?>"></li>
					<?
					$active = "";
					}
					?>
                  </ul>
                  <div class="moreview-control"> <a href="javascript:void(0)" class="moreview-prev"></a> <a href="javascript:void(0)" class="moreview-next"></a> </div>
                </div>
                <div class="product-shop col-lg-6 col-sm-6 col-xs-12">
                  <!--div class="product-next-prev"> <a class="product-next" href="#"><span></span></a> <a class="product-prev" href="#"><span></span></a> </div-->
                  <div class="product-name">
                    <h1><?=$data['name'];?></h1>
                  </div>
                  <div class="ratings">
                    <input value="<?=$total_rating;?>" class="rating"  data-show-clear="false" data-show-caption="true" data-size="sm" data-disabled="true">
                    <p class="rating-links"><?=$reviews;?> Review(s)</p>
                  </div>
                  <!--p class="availability in-stock">Availability: <span>In stock</span></p>
                  <div class="price-block">
                    <div class="price-box">
                      <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> $315.99 </span> </p>
                      <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> $309.99 </span> </p>
                    </div>
                  </div-->
                  <div class="short-description">
                    <h2>Quick Overview</h2>
					<?=$data['upper_description'];?>
                  </div>
                  <!--div class="add-to-box">
                    <div class="add-to-cart">
                      <label for="qty">Quantity:</label>
                      <div class="pull-left">
                        <div class="custom pull-left">
                          <button onClick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 0 ) result.value--;return false;" class="reduced items-count" type="button"><i class="icon-minus">&nbsp;</i></button>
                          <input type="text" class="input-text qty" title="Qty" value="1" maxlength="12" id="qty" name="qty">
                          <button onClick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty )) result.value++;return false;" class="increase items-count" type="button"><i class="icon-plus">&nbsp;</i></button>
                        </div>
                      </div>
                      <button onClick="productAddToCartForm.submit(this)" class="button btn-cart" title="Add to Cart" type="button"><span><i class="icon-basket"></i> Add to Cart</span></button>

                    </div>
                  </div-->
                </div>
              </form>
            </div>
			<div class="clearfix"></div>
			<div class="header-service wow bounceInUp animated animated animated" style="visibility: visible;">
				<p><span> Request A</span> Quote</p>
			</div>			
			<div class="clearfix"></div>
		<div class="col-md-8 col-md-offset-2 form_quote">
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
						<button class="btn btn-warning add_req btns-larges" name="btnSubmit" value="Get Quote" type="submit">Request Quote</button>
					</div>
				</div>
			</form>
		</div>	
			<div class="clearfix"></div>
			<div class="header-service wow bounceInUp animated animated animated" style="visibility: visible;">
				<p><span> Product</span> Description</p>
			</div>
			<div class="container">
			<?=$data['bottom_description'];?>
			</div>
			<div class="clearfix"></div>
			<div class="header-service wow bounceInUp animated animated animated" style="visibility: visible;">
				<p>Product<span> Reviews</span> </p>
			</div>
			<div class="clearfix"></div>
            <div class="product-collateral">
              <div class="col-sm-12 wow bounceInUp animated">
                  <div class="" id="reviews_tabs">
                    <div class="box-collateral box-reviews" id="customer-reviews">
                      <div class="box-reviews1">
                        <div class="form-add">
							<?
							if($this->session->flashdata('rating_form_success')){
							?>
							<div class="alert alert-success"><?=$this->session->flashdata('rating_form_success');?></div>
							<?
							}
							if($this->session->flashdata('rating_form_alert')){
							?>
							<div class="alert alert-danger"><?=$this->session->flashdata('rating_form_alert');?></div>
							<?
							}
							?>
                          <form action="<?=base_url('home/save_review');?>" method="POST">
							<input type="hidden" name="return_url" value="<?=current_url();?>" readonly>
							<input type="hidden" name="product_id" value="<?=$data['id'];?>" readonly>
                            <h3>Write Your Own Review</h3>
                            <fieldset>
                              <h4>How do you rate this product? <em class="required">*</em></h4>
                              <span id="input-message-box"></span>
							  <div class="clearfix"></div>
							  <input name="rating" value="0" type="number" class="rating" min=0 max=5 step=0.5 data-size="sm" >
							  <div class="clearfix"></div>
							  <br>
                              <div class="review1">
                                <ul class="form-list">
                                  <li>
                                    <label class="required" for="nickname_field">Name<em>*</em></label>
                                    <div class="input-box">
                                      <input type="text" class="input-text required-entry" name="name" required>
                                    </div>
                                  </li>
                                  <li>
                                    <label class="required" for="summary_field">Email<em>*</em></label>
                                    <div class="input-box">
                                      <input type="email" class="input-text required-entry" name="email" required>
                                    </div>
                                  </li>
                                </ul>
                              </div>
                              <div class="review2">
                                <ul>
                                  <li>
                                    <label class="label-wide" for="review_field">Review<em>*</em></label>
                                    <div class="input-box">
                                      <textarea class="required-entry" rows="3" cols="5" name="review"></textarea>
                                    </div>
                                  </li>
                                </ul>
                                <div class="buttons-set">
                                  <button class="button submit" title="Submit Review" type="submit"><span>Submit Review</span></button>
                                </div>
                              </div>
                            </fieldset>
                          </form>
                        </div>
                      </div>
					  <?
						if($all_reviews){
					  ?>
                      <div class="box-reviews2">
                        <h3>Customer Reviews</h3>
                        <div class="box visible">
                          <ul>
							<?
							foreach($all_reviews as $key=>$r){
								if($key < 4){
							?>
                            <li>
                              <div class="review">
                                <h6><?=$r['name'];?></h6>
                                <small>on <?=date('M d, Y',strtotime($r['insert_datetime']));?></small>
								<input value="<?=$r['rating'];?>" class="rating"  data-show-clear="false" data-show-caption="false" data-size="xs" data-disabled="true">
                                <div class="review-txt"><?=$r['review'];?></div>
                              </div>
                            </li>
							<?
								}
								else{
									break;
								}
							}
							?>
                          </ul>
                        </div>
						<div class="clearfix"></div>
                        <div class="actions"> <a class="button view-all" id="revies-button"><span><span>View all</span></span></a> </div>
						<div class="clearfix"></div>
                      </div>
					  <?
						}
					  ?>
                      <div class="clear"></div>
                    </div>
                </div>
              </div>
			  <div class="clearfix"></div>
			  <div class="header-service wow bounceInUp animated animated animated animated" style="visibility: visible;">
				<p> Related <span> Products</span></p>
			  </div>
			  <div class="clearfix"></div>
              <div class="col-sm-12">
                <div class="box-additional">
                  <div class="related-pro wow bounceInUp animated">
                    <div class="slider-items-products">
                      <div class="new_title center">
                      </div>
                      <div id="related-products-slider" class="product-flexslider hidden-buttons">
                        <div class="slider-items slider-width-col4"> 
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
							
							$rating = $this->home_model->get_product_total_rating($rp['id']);
							// echo "<pre>"; print_r($rating); echo "</pre>";
							
							$all_reviews = $this->home_model->get_product_reviews($rp['id']);
							// echo "<pre>"; print_r($all_reviews); echo "</pre>";
							
							$reviews = count($all_reviews);
							$total_rating = round($rating['rating']/$reviews,2);
							$total_rating_percent = round($total_rating*20,2);
						?>
                          <!-- Item -->
                          <div class="item">
                            <div class="col-item my-category-page-col">
                              <div class="product-image-area"> <a class="product-image" href="<?=base_url($rp['seokey']);?>"> <img src="<?=base_url();?>assets/images/<?=$p_image['image'];?>" class="img-responsive" alt="<?=$p_image['alt_image'];?>" /> </a></div>
                              <div class="info">
                                <div class="info-inner">
								  <div class="item-title"> <a title=" Sample Product" href="<?=base_url($rp['seokey']);?>"> <?=$rp['name'];?> </a> </div>
								  <!--item-title-->
								  <div class="item-content">
									<input value="<?=$total_rating;?>" class="rating"  data-show-clear="false" data-show-caption="false" data-size="xs" data-disabled="true">
									<!--div class="price-box">
									  <p class="special-price"> <span class="price"> $45.00 </span> </p>
									  <p class="old-price"> <span class="price-sep">-</span> <span class="price"> $50.00 </span> </p>
									</div-->
								  </div>
								  <!--item-content--> 
								</div>
                                <!--info-inner-->
                                
                                <div class="clearfix"> </div>
                              </div>
                            </div>
                          </div>
                          <!-- End Item --> 
						<?
						}
						?>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>