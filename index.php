<?php
/**
 * Created by PhpStorm.
 * User: Киселев
 * Date: 13.06.2017
 * Time: 19:21
 */
header("Content-Type: text/html; charset=UTF-8");
require_once __DIR__ . "/avtoload.php";
//require_once __DIR__ . "/Contoroler/NewControler.php";
$ctrl=isset($_GET['ctrl']) ? $_GET['ctrl'] : 'New';
$act=isset($_GET['act']) ? $_GET['act'] : 'All';
//$con=new NewControler();

$controlerName=$ctrl."Controler";

//require_once __DIR__ . "/Contoroler/".$controlerName.".php";

$controler=new $controlerName;
;
$method='action'.$act;
//$person=new Person();
//$items=$person->GetAll();
//$con->actionAll();
$controler->$method();