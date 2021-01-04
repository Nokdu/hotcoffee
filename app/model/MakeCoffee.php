<?php

namespace app\model;

use app\helper\CoffeeMenu;
use app\helper\Order;

class MakeCoffee
{

    public function createOrder($params)
    {
        if (!empty($params)) {
            $country = $params["country"];
            $accessToken = json_decode(file_get_contents('./app/shop-prices.json'), true);
            return new Order($this->getSyrup($params), $this->getComplement($params), new CoffeeMenu($accessToken[$country]));
        }
    }

    private function getSyrup($params)
    {
        return isset($params['syrup']) ? $params['syrup'] == 'yes' ? true : false : false;
    }

    private function getComplement($params)
    {
        return isset($params['complement']) ? $params['complement'] == 'yes' ? true : false : false;
    }


}