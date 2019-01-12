<?php

class AdminDashboardController extends AdminBase
{
    public function actionDashboard()
    {
        self::checkAdmin();
        // echo User::checkLogged();
        require_once(ROOT . '/views/admin/dashboard.php');
        return true;
    }
}