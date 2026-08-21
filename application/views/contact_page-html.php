         <main class="main mt-6 single-product">
            <div class="page-content mb-10 pb-6">
               <div class="container">
				
                  <div class="tab tab-nav-simple product-tabs">
                     <ul class="nav nav-tabs justify-content-center" role="tablist">
                        <li class="nav-item">
                           <a class="nav-link active" href="#product-tab-description">Contact Us</a>
                        </li> 
                     </ul>
                     <div class="tab-content">
                        <div class="tab-pane active in" id="product-tab-description">
                           <div class="row mt-6">
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
                    <form id="contact-form"  action="" method="post">


						<div class="row form-group over-hidden">
							
							<div class="col-md-6">
								<label for="contact-name">Name <small>*</small></label>
								<input type="text" id="contact-name" name="name" placeholder="Enter Your Name" class="form-control required" required>
							</div>

							<div class="col-md-6">
								<label for="contact-email">Email <small>*</small></label>
								<input type="email" id="contact-email" name="email" placeholder="Enter Your Email" class="form-control required" required>
							</div>


						</div>

						<div class="row form-group over-hidden">
							<div class="col-md-6">
								<label for="contact-subject">Phone <small>*</small></label>
								<input type="text" id="contact-subject" placeholder="Type Subject" name="phone" class="form-control required" required>
							</div>
							
							<div class="col-md-6">
								<label for="contact-subject">Subject <small>*</small></label>
								<input type="text" id="contact-subject" placeholder="Type Subject" name="subject" class="form-control required" required>
							</div>

						</div>

						<div class="form-group over-hidden">
							<label for="contact-message">Message <small>*</small></label>
							<textarea id="contact-message" placeholder="Type Your Message" name="comments" rows="6" cols="30" class="form-control" required> </textarea>
						</div>
						<div class="form-group m-t-2">
							<button class="btn main-bg btn-lg border3px" type="submit" id="contact-submit" name="contact_submit" value="submit"><i class="fa fa-send"></i>Send Message</button>
						</div>

					</form>
                           </div>
                        </div>
                        
                     </div>
                  </div>				  
                 
               </div>
            </div>
         </main>
