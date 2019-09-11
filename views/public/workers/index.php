<?php include_once ROOT . '/views/public/layout/header.php' ?>
<h1><?php echo $title; ?></h1>
<p>
    This is workers page<br />
    Here you can find information about workers
</p>
<ul>
    <?php foreach ($departments as $department): ?>
        <li><a href="<?php echo $department['link']; ?>"><?php echo $department['title']; ?></a></li>
    <?php endforeach; ?>
</ul>
<ul>
    <?php foreach ($workers as $worker): ?>
        <li><a href="details/<?php echo $worker['link']; ?>"><?php echo $worker['name']; ?></a></li>
    <?php endforeach; ?>
</ul>
<?php include_once ROOT . '/views/public/layout/footer.php' ?>