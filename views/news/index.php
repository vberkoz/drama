<?php include ROOT . '/views/layouts/header.php'; ?>

<section class="theatre">
    <div class="news-list">
        <div class="container">
            <div>
                <?php foreach ($articlesList as $article): ?>
                    <?php if ($article['published']): ?>
                        <?php
                            $datetime1 = date_create($article['created']);
                            $datetime2 = date_create(date("Y-m-d H:i:s"));
                            $interval = date_diff($datetime1, $datetime2);
                        ?>
                        <?php if ($article['picture'] != 'default.png'): ?>
                            <div class="row">
                                <div class="col-md-4 col-sm-6">
                                    <div class="new-photo">
                                        <?php $photo = "/assets/images/original/" . $article['picture']; ?>
                                        <div style="background: url(<?php echo $photo; ?>)top/cover;height:250px;border-radius: 4px;"></div>
                                    </div>
                                </div>
                                <div class="col-md-8 col-sm-6">
                                    <div class="new-text" style="min-height: 0; padding-bottom: 0; margin-bottom: 0;">
                                        <span><a href="/article/<?php echo $article['link']; ?>" class="article-title-link"><?php echo $article['title']; ?></a></span>
                                    </div>
                                    <div style="color:#000;margin-bottom: 5px;">
                                        <b>Опубліковано: <?php echo $interval->format('%a д тому'); ?></b>
                                        <!-- <b><?php echo $article['created']; ?></b> -->
                                    </div>
                                    <div style="color:#000;margin-bottom: 20px;">
                                        <?php
                                            if (strlen($article['excerpt']) > 400) {
                                                echo mb_substr($article['excerpt'], 0, 397) . '...';
                                            } else {
                                                echo $article['excerpt'];
                                            }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        <?php else: ?>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="new-text" style="min-height: 0; padding-bottom: 0; margin-bottom: 0;">
                                        <span><a href="/article/<?php echo $article['link']; ?>" class="article-title-link"><?php echo $article['title']; ?></a></span>
                                    </div>
                                    <div style="color:#000;margin-bottom: 5px;">
                                        <b>Опубліковано: <?php echo $interval->format('%a д тому'); ?></b>
                                        <!-- <b><?php echo $article['created']; ?></b> -->
                                    </div>
                                    <div style="color:#000;margin-bottom: 20px;">
                                        <?php
                                            if (strlen($article['excerpt']) > 400) {
                                                echo mb_substr($article['excerpt'], 0, 397) . '...';
                                            } else {
                                                echo $article['excerpt'];
                                            }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>
                    <?php endif; ?>
                <?php endforeach; ?>

                <!-- Pagination -->
                <?php echo $pagination->get(); ?>
            </div>
        </div>
	</div>
</section>

<?php include ROOT . '/views/layouts/footer.php'; ?>