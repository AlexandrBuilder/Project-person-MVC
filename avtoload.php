<?php
/**
 * Created by PhpStorm.
 * User: Киселев
 * Date: 14.06.2017
 * Time: 17:17
 */

function __autoload($class)
{

    if(file_exists(__DIR__ . "/Controler/" .$class.".php"))
    {require __DIR__ . "/Controler/" .$class.".php";}
    elseif(file_exists(__DIR__ ."/Models/".$class.".php"))
    {require __DIR__ ."/Models/".$class.".php";}
    elseif(file_exists(__DIR__ ."/classes/".$class.".php"))
    {require __DIR__ ."/classes/".$class.".php";}

    else

    {
        echo $class;
        $classArray=explode('\\',$class);
        $classArray[0]=__DIR__;
        $classArray=implode(DIRECTORY_SEPARATOR,$classArray).".php";
        var_dump($classArray);

       if(file_exists($classArray))
        require $classArray;
      // die();

    }
    require __DIR__."/vendor/autoload.php";
}