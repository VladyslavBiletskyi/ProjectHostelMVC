<?php

class RoomController
{
    public function actionView($id)
    {
        require_once ROOT.'/views/room/view.php';
        return true;
    }
}