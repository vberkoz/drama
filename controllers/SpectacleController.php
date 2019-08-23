<?php
/**
 * Spectacles controller
 */

class SpectacleController
{
    /**
     * Shows spectacles program
     *
     * @param string $month    Month for which to show performances
     * @return bool
     */
    public static function actionProgram($month)
    {
        $title = 'Program';

        $date = date('m', strtotime($month));

        $spectacles = array();
        $spectacles = Spectacle::getSpectaclesByMonth($date);

        $currentMonth = date("F");
        $nextMonth = date("F", strtotime('first day of +1 month'));

        require_once ROOT . '/views/public/spectacles/program.php';

        return true;
    }

    public static function actionRepertoire()
    {
        $title = 'Repertoire';

        require_once ROOT . '/views/public/spectacles/repertoire.php';

        return true;
    }
}