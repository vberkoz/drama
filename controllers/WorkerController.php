<?php

class WorkerController
{
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
     * Workers list page action
     * @param string $departmentLink
     * @return boolean
     */
    public function actionList($departmentLink = 'management')
    {

        $departments = array();
        $departments = Worker::getDepartmentsList();

        foreach ($departments as $department) {
            if ($departmentLink == $department['link']) {
                $departmentId = $department['id'];
            }
        }

        $departmentWorkers = array();
        $departmentWorkers = Worker::getWorkersListByDepartment($departmentId);

        $title = 'Працівники';
        
        require_once(ROOT . '/views/workers/list/list.php');

        return true;

    }

    /**
     * Worker details page action
     * @param string $workerLink
     * @return boolean
     */
	public function actionDetails($workerLink)
	{

        $worker = Worker::getWorkerByLink($workerLink);

        $workerSpectacles = Repertoire::getPerformancesListByActor($worker['id']);
        
        $title = $worker['name'];
        
        require_once(ROOT . '/views/workers/details.php');
		
		return true;
		
	}

}