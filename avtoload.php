<?php
/**
 * Created by PhpStorm.
 * User: Киселев
 * Date: 14.06.2017
 * Time: 17:17
 */
function __autoload($class)
{
    if(file_exists(__DIR__ ."/Contoroler/".$class.".php"))
    {require __DIR__ ."/Contoroler/".$class.".php";}
    elseif(file_exists(__DIR__ ."/Models/".$class.".php"))
    {require __DIR__ ."/Models/".$class.".php";}
    elseif(file_exists(__DIR__ ."/classes/".$class.".php"))
    {require __DIR__ ."/classes/".$class.".php";}
}