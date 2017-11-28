<?php

class Article
{

    const SHOW_BY_DEFAULT = 6;

    /**
     * Returns an array of articles
     * @return array $articles
     */
    public static function getArticlesList($page = 1)
    {

        $page = intval($page);
        $offset = ($page - 1) * self::SHOW_BY_DEFAULT;

        $db = Db::getConnection();

        $articles = array();

        $result = $db->query("SELECT id, title, link, excerpt, created, image"
            . " FROM dt_articles"
            . " ORDER BY created DESC"
            . " LIMIT " . self::SHOW_BY_DEFAULT
            . " OFFSET " . $offset
        );

        $i = 0;
        while ($row = $result->fetch()) {
            $articles[$i]['id'] = $row['id'];
            $articles[$i]['title'] = $row['title'];
            $articles[$i]['link'] = $row['link'];
            $articles[$i]['excerpt'] = $row['excerpt'];
            $articles[$i]['created'] = $row['created'];
            $articles[$i]['image'] = $row['image'];
            $i++;
        }

        return $articles;

    }

    /**
     * Returns total count of articles
     * @return integer
     */
    public static function getTotalArticles()
    {

       $db = Db::getConnection();

       $result = $db->query('SELECT count(id) AS count FROM dt_articles');
       $result->setFetchMode(PDO::FETCH_ASSOC);

       $row = $result->fetch();

       return $row['count'];

    }

    /**
     * Returns article item by id
     * @param string $id
     * @return array
     */
    public static function getArticleByLink($link)
    {

       if ($link) {

           $db = Db::getConnection();

           $result = $db->query("SELECT * FROM dt_articles WHERE link='$link'");
           $result->setFetchMode(PDO::FETCH_ASSOC);

           return $result->fetch();
           
       }

    }

}