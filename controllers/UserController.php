<?php

class UserController
{
    public function actionView($id)
    {
        require_once ROOT.'/views/user/view.php';
        return true;
    }

    public function actionSignin()
    {
        require_once ROOT.'/views/user/signin.php';
        return true;
    }

    public function actionSignup()
    {
        require_once ROOT.'/views/user/signup.php';
        return true;
    }
}