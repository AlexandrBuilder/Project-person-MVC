<?php

/**
 * Created by PhpStorm.
 * User: Киселев
 * Date: 15.06.2017
 * Time: 10:21
 */
class View implements Countable, Iterator
{
    public $data=[];

public function __set($k,$v)
{
    $this->data[$k]=$v;
}

    public function __get($k)
    {
        return $data[$k];
    }


    public function assing($name,$value)
    {
        $this->data[$name]=$value;
    }



public function display($template)
{
    foreach ($this->data as $key=>$val)
    {
        $$key=$val;
        print_r($item);
    }
    require_once __DIR__ . "/../views/".$template;
}

    public function current()
    {

    }

    public function next()
    {

    }


    public function key()
    {

    }


    public function valid()
    {
        // TODO: Implement valid() method.
    }


    public function rewind()
    {
        // TODO: Implement rewind() method.
    }

    /**
     * Count elements of an object
     * @link http://php.net/manual/en/countable.count.php
     * @return int The custom count as an integer.
     * </p>
     * <p>
     * The return value is cast to an integer.
     * @since 5.1.0
     */
    public function count()
    {
       return count($this->data);
    }
}