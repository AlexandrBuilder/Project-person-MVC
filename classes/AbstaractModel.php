<?php

/**
 * Created by PhpStorm.
 * User: Киселев
 * Date: 14.06.2017
 * Time: 17:39
 */
class AbstaractModel
{
    protected static $table;
    protected static $class;
    public static function GetAll()
    {
        $bd=new BD();
        //$sql= "SELECT * FROM ".self::$table;
        $sql= "SELECT * FROM ".static::$table;
        echo $sql;
        return $bd->queryAll($sql,static::$class);
        //return $bd->qury("SELECT * FROM `Person`");
    }
    public static function GetOne($id)
    {
        $bd=new BD();
        $sql= "SELECT * FROM ".static::$table;
        //$sql= "SELECT * FROM ".static::$table."WHERE id='$id'";
        return $bd->queryOne($sql,static::$class);
        //return $bd->qury("SELECT * FROM `Person`");
    }
}