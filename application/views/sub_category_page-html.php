         <main class="main">
            <div class="page-header" style="background-image: url('<?=base_url();?>assets/images/<?=($data['banner_image'] != "") ? $data['banner_image'] : 'category-banner1.jpg';?>'); background-color: #3C63A4;">
               <h3 class="page-subtitle"><?=$data['name'];?></h3>
               <ul class="breadcrumb">
                  <li><a href="<?=base_url();?>"><i class="d-icon-home"></i> </a></li>
				  <li class="delimiter">/</li>
				  <li><a href="<?=base_url($main_category['seokey']);?>" title="Go to Home Page"><?=$main_category['name'];?></a></li>
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
                                 <h3 class="widget-title">Categories</h3>
                                 <ul class="widget-body filter-items search-ul">
									<?
									foreach($all_sub_category as $mc){
									?>
									<li> <a href="<?=base_url($main_category['seokey'].'/'.$mc['seokey']);?>"><?=$mc['name'];?></a> </li>
									<?
									}
									?>		
                                 </ul>
                              </div>
                             
                           </div>
                        </div>
                     </aside>
                     <div class="col-lg-9 main-content">
                       
                        <div class="row cols-2 cols-sm-3 product-wrapper">
						<?	
						foreach($products as $p){
							$p_image = $this->home_model->get_product_thumb_image($p['id']);
							
							if(!$p_image)
								$p_image = $this->home_model->get_product_images($p['id']);
							
							if(!$p_image){
								$p_image['image'] = 'product1.jpg';
								$p_image['alt_image'] = 'No Image Found';
							}
							else{
								$p_image = $p_image[0];
							}
							
							// echo "<pre>"; print_r($p_image); echo "</pre>";
							
							$rating = $this->home_model->get_product_total_rating($p['id']);
							// echo "<pre>"; print_r($rating); echo "</pre>";
							
							$all_reviews = $this->home_model->get_product_reviews($p['id']);
							// echo "<pre>"; print_r($all_reviews); echo "</pre>";
							
							$reviews = count($all_reviews);
							@$total_rating = round($rating['rating']/$reviews,2);
							$total_rating_percent = round($total_rating*20,2);							
						?>
                           <div class="product-wrap">
                              <div class="product">
                                 <figure class="product-media">
                                    <a href="<?=base_url($p['seokey']);?>">
                                    <img src="<?=base_url();?>files/images/<?=$p_image['image'];?>" alt="<?=$p['name'];?>" width="280" height="315">
                                    </a>
                                    <div class="product-action">
                                       <a href="<?=base_url($p['seokey']);?>" class="btn-product " title="Quick View">Read More
                                       </a>
                                    </div>
                                 </figure>
                                 <div class="product-details">
                                    <h3 class="product-name">
                                       <a href="<?=base_url($p['seokey']);?>"><?=$p['name'];?></a>
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
                  <section class="container pt-3 mt-10">
                     <h2 class="title justify-content-center">Importants Links</h2>
                         <div class="row">
                         <?
						foreach($namelinks_category as $rp){
							
						?>                       
    						<div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4" >
    							<div style="border: 1px solid #dadada;text-align: center;"> 
                                    <a style="font-size: 25px;text-transform: uppercase;" href="<?=base_url($rp['link']);?>"><?=$rp['name'];?></a> 
                                </div>   
                            </div>
						<?
						}
						?>
						</div>
                  </section> 
            </div>
         </main>
