<?php include ROOT . '/views/layouts/header.php'; ?>

<section id="form"><!--form-->
    <div class="container">
        <div class="row">

            <?php if (isset($errors) && is_array($errors)): ?>
                <ul>
                    <?php foreach ($errors as $error): ?>
                        <li> - <?php echo $error; ?></li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>

            <div class="col-sm-4 col-sm-offset-1">
                <div class="login-form"><!--login form-->
                    <h2>Login to your account</h2>
                    <form action="#" method="post">
                        <input type="email" name="email" placeholder="Email Address" value="<?php echo $email; ?>"/>
                        <input type="password" name="password" placeholder="Password" value="<?php echo $password; ?>"/>
                        <input type="submit" name="submit" class="btn btn-default" value="Signup"/>
                    </form>
                </div><!--/login form-->
            </div>

        </div>
    </div>
</section><!--/form-->

<?php include ROOT . '/views/layouts/footer.php'; ?>