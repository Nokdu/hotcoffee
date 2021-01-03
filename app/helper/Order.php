<?php

namespace app\helper;

use app\helper\CoffeeMenu;

class Order
{

    private $syrup;
    private $complement;
    private $coffee;

    /**
     * Order constructor.
     * @param $syrup
     * @param $complement
     * @param $coffee
     */
    public function __construct($syrup, $complement, CoffeeMenu $coffee)
    {
        $this->syrup = $syrup;
        $this->complement = $complement;
        $this->coffee = $coffee;
    }

    public function getFullPrice()
    {
        return $this->getPrice() * $this->getTax();

    }

    public function getIngredients()
    {
        $ingredients = [];
        $ingredients['Coffee'] = $this->coffee->getCoffeeType();
        $ingredients['Portion'] = $this->coffee->getPortion();
        if ($this->orderHaveSyrup()) {
            $ingredients['Syrup'] = $this->coffee->getSyrupType();
        }
        if ($this->orderHaveComplement()) {
            $ingredients['Complement'] = $this->coffee->getComplementType();
        }
        return $ingredients;
    }

    private function getPrice()
    {
        $result = $this->coffee->getBasePrice() + $this->coffee->getMilkPrice();
        if ($this->orderHaveSyrup()) {
            $result += $this->coffee->getSyrupPrice();
        }
        if ($this->orderHaveComplement()) {
            $result += $this->coffee->getComplementPrice();
        }
        return $result;
    }

    private function getTax()
    {
        return ($this->coffee->getTaxRate() / 100) + 1;
    }

    /**
     * @return bool
     */
    private function orderHaveSyrup(): bool
    {
        return $this->syrup;
    }

    /**
     * @return bool
     */
    private function orderHaveComplement(): bool
    {
        return $this->complement;
    }

}