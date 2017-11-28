<?php include ROOT . '/views/layouts/header.php'; ?>

<section id="form"><!--form-->
    <div class="container">
        <div class="row">

            <?php if ($result): ?>
            
                <p>You are registered!</p>

            <?php else: ?>

                <?php if (isset($errors) && is_array($errors)): ?>
                    <ul>
                        <?php foreach ($errors as $error): ?>
                            <li> - <?php echo $error; ?></li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>

                <div class="col-sm-4">
                    <div class="signup-form"><!--sign up form-->
                        <h2>New User Signup!</h2>
                        <form action="#" method="post">
                            <input type="text" name="name" placeholder="Name" value="<?php echo $name; ?>"/>
                            <input type="email" name="email" placeholder="Email Address" value="<?php echo $email; ?>"/>
                            <input type="password" name="password" placeholder="Password" value="<?php echo $password; ?>"/>
                            <input type="submit" name="submit" class="btn btn-default" value="Signup"/>
                        </form>
                    </div><!--/sign up form-->
                </div>
                
            <?php endif; ?>

        </div>
    </div>
</section><!--/form-->

<?php include ROOT . '/views/layouts/footer.php'; ?>