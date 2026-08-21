  <footer class="footer wow bounceInUp animated">
    <div class="footer-top">
    </div>
    <div class="footer-middle container">
      <div class="row">
        <div class="col-md-3 col-sm-4">
           <h4>Contact us</h4>
          <div class="contacts-info">
            <address><i class="add-icon">&nbsp;</i><?=$this->site_settings['address'];?></address>
            <div class="phone-footer"><i class="phone-icon">&nbsp;</i> <?=$this->site_settings['phone'];?></div>
            <div class="phone-footer"><i class="phone-icon">&nbsp;</i> <?=$this->site_settings['email'];?> </div>
          </div>
		  <br>
          <h4>Modes Of Payment</h4>
          <div class="payment-accept">
            <div><img src="<?=base_url();?>assets/images/payment-1.png" alt="payment"> <img src="<?=base_url();?>assets/images/payment-2.png" alt="payment"> <img src="<?=base_url();?>assets/images/payment-3.png" alt="payment"> <img src="<?=base_url();?>assets/images/payment-4.png" alt="payment"></div>
          </div>
        </div>
        <div class="col-md-2 col-sm-4">
          <h4><?=$this->site_settings['footer_links_heading_1'];?></h4>
          <ul class="links">
			<?
			$this->load->model('home_model');
			$first_links = $this->home_model->get_all_footer_links('1st Column');
			$second_links = $this->home_model->get_all_footer_links('2nd Column');
			$third_links = $this->home_model->get_all_footer_links('3rd Column');
			
			foreach($first_links as $fl){
			?>
            <li><a href="<?=$fl['link'];?>"><?=$fl['title'];?></a></li>
            <?
			}
			?>
          </ul>
        </div>
        <div class="col-md-2 col-sm-4">
          <h4><?=$this->site_settings['footer_links_heading_2'];?></h4>
          <ul class="links">
			<?
			foreach($second_links as $sl){
			?>
            <li><a href="<?=$sl['link'];?>"><?=$sl['title'];?></a></li>
            <?
			}
			?>
          </ul>
        </div>
        <div class="col-md-2 col-sm-4">
          <h4><?=$this->site_settings['footer_links_heading_3'];?></h4>
          <ul class="links">
			<?
			foreach($third_links as $tl){
			?>
            <li><a href="<?=$tl['link'];?>"><?=$tl['title'];?></a></li>
            <?
			}
			?>
          </ul>
        </div>
        <div class="col-md-3 col-sm-4">
          <h4>Subscribe For newsletter</h4>
		    <div class="block-subscribe">
              <div class="newsletter">
                <form action="<?=base_url('submit_subscribe_form')?>" method="POST">
                  <input type="text" placeholder="Enter your email " class="input-text required-entry validate-email" title="Sign up for our newsletter" id="newsletter1" name="email" required>
                  <input type="hidden" class="hidden input-text required-entry validate-email" id="newsletter1" name="return_url" value="<?=current_url();?>">
                  <button class="subscribe" title="Subscribe" type="submit"><span>Submit</span></button>
                </form>
				<?
				if($this->session->flashdata('subscribe_form_success')){
				?>
				<p style="color:#02f7c0;"><?=$this->session->flashdata('subscribe_form_success');?></p>
				<?
				}
				if($this->session->flashdata('subscribe_form_alert')){
				?>
				<p style="color:#f1a3a3;"><?=$this->session->flashdata('subscribe_form_alert');?></p>
				<?
				}
				?>
              </div>
            </div>
			<br>
			<h4>STalk Us</h4>
			<div class="social">
              <ul>
                <li class="fb"><a href="<?=$this->site_settings['facebook_link'];?>"></a></li>
                <li class="tw"><a href="<?=$this->site_settings['twitter_link'];?>"></a></li>
                <li class="googleplus"><a href="<?=$this->site_settings['google_link'];?>"></a></li>
                <li class="rss"><a href="<?=$this->site_settings['rss_link'];?>"></a></li>
                <li class="pintrest"><a href="<?=$this->site_settings['pinterest_link'];?>"></a></li>
                <li class="linkedin"><a href="<?=$this->site_settings['linkedin_link'];?>"></a></li>
                <li class="youtube"><a href="<?=$this->site_settings['youtube_link'];?>"></a></li>
              </ul>
            </div>
			<div class="clearfix"></div>
			<br>
			<div class="col-md-6 col-sm-6 col-xs-6">
			<img src="<?=base_url();?>assets/images/seal.png" alt="logo" class="img-responsive">
			</div>
			<div class="col-md-6 col-sm-6 col-xs-6">
			<img src="<?=base_url();?>assets/images/seal2.png" alt="logo" class="img-responsive">
			</div>
        </div>
      </div>
    </div>
    <div class="footer-bottom">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-xs-12 text-center coppyright"> &copy; 2018.<span style="color:#fdd542;">Printing Circle</span> All Rights Reserved.</div>
        </div>
      </div>
    </div>
  </footer>
  <!-- End Footer --> 
  
</div>
<!-- JavaScript --> 
<script type="text/javascript" src="<?=base_url();?>assets/js/jquery.min.js"></script> 
<script type="text/javascript" src="<?=base_url();?>assets/js/bootstrap.min.js"></script> 
<script type="text/javascript" src="<?=base_url();?>assets/js/parallax.js"></script> 
<script type="text/javascript" src="<?=base_url();?>assets/js/jquery.jcarousel.min.js"></script> 
<script type="text/javascript" src="<?=base_url();?>assets/js/cloudzoom.js"></script> 
<script type="text/javascript" src="<?=base_url();?>assets/js/common.js"></script> 
<script type="text/javascript" src="<?=base_url();?>assets/js/revslider.js"></script> 
<script type="text/javascript" src="<?=base_url();?>assets/js/owl.carousel.min.js"></script> 
<script type="text/javascript" src="<?=base_url();?>assets/js/rating.js"></script> 
<script type='text/javascript'>
        jQuery(document).ready(function(){
            jQuery('#rev_slider_4').show().revolution({
                dottedOverlay: 'none',
                delay: 5000,
                startwidth: 770,
                startheight: 460,

                hideThumbs: 200,
                thumbWidth: 200,
                thumbHeight: 50,
                thumbAmount: 2,

                navigationType: 'thumb',
                navigationArrows: 'solo',
                navigationStyle: 'round',

                touchenabled: 'on',
                onHoverStop: 'on',
                
                swipe_velocity: 0.7,
                swipe_min_touches: 1,
                swipe_max_touches: 1,
                drag_block_vertical: false,
            
                spinner: 'spinner0',
                keyboardNavigation: 'off',

                navigationHAlign: 'center',
                navigationVAlign: 'bottom',
                navigationHOffset: 0,
                navigationVOffset: 20,

                soloArrowLeftHalign: 'left',
                soloArrowLeftValign: 'center',
                soloArrowLeftHOffset: 20,
                soloArrowLeftVOffset: 0,

                soloArrowRightHalign: 'right',
                soloArrowRightValign: 'center',
                soloArrowRightHOffset: 20,
                soloArrowRightVOffset: 0,

                shadow: 0,
                fullWidth: 'on',
                fullScreen: 'off',

                stopLoop: 'off',
                stopAfterLoops: -1,
                stopAtSlide: -1,

                shuffle: 'off',

                autoHeight: 'off',
                forceFullWidth: 'on',
                fullScreenAlignForce: 'off',
                minFullScreenHeight: 0,
                hideNavDelayOnMobile: 1500,
            
                hideThumbsOnMobile: 'off',
                hideBulletsOnMobile: 'off',
                hideArrowsOnMobile: 'off',
                hideThumbsUnderResolution: 0,

                hideSliderAtLimit: 0,
                hideCaptionAtLimit: 0,
                hideAllCaptionAtLilmit: 0,
                startWithSlide: 0,
                fullScreenOffsetContainer: ''
            });
        });
        </script>
<?=$this->site_settings['footer_html'];?>
</body>
</html>