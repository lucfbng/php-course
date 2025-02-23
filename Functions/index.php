<?php

function happy_birthday($name, $age)
{
    echo "Joyeux Anniversaire {$name} <br>";
    echo "Tu as {$age} ans <br>";
}
happy_birthday("John", 30); // Affiche "Joyeux Anniversaire John, Tu as 30 ans"
happy_birthday("Patrick", 32); // Affiche "Joyeux Anniversaire Patrick, Tu as 32 ans"

function est_pair($number)
{
    $result = $number % 2;
    return $result;
}
echo est_pair(11);

function hypotenuse($a, $b)
{
    $c = sqrt($a ** 2 + $b ** 2);
    return $c;
}
echo hypotenuse(3, 4);
