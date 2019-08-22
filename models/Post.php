<?php
/**
 * Post Model
 */

class Post
{
    const SHOW_BY_DEFAULT = 10;

    /**
     * Gets posts from database
     *
     * @param int $page     Page number to show posts
     * @return array        Array of posts
     */
    public static function getPosts($page = 1)
    {
        $page = intval($page);
        $offset = ($page - 1) * self::SHOW_BY_DEFAULT;

        // Establish connection to database
        $db = Db::getConnection();

        $result = $db->query("SELECT *"
            . " FROM dt_articles"
            . " ORDER BY modified DESC"
            . " LIMIT " . self::SHOW_BY_DEFAULT
            . " OFFSET " . $offset
        );

        $i = 0;
        $posts = array();
        while ($row = $result->fetch()) {
            $posts[$i]['id'] = $row['id'];
            $posts[$i]['title'] = $row['title'];
            $posts[$i]['link'] = $row['link'];
            $posts[$i]['excerpt'] = $row['excerpt'];
            $posts[$i]['created'] = $row['created'];
            $posts[$i]['modified'] = $row['modified'];
            $posts[$i]['picture'] = $row['picture'];
            $posts[$i]['published'] = $row['published'];
            $i++;
        }
        return $posts;
    }

    public static function getPostsNumber()
    {
        $db = Db::getConnection();

        $result = $db->query('SELECT count(id) AS count FROM dt_articles');
        $result->setFetchMode(PDO::FETCH_ASSOC);

        $row = $result->fetch();

        return $row['count'];
    }
}