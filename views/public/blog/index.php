<?php include_once ROOT . '/views/public/layout/header.php' ?>
<h1><?php echo $title; ?></h1>
<p>This is blog page. Here you can find latest news.</p>
<ul>
    <?php foreach ($posts as $post): ?>
        <li><a href="/#"><?php echo $post['title']; ?></a></li>
    <?php endforeach; ?>
</ul>
<?php echo $pagination->get(); ?>
<?php include_once ROOT . '/views/public/layout/footer.php' ?>