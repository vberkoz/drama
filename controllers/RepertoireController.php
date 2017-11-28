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

        $categories = array();
        $categories = Repertoire::getCategoriesList();

        foreach ($categories as $category) {
            if ($categoryLink == $category['link']) {
                $categoryId = $category['id'];
            }
        }

        $categoryPerformances = array();
        $categoryPerformances = Repertoire::getPerformancesListByCategory($categoryId);

        $title = 'Репертуар';
        
        require_once(ROOT . '/views/repertoire/index.php');

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

    /**
     * Spectacle page action
     * @param string $spectacleLink
     * @return boolean
     */
	public function actionSpectacle($spectacleLink)
	{

        $spectacle = Repertoire::getSpectacleByLink($spectacleLink);

        $spectacleActors = Worker::getActorsListBySpectacle($spectacle['id']);

        $tickets = Repertoire::getAfficheBySpectacle($spectacle['id']);
        
        $title = $spectacle['title'];
        
        require_once(ROOT . '/views/repertoire/spectacle.php');
		
		return true;
		
	}

}