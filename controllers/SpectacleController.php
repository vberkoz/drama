<?php
/**
 * Spectacles controller
 */

class SpectacleController
{
    /**
     * Shows spectacles program
     *
     * @return bool
     */
    public static function actionProgram()
    {
        $title = 'Program';

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