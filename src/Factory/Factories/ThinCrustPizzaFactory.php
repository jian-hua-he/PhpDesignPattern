<?php

namespace Src\Factory\Factories;

use Src\Factory\Pizza\ThinCrustCheesePizza;
use Src\Factory\Pizza\ThinCrustClamPizza;
use Src\Factory\Pizza\ThinCrustPepperoniPizza;
use Src\Factory\Pizza\ThinCrustVeggiePizza;
use Exception;

class ThinCrustPizzaFactory implements PizzaFactoryInterface
{
    private $pizza;

    public function createPizza($type)
    {
        try {
            switch ($type) {
                case 'cheese':
                    $this->pizza = new ThinCrustCheesePizza;
                    break;

                case 'clam':
                    $this->pizza = new ThinCrustClamPizza;
                    break;

                case 'pepperoni':
                    $this->pizza = new ThinCrustPepperoniPizza;
                    break;

                case 'veggie':
                    $this->pizza = new ThinCrustVeggiePizza;
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