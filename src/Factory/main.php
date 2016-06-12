<?php

require '../../vendor/autoload.php';

use Src\Factory\Factories\StuffedPizzaFactory;
use Src\Factory\Factories\ThinCrustPizzaFactory;

$stuffedPizzaFactory = new StuffedPizzaFactory;

$stuffedCheesePizza = $stuffedPizzaFactory->createPizza('cheese');
$stuffedClamPizza = $stuffedPizzaFactory->createPizza('clam');
$stuffedPepperoniPizza = $stuffedPizzaFactory->createPizza('pepperoni');
$stuffedVeggiePizza = $stuffedPizzaFactory->createPizza('veggie');

$thinCrustPizzaFactory = new ThinCrustPizzaFactory;

$thinCrustCheesePizza = $thinCrustPizzaFactory->createPizza('cheese');
$thinCrustClamPizza = $thinCrustPizzaFactory->createPizza('clam');
$thinCrustPepperoniPizza = $thinCrustPizzaFactory->createPizza('pepperoni');
$thinCrustVeggiePizza = $thinCrustPizzaFactory->createPizza('veggie');
