<?php

class SiteController
{

    /**
     * Main page action
     * @return boolean
     */
    public function actionIndex()
    {
        $title = 'Start page';

        require_once(ROOT . '/views/public/site/start.php');

        return true;

    }

    /**
     * Contacts page action
     * @return boolean
     */
    public function actionContacts()
    {

        $name = '';
        $mail = '';
        $subject = '';
        $message = '';

        $errors = false;

        if (!User::checkEmail($mail)) {
            $errors = 'Wrong email';
        }

        if (!$errors) {
            $adminEmail = 'vberkoz@gmail.com';
            $message = "Text: {$message}. From: {$mail}";
            $result = mail($adminEmail, $subject, $message);
        }

        require_once(ROOT . '/views/site/contacts.php');

        return true;

    }

}