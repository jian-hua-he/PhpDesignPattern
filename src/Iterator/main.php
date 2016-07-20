<?php

require "../../vendor/autoload.php";

use Src\Iterator\Menus\DinerMenu;

$items = ['Fired Rice', 'Dumplings', 'Beef Noodles'];
$dinerMenu = new DinerMenu($items);

while ($dinerMenu->hasNext()) {
    $item = $dinerMenu->next();
    echo "{$item}\n";
}