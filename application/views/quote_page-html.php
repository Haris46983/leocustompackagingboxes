         <main class="main mt-6 single-product">
            <div class="page-content mb-10 pb-6">
               <div class="container">
				
                  <div class="tab tab-nav-simple product-tabs">
                     <ul class="nav nav-tabs justify-content-center" role="tablist">
                        <li class="nav-item">
                           <a class="nav-link active" href="#product-tab-description">Request A Quote</a>
                        </li> 
                     </ul>
                     <div class="tab-content">
                        <div class="tab-pane active in" id="product-tab-description">
                           <div class="row mt-6">
                              				<?
				if($this->session->flashdata('quote_form_success')){
				?>
				<div class="alert alert-success" style="color:#FFF;"><?=$this->session->flashdata('quote_form_success');?></div>
				<?
				}
				if($this->session->flashdata('quote_form_alert')){
				?>
				<div class="alert alert-danger" style="color:#FFF;"><?=$this->session->flashdata('quote_form_alert');?></div>
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
                        </div>
                        
                     </div>
                  </div>				  
                 
               </div>
            </div>
         </main>
