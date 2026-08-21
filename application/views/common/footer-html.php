<style>
    
.glow {
    animation: glow 1s ease-in-out infinite alternate
}

@-webkit-keyframes glow {
    from {
        text-shadow: 0 0 10px #fff, 0 0 20px #fff, 0 0 30px #fff, 0 0 40px #fff, 0 0 50px #fff, 0 0 60px #fff, 0 0 70px #fff
    }

    to {
        text-shadow: 0 0 20px #000, 0 0 30px #000, 0 0 40px #000, 0 0 50px #000, 0 0 60px #000, 0 0 70px #000, 0 0 80px #000
    }
}

.theme-btn_w.bt-buy-now {
    background: #1fdf61;
    background: -moz-linear-gradient(top, #A3D179 0%, #88BA46 100%);
    background: -webkit-linear-gradient(top, #A3D179 0%,#88BA46 100%);
    background: linear-gradient(to bottom, #A3D179 0%,#88BA46 100%);
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#1fdf61', endColorstr='#88BA46',GradientType=0 );
    bottom: 220px
}

.theme-btn_w:hover {
    color: #fff;
    padding: 0 20px
}
</style>
<a style="background:#10dd52;position:fixed;bottom:10%;margin-left: 6px;left:0;z-index:1050;color: #fff;padding: 16px;border-radius: 40px;z-index: 9999;" href="https://wa.me/<?=$this->site_settings['phone'];?>" class="glow bt-buy-now theme-btn_w"><i style="font-size: 30px;" class="fab fa-whatsapp"></i></a>
 
<a style="background:#000;position:fixed;bottom:25%;margin-left: 6px;left:0;z-index:1050;color: #fff;border: 2px solid #ffb600;padding: 16px;border-radius: 40px;z-index: 9999;" href="tel:<?=$this->site_settings['phone'];?>" class="glow bt-buy-now theme-btn_w"><i style="font-size: 30px;color:#fff;" class="d-icon-phone"></i></a>
  
 <a href="<?=base_url('quote');?>" style="transform: rotate(270deg);-ms-transform: rotate(270deg);-webkit-transform: rotate(270deg); position:fixed; bottom:50%; margin-left:-35px;  left:0;  z-index:1050; background-color: #000;font-size: 15px;color: white;padding: 5px 10px;" >
   Get A Quote</a>

 <a href="<?=base_url('contact');?>" style="transform: rotate(90deg);-ms-transform: rotate(90deg);-webkit-transform: rotate(90deg); position:fixed; bottom:40%; margin-right:-25px;  right:0;  z-index:1050; background-color: #000;font-size: 15px;color: white;padding: 5px 10px;" >
   Call Back</a>


         <footer class="footer">
            <div class="container">
 
               <div class="footer-middle">
                  <div class="row">
                     <div class="col-lg-3 col-md-6">
                        <div class="widget widget-info">
                           <h4 class="widget-title">Contact Info</h4>
                           <ul class="widget-body">
                              <li>
                                 <label>Phone:</label>
                                 <a href="tel:<?=$this->site_settings['phone'];?>"><?=$this->site_settings['phone'];?></a>
                              </li>
                              <li>
                                 <label>Email:</label>
                                 <a href="mailto:<?=$this->site_settings['email'];?>"><?=$this->site_settings['email'];?></a>
                              </li>
                              <li>
                                 <label>Address:</label>
                                 <a href="#"><?=$this->site_settings['address'];?></a>
                              </li> 
                           </ul>
                        </div>
                     </div>
                     <div class="col-lg-3 col-md-6">
                        <div class="widget ml-lg-4">
                           <h4 class="widget-title"><?=$this->site_settings['footer_links_heading_1'];?></h4>
                           <ul class="widget-body">
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
                     </div>
                     <div class="col-lg-3 col-md-6">
                        <div class="widget ml-lg-4">
                           <h4 class="widget-title"><?=$this->site_settings['footer_links_heading_2'];?></h4>
                           <ul class="widget-body">
								<?
								foreach($second_links as $sl){
								?>
								<li><a href="<?=$sl['link'];?>"><?=$sl['title'];?></a></li>
								<?
								}
								?>
                           </ul>
                        </div>
                     </div>
                     <div class="col-lg-3 col-md-6">
                        <div class="widget ml-lg-4">
                           <h4 class="widget-title"><?=$this->site_settings['footer_links_heading_3'];?></h4>
                           <ul class="widget-body">
								<?
								foreach($third_links as $tl){
								?>
								<li><a href="<?=$tl['link'];?>"><?=$tl['title'];?></a></li>
								<?
								}
								?>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="footer-bottom">

                  <div class="footer-center">
                     <p class="copyright"> &copy; <?=date('Y');?>. All Rights Reserved</p>
                  </div>
                  <div class="footer-right">
                     <div class="social-links">
                        <a href="<?=$this->site_settings['facebook_link'];?>" title="social-link" class="social-link social-facebook fab fa-facebook-f"></a>
                        <a href="<?=$this->site_settings['twitter_link'];?>" title="social-link" class="social-link social-twitter fab fa-twitter"></a>
                        <a href="<?=$this->site_settings['linkedin_link'];?>" title="social-link" class="social-link social-linkedin fab fa-linkedin-in"></a>
                     </div>
                  </div>
               </div>
            </div>
         </footer>
      </div>
      
      <a id="scroll-top" href="#top" title="Top" role="button" class="scroll-top"><i class="d-icon-arrow-up"></i></a>
      <div class="mobile-menu-wrapper">
         <div class="mobile-menu-overlay"></div>
         <a class="mobile-menu-close" href="#"><i class="d-icon-times"></i></a>
         <div class="mobile-menu-container scrollable">
            <form action="<?= base_url('search'); ?>" class="input-wrapper">
               <input type="text" class="form-control" name="keyword" id="search" autocomplete="off" placeholder="Search your keyword..." required />
               <button class="btn btn-search" type="submit" title="submit-button">
               <i class="d-icon-search"></i>
               </button>
            </form>
            <ul class="mobile-menu mmenu-anim">
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
                  <ul>
                     <li>
                        <a href="<?=$mega_menu['url_1'];?>">
                       <?=$mega_menu['heading_1'];?>
                        </a>
                        <ul>
							<?
							foreach($mega_menu_links1 as $l){
							?>							
							  <li><a href="<?=$l['url'];?>"><?=$l['name'];?></a></li>
							<?
							}
							?>
                        </ul>
                     </li>
                     <li>
                        <a href="<?=$mega_menu['url_2'];?>">
                       <?=$mega_menu['heading_2'];?>
                        </a>
                        <ul>
							<?
							foreach($mega_menu_links2 as $l){
							?>							
							  <li><a href="<?=$l['url'];?>"><?=$l['name'];?></a></li>
							<?
							}
							?>
                        </ul>
                     </li>
                     <li>
                        <a href="<?=$mega_menu['url_3'];?>">
                       <?=$mega_menu['heading_3'];?>
                        </a>
                        <ul>
							<?
							foreach($mega_menu_links3 as $l){
							?>							
							  <li><a href="<?=$l['url'];?>"><?=$l['name'];?></a></li>
							<?
							}
							?>
                        </ul>
                     </li>		
                     <li>
                        <a href="<?=$mega_menu['url_4'];?>">
                       <?=$mega_menu['heading_4'];?>
                        </a>
                        <ul>
							<?
							foreach($mega_menu_links4 as $l){
							?>							
							  <li><a href="<?=$l['url'];?>"><?=$l['name'];?></a></li>
							<?
							}
							?>
                        </ul>
                     </li>						 
                     
                  </ul>
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
                                    <ul>
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
         </div>
      </div>

	  <script src="<?=base_url();?>files/vendor/jquery/jquery.min.js"></script>
      <script src="<?=base_url();?>files/vendor/parallax/parallax.min.js"></script>
      <script src="<?=base_url();?>files/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
      <script src="<?=base_url();?>files/vendor/elevatezoom/jquery.elevatezoom.min.js"></script>
      <script src="<?=base_url();?>files/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
      <script src="<?=base_url();?>files/vendor/owl-carousel/owl.carousel.min.js"></script>
      <script src="<?=base_url();?>files/js/main.min.js"></script>

<?=$this->site_settings['footer_html'];?>
</body>
</html>