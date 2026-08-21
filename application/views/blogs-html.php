        <main class="main">
            <nav class="breadcrumb-nav">
               <div class="container">
                  <ul class="breadcrumb">
                     <li><a href="<?=base_url();?>"><i class="d-icon-home"></i></a></li>
                     <li><a href="<?=base_url('blog');?>" class="active">Blog</a></li> 
                  </ul>
               </div>
            </nav>
            <div class="page-content with-sidebar">
               <div class="container">
                  <div class="row gutter-lg">
                     <div class="col-lg-9">
                        <div class="posts">
						<?
						foreach($data as $b){
							$image = base_url()."assets/images/".$b['image'];
						?>						
                           <article class="post post-classic mb-7">
                              <figure class="post-media overlay-zoom">
                                 <a href="<?=base_url("blog")."/".$b['seokey'];?>">
                                 <img alt="<?=$rb['alt_image'];?>" src="<?=$image;?>" width="870" height="420" />
                                 </a>
                              </figure>
                              <div class="post-details">
                                 <div class="post-meta">
                                    by <a href="#" class="post-author"><?=$b['author'];?></a>
                                    on <a href="#" class="post-date"><?=date("M d, Y",strtotime($b['date']));?></a>
                                 </div>
                                 <h4 class="post-title"><a href="<?=base_url("blog")."/".$b['seokey'];?>"><?=$b['title'];?></a>
                                 </h4>
                                 <p class="post-content"><?=substr(strip_tags($b['text']),0,450);?>...
                                 </p>
                                 <a href="<?=base_url("blog")."/".$b['seokey'];?>" class="btn btn-link btn-underline btn-primary">Read
                                 more<i class="d-icon-arrow-right"></i></a>
                              </div>
                           </article>
							<?	
							}
							?>                         
                        </div>
                        <ul class="pagination">
                            <?php echo $pagination; ?>
                        </ul>
                     </div>
                     <aside class="col-lg-3 right-sidebar sidebar-fixed sticky-sidebar-wrapper">
                        <div class="sidebar-overlay"></div>
                        <a class="sidebar-close" href="#"><i class="d-icon-times"></i></a>
                        <a href="#" class="sidebar-toggle"><i class="fas fa-chevron-left"></i></a>
                        <div class="sidebar-content">
                           <div class="sticky-sidebar" data-sticky-options="{'top': 89, 'bottom': 70}">
                              <div class="widget widget-collapsible">
                                 <h3 class="widget-title">Recent Posts</h3>
                                 <div class="widget-body">
                                    <div class="post-col">
									<?
									foreach($recent_blogs as $rb){
										$image = base_url()."assets/images/".$rb['image'];
									?>									
                                       <div class="post post-list-sm">
                                          <figure class="post-media">
                                             <a href="<?=base_url("blog")."/".$rb['seokey'];?>">
                                             <img alt="<?=$rb['alt_image'];?>" src="<?=$image;?>"  width="90" height="90"  />
                                             </a>
                                          </figure>
                                          <div class="post-details">
                                             <div class="post-meta">
                                                <a href="#" class="post-date"><?=date("M d, Y",strtotime($rb['date']));?></a>
                                             </div>
                                             <h4 class="post-title"><a href="<?=base_url("blog")."/".$rb['seokey'];?>"><?=substr($rb['title'],0,40)."...";?></a>
                                             </h4>
                                          </div>
                                       </div>
										<?	
										}
										?>									   
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </aside>
                  </div>
               </div>
            </div>
         </main>
