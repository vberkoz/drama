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
}