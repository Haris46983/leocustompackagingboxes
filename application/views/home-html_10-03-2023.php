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
			   
				<section class="pt-10 pb-10 parallax" data-image-src="images/banner.jpg">
				   <div class="code-template">
					  <div class="container mt-4 mb-4 code-content">
						 <h2 class="title title-center title-white mb-0">Testimonials</h2>
						 <div class="owl-carousel owl-theme row owl-dot-white cols-1" data-owl-options="{
							'items': 1,
							'nav': false,
							'dots': true,
							'autoPlay': true,
							'loop': false,
							'margin': 20
							}">
							<?
							foreach($home_testimonials as $ht){
							?>							
							<div class="testimonial testimonial-centered testimonial-bg">
							   <div class="testimonial-info">
								  <figure class="testimonial-author-thumbnail">
									 <img src="<?=base_url();?>files/images/<?=$ht['image'];?>" alt="<?=$ht['alt_image'];?>" width="50" height="50" />
								  </figure>
								  <blockquote><?=$ht['text'];?>
								  </blockquote>
								  <cite>
								  <?=$ht['name'];?>
								  </cite>
							   </div>
							</div>
							<?
							}
							?>							
							
						 </div>
					  </div>
				   </div>
				</section>

               <section class="blog-post-wrapper mt-6 mt-md-10 pt-7 appear-animate" data-animation-options="{'name': 'fadeIn', 'duration': '1s'}">
                  <div class="container">
                     <h2 class="title title-center">Featured BLOGS</h2>
                     <div class="owl-carousel owl-theme post-slider row cols-lg-3 cols-sm-2 cols-1" data-owl-options="{
                        'nav': false,
                        'dots': true,
                        'margin': 20,
                        'responsive': {
                        '0': {
                        'items': 1
                        },
                        '576': {
                        'items': 2
                        },
                        '992': {
                        'items': 3,
                        'dots': false
                        }
                        }
                        }">
                        
						<?
						foreach($recent_blogs as $rb){
						?>						
						<div class="blog-post mb-4">
                           <article class="post post-frame overlay-zoom">
                              <figure class="post-media">
                                 <a href="<?=base_url('blog/'.$rb['seokey']);?>">
                                 <img src="<?=base_url();?>files/images/<?=$rb['image'];?>" alt="<?=$rb['alt_image'];?>" width="340" height="206" style="background-color: #919fbc;" />
                                 </a>
                              </figure>
                              <div class="post-details">
                                 <h4 class="post-title"><a href="<?=base_url('blog/'.$rb['seokey']);?>"><?=$rb['title'];?></a>
                                 </h4>
                                 <p class="post-content"><?=substr(strip_tags($rb['text']),0,100);?>...
                                 </p>
                                 <a href="<?=base_url('blog/'.$rb['seokey']);?>" class="btn btn-primary btn-link btn-underline">Read
                                 More<i class="d-icon-arrow-right"></i></a>
                              </div>
                           </article>
                        </div>
						<?
						}
						?>						
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
             
            </div>
         </main>

  
  <!-- header service -->
 