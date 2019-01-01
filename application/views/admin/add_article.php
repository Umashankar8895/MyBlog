<?php include_once ('admin_header.php'); ?>
 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<div class="container">
	<?= form_open_multipart('admin/store_article', ['class'=>'form-horizontal']) ?>
	<?php echo form_hidden('user_id',$this->session->userdata('user_id')); ?>
  <?php echo form_hidden('created_at',date('Y-m-d H:i:s')); ?>
  <fieldset>
    <legend>Add Article</legend>
   
    <div class="form-group col-lg-10 col-lg-offset-2">
      <label for="userName">Article Title</label>
      <?= form_input(['class'=>'form-control','name'=>'title','placeholder'=>'Article Title','value'=>set_value('title')]); ?>
      <!-- <small id="userNameHelp" class="form-text text-muted">We'll never share your User Name with anyone else.</small> -->
    </div>
	<div class="form-group col-lg-10 col-lg-offset-2">
      <?= form_error('title',"<p class='text-danger'>","</p>"); ?>
    </div>
    <div class="form-group col-lg-10 col-lg-offset-2">
      <label for="articlebody">Article Body</label>
      <?= form_textarea(['class'=>'form-control','name'=>'body','placeholder'=>'Article Body','value'=>set_value('body')]); ?>
    </div>
    <div class="form-group col-lg-10 col-lg-offset-2">
    <?= form_error('body'); ?>
	</div>
  <div class="row form-group col-lg-10 col-lg-offset-2">
    <div class="form-group col-lg-6">
      <label for="userfile">Select Image</label>
      <?= form_upload(['class'=>'form-control','name'=>'userfile','id'=>'profile-img']); ?>
    </div>
    <div class="form-group col-lg-4">
      <img src="" id="profile-img-tag" width="150px" height="" />
    </div>
 </div>
  <div class="form-group col-lg-10 col-lg-offset-2">
      <?php if(isset($upload_error)) echo $upload_error; ?>
    </div>

    <div class="form-group">
    	<div class="col-lg-10 col-lg-offset-2">
    		<?= form_reset(['name'=>'reset','value'=>'Reset','class'=>'btn btn-defult']),
    		    form_submit(['name'=>'submit','value'=>'Submit','class'=>'btn btn-primary']); ?>
    		<!-- <button type="submit" class="btn btn-primary">Submit</button> -->
    	</div>   
	</div>
  </fieldset>
</form>
</div>
<script type="text/javascript">
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function (e) {
                $('#profile-img-tag').attr('src', e.target.result);
                $('#profile-img-tag').attr('height', 100);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#profile-img").change(function(){
        readURL(this);
    });
</script>
<?php include_once ('admin_footer.php'); ?>