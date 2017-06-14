<?php

/**
 * Created by PhpStorm.
 * User: Киселев
 * Date: 14.06.2017
 * Time: 10:52
 */
//require_once __DIR__ . "/../classes/BD.php";
require_once __DIR__ . "/../avtoload.php";
class Person
{
    public $id;
    public $name;
    public $phone;
    public $age;

    public function GetAll()
    {
        $bd=new BD();
        return $bd->queryAll("SELECT * FROM `Person`","Person");
        //return $bd->qury("SELECT * FROM `Person`");
    }

    public function GetOne($id)
    {
        $bd=new BD();
        return $bd->queryOne("SELECT * FROM `Person` WHERE id='$id'","Person");
        //return $bd->qury("SELECT * FROM `Person`");
    }
  /*  public function __construct($name="",$phone="",$age="",$id="")
    {
        $this->id=$id;
        $this->name=$name;
        $this->phone=$phone;
        $this->age=$age;
    }*/

    public function View()
    {
        echo $this->id;

        echo $this->name;

        echo $this->phone;

        echo $this->age;


    }
}