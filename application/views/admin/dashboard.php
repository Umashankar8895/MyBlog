<?php include_once ('admin_header.php'); ?>
<div class="container">
	<br/>
	<div class="row">
		<div class="col-lg-6 col-lg-offset-6">
			<a href="<?= base_url('admin/store_article') ?>" class="btn btn-lg pull-right btn-primary">Add Article</a>
			<!-- anchor('admin/add_article','Add Article',['class'='btn btn-lg btn-primary pull-right']) -->
		</div>
	</div>
	<br/>
	<?php if($feedback=$this->session->flashdata('feedback')): 
	$feedback2=$this->session->flashdata('feedback_class');
	?>
        <!-- <div class="form-group col-lg-12"> -->
          <div class=" alert alert-dismissible <?= $feedback2 ?> ">
          <?= $feedback ?>
          </div>
       <!--  </div> -->
    <?php endif; ?>
	<table class="table table-hover" >
		<thead class="thead-dark">
			<th>Sr. No.</th>
			<th>Title</th>
			<th>Action</th>
		</thead>
		<tbody>
			<?php if ( count($articles) ) : 
			$count=$this->uri->segment(3, 0);
			 foreach ($articles as $article):	?>	
			<tr>
				<td>
					<?= ++$count; ?>
				</td>
				<td>
					<?= anchor("user/article/{$article->id}",$article->title) ?>
				</td>
				<td>
					<div class="row">
						<div class="col-lg-2">
							<?= anchor("admin/edit_article/{$article->id}",'Edit',['class'=>'btn btn-primary']); ?>
							<!-- <a href="" class="btn btn-primary">Edit</a> -->	
						</div>
						<div class="col-lg-2">
							<?= 
							form_open('admin/delete_article'),
							form_hidden('article_id',$article->id),
							form_submit(['name'=>'submit','value'=>'Delete','class'=>'btn btn-danger']),
							form_close();
							?>
							<!-- <a href="" class="btn btn-danger">Delete</a> -->
						</div>
					</div>		
				</td>
			</tr>
		<?php endforeach; ?>
		<?php else: ?>
			<tr>
				<td colspan="3">
					No Record Found
				</td>
			</tr>
		<?php endif; ?>
			
		</tbody>
	</table>
	<?= $this->pagination->create_links(); ?>
</div>
<?php include_once ('admin_footer.php'); ?>