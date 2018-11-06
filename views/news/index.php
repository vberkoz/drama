<?php include ROOT . '/views/layouts/header.php'; ?>

<!-- <div class="title"><h1>Новини</h1></div> -->
<section class="theatre">
    <div class="news-list">
        <div class="container">
            <span class="page-title">Новини</span>
            <div>
                <?php foreach ($articlesList as $article): ?>
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <div class="new-photo">
                            <?php $photo = "/template/images/original/" . $article['picture']; ?>
                            <div style="background: url(<?php echo $photo; ?>)top/cover;height:180px;border-radius: 4px;"></div>
                            <span class="date"><?php echo $article['created']; ?></span>
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-6">
                        <div class="new-text" style="min-height: 0; padding-bottom: 0; margin-bottom: 0;">
                            <span><a href="/article/<?php echo $article['link']; ?>" class="article-title-link"><?php echo $article['title']; ?></a></span>
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
	</div>
</section>

<?php include ROOT . '/views/layouts/footer.php'; ?>