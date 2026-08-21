         <main class="main">
            <nav class="breadcrumb-nav">
               <div class="container">
                  <ul class="breadcrumb">
                     <li><a href="<?=base_url();?>"><i class="d-icon-home"></i></a></li>
                     <li><a href="<?=base_url('blog');?>" class="active">Blog</a></li>
                     <li><?=$data['title'];?></li>				 
                  </ul>
               </div>
            </nav>
            <div class="page-content with-sidebar">
               <div class="container">
                  <div class="row gutter-lg">
                     <div class="col-lg-9">
                        <article class="post-single">
                           <figure class="post-media">
						  <?
						  $image = base_url()."assets/images/".$data['image'];
						  ?>						   
                              <a href="#">
                              <img alt="<?=$data['alt_image'];?>" src="<?=$image;?>"  width="880" height="450"  />
                              </a>
                           </figure>
                           <div class="post-details">
                              <div class="post-meta">
                                 by <a href="#" class="post-author"><?=$data['author'];?></a>
                                 on <a href="#" class="post-date"><?=date("M d, Y",strtotime($data['date']));?></a> 
                              </div>
                              <h4 class="post-title"><a href="#"><?=$data['title'];?> </a>
                              </h4>
                              <div class="post-body mb-7">
                                 <p class="mb-5"><?=$data['text'];?>
                                 </p>
                                 <div class="with-img row align-items-center">
                                    
                              </div>
                              
                           </div>
                        </article>
                        
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
                                             <img src="<?=$image;?>" width="90" height="90" alt="post" />
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
