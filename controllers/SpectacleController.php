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

    /**
     * Repertoire page action
     *
     * @param string $category
     * @return bool
     */
    public static function actionRepertoire($category = 'general')
    {
        $title = 'Repertoire';

        $categories = array();
        $categories = Spectacle::getCategories();

        $categoryId = 1;
        foreach ($categories as $categoryItem) {
            if ($category == $categoryItem['link']) {
                $categoryId = $categoryItem['id'];
            }
        }

        $spectacles = array();
        $spectacles = Spectacle::getPerformancesByCategory($categoryId);

        require_once ROOT . '/views/public/repertoire/index.php';

        return true;
    }
}