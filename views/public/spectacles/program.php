<?php include_once ROOT . '/views/public/layout/header.php' ?>
<h1><?php echo $title; ?></h1>
<p>
    This is spectacles program page<br />
    Here you can find spectacles for
    <?php echo $month; ?>
</p>
<ul>
    <?php foreach ($spectacles as $spectacle): ?>
        <li><a href="/#"><?php echo $spectacle['title']; ?></a></li>
    <?php endforeach; ?>
</ul>
<?php include_once ROOT . '/views/public/layout/footer.php' ?>