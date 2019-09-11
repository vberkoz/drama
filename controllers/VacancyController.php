<?php
/**
 * Vacancy controller
 */

class VacancyController
{
    public static function actionIndex()
    {
        $vacancies = array();
        $vacancies = Vacancy::getVacancies();

        $title = 'Vacancies';

        require_once(ROOT . '/views/public/vacancies/index.php');

        return true;
    }
}