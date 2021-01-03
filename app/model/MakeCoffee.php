<?php

namespace app\model;

use app\helper\CoffeeMenu;
use app\helper\Order;

class MakeCoffee
{

    public function createCoffee()
    {
        if (!empty($_GET)) {
            $country = $_GET["country"];
            $accessToken = json_decode(file_get_contents('./app/shop-prices.json'), true);
            return new Order($this->getSyrup(), $this->getComplement(), new CoffeeMenu($accessToken[$country]));
        }
    }

    private function getSyrup()
    {
        return isset($_GET['syrup']) ? $_GET['syrup'] == 'yes' ? true : false : false;
    }

    private function getComplement()
    {
        return isset($_GET['complement']) ? $_GET['complement'] == 'yes' ? true : false : false;
    }


}