<?php
/**
 * Vacancy model
 */

class Vacancy
{
    /**
     * Gets vacancies from database
     *
     * @return array        Array of vacancies
     */
    public static function getVacancies()
    {
        // Establish connection to database
        $db = Db::getConnection();

        $result = $db->query("SELECT *"
            . " FROM dt_vacancies"
            . " ORDER BY created DESC"
        );

        $i = 0;
        $vacancies = array();
        while ($row = $result->fetch()) {
            $vacancies[$i]['id'] = $row['id'];
            $vacancies[$i]['title'] = $row['title'];
            $vacancies[$i]['body'] = $row['body'];
            $vacancies[$i]['created'] = $row['created'];
            $i++;
        }
        return $vacancies;
    }
}