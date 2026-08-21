  <!-- Slider -->
  <div id="magik-slideshow" class="magik-slideshow">
      <div class="row">
        <div class="col-lg-12 col-sm-12 col-md-12 wow bounceInUp animated">
          <div id='rev_slider_4_wrapper' class='rev_slider_wrapper fullwidthbanner-container' >
            <div id='rev_slider_4' class='rev_slider fullwidthabanner'>
              <ul>
			  <?
			  foreach($banners as $b){
			  ?>
                <li data-transition='random' data-slotamount='7' data-masterspeed='1000' data-thumb='<?=base_url();?>assets/images/<?=$b['image'];?>'><img src='<?=base_url();?>assets/images/<?=$b['image'];?>' data-bgposition='left top' data-bgfit='cover' data-bgrepeat='no-repeat' alt="<?=$b['alt_image'];?>"/></li>
			  <?
			  }
			  ?>
              </ul>
              <div class="tp-bannertimer"></div>
            </div>
          </div>
        </div>
      </div>
  </div>
  <!-- end Slider --> 
  
  <!-- header service -->
  
  <div class="">
    <div class="header-service wow bounceInUp animated">
		<p>Get Into The<span> PREMIUM PRINTING</span></p>
    </div>
  </div>
  <!-- end header service --> 
  
  <!-- offer banner section -->

  <div class="col-md-12 eight_box"> 
		<h1>Choose Your Product</h1>	
	<div class="col-md-12 col-xs-12">
		 <div class="col-md-12 col-xs-12"> 
			<div class="clearfix"></div> 
			<div style="">
				<?
				$x = 0;
				foreach($home_section_1 as $s1){
					$x++;
				?>
				<div class="col-md-3 col-xs-6 " style="margin-bottom: 16px;"> 
					<a class="txt_decor change-hover  col-md-12" href="<?=$s1['link'];?>">
						<img src="<?=base_url();?>assets/images/<?=$s1['image'];?>" alt="<?=$s1['alt_image'];?>" style="width:100%;" class="img-responsive" >
					</a> 
					<div class="detail">
						<?=$s1['text'];?>
					</div>	
					<a class="info read_m" href="<?=$s1['link'];?>">Read More</a><br>
				</div>
				<?
					if($x%4 == 0){
				?>
					<br>
					<div class="clearfix"></div>
				<?
					}
				}
				?>
				
			</div> 
		</div> 
	 </div> 
	 
 </div>
  <!-- end offer banner section --> 

    <div class="clearfix"></div>
	<div class="brand-logo ">
	  <div class="header-service wow bounceInUp animated animated" style="visibility: visible;">
		<p>Our Valuable<span> Clients</span></p>
   </div>
      <div class="container">
        <div class="slider-items-products">
          <div id="brand-logo-slider" class="product-flexslider hidden-buttons">
            <div class="slider-items slider-width-col6"> 
            <?
			foreach($home_clients as $hc){
			?>
              <!-- Item -->
              <div class="item"> <a href="<?=$hc['link'];?>"><img src="<?=base_url();?>assets/images/<?=$hc['image'];?>" alt="<?=$hc['alt_image'];?>"></a> </div>
              <!-- End Item --> 
            <?
			}
			?>
            </div>
          </div>
        </div>
      </div>
    </div>
	<div class="clearfix"></div>
  <div class="header-service wow bounceInUp animated animated" style="visibility: visible;">
		<p>Premium Feature<span> PRODUCTS</span></p>
   </div>
    <div class="clearfix"></div>
	<div class="col-md-12 feature_boxes" > 
	<div class="col-md-12 col-xs-12">
		 <div class="col-md-12 col-xs-12"> 
			<div class="clearfix"></div> 
			<div style="">
			<?
			$x = 0;
			foreach($home_section_2 as $s2){
				$x++;
			?>
				 <div class="col-md-2 col-xs-6 feature_pro_box"> 
					 <a class="txt_decor change-hover" href="<?=$s2['link'];?>"> 
						 <img width="263px" height="263px" src="<?=base_url();?>assets/images/<?=$s2['image'];?>" alt="<?=$s2['alt_image'];?>" class="img-responsive" >
						 <span class="feature_pro"><?=$s2['text'];?></span> 
					 </a> 
				 </div>
			<?
				if($x%6 == 0){
			?>
				<div class="clearfix"></div>
			<?
				}
			}
			?>
			</div> 
		</div> 
	 </div> 
	 
 </div>
    <div class="clearfix"></div>
	 <div class="quote-service text-center" style="visibility: visible;">
		<div class="col-sm-6">
		<p><b>YOUR</b> Desire<span> Custom QUOTE</span></p> 
		</div>
		<div class="col-sm-6">
		<a style="all:unset;" href="#"><button>Get A Quote</button></a>
		</div>
   </div>
    <div class="clearfix"></div>
	<div class="col-md-12">
		<div class="col-md-2 col-sm-2 col-xs-6 col-md-offset-1 col-sm-offset-1">
			<img src="<?=base_url();?>assets/images/icon1.png" alt="" class="img-responsive" style="margin: 0 auto;">
			<p style="text-align: center;padding: 20px;">No Die and Plate Charge</p>
		</div>
		<div class="col-md-2 col-sm-2 col-xs-6"><img src="<?=base_url();?>assets/images/icon2.png" alt="" class="img-responsive" style="margin: 0 auto;">
			<p style="text-align: center;padding: 20px;">15 Business Day Turnaround</p>
		</div>
		<div class="col-md-2 col-sm-2 col-xs-6"><img src="<?=base_url();?>assets/images/icon3.png" alt="" class="img-responsive" style="margin: 0 auto;">
			<p style="text-align: center;padding: 20px;">High Quality Offset Printing</p>
		</div>
		<div class="col-md-2 col-sm-2 col-xs-6"><img src="<?=base_url();?>assets/images/icon4.png" alt="" class="img-responsive" style="margin: 0 auto;">
			<p style="text-align: center;padding: 20px;">Custom Sizes & Style</p>
		</div>
		<div class="col-md-2 col-sm-2 col-xs-6"><img src="<?=base_url();?>assets/images/icon5.png" alt="" class="img-responsive" style="margin: 0 auto;">
			<p style="text-align: center;padding: 20px;">Competitive Pricing</p>
		</div>
	</div>

    <div class="clearfix"></div>
	 <div class="header-service   text-center " style="visibility: visible;">
		<p>What <span> Peoples</span> Say</p>
   </div>
	 <!-- main container -->
	 
	   <!-- Featured Slider -->
  <section class="featured-pro container wow bounceInUp animated">
    <div class="slider-items-products">
      <div class="new_title center">
      </div>
      <div id="featured-slider" class="product-flexslider hidden-buttons">
        <div class="slider-items slider-width-col4"> 
        <?
		$x = 0;
		foreach($home_testimonials as $ht){
		$x++;
		if($x%2 == 0)
			$color = '#efdca4';
		else
			$color = '#95d0b4';
		?>
          <!-- Item -->
          <div class="item testi" style="background-color:<?=$color;?>;padding: 30px;">
            <div class="col-item">
              <div class="product-image-area"> <a class="product-image"> <img width="130px" src="<?=base_url();?>assets/images/<?=$ht['image'];?>" class="img-responsive img-circle center-block" alt="<?=$ht['alt_image'];?>" /> </a></div>
              <div class="info">
                <div class="info-inner">
                  <div class="item-title"><h1><?=$ht['name'];?></h1></div>
                </div>
                <!--info-inner-->
                <div class="actions">
                  <p><span><?=$ht['text'];?></span></p>
                </div>
                <!--actions-->
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
  </section>
  <!-- End Featured Slider --> 
  <!-- End main container --> 
    <div class="clearfix"></div>

  <!-- Latest Blog -->
  <section class="latest-blog container-fluid  ">
    <div class="blog-title">
      <p class="text-center">Read Our <span> BLOGS</span></p>
    </div>
	<div style=" margin: 0px 50px;">
		<?
		foreach($recent_blogs as $rb){
		?>
		<div class="col-xs-12 col-sm-4">
		  <div class="blog-img"> <img src="<?=base_url();?>assets/images/<?=$rb['image'];?>" alt="<?=$rb['alt_image'];?>">
		  </div>
		  <div class="paragrph">
			  <h2><a href="<?=base_url('blog/'.$rb['seokey']);?>"><?=$rb['title'];?></a> </h2>
			  <p><?=substr(strip_tags($rb['text']),0,100);?>...</p>
			  <a class="info read_more" href="<?=base_url('blog/'.$rb['seokey']);?>">Read More</a>
		  </div>
		</div>
		<?
		}
		?>
		<div class="clearfix"></div>
		<p class="text-center"><a style="background: #ec685e;" class="text-center" href="<?=base_url('blog');?>">View All</a></p>
    </div>
  </section>
  <!-- End Latest Blog -->