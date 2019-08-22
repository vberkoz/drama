<?php
/**
 * Vacancy controller
 */

class VacancyController
{
    public static function actionIndex()
    {
        $title = 'Vacancies';

        require_once(ROOT . '/views/public/vacancies/index.php');

        return true;
    }
}