<?php
/**
 * Worker model
 */

class Worker
{
    /**
     * Get theater departments
     *
     * @return array
     */
    public static function getDepartments()
    {
        // Establish connection to database
        $db = Db::getConnection();

        $departmentsList = array();

        $result = $db->query('SELECT id, title, link FROM dt_departments');

        $i = 0;
        while ($row = $result->fetch()) {
            $departmentsList[$i]['id'] = $row['id'];
            $departmentsList[$i]['title'] = $row['title'];
            $departmentsList[$i]['link'] = $row['link'];
            $i++;
        }

        return $departmentsList;
    }

    /**
     * Get workers by department id
     *
     * @param $departmentId
     * @return array
     */
    public static function getWorkers($departmentId)
    {
        $departmentId = intval($departmentId);

        if ($departmentId) {
            // Establish connection to database
            $db = Db::getConnection();

            $result = $db->query("SELECT *"
                . " FROM dt_workers"
                . " WHERE department_id = '$departmentId'"
                . " ORDER BY sort ASC"
            );

            $i = 0;
            $workers = array();
            while ($row = $result->fetch()) {
                $workers[$i]['id'] = $row['id'];
                $workers[$i]['name'] = $row['name'];
                $workers[$i]['link'] = $row['link'];
                $workers[$i]['position'] = $row['position'];
                $workers[$i]['merit'] = $row['merit'];
                $workers[$i]['image'] = $row['image'];
                $workers[$i]['department_id'] = $row['department_id'];
                $workers[$i]['sort'] = $row['sort'];
                $i++;
            }

            return $workers;
        }
    }

    /**
     * Returns worker details by link
     *
     * @param string $link  Worker link
     * @return array        Worker details array
     */
    public static function getWorker($link)
    {
        if ($link) {
            // Establish connection to database
            $db = Db::getConnection();

            $result = $db->query("SELECT * FROM dt_workers WHERE link='$link'");
            $result->setFetchMode(PDO::FETCH_ASSOC);

            return $result->fetch();
        }
    }

    /**
     * Returns an array of actors
     * @param integer $spectacleId
     * @return array $actors
     */
    public static function getActorsListBySpectacle($spectacleId)
    {

        $spectacleId = intval($spectacleId);

        if ($spectacleId) {

            $db = Db::getConnection();

            $actors = array();

            $result = $db->query("SELECT"
                . " dt_roles.title as role,"
                . " dt_workers.link,"
                . " dt_workers.name"
                . " FROM dt_roles"
                . " INNER JOIN dt_workers"
                . " ON dt_roles.actor_id = dt_workers.id"
                . " WHERE dt_roles.spectacle_id = '$spectacleId'"
            );

            $i = 0;
            while ($row = $result->fetch()) {
                $actors[$i]['role'] = $row['role'];
                $actors[$i]['name'] = $row['name'];
                $actors[$i]['link'] = $row['link'];
                $i++;
            }
    
            return $actors;
    
        }

    }

}