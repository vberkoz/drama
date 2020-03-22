<h1>Login</h1>
<p>Here you can login like admin or author</p>
<form action="#" method="post">
    <label for="email">Email</label>
    <input type="email" name="email" id="email" value="<?php echo $email; ?>">
    <label for="password">Password</label>
    <input type="password" name="password" id="password" value="<?php echo $password; ?>">
    <button type="submit" name="submit">Submit</button>
</form>
<?php if (isset($errors) && is_array($errors)): ?>
    <ul>
        <?php foreach ($errors as $error): ?>
            <li><?php echo $error; ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>