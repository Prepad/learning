<?php
require_once 'autoloader.php';

use App\Solid\InterfaceSegregation\BadIdea\DrunkIdiotWithPlascticBeak;
use App\Solid\InterfaceSegregation\BadIdea\Duck;
use App\Solid\InterfaceSegregation\BadIdea\Contract\LiteralyDuck;
use App\Solid\InterfaceSegregation\BadIdea\Platypus;

function duckFunction(LiteralyDuck $probablyDuck)
{
    if ($probablyDuck->canSwim()) {
        echo 'Оно плавает ';
    } else {
        echo 'Оно тонет ';
    }

    if ($probablyDuck->haveFlatBeak()) {
        echo 'у этого есть клюв ';
    } else {
        echo '';
    }

    echo 'и оно говорит ' . $probablyDuck->quack() . '<br>';
}

echo 'Это утка!<br>';
duckFunction(new Duck());
echo 'Это утконос!<br>';
duckFunction(new Platypus());
echo 'Это пьяный идиот с пластиковым клювом!<br>';
duckFunction(new DrunkIdiotWithPlascticBeak());