<?php

class WorkerController
{
    /**
     * Workers list
     *
     * @param string $departmentLink    Workers category
     * @return bool
     */
    public static function actionIndex($departmentLink = 'management')
    {
        $departments = array();
        $departments = Worker::getDepartments();

        foreach ($departments as $department) {
            if ($departmentLink == $department['link']) {
                $departmentId = $department['id'];
            }
        }

        $workers = array();
        $workers = Worker::getWorkers($departmentId);

        $title = 'Workers';

        require_once(ROOT . '/views/public/workers/index.php');

        return true;
    }

    /**
     * Worker details page action
     *
     * @param string $workerLink
     * @return boolean
     */
    public function actionDetails($workerLink)
    {
        $worker = Worker::getWorker($workerLink);

        $title = $worker['name'];

        require_once(ROOT . '/views/public/workers/details.php');

        return true;
    }
}