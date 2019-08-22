<?php
/**
 * Spectacle model
 */

class Spectacle
{
    /**
     * Gets all spectacles
     *
     * @return array Spectacles array
     */
    public static function getSpectacles()
    {
        // Establish connection to database
        $db = Db::getConnection();

        $result = $db->query("SELECT title"
            . " FROM dt_performances"
            . " ORDER BY id DESC"
        );

        $i = 0;
        $spectacles = array();
        while ($row = $result->fetch()) {
            $spectacles[$i]['title'] = $row['title'];
            $i++;
        }

        return $spectacles;
    }
}