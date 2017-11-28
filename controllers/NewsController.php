<?php

class NewsController
{

    /**
     * News page action
     * @return boolean
     */
    public static function actionIndex($page = 1)
    {

        $articlesList = array();
        $articlesList = Article::getArticlesList($page);

        $total = Article::getTotalArticles();
        $pagination = new Pagination($total, $page, Article::SHOW_BY_DEFAULT, 'page-');

        $title = 'Новини';
        
        require_once(ROOT . '/views/news/index.php');
        
        return true;

    }

    /**
     * Article page action
     * @return boolean
     */
	public function actionView($articleLink)
	{

        $article = Article::getArticleByLink($articleLink);
        
        $title = $article['title'];
        
        require_once(ROOT . '/views/news/view.php');
		
		return true;
		
	}

}