<?php
/**
 * Created by PhpStorm.
 * User: Киселев
 * Date: 13.06.2017
 * Time: 19:21
 */
header("Content-Type: text/html; charset=UTF-8");
require_once __DIR__ . "/Models/Person.php";


//$person=new Person();
//$items=$person->GetAll();
$items=Person::GetAll();
var_dump($items);
require_once __DIR__ . "/views/index.php";