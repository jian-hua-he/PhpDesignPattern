<?php

namespace Src\AbstractFactory\Cars;

use Src\AbstractFactory\CarComponents\CarBodies\CarBodyInterface;
use Src\AbstractFactory\CarComponents\Tires\TireInterface;

class Car
{
    private $tire;
    private $carBody;

    public function __construct(TireInterface $tire,
                                CarBodyInterface $carBody)
    {
        $this->tire = $tire;
        $this->carBody = $carBody;
    }

    public function drive()
    {
        return "Dirve car with {$this->tire->getDescription()} and {$this->carBody->getDescription()}";
    }
}