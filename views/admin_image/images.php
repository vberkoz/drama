<?php include ROOT . '/views/layouts/header-admin.php'; ?>

<div class="container">
    <a href="#" class="btn btn-primary">Завантажити зображення</a><br><br>
    <?php if ($imagesList): ?>
        <?php foreach ($imagesList as $image): ?>
            <!-- <p><?php echo $image['id']; ?></p>
            <p><?php echo $image['title']; ?></p>
            <p><?php echo $image['filename']; ?></p>
            <p><?php echo $image['downloaded']; ?></p> -->
            <?php $photo = "/assets/images/original/" . $image['filename']; ?>
            <div class="card" style="border-radius: 5px;width: 280px;display: inline-block;margin: 10px 4px;box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);height: 500px;vertical-align: text-top;">
                <div class="card-image" style="background: url(<?php echo $photo; ?>)top/cover;display: inline-block;height: 280px;width: 100%;border-radius: 5px 5px 0 0;"></div>
                <div class="card-info" style="padding: 30px;">
                    <h4>
                        <?php
                            if (strlen($image['title']) > 20) {
                                echo mb_substr($image['title'], 0, 17) . '...';
                            } else {
                                echo $image['title'];
                            }
                        ?>
                    </h4>
                    <p>
                        <?php
                            if (strlen($image['filename']) > 33) {
                                echo mb_substr($image['filename'], 0, 30) . '...';
                            } else {
                                echo $image['filename'];
                            }
                        ?>
                    </p>
                    <p><?php echo $image['downloaded']; ?></p>
                    <div class="text-center">
                        <a href="#" class="btn btn-default">Змінити</a>
                        <a href="#" class="btn btn-danger">Видалити</a>
                    </div>
                </div>
            </div>
            <!-- <img src="/assets/images/original/<?php echo $image['filename']; ?>"
                alt="<?php echo $image['title']; ?>" class="img-thumbnail" width="150"> -->
        <?php endforeach; ?>
    <?php else: ?>
        <div class="text-center">Зображень не знайдено</div>
    <?php endif; ?>
    <p><?php echo $pagination->get(); ?></p>
</div>

<?php include ROOT . '/views/layouts/footer-admin.php'; ?>