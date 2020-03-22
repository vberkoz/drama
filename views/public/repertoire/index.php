<?php include_once ROOT . '/views/public/layout/header.php' ?>
<h1><?php echo $title; ?></h1>
<p>
    This is repertoire page<br />
    Here you will find information about performances that have ever been shown
</p>
<ul>
    <?php foreach ($categories as $category): ?>
        <li>
            <a href="/repertoire/<?php echo $category['link']; ?>">
                <?php echo $category['title']; ?>
            </a>
        </li>
    <?php endforeach; ?>
</ul>
<ul>
    <?php foreach ($spectacles as $spectacle): ?>
        <li>
            <a href="/repertoire/<?php echo $categoryLink; ?>/<?php echo $spectacle['link']; ?>">
                <?php echo $spectacle['title']; ?>
            </a>
        </li>
    <?php endforeach; ?>
</ul>
<?php include_once ROOT . '/views/public/layout/footer.php' ?>