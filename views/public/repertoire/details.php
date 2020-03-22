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
<img src="/assets/images/original/<?php echo $spectacleDetails['image'] ?>"
     alt="<?php echo $spectacleDetails['image'] ?>">
<h2><?php echo $spectacleDetails['title']; ?></h2>
<h4><?php echo $spectacleDetails['author']; ?></h4>
<p><?php echo $spectacleDetails['type']; ?> | Duration <?php echo $spectacleDetails['duration']; ?></p>
<p><?php echo $spectacleDetails['description']; ?></p>
<?php include_once ROOT . '/views/public/layout/footer.php' ?>