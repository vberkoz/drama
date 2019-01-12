<?php include ROOT . '/views/layouts/header-admin.php'; ?>

<div class="container">
    <a href="/admin/articles/page-1" class="btn btn-default">Назад</a><br><br>
    <form action="#" method="post">
        <div class="form-group">
            <label for="title">Заголовок</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Заголовок" 
                value="<?php echo $article['title']; ?>" autocomplete="off" onkeyup="translit()" 
                onpaste="translit()" ondragstart="return false" ondrop="return false">
        </div>
        <div class="form-group">
            <label for="link">Посилання</label>
            <input type="text" class="form-control" id="link" name="link" placeholder="Посилання" 
                value="<?php echo $article['link']; ?>" autocomplete="off" ondragstart="return false" ondrop="return false">
        </div>
        <div class="form-group">
            <label for="excerpt">Уривок</label>
            <textarea class="form-control" rows="3" id="excerpt" name="excerpt" 
                placeholder="Уривок" ondragstart="return false" ondrop="return false"><?php echo $article['excerpt']; ?></textarea>
        </div>
        <div class="form-group">
            <label for="body">Текст</label>
            <textarea class="form-control" rows="9" id="body" name="body" 
                placeholder="Текст" ondragstart="return false" ondrop="return false"><?php echo $article['body']; ?></textarea>
        </div>
        <div class="checkbox">
            <label>
                <input type="checkbox" name="published" 
                    <?php if ($article['published']) { echo 'checked'; } else { echo ''; } ?>>Опубліковано
            </label>
        </div>
        <input type="submit" name="submit" class="btn btn-primary" value="Зберегти">
        <a href="/admin/article/delete/<?php echo $article['id']; ?>" class="btn btn-danger pull-right">Видалити</a>
    </form>
</div>

<script src="/assets/js/translit.js"></script>
<script src="/assets/js/editor.js"></script>

<?php include ROOT . '/views/layouts/footer-admin.php'; ?>