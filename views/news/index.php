<?php include ROOT . '/views/layouts/header.php'; ?>

<section class="theatre">
	<div class="title"><h1>Новини</h1></div>
        <div class="news-list" style="margin-top: 90px;">
            <div class="container">
                <?php foreach ($articlesList as $article): ?>
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <div class="new-photo">
                            <?php $photo = "/template/images/original/" . $article['image']; ?>
                            <div style="background: url(<?php echo $photo; ?>)top/cover;height:180px;border-radius: 4px;"></div>
                            <span class="date"><?php echo $article['created']; ?></span>
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-6">
                        <div class="new-text" style="min-height: 0; padding-bottom: 0; margin-bottom: 0;">
                            <span><?php echo $article['title']; ?></span>
                        </div>
                        <div style="color:#000;">
                            <?php echo $article['excerpt'];?>
                        </div>
                        <div class="new-text" style="margin-top: 10px;">
                            <a href="/article/<?php echo $article['link']; ?>" class="more">Читати</a>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>

            <!-- Pagination -->
            <?php echo $pagination->get(); ?>
                        
        </div>
	</div>
</section>

<?php include ROOT . '/views/layouts/footer.php'; ?>