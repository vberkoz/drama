<?php
/**
 * Handles blog posts
 */

class BlogController
{
    /**
     * Shows posts list
     *
     * @param int $page     Page number to show posts
     * @return bool
     */
    public static function actionIndex($page = 1)
    {
        $posts = array();
        $posts = Post::getPosts($page);
        $postsNumber = Post::getPostsNumber();
        $pagination = new Pagination($postsNumber, $page, Post::SHOW_BY_DEFAULT, 'page-');
        $title = 'Blog';
        require_once(ROOT . '/views/public/blog/index.php');
        return true;
    }
}