<?php

/**
 * Created by PhpStorm.
 * User: darkmaiden
 * Date: 04.12.16
 * Time: 23:30
 */
class FloorController
{
    public function actionIndex()
    {
        require_once ROOT.'/views/floor/index.php';
        return true;
    }

    public function actionView($id)
    {
        require_once ROOT.'/views/floor/view.php';
        return true;
    }
}