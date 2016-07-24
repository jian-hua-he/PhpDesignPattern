<?php

require "../../vendor/autoload.php";

use Src\Iterator\Menus\DinerMenu;

$items = ['Fired Rice', 'Dumplings', 'Beef Noodles', 'Steamed buns', 'Pasta'];
$dinerMenu = new DinerMenu($items);

$dinerMenu->remove(2);
while ($dinerMenu->hasNext()) {
    $item = $dinerMenu->next();
    echo "{$item}\n";
}