<?php

/**
 * Created by PhpStorm.
 * User: Киселев
 * Date: 14.06.2017
 * Time: 13:41
 */
require_once __DIR__ . "/../Models/Person.php";
require_once __DIR__ . "/../Models/NewModel.php";
//echo  __DIR__ . "/../Models/Person.php";
class NewControler
{

public function actionAll()
{
    $person=new NewModel();
    $person->data['name']='Ренат';
    $person->data['phone']="55555";
    $person->save();
   // $person->findOnBycolum(3,"id");
    echo $person->id;
  // echo NewModel::getTable();
    /*  $items=Person::GetAll();
    $view=new View();
   // $view->assing("items",$items);
     $view->items=$items;
    //echo count($view);

  //  $view->display("news/all.php");
    $view->display("news/all.php");
    hui!
    //require_once __DIR__ . "/../views/news/all.php";*/
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