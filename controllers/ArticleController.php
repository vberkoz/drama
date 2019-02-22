<?php

class ArticleController
{
    public static function actionList($page = 1)
    {
        $articlesList = array();
        $articlesList = Article::getArticlesList($page);

        $total = Article::getTotalArticles();
        $pagination = new Pagination($total, $page, Article::SHOW_BY_DEFAULT, 'page-');

        $title = 'Новини';
        
        require_once(ROOT . '/views/article/list/list.php');
        
        return true;
    }

	public function actionView($articleLink)
	{
        $articlesList = array();
        $articlesList = Article::getArticlesList(1);
        $article = Article::getArticleByLink($articleLink);
        
        $title = $article['title'];
        
        require_once(ROOT . '/views/article/single/single.php');
		
		return true;
    }
    
    public function actionGetArticles($page = 1)
    {
        $articlesList = array();
        $articlesList = Article::getArticlesList($page);

        $total = Article::getTotalArticles();
        $pagination = new Pagination($total, $page, Article::SHOW_BY_DEFAULT, 'page-');

        echo json_encode($articlesList);
        
        return json_encode($articlesList);
    }
}