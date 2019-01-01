<?php include_once ('public_header.php'); ?>
<div class="container">
	<?= form_open('login/admin_login', ['class'=>'form-horizontal']) ?>
  <fieldset>
    <legend>Admin Login</legend>
    <?php if($error=$this->session->flashdata('loginFailed')): ?>
        <div class="form-group col-lg-10 col-lg-offset-2">
          <div class=" alert alert-dismissible alert-danger ">
          <?= $error ?>
          </div>
        </div>
    <?php endif; ?>
    <div class="form-group col-lg-10 col-lg-offset-2">
      <label for="userName">User Name</label>
      <?= form_input(['class'=>'form-control','name'=>'userName','placeholder'=>'User Name','value'=>set_value('userName')]); ?>
      <!-- <small id="userNameHelp" class="form-text text-muted">We'll never share your User Name with anyone else.</small> -->
    </div>
	<div class="form-group col-lg-10 col-lg-offset-2">
      <?= form_error('userName',"<p class='text-danger'>","</p>"); ?>
    </div>
    <div class="form-group col-lg-10 col-lg-offset-2">
      <label for="password">Password</label>
      <?= form_password(['class'=>'form-control','name'=>'password','placeholder'=>'Password','value'=>set_value('password')]); ?>
    </div>
    <div class="form-group col-lg-10 col-lg-offset-2">
    <?= form_error('password'); ?>
	</div>
    <div class="form-group">
    	<div class="col-lg-10 col-lg-offset-2">
    		<?= form_reset(['name'=>'reset','value'=>'Reset','class'=>'btn btn-defult']),
    		    form_submit(['name'=>'submit','value'=>'Login','class'=>'btn btn-primary']); ?>
    		<!-- <button type="submit" class="btn btn-primary">Submit</button> -->
    	</div>
    
	</div>
  </fieldset>
</form>


</div>


<?php include_once ('public_footer.php'); ?>