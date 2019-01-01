<?php include_once ('public_header.php'); ?>
<div class="container">
<div class="card mb-3">
  <h1 class="card-header"><hr/>
  	<div class="row">
		<div class="col-lg-6">
			<?= $article->title ?>
		</div>
		<div class="col-lg-6">
			<span style="float: right;">
			<h5><?= date('d M y H:i:s',strtotime($article->created_at)); ?></h5>
			</span>
		</div>
	</div><hr/>
  </h1>
	<?php if(!is_null($article->image_path)): ?>
			<img style="height: 300px; width: 100%; display: block;" src="<?= $article->image_path ?>" alt="Article Image:-<?= $article->title ?>">
	<?php endif; ?>
  
  <div class="card-body">
    <p class="card-text"><?= $article->body ?></p>
    <hr/>
  </div>
  <div class="card-body" >
    <a href="javascript:history.go(-1)" class="card-link" style="float: right;">Back</a>
  </div>
</div>
</div>
<?php include_once ('public_footer.php'); ?>