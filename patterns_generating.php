<?php
require_once 'autoloader.php';

use App\Patterns\Generating\SimpleFactory\StrongCocktail;
use App\Patterns\Generating\SimpleFactory\Bartender;
use App\Patterns\Generating\SimpleFactory\Interfaces\Cocktail;

function cocktailInfo(Cocktail $cocktail)
{
    echo $cocktail->swellsUp() . '<br>';
    echo 'В этом коктейле есть ';
    foreach ($cocktail->getComposition() as $key => $ingridient) {
        echo $ingridient;
        if ($key + 1 == count($cocktail->getComposition())) {
            echo '<br>';
        } else {
            echo ', ';
        }
    }
}

$myCocktail = Bartender::makeStrongCocktail(['джин', 'тоник']);

cocktailInfo($myCocktail);