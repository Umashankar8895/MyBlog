<?php include_once ('public_header.php'); ?>
<div class="container">
	<hr/><h1>Search Articles</h1><hr/>
	<table class="table">
		<thead>
			<tr>
				<td>Sr. No.</td>
				<td>Article Title</td>
				<td>Published On</td>
			</tr>
		</thead>
		<tbody>
			<?php if(count($articles)):
				$count=$this->uri->segment(4, 0);
				foreach($articles as $article): 
			?>
			<tr>
				<td> <?= ++$count ?></td>
				<td><?= anchor("user/article/{$article->id}",$article->title) ?></td>
				<td><?= $article->created_at ?></td>
			
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
<?php include_once ('public_footer.php'); ?>