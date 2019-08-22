<?php

class SiteController
{

    /**
     * Main page action
     *
     * @return boolean
     */
    public function actionIndex()
    {
        $title = 'Start page';

        require_once(ROOT . '/views/public/site/start.php');

        return true;
    }

    /**
     * Theater page action
     *
     * @return bool
     */
    public static function actionTheater()
    {
        $title = 'Theater';

        require_once(ROOT . '/views/public/site/theater.php');

        return true;
    }

    /**
     * Festival page action
     *
     * @return bool
     */
    public static function actionFestival()
    {
        $title = 'Festival';

        require_once(ROOT . '/views/public/site/festival.php');

        return true;
    }

    /**
     * Studio page action
     *
     * @return bool
     */
    public static function actionStudio()
    {
        $title = 'Studio';

        require_once(ROOT . '/views/public/site/studio.php');

        return true;
    }

    /**
     * Contacts page action
     *
     * @return boolean
     */
    public function actionContacts()
    {
        $title = 'Contacts';

        $mail = '';
        $message = '';

        $errors = false;

        if (!User::checkEmail($mail)) {
            $errors = 'Wrong email';
        }

        if (!$errors) {
            $adminEmail = 'vberkoz@gmail.com';
            $message = "Text: {$message}. From: {$mail}";
            $result = mail($adminEmail, 'Drama theater', $message);
        }

        require_once(ROOT . '/views/public/site/contacts.php');

        return true;
    }

}