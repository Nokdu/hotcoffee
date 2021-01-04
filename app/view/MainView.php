<!--

    This is just a view that defines how the page looks.
    It doesn't do any logic, access the DB, or anything else.

    It is completely dumb.

-->

<html>
<head>
    <meta charset="utf-8">
    <title>HotCoffee</title>
</head>
<body>

<form action="/">
    <p><input type="radio" name="country" value="Spain">Spain<Br>
        <input type="radio" name="country" value="Italy">Italy<Br>
        <input type="checkbox" name="syrup" value="yes">Syrup<Br>
        <input type="checkbox" name="complement" value="yes">Complement</p>
    <p><input type="submit"></p>
</form>
<?php
if (!is_null($order)) {
    echo '<b>Menu:</b><Br><Br>';
    foreach ($order->getIngredients() as $ingredientKey => $ingredientValue) {
        echo $ingredientKey . ": " . $ingredientValue . '<Br>';
    }
    echo '<Br><b>FullPrice</b><Br><Br>' . $order->getFullPrice() . ' $<Br>';
}
?>
</body>
</html>