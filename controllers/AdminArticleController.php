<?php

class AdminArticleController extends AdminBase
{
    public static function actionArticles($page = 1)
    {
        self::checkAdmin();
        $articlesList = array();
        $articlesList = Article::getArticlesList($page);
        $total = Article::getTotalArticles();
        $pagination = new Pagination($total, $page, Article::SHOW_BY_DEFAULT, 'page-');
        require_once(ROOT . '/views/admin_article/articles.php');
        return true;
    }

    public function actionCreate()
    {
        self::checkAdmin();
        $article['link'] = '';
        $article['title'] = '';
        $article['excerpt'] = '';
        $article['body'] = '';
        $article['published'] = '';
        if (isset($_POST['submit'])) {
            $article['link'] = $_POST['link'];
            $article['title'] = $_POST['title'];
            $article['excerpt'] = $_POST['excerpt'];
            $article['body'] = $_POST['body'];
            $article['author_id'] = User::checkLogged();
            $article['published'] = $_POST['published'];
            $errors = false;
            if (!isset($article['link']) || empty($article['link'])) {
                $errors[] = 'Заповніть поля';
            }
            if ($errors == false) {
                $id = Article::createArticle($article);
                header("Location: /admin/articles/page-1");
            }
        }
        require_once(ROOT . '/views/admin_article/create.php');
        return true;
    }

    public function actionUpdate($articleLink)
    {
        self::checkAdmin();
        $article = Article::getArticleByLink($articleLink);
        if (isset($_POST['submit'])) {
            $article['link'] = $_POST['link'];
            $article['title'] = $_POST['title'];
            $article['excerpt'] = $_POST['excerpt'];
            $article['body'] = $_POST['body'];
            $article['author_id'] = User::checkLogged();
            $article['published'] = $_POST['published'];
            $errors = false;
            if (!isset($article['link']) || empty($article['link'])) {
                $errors[] = 'Заповніть поля';
            }
            if ($errors == false) {
                $id = Article::actionUpdateArticleById($article['id'], $article);
                header("Location: /admin/articles/page-1");
            }
        }
        require_once(ROOT . '/views/admin_article/update.php');
        return true;
    }

    public function actionDelete($id)
    {
        self::checkAdmin();
        if (isset($_POST['submit'])) {
            Article::deleteArticleById($id);
            header("Location: /admin/articles/page-1");
        }
        require_once(ROOT . '/views/admin_article/delete.php');
        return true;
    }
}