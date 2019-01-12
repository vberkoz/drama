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
            <div class="image" style="background: url(<?php echo $photo; ?>)top/cover;"></div>
            <!-- <img src="/assets/images/original/<?php echo $image['filename']; ?>"
                alt="<?php echo $image['title']; ?>" class="img-thumbnail" width="150"> -->
        <?php endforeach; ?>
    <?php else: ?>
        <div class="text-center">Зображень не знайдено</div>
    <?php endif; ?>
    <p><?php echo $pagination->get(); ?></p>
</div>

<?php include ROOT . '/views/layouts/footer-admin.php'; ?>