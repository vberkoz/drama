

<!doctype html>
<html lang="uk">

<head>
    <title>Адміністрування</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <meta http-equiv="content-type" content="text/html">
	<meta name="author" content="admin">

    <!-- FAVICO -->
    <link rel="shortcut icon" href="/assets/images/favicon.ico" type="image/x-icon">

    <!-- FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Roboto|Roboto+Condensed|Playfair+Display|Playfair+Display+SC" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- DEFAULT CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    
    <!-- CUSTOM CSS -->
	<link rel="stylesheet" href="/assets/css/signin.css">
</head>

<body>
    <div class="container">
        <form class="form-signin" action="#" method="post">
            <h2 class="form-signin-heading">Адміністрування</h2>
            <label for="inputEmail" class="sr-only">Електронна пошта</label>
            <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Електронна пошта" value="<?php echo $email; ?>" required autofocus>
            <label for="inputPassword" class="sr-only">Пароль</label>
            <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Пароль" value="<?php echo $password; ?>" required>
            <div class="checkbox">
                <label>
                    <input type="checkbox" value="remember-me"> Запам'ятати мене
                </label>
            </div>
            <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Ввійти</button>
        </form>
        <?php if (isset($errors) && is_array($errors)): ?>
            <ul>
                <?php foreach ($errors as $error): ?>
                    <li> - <?php echo $error; ?></li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
    </div>
</body>
</html>