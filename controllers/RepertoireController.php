<?php

class RepertoireController
{

    /**
     * Repertoire page action
     * @param string $categoryLink
     * @return boolean
     */
    public function actionIndex($categoryLink = 'general')
    {
//        $categories = array();
//        $categories = Repertoire::getCategoriesList();
//
//        foreach ($categories as $category) {
//            if ($categoryLink == $category['link']) {
//                $categoryId = $category['id'];
//            }
//        }
//
//        $categoryPerformances = array();
//        $categoryPerformances = Repertoire::getPerformancesListByCategory($categoryId);
//
//        $title = 'Репертуар';
//
//        require_once(ROOT . '/views/repertoire/index.php');
//
//        return true;

        $title = 'Repertoire';

        $categories = array();
        $categories = Spectacle::getCategories();

        $categoryId = 1;
        foreach ($categories as $categoryItem) {
            if ($categoryLink == $categoryItem['link']) {
                $categoryId = $categoryItem['id'];
            }
        }

        $spectacles = array();
        $spectacles = Spectacle::getPerformancesByCategory($categoryId);

        require_once ROOT . '/views/public/repertoire/index.php';

        return true;
    }

    /**
     * Spectacle details
     *
     * @param string $spectacleLink
     * @return boolean
     */
    public function actionDetails($categoryLink, $spectacleLink)
    {
        $categories = array();
        $categories = Spectacle::getCategories();

        foreach ($categories as $categoryItem) {
            if ($categoryLink == $categoryItem['link']) {
                $categoryId = $categoryItem['id'];
            }
        }

        $spectacles = array();
        $spectacles = Spectacle::getPerformancesByCategory($categoryId);

        $spectacleDetails = Spectacle::getSpectacle($spectacleLink);

        echo '<pre>';
        var_dump($spectacleLink);
        echo '</pre>';

        $title = 'Repertoire';

        require_once(ROOT . '/views/public/repertoire/details.php');

        return true;
    }

    /**
     * Affiche page action
     * @param string $categoryLink
     * @return boolean
     */
    public function actionAffiche($showMonth)
    {
        $uaMonthNames = ['Січень', 'Лютий', 'Березень', 'Квітень', 'Травень', 'Червень', 'Липень', 'Серпень', 'Вересень', 'Жовтень', 'Листопад', 'Грудень'];

        $date = date_parse($showMonth);
        
        $currentMonth = date("F");
        $nextMonth = date("F", strtotime('first day of +1 month'));

        $currentMonthNum = date("m");
        $nextMonthNum = date("m", strtotime('first day of +1 month'));
    
        $spectacles = array();
        $spectacles = Repertoire::getAfficheByMonth($date['month']);

        $title = 'Афіша';
        
        require_once(ROOT . '/views/repertoire/affiche.php');

        return true;

    }


}