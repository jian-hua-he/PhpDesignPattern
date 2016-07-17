<?php

require "../../vendor/autoload.php";

use Src\TemplateMethod\Beverages\Tea;
use Src\TemplateMethod\Beverages\Coffee;

echo "Start to make a tea...\n";
$tea = new Tea;
$tea->prepareRecipe();

echo "Start to make a coffee...\n";
$coffee = new Coffee;
$coffee->prepareRecipe();