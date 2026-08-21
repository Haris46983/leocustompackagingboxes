        <main class="main">
            <div class="page-content">
               <section class="intro-section">
                  <div class="owl-carousel owl-theme row owl-dot-inner owl-dot-white intro-slider animation-slider cols-1 gutter-no" data-owl-options="{
                     'nav': false,
                     'dots': true,
                     'loop': false,
                     'items': 1,
                     'autoplay': false,
                     'autoplayTimeout': 8000
                     }">
					  <?
					  foreach($banners as $b){
					  ?>					 
                     <div class="banner banner-fixed intro-slide1" style="background-color: #46b2e8;">
                        <figure>
                           <img src="<?=base_url();?>files/images/<?=$b['image'];?>" alt="<?=$b['alt_image'];?>" width="100%"  style="background-color: #34ace5;" />
                        </figure> 
                     </div>
					<?
					  }
					  ?>					 
                  </div>
               </section>
                <section class="pt-10 mt-7 appear-animate fadeIn appear-animation-visible" data-animation-options="{
                   'delay': '.3s'
                   }" style="animation-duration: 1.2s;">
                   <div class="container">
                      <div class="row">
                         <div class="col-xs-6 col-lg-2 mb-4">
                            <div class="category category-default1 category-absolute banner-radius overlay-zoom">
                               
                                  <figure class="category-media">
                                     <img src="<?=base_url();?>files/images/1.jpg"  style="background-color: #ececef;">
                                  </figure>
                            </div>
                         </div>
                         <div class="col-xs-6 col-lg-2 mb-4">
                            <div class="category category-default1 category-absolute banner-radius overlay-zoom">
                               
                                  <figure class="category-media">
                                     <img src="<?=base_url();?>files/images/2.jpg"  style="background-color: #ececef;">
                                  </figure>
                            </div>
                         </div>                         
                         <div class="col-xs-6 col-lg-2 mb-4">
                            <div class="category category-default1 category-absolute banner-radius overlay-zoom">
                               
                                  <figure class="category-media">
                                     <img src="<?=base_url();?>files/images/3.jpg"  style="background-color: #ececef;">
                                  </figure>
                            </div>
                         </div>
                         <div class="col-xs-6 col-lg-2 mb-4">
                            <div class="category category-default1 category-absolute banner-radius overlay-zoom">
                               
                                  <figure class="category-media">
                                     <img src="<?=base_url();?>files/images/4.jpg"  style="background-color: #ececef;">
                                  </figure>
                            </div>
                         </div>
                         <div class="col-xs-6 col-lg-2 mb-4">
                            <div class="category category-default1 category-absolute banner-radius overlay-zoom">
                               
                                  <figure class="category-media">
                                     <img src="<?=base_url();?>files/images/5.jpg"  style="background-color: #ececef;">
                                  </figure>
                            </div>
                         </div>
                         <div class="col-xs-6 col-lg-2 mb-4">
                            <div class="category category-default1 category-absolute banner-radius overlay-zoom">
                               
                                  <figure class="category-media">
                                     <img src="<?=base_url();?>files/images/6.jpg"  style="background-color: #ececef;">
                                  </figure>
                            </div>
                         </div>                         
                                               
                      </div>
                   </div>
                </section>
                 <section class="intro-section">
                  
                  <div class="container mt-6 appear-animate">
                     <div class="service-list">
                        <div class="owl-carousel owl-theme row cols-lg-3 cols-sm-2 cols-1" data-owl-options="{
                           'items': 3,
                           'nav': false,
                           'dots': false,
                           'loop': true,
                           'autoplay': false,
                           'autoplayTimeout': 5000,
                           'responsive': {
                           '0': {
                           'items': 1
                           },
                           '576': {
                           'items': 2
                           },
                           '768': {
                           'items': 3,
                           'loop': false
                           }
                           }
                           }">
                           <div class="icon-box icon-box-side icon-box1 appear-animate" data-animation-options="{
                              'name': 'fadeInRightShorter',
                              'delay': '.3s'
                              }">
                              <i class="icon-box-icon d-icon-truck"></i>
                              <div class="icon-box-content">
                                 <h4 class="icon-box-title text-capitalize ls-normal lh-1">Free Shipping &amp;
                                    Return
                                 </h4>
                                 <p class="ls-s lh-1">Free shipping on orders over $99</p>
                              </div>
                           </div>
                           <div class="icon-box icon-box-side icon-box2 appear-animate" data-animation-options="{
                              'name': 'fadeInRightShorter',
                              'delay': '.4s'
                              }">
                              <i class="icon-box-icon d-icon-service"></i>
                              <div class="icon-box-content">
                                 <h4 class="icon-box-title text-capitalize ls-normal lh-1">Customer Support 24/7</h4>
                                 <p class="ls-s lh-1">Instant access to perfect support</p>
                              </div>
                           </div>
                           <div class="icon-box icon-box-side icon-box3 appear-animate" data-animation-options="{
                              'name': 'fadeInRightShorter',
                              'delay': '.5s'
                              }">
                              <i class="icon-box-icon d-icon-secure"></i>
                              <div class="icon-box-content">
                                 <h4 class="icon-box-title text-capitalize ls-normal lh-1">100% Secure Payment</h4>
                                 <p class="ls-s lh-1">We ensure secure payment!</p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </section>                
               <section class="product-wrapper container appear-animate mt-6 mt-md-10 pt-4 pb-8" data-animation-options="{
                  'delay': '.3s'
                  }">
                  <h2 class="title title-center mb-5">Our Premium Packaging  </h2>
                  <div class=" owl-theme row owl-nav-full cols-2 cols-md-3 cols-lg-4" data-owl-options="{
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
                     'items': 5,
                     'dots': false,
                     'nav': true
                     }
                     }
                     }">
					 					
					<? 
					foreach($home_section_1 as $s1){ 
					?>					 
                     <div class="product text-center">
                        <figure class="product-media">
                           <a href="<?=$s1['link'];?>">
                           <img src="<?=base_url();?>files/images/<?=$s1['image'];?>" alt="<?=$s1['alt_image'];?>" width="280" height="315" style="background-color: #f2f3f5;" />
                           </a>
                           <div class="product-action">
                              <a href="<?=$s1['link'];?>" class="btn-product " title="Read More">Read More</a>
                           </div>						   
                        </figure>
                        <div class="product-details">

                           <h3 class="product-name">
                              <a href="<?=$s1['link'];?>"><?=$s1['text'];?></a>
                           </h3>

                        </div>
                     </div>
					<? } ?>
					 
					 
                  </div>
               </section>
            
               <section class="product-wrapper mt-6 mt-md-10 pt-4 mb-10 pb-2 container appear-animate" data-animation-options="{
                  'delay': '.6s'
                  }">
                  <h2 class="title title-center">By Industry</h2>
                  <div class="owl-carousel owl-theme row cols-2 cols-md-3 cols-lg-4 cols-xl-5" data-owl-options="{
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
                     'items': 4
                     },
                     '1200': {
                     'items': 5,
                     'dots': false,
                     'nav': true
                     }
                     }
                     }">
                    <? 
					foreach($home_section_2 as $s1){ 
					?>					 
                     <div class="product text-center">
                        <figure class="product-media">
                           <a href="<?=$s1['link'];?>">
                           <img src="<?=base_url();?>files/images/<?=$s1['image'];?>" alt="<?=$s1['alt_image'];?>" width="280" height="315" style="background-color: #f2f3f5;" />
                           </a>
                           <div class="product-action">
                              <a href="<?=$s1['link'];?>" class="btn-product " title="Read More">Read More</a>
                           </div>						   
                        </figure>
                        <div class="product-details">

                           <h3 class="product-name">
                              <a href="<?=$s1['link'];?>"><?=$s1['text'];?></a>
                           </h3>

                        </div>
                     </div>
					<? } ?>
                  </div>
               </section>
<section>
   <div class="container">
      <div class="row">
         <div class="col-md-12 mt-10">
            <h2 class="title title-center pl-2 pr-2 ls-m">Frequently Asked Questions</h2>
            <div class="accordion accordion-border accordion-boxed accordion-plus">
               <div class="card">
                  <div class="card-header">
                     <a href="#collapse3-1" class="expand">Is it possible to receive an instant quote for my order?</a>
                  </div>
                  <div id="collapse3-1" class="collapsed" style="display: none;">
                     <div class="card-body">
                        <p>Absolutely! With our free 3D design tool, you can choose your size, material, quantity and printing, giving you an instant quote for your project. As you upload artwork, add text, or color the background in each panel of the 3D model, you'll witness the Unit Price updating instantly.
                        </p>
                     </div>
                  </div>
               </div>
               <div class="card">
                  <div class="card-header">
                     <a href="#collapse3-2" class="collapse">What is the duration of your production time?</a>
                  </div>
                  <div id="collapse3-2" class="expanded" style="display: block;">
                     <div class="card-body">
                        <p>The production timeline varies from 8-10 business days, depending on the order quantity. After checkout, you will receive an estimated "in hands" date for the boxes shopping cart.
                        </p>
                     </div>
                  </div>
               </div>
               <div class="card">
                  <div class="card-header">
                     <a href="#collapse3-3" class="expand">Where do your custom boxes get manufactured?</a>
                  </div>
                  <div id="collapse3-3" class="collapsed">
                     <div class="card-body">
                        <p>We manufacture all our custom boxes in the USA.
                        </p>
                     </div>
                  </div>
               </div>
               <div class="card">
                  <div class="card-header">
                     <a href="#collapse3-4" class="expand">Can I try out samples before purchasing?</a>
                  </div>
                  <div id="collapse3-4" class="collapsed">
                     <div class="card-body">
                        <p>Absolutely! Our sample kit is curated to showcase our top-selling products, allowing you to experience their exceptional quality firsthand. You'll get the chance to see and feel the materials up close. Additionally, we offer a convenient swatch book for your reference.
                        </p>
                     </div>
                  </div>
               </div>

            </div>
         </div>

      </div>
   </div>
</section>
                <section class="pt-10 mt-7 appear-animate fadeIn appear-animation-visible" data-animation-options="{
                   'delay': '.3s'
                   }" style="animation-duration: 1.2s;">
                   <div class="container">
                      <h2 class="title title-center mb-5">Our Main Categories</h2>
                      <div class="row">
                    <? 
					foreach($m_category as $mc){ 
					?>	                          
                         <div class="col-xs-6 col-lg-3 mb-4">
                            <div class="category category-default1 category-absolute banner-radius overlay-zoom">
                               <a href="<?=base_url($mc['seokey']);?>">
                                  <figure class="category-media">
                                     <img src="<?=base_url().'files/images/'.$mc['thumb_image']?>" alt="<?=$mc['thumb_alt_image'];?>" width="280" height="280" style="background-color: #8c8c8d;">
                                  </figure>
                               </a>
                               <div class="category-content">
                                  <h4 class="category-name font-weight-bold ls-l"><a href="<?=base_url($mc['seokey']);?>"><?=$mc['name'];?></a>
                                  </h4>
                               </div>
                            </div>
                         </div>
                         <? } ?>
                         
                      </div>
                   </div>
                </section>

                <section class="pt-10 mt-7 appear-animate fadeIn appear-animation-visible" data-animation-options="{
                   'delay': '.3s'
                   }" style="animation-duration: 1.2s;">
                   <div class="container">
                      <div class="row">
                        
                         <p><?=$this->site_settings['home_text_1'];?>  <span id="dots">...</span><span id="more"><?=$this->site_settings['home_text_1'];?>  </span></p>
<button style="width:100px;background-color:#ffb600;border:1px solid #ffb600;" onclick="myFunction()" id="myBtn">Read more</button>
                         
                      </div>
                   </div>
                </section>                
                                 
               <section class="mt-2 pb-6 pt-10 pb-md-10 appear-animate" data-animation-options="{
                  'delay': '.3s'
                  }">
                  <h2 class="title title-center">Our Clients</h2>
                  <div class="container">
                     <div class="owl-carousel owl-theme row brand-carousel cols-xl-6 cols-lg-5 cols-md-4 cols-sm-3 cols-2" data-owl-options="{
                        'nav': false,
                        'dots': false,
                        'autoplay': true,
                        'margin': 20,
                        'loop': true,
                        'responsive': {
                        '0': {
                        'items': 2
                        },
                        '576': {
                        'items': 3
                        },
                        '768': {
                        'items': 4
                        },
                        '992': {
                        'items': 5
                        },
                        '1200': {
                        'items': 6
                        }
                        }
                        }">
					<?
					foreach($home_clients as $hc){
					?>						
                        <figure><img src="<?=base_url();?>files/images/<?=$hc['image'];?>" alt="<?=$hc['alt_image'];?>" width="180" height="100" /></figure>
					<?
					}
					?>						
                     </div>
                  </div>
               </section>
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
         </main>
<style>
#more {display: none;}
</style>


<script>
function myFunction() {
  var dots = document.getElementById("dots");
  var moreText = document.getElementById("more");
  var btnText = document.getElementById("myBtn");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Read more"; 
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Read less"; 
    moreText.style.display = "inline";
  }
}
</script>
  
  <!-- header service -->
 