<?php

class Article
{
    const SHOW_BY_DEFAULT = 6;

    public static function getArticlesList($page = 1)
    {
        $page = intval($page);
        $offset = ($page - 1) * self::SHOW_BY_DEFAULT;
        $db = Db::getConnection();
        $articles = array();
        $result = $db->query("SELECT id, title, link, excerpt, created, picture, modified, published"
            . " FROM dt_articles"
            . " ORDER BY modified DESC"
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
            $articles[$i]['modified'] = $row['modified'];
            $articles[$i]['picture'] = $row['picture'];
            $articles[$i]['published'] = $row['published'];
            $i++;
        }
        return $articles;
    }

    public static function getTotalArticles()
    {
       $db = Db::getConnection();
       $result = $db->query('SELECT count(id) AS count FROM dt_articles');
       $result->setFetchMode(PDO::FETCH_ASSOC);
       $row = $result->fetch();
       return $row['count'];
    }

    public static function getArticleByLink($link)
    {
       if ($link) {
           $db = Db::getConnection();
           $result = $db->query("SELECT * FROM dt_articles WHERE link='$link'");
           $result->setFetchMode(PDO::FETCH_ASSOC);
           return $result->fetch();   
       }
    }

    public static function createArticle($options)
    {
        $db = Db::getConnection();
        $sql = 'INSERT INTO dt_articles '
                . '(link, title, excerpt, body, author_id, published) '
                . 'VALUES '
                . '(:link, :title, :excerpt, :body, :author_id, :published)';
        $result = $db->prepare($sql);
        $result->bindParam(':link', $options['link'], PDO::PARAM_STR);
        $result->bindParam(':title', $options['title'], PDO::PARAM_STR);
        $result->bindParam(':excerpt', $options['excerpt'], PDO::PARAM_STR);
        $result->bindParam(':body', $options['body'], PDO::PARAM_STR);
        $result->bindParam(':author_id', $options['author_id'], PDO::PARAM_INT);
        $result->bindParam(':published', $options['published'], PDO::PARAM_BOOL);
        if ($result->execute()) {
            return $db->lastInsertId();
        }
        return 0;
    }

    public static function actionUpdateArticleById($id, $options)
    {
        $db = Db::getConnection();
        $sql = "UPDATE dt_articles
            SET 
                link = :link, 
                title = :title, 
                excerpt = :excerpt, 
                body = :body, 
                author_id = :author_id,
                published = :published
            WHERE id = :id";
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->bindParam(':link', $options['link'], PDO::PARAM_STR);
        $result->bindParam(':title', $options['title'], PDO::PARAM_STR);
        $result->bindParam(':excerpt', $options['excerpt'], PDO::PARAM_STR);
        $result->bindParam(':body', $options['body'], PDO::PARAM_STR);
        $result->bindParam(':author_id', $options['author_id'], PDO::PARAM_INT);
        $result->bindParam(':published', $options['published'], PDO::PARAM_BOOL);
        return $result->execute();
    }

    public static function deleteArticleById($id)
    {
        $db = Db::getConnection();
        $sql = 'DELETE FROM dt_articles WHERE id = :id';
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        return $result->execute();
    }
}