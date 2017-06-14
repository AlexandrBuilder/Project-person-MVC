<?php

/**
 * Created by PhpStorm.
 * User: Киселев
 * Date: 13.06.2017
 * Time: 19:18
 */
require_once __DIR__ . "/../Models/Person.php";
class BD
{

    /**
     * BD constructor.
     */
    public function __construct()
    {
        mysql_connect("localhost", "mysql", "mysql");
        mysql_select_db("test");
        mysql_query("SET NAMES utf8") or die("Не установленна кодировка");


    }

    public function queryAll($sql, $class)
        //public function qury($sql)
    {
        $res = mysql_query($sql) or die("Не установленна кодировка");
        if ($res === false)
            return false;

        $arr = [];
        while ($row = mysql_fetch_object($res, "Person")) //  while($row=mysql_fetch_object($res))
        {
            $arr[] = $row;
        }
        return $arr;
    }


    public function queryOne($sql, $class)
        //public function qury($sql)
    {
        return $this->queryAll($sql, $class)[0];
    }

}