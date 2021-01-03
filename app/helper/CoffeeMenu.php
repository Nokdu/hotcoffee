<?php

namespace app\helper;

class CoffeeMenu
{
    private $coffeeType;
    private $portion;
    private $basePrice;
    private $milkPrice;
    private $syrupPrice;
    private $syrupType;
    private $taxRate;
    private $complementPrice;
    private $complementType;

    /**
     * CoffeeMenu constructor.
     * @param $coffeeJson
     */
    public function __construct($coffeeJson)
    {
        $this->coffeeType = $coffeeJson['coffee_type'];
        $this->portion = $coffeeJson['portion'];
        $this->basePrice = $coffeeJson['base_price'];
        $this->milkPrice = $coffeeJson['milk_price'];
        $this->syrupPrice = $coffeeJson['syrup_price'];
        $this->syrupType = $coffeeJson['syrup_type'];
        $this->taxRate = $coffeeJson['tax_rate'];
        $this->complementPrice = $coffeeJson['complement_price'];
        $this->complementType = $coffeeJson['complement_type'];
    }

    /**
     * @return mixed
     */
    public function getCoffeeType()
    {
        return $this->coffeeType;
    }

    /**
     * @return mixed
     */
    public function getPortion()
    {
        return $this->portion;
    }

    /**
     * @return mixed
     */
    public function getBasePrice()
    {
        return $this->basePrice;
    }

    /**
     * @return mixed
     */
    public function getMilkPrice()
    {
        return $this->milkPrice;
    }

    /**
     * @return mixed
     */
    public function getSyrupPrice()
    {
        return $this->syrupPrice;
    }

    /**
     * @return mixed
     */
    public function getSyrupType()
    {
        return $this->syrupType;
    }

    /**
     * @return mixed
     */
    public function getTaxRate()
    {
        return $this->taxRate;
    }

    /**
     * @return mixed
     */
    public function getComplementPrice()
    {
        return $this->complementPrice;
    }

    /**
     * @return mixed
     */
    public function getComplementType()
    {
        return $this->complementType;
    }

}