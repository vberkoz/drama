<?php

class Repertoire
{

    /**
     * Returns an array of repertoire categories
     * @return array
     */
    public static function getCategoriesList()
    {

        $db = Db::getConnection();

        $categoryList = array();

        $result = $db->query('SELECT id, title, link FROM dt_repertoire_categories');

        $i = 0;
        while ($row = $result->fetch()) {
            $categoryList[$i]['id'] = $row['id'];
            $categoryList[$i]['title'] = $row['title'];
            $categoryList[$i]['link'] = $row['link'];
            $i++;
        }

        return $categoryList;

    }

    /**
     * Returns an array of performances
     * @param string $categoryLink
     * @return array $performances
     */
    public static function getPerformancesListByCategory($categoryId)
    {

        $categoryId = intval($categoryId);

        if ($categoryId) {

            $db = Db::getConnection();

            $performances = array();

            $result = $db->query("SELECT *"
                . " FROM dt_performances"
                . " WHERE repertoire_id = '$categoryId'"
                . " ORDER BY id DESC"
            );

            $i = 0;
            while ($row = $result->fetch()) {
                $performances[$i]['id'] = $row['id'];
                $performances[$i]['title'] = $row['title'];
                $performances[$i]['author'] = $row['author'];
                $performances[$i]['type'] = $row['type'];
                $performances[$i]['duration'] = $row['duration'];
                $performances[$i]['link'] = $row['link'];
                $performances[$i]['description'] = $row['description'];
                $performances[$i]['image'] = $row['image'];
                $performances[$i]['repertoire_id'] = $row['repertoire_id'];
                $i++;
            }
    
            return $performances;
    
        }

    }

    /**
     * Returns an array of affiche performances
     * @return array $performances
     */
    public static function getAfficheByMonth($month)
    {

        $db = Db::getConnection();

        $performances = array();

        $result = $db->query("SELECT"
            . " dt_affiche.beginning,"
            . " dt_performances.title,"
            . " dt_performances.author,"
            . " dt_performances.type,"
            . " dt_performances.duration,"
            . " dt_performances.link,"
            . " dt_performances.image"
            . " FROM dt_affiche"
            . " INNER JOIN dt_performances"
            . " ON dt_affiche.spectacle_id = dt_performances.id"
            . " WHERE dt_affiche.beginning LIKE '_____$month%'"
            . " ORDER BY dt_affiche.beginning ASC"
        );

        $i = 0;
        while ($row = $result->fetch()) {
            $performances[$i]['beginning'] = $row['beginning'];
            $performances[$i]['title'] = $row['title'];
            $performances[$i]['author'] = $row['author'];
            $performances[$i]['type'] = $row['type'];
            $performances[$i]['duration'] = $row['duration'];
            $performances[$i]['link'] = $row['link'];
            $performances[$i]['image'] = $row['image'];
            $i++;
        }

        return $performances;

    }

    /**
     * Returns affiche for spectacle
     * @param integer $spectacleId
     * @return array $performances
     */
    public static function getAfficheBySpectacle($spectacleId)
    {

        $spectacleId = intval($spectacleId);

        if ($spectacleId) {

            $db = Db::getConnection();

            $performances = array();

            $result = $db->query("SELECT"
                . " beginning"
                . " FROM dt_affiche"
                . " WHERE spectacle_id = '$spectacleId'"
            );

            $i = 0;
            while ($row = $result->fetch()) {
                $performances[$i]['beginning'] = $row['beginning'];
                $i++;
            }
    
            return $performances;
    
        }

    }

    /**
     * Returns spectacle item by link
     * @param string $link
     * @return array
     */
    public static function getSpectacleByLink($link)
    {

       if ($link) {

           $db = Db::getConnection();

           $result = $db->query("SELECT * FROM dt_performances WHERE link='$link'");
           $result->setFetchMode(PDO::FETCH_ASSOC);

           return $result->fetch();
           
       }

    }

    /**
     * Returns an array of performances
     * @param integer $actorId
     * @return array $performances
     */
    public static function getPerformancesListByActor($actorId)
    {

        $actorId = intval($actorId);

        if ($actorId) {

            $db = Db::getConnection();

            $performances = array();

            $result = $db->query("SELECT"
                . " dt_roles.title as role,"
                . " dt_performances.link,"
                . " dt_performances.title"
                . " FROM dt_roles"
                . " INNER JOIN dt_performances"
                . " ON dt_roles.spectacle_id = dt_performances.id"
                . " WHERE dt_roles.actor_id = '$actorId'"
            );

            $i = 0;
            while ($row = $result->fetch()) {
                $performances[$i]['role'] = $row['role'];
                $performances[$i]['title'] = $row['title'];
                $performances[$i]['link'] = $row['link'];
                $i++;
            }
    
            return $performances;
    
        }

    }

}