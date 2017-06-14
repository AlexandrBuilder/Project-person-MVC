<?php
/**
 * Created by PhpStorm.
 * User: Киселев
 * Date: 14.06.2017
 * Time: 13:57
 */
 foreach ($items as $item): ?>
    <h1><?=$item->name;?></h1>
    <div><?=$item->phone;?></div>
    <div><?=$item->age;?></div>
<?php endforeach; ?>
