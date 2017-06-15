<?php

/**
 * Created by PhpStorm.
 * User: Киселев
 * Date: 14.06.2017
 * Time: 13:41
 */
require_once __DIR__ . "/../Models/Person.php";
class NewControler
{

public function actionAll()
{
    $items=Person::GetAll();
    $view=new View();
    $view->assing("items",$items);
    $view->display("news/all.php");
    //require_once __DIR__ . "/../views/news/all.php";
}

public function actionOne()
{
    $id=$_GET["id"];
    $item=Person::GetOne($id);
    $view=new View();
    $view->assing("item",$item);
    $view->display("news/one.php");

     //require_once __DIR__ . "/../views/news/one.php";
}
}