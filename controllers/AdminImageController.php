<?php

class AdminImageController extends AdminBase
{
    public static function actionImages($page = 1)
    {
        self::checkAdmin();
        $imagesList = array();
        $imagesList = Image::getImagesList($page);
        $totalImagesCount = Image::getTotalImagesCount();
        $pagination = new Pagination($totalImagesCount, $page, Image::SHOW_BY_DEFAULT, 'page-');
        require_once(ROOT . '/views/admin_image/images.php');
        return true;
    }
}