<?php include ROOT . '/views/layouts/header.php'; ?>

<section class="theatre">
	<div class="container">
		<div class="news-list">
			<div class="row">
				<div class="col-md-4">
					<div class="new-photo">
						<img src="/template/images/original/<?php echo $article['picture'] ?>">
						<span class="date"><?php echo $article['created']; ?></span>
					</div>
				</div>
				<div class="col-md-8">
					<div class="new-text" style="min-height: 0;padding-bottom: 0;margin-bottom: 0;">
						<span id="article_title"><?php echo $article['title']; ?></span>
					</div>
					<div style="color:#000;margin-bottom: 20px;">
						<p><b><?php echo $article['created']; ?></b></p>
					</div>
					<div style="color:#000;">
						<p><?php echo $article['body']; ?></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php include ROOT . '/views/layouts/footer.php'; ?>