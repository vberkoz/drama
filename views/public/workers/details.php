<?php include_once ROOT . '/views/public/layout/header.php' ?>
<h1><?php echo $title; ?></h1>
<p>
    This is workers page<br />
    Here you can find information about workers
</p>
<ul>
    <?php foreach ($departments as $department): ?>
        <li><a href="/workers/<?php echo $department['link']; ?>"><?php echo $department['title']; ?></a></li>
    <?php endforeach; ?>
</ul>
<ul>
    <?php foreach ($workers as $worker): ?>
        <li><a href="/workers/<?php echo $departmentLink; ?>/<?php echo $worker['link']; ?>"><?php echo $worker['name']; ?></a></li>
    <?php endforeach; ?>
</ul>
<img src="/assets/images/original/<?php echo $worker['image'] ?>" alt="<?php echo $worker['image'] ?>">
<h2><?php echo $worker['name']; ?></h2>
<h4><?php echo $worker['position']; ?></h4>
<p><?php echo $worker['merit']; ?></p>
<?php include_once ROOT . '/views/public/layout/footer.php' ?>