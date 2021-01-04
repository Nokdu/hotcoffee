<?php

namespace app\controller;

use app\model\MakeCoffee;

class main
{

    public static function action()
    {
        $coffeeAction = new MakeCoffee();
        $order = $coffeeAction->createOrder($_GET);
        include 'app/view/MainView.php';
    }
}

