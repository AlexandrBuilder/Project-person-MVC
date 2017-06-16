<?php

/**
 * Created by PhpStorm.
 * User: Киселев
 * Date: 15.06.2017
 * Time: 16:02
 */
class NewModel extends NewAbstractModel
{
    protected static $table="Person";
    public $id;
    public $name;
    public $phone;
    public $age;
}