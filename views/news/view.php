<?php include ROOT . '/views/layouts/header.php'; ?>

<section class="theatre">
	<div class="container">
		<div class="news-list">
			<div class="row">
				<?php
					$datetime1 = date_create($article['created']);
					$datetime2 = date_create(date("Y-m-d H:i:s"));
					$interval = date_diff($datetime1, $datetime2);
				?>
				<?php if ($article['picture'] != 'default.png'): ?>
					<?php
						$size = getimagesize("assets/images/original/" . $article['picture']);
						$landscape = false;
						if ($size[0] > $size[1]) $landscape = true;
					?>
					<div class="col-md-8">
						<?php if ($landscape): ?>
							<div class="new-photo">
								<img src="/assets/images/original/<?php echo $article['picture'] ?>">
							</div>
						<?php endif; ?>
						<div class="new-text" style="min-height: 0;padding-bottom: 0;margin-bottom: 0;">
							<span id="article_title"><?php echo $article['title']; ?></span>
						</div>
						<div style="color:#000;margin-bottom: 5px;">
							<b><?php echo $interval->format('%a д тому'); ?></b>
							<!-- <b><?php echo $article['created']; ?></b> -->
						</div>
						<div style="color:#000;">
							<p><?php echo $article['body']; ?></p>
						</div>
					</div>
					<div class="col-md-4">
						<?php if (!$landscape): ?>
							<div class="new-photo">
								<img src="/assets/images/original/<?php echo $article['picture'] ?>">
							</div>
						<?php endif; ?>
						<?php foreach ($articlesList as $articleItem): ?>
							<?php if ($articleItem['published'] && $articleItem['id'] != $article['id']): ?>
								<?php
									$datetime3 = date_create($articleItem['created']);
									$datetime4 = date_create(date("Y-m-d H:i:s"));
									$intervalItem = date_diff($datetime3, $datetime4);
								?>
								<div class="row">
									<div class="col-md-12">
										<div class="recent-articles" style="min-height: 0; padding-bottom: 0; margin-bottom: 0;">
											<span><a href="/article/<?php echo $articleItem['link']; ?>" class="article-title-link"><?php echo $articleItem['title']; ?></a></span>
										</div>
										<div style="color:#000;font-size: 14px;margin-bottom: 5px;">
											<b><?php echo $intervalItem->format('%a д тому'); ?></b>
											<!-- <b><?php echo $articleItem['created']; ?></b> -->
										</div>
<!-- 
										<div style="color: #000;font-size: 14px;margin-bottom: 20px;">
											<?php
												if (strlen($articleItem['excerpt']) > 110) {
													echo mb_substr($articleItem['excerpt'], 0, 107) . '...';
												} else {
													echo $articleItem['excerpt'];
												}
											?>
										</div>
-->
									</div>
								</div>
							<?php endif; ?>
						<?php endforeach; ?>
					</div>
				<?php else: ?>
					<div class="col-md-8">
						<div class="new-text" style="min-height: 0;padding-bottom: 0;margin-bottom: 0;">
							<span id="article_title"><?php echo $article['title']; ?></span>
						</div>
						<div style="color:#000;margin-bottom: 5px;">
							<b><?php echo $interval->format('%a д тому'); ?></b>
							<!-- <b><?php echo $article['created']; ?></b> -->
						</div>
						<div style="color:#000;">
							<p><?php echo $article['body']; ?></p>
						</div>
					</div>
					<div class="col-md-4">
						<?php foreach ($articlesList as $articleItem): ?>
							<?php if ($articleItem['published'] && $articleItem['id'] != $article['id']): ?>
								<?php
									$datetime3 = date_create($articleItem['created']);
									$datetime4 = date_create(date("Y-m-d H:i:s"));
									$intervalItem = date_diff($datetime3, $datetime4);
								?>
								<div class="row">
									<div class="col-md-12">
										<div class="recent-articles" style="min-height: 0; padding-bottom: 0; margin-bottom: 0;">
											<span><a href="/article/<?php echo $articleItem['link']; ?>" class="article-title-link"><?php echo $articleItem['title']; ?></a></span>
										</div>
										<div style="color:#000;font-size: 14px;margin-bottom: 5px;">
											<b><?php echo $intervalItem->format('%a д тому'); ?></b>
											<!-- <b><?php echo $articleItem['created']; ?></b> -->
										</div>
<!-- 										
										<div style="color: #000;font-size: 14px;margin-bottom: 20px;">
											<?php
												if (strlen($articleItem['excerpt']) > 110) {
													echo mb_substr($articleItem['excerpt'], 0, 107) . '...';
												} else {
													echo $articleItem['excerpt'];
												}
											?>
										</div>
-->
									</div>
								</div>
							<?php endif; ?>
						<?php endforeach; ?>
					</div>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>

<?php include ROOT . '/views/layouts/footer.php'; ?>