<?php

class AdminSpectacleController extends AdminBase
{
    public static function actionSpectacles($page = 1)
    {
        self::checkAdmin();
        // $pectaclesList = array();
        // $articlesList = Article::getArticlesList($page);
        // $total = Article::getTotalArticles();
        // $pagination = new Pagination($total, $page, Article::SHOW_BY_DEFAULT, 'page-');
        require_once(ROOT . '/views/admin/spectacles.php');
        return true;
    }

	// public function actionSpectacle($articleLink)
	// {
    //     $article = Article::getArticleByLink($articleLink);
    //     require_once(ROOT . '/views/admin/article.php');
	// 	return true;
    // }
}