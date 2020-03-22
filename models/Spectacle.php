<?php
/**
 * Spectacle model
 */

class Spectacle
{
    /**
     * Gets all spectacles
     *
     * @param $month
     * @return array Spectacles array
     */
    public static function getSpectaclesByMonth($month)
    {
        // Establish connection to database
        $db = Db::getConnection();

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
        $spectacles = array();
        while ($row = $result->fetch()) {
            $spectacles[$i]['beginning'] = $row['beginning'];
            $spectacles[$i]['title'] = $row['title'];
            $spectacles[$i]['author'] = $row['author'];
            $spectacles[$i]['type'] = $row['type'];
            $spectacles[$i]['duration'] = $row['duration'];
            $spectacles[$i]['link'] = $row['link'];
            $spectacles[$i]['image'] = $row['image'];
            $i++;
        }

        return $spectacles;
    }

    /**
     * Returns an array of repertoire categories
     *
     * @return array
     */
    public static function getCategories()
    {
        $db = Db::getConnection();

        $result = $db->query('SELECT id, title, link FROM dt_repertoire_categories');

        $i = 0;
        $categoryList = array();
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
     *
     * @param $categoryId
     * @return array
     */
    public static function getPerformancesByCategory($categoryId)
    {
        $categoryId = intval($categoryId);

        if ($categoryId) {

            $db = Db::getConnection();

            $result = $db->query("SELECT *"
                . " FROM dt_performances"
                . " WHERE repertoire_id = '$categoryId'"
                . " ORDER BY id DESC"
            );

            $i = 0;
            $performances = array();
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
     * Returns spectacle item by link
     *
     * @param $link
     * @return mixed
     */
    public static function getSpectacle($link)
    {
        if ($link) {
            $db = Db::getConnection();

            $result = $db->query("SELECT * FROM dt_performances WHERE link='$link'");
            $result->setFetchMode(PDO::FETCH_ASSOC);

            return $result->fetch();
        }
    }
}