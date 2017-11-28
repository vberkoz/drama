<?php

class AdminController
{

    /**
     * Main page action
     * @return boolean
     */
    public function actionIndex()
    {

        // require_once(ROOT . '/views/admin/index.html');

        header( 'Location: http://mvcdram.dev/views/admin/index.html' );

        return true;

    }

}