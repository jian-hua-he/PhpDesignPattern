<?php

namespace Src\Factory\Factories;

use Src\Factory\Pizza\StuffedCheesePizza;
use Src\Factory\Pizza\StuffedClamPizza;
use Src\Factory\Pizza\StuffedPepperoniPizza;
use Src\Factory\Pizza\StuffedVeggiePizza;
use Exception;

class StuffedPizzaFactory implements PizzaFactoryInterface
{
    private $pizza;

    public function createPizza($type)
    {
        try {
            switch ($type) {
                case 'cheese':
                    $this->pizza = new StuffedCheesePizza;
                    break;

                case 'clam':
                    $this->pizza = new StuffedClamPizza;
                    break;

                case 'pepperoni':
                    $this->pizza = new StuffedPepperoniPizza;
                    break;

                case 'veggie':
                    $this->pizza = new StuffedVeggiePizza;
                    break;
                
                default:
                    throw new Exception("There is no {$type} pizza");
            }

            $this->pizza->manufacturingProcess();

            return $this->pizza;
        } catch (Exception $e) {
            echo "{$e->getMessage()}\n\n";
        }
    }
}