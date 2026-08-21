<section id="content">
        <section class="hbox stretch">
          <section>
            <section class="vbox">
              <section class="scrollable padder">
                <section class="row m-b-md">
                  <div class="col-sm-6">
                    <h3 class="m-b-xs text-black">Change Password</h3>
                </section>
                <div class="row">
				<div class="col-sm-12">
                <section class="panel panel-default">
                  <header class="panel-heading font-bold">Password Updation form</header>
                    <?php echo form_open('change_password_request'); ?>
                  <div class="panel-body">
                      <div class="form-group col-lg-4">
                        <label>Current Password</label>
                        <input type="password" name="c_pass" class="form-control" placeholder="Enter current password">
                      </div>
                      <div class="form-group col-lg-4">
                        <label>New Password</label>
                        <input type="password" name="n_pass" class="form-control" placeholder="Enter new password">
                      </div>
					  <div class="form-group col-lg-4">
                        <label>Confirm New Password</label>
                        <input type="password" name="cn_pass" class="form-control" placeholder="Enter new password again">
                      </div>
                  </div>
					  <div class="panel-body">
					  <div class="form-group col-lg-4">
					  <input value="Update" class="btn btn-primary" id="exampleInputEmail2" style="display: inline-block" type="submit">
					  </div>
					  <div class="form-group col-lg-12">
					  <div class="text-center m-t m-b" style="color:red;"><?php echo validation_errors(); if(isset($message)) echo $message; ?></div>
					  </div>
					  </div>
                    </form>
                </section>
              </div>
                </div>
              </section>
            </section>
          </section>
        </section>
        <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen" data-target="#nav"></a> </section>
    </section>
  </section>
</section>