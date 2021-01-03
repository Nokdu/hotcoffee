<?php

namespace app\controller;

use app\model\MakeCoffee;

class main
{

    public static function action()
    {
        $coffeeAction = new MakeCoffee();
        $order = $coffeeAction->createCoffee();
        include 'app/view/helloView.php';
    }
}

