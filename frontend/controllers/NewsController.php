<?php
/**
 * Created by PhpStorm.
 * User: Alexander
 * Date: 22.01.2017
 * Time: 16:26
 */

namespace frontend\controllers;


class NewsController extends AppController
{

    public function actionIndex($name = "пустой параметр")
    {
        $hello = "Здравствуй, мир!";
        $hi = "Hi!";
        return $this->render("index", compact("hello", 'hi', 'name'));
    }

    public function actionTest()
    {
        return $this->render("test");
    }

    public function actionHello()
    {
        return $this->render("hello");
    }

}