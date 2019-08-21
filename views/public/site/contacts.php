<?php include_once ROOT . '/views/public/layout/header.php' ?>
<h1><?php echo $title; ?></h1>
<p>This is contacts page. Here you can send us message.</p>
<form action="">
    <label for="email">Email:</label><br />
    <input type="email" name="email" id="email"><br /><br />
    <label for="message">Message:</label><br />
    <textarea name="message" id="message" cols="30" rows="10"></textarea><br />
    <input type="submit" value="Send"><br /><br />
</form>
<?php include_once ROOT . '/views/public/layout/footer.php' ?>