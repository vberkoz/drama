<?php include_once ROOT . '/views/public/layout/header.php' ?>
<h1><?php echo $title; ?></h1>
<p>
    This is vacancies page<br />
    Here you can find information about free vacancies we have
</p>
<ul>
    <?php foreach ($vacancies as $vacancy): ?>
        <li><a href="/#"><?php echo $vacancy['title']; ?></a></li>
    <?php endforeach; ?>
</ul>
<?php include_once ROOT . '/views/public/layout/footer.php' ?>