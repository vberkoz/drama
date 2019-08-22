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

        $spectacles = array();
        $spectacles = Spectacle::getSpectacles();

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