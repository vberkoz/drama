<?php

class Image
{
    const SHOW_BY_DEFAULT = 10;

    public static function getTotalImagesCount()
    {
        $db = Db::getConnection();
        $result = $db->query('SELECT count(id) AS count FROM dt_images');
        $result->setFetchMode(PDO::FETCH_ASSOC);
        $row = $result->fetch();
        return $row['count'];
    }

    public static function getImagesList($page = 1)
    {
        $page = intval($page);
        $offset = ($page - 1) * self::SHOW_BY_DEFAULT;
        $db = Db::getConnection();
        $articles = array();
        $result = $db->query("SELECT id, title, filename, downloaded"
            . " FROM dt_images"
            . " ORDER BY downloaded DESC"
            . " LIMIT " . self::SHOW_BY_DEFAULT
            . " OFFSET " . $offset
        );
        $i = 0;
        while ($row = $result->fetch()) {
            $articles[$i]['id'] = $row['id'];
            $articles[$i]['title'] = $row['title'];
            $articles[$i]['filename'] = $row['filename'];
            $articles[$i]['downloaded'] = $row['downloaded'];
            $i++;
        }
        return $articles;
    }
}