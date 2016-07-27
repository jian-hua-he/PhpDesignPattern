<?php

require "../../vendor/autoload.php";

use Src\Component\Menus\Menu;
use Src\Component\Menus\MenuItem;

// Pancake House Menu
$pancakeHouseMenu = new Menu('PANCAKE HOUSE MENU', 'Breakfast');

$cake = new MenuItem('Cake', 'Cake with butter', 1.25);
$pancakeHouseMenu->add($cake);

// Diner Menu
$dinerMenu = new Menu('DINER MENU', 'Lunch');

$pasta = new MenuItem('Pasta', 'Spaghetti with Marinara Souce, and a slice of sourdough bread', 3.89);
$dinerMenu->add($pasta);

$applePie = new MenuItem('Apple Pie', 'Apple pie with a flakey crust, topped with vanilla ice cream', 1.59);
$dinerMenu->add($applePie);

// Cafe Menu
$cafeMenu = new Menu('CAFE MENU', 'Dinner');

$latte = new MenuItem('Latte', 'Coffee with milk', 0.99);
$cafeMenu->add($latte);

// Dessert Menu
$dessertMenu = new Menu('DESSERT MENU', 'Dessert of course!');

$muffin = new MenuItem('Muffin', 'Muffin with honey', 2.29);
$dessertMenu->add($muffin);

// All Menu
$allMenus = new Menu('ALL MENUS', 'All menus combined');

$allMenus->add($pancakeHouseMenu);
$allMenus->add($dinerMenu);
$allMenus->add($cafeMenu);
$allMenus->add($dessertMenu);

// Print all menus
$allMenus->printMenu();