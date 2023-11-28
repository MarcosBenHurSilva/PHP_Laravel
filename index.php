<?php
    // variable = a reusable container that holds data
    //            string, integer, float, boolean
    //string
    $name = "Marcos Silva";
    $food = "pizza";
    $email = "fake123@gmail.com";
    //integer
    $age = 31;
    $users = 2;
    $quantity = 4;
    //float
    $score = 2.5;
    $price = 5.99;
    $tax_rate = 5.1;
    //boolean
    $employed = true;
    $online = false;
    $for_sale = true;

    $total = null;

    echo "Hello {$name}<br>";
    echo "You like {$food}<br>";
    echo "Your email is {$email}<br>";

    echo "You are {$age} years old<br>";
    echo "There are {$users} users online<br>";
    echo "You would like to buy {$quantity} items<br>";

    echo "Your score is: {$score}<br>";
    echo "Your pizza is R\$ {$price}<br>";
    echo "The sales tax rate is: {$tax_rate}<br>";

    echo "Online status: {$online}<br>"; //1 para true e 0 para false, false não aparece

    echo "You have ordered {$quantity} x {$food}<br>";
    $total = $quantity * $price;
    echo "Your total is: R\$ {$total}";
?>