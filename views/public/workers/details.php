<?php include_once ROOT . '/views/public/layout/header.php' ?>
<img src="/assets/images/original/<?php echo $worker['image'] ?>" alt="<?php echo $worker['image'] ?>">
<h1><?php echo $worker['name']; ?></h1>
<h3><?php echo $worker['position']; ?></h3>
<p><?php echo $worker['merit']; ?></p>
<?php include_once ROOT . '/views/public/layout/footer.php' ?>