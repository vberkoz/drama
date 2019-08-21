<link rel="stylesheet" crossorigin="anonymous"
    href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
    integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u">

<link rel="stylesheet" href="/views/layouts/header.css">
<link rel="stylesheet" href="/views/layouts/header-media.css">
<link rel="stylesheet" href="/views/layouts/menu.css">
<link rel="stylesheet" href="/views/layouts/footer.css">

<?php if (strpos($_SERVER['REQUEST_URI'], 'articles')): ?>
    <link rel="stylesheet" href="/views/article/list/list.css">
<?php endif; ?>

<?php if (strpos($_SERVER['REQUEST_URI'], 'article/')): ?>
    <link rel="stylesheet" href="/views/article/single/single.css">
<?php endif; ?>

<?php if (strpos($_SERVER['REQUEST_URI'], 'spectacle/')): ?>
    <link rel="stylesheet" href="/assets/css/spectacle.css">
<?php endif; ?>

<?php if (strpos($_SERVER['REQUEST_URI'], 'affiche/') || strpos($_SERVER['REQUEST_URI'], 'repertoire/')): ?>
    <link rel="stylesheet" href="/assets/css/repertoire.css">
<?php endif; ?>

<?php if (strpos($_SERVER['REQUEST_URI'], 'workers')): ?>
    <link rel="stylesheet" href="/assets/css/workers.css">
<?php endif; ?>

<?php if (strpos($_SERVER['REQUEST_URI'], 'worker/')): ?>
    <link rel="stylesheet" href="/assets/css/worker.css">
<?php endif; ?>