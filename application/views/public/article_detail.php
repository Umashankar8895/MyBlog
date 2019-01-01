<?php include_once ('public_header.php'); ?>
<div class="container">
	<hr/>
	<div class="row">
		<div class="col-lg-6">
			<h1><?= $article->title ?></h1>
		</div>
		<div class="col-lg-6">
			<span style="float: right;">
			<?= date('d M y H:i:s',strtotime($article->created_at)); ?>
			</span>
		</div>
	</div>
	<hr/>
	<p>
		<?= $article->body ?>
	</p>
	<?php 
	if(!is_null($article->image_path)): ?>
			<img src="<?= $article->image_path ?>" alt="Article Image:-<?= $article->title ?>">
	<?php endif; ?>
</div>
<?php include_once ('public_footer.php'); ?>