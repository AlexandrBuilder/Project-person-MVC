<?php

/**
 * Created by PhpStorm.
 * User: Киселев
 * Date: 15.06.2017
 * Time: 10:21
 */
class View
{
    public $data=[];


    public function assing($name,$value)
    {
        $this->data[$name]=$value;
    }



public function display($template)
{
    foreach ($this->data as $key=>$val)
    {
        $$key=$val;
       // print_r($items);
    }
    require_once __DIR__ . "/../views/".$template;
}

}