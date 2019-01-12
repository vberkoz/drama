<?php include ROOT . '/views/layouts/header-admin.php'; ?>

<div class="container">
    <a href="/admin/article/create" class="btn btn-primary">Нова стаття</a><br><br>
    <?php if ($articlesList): ?>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Назва</th>
                        <th>Створено</th>
                        <th>Змінено</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($articlesList as $article): ?>
                        <tr>
                            <th scope="row"><?php echo $article['id']; ?></th>
                            <td>
                                <a href="/admin/article/update/<?php echo $article['link']; ?>"><?php echo $article['title']; ?></a>
                            </td>
                            <td><?php echo $article['created']; ?></td>
                            <td><?php echo $article['modified']; ?></td>
                            <td><?php if ($article['published']) { echo 'Опублікована'; } else { echo 'Архівна'; } ?></td>
                            <td style="text-align: right;">
                                <a href="/admin/article/delete/<?php echo $article['id']; ?>" class="btn btn-danger btn-xs">Видалити</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    <?php else: ?>
        <div class="text-center">Статтей не знайдено</div>
    <?php endif; ?>
    <?php echo $pagination->get(); ?>
</div>

<?php include ROOT . '/views/layouts/footer-admin.php'; ?>