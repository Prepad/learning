<?php
require_once 'autoloader.php';

use App\Patterns\Generating\Builder\ExpertBartender;
use App\Patterns\Generating\FabricMethod\WrongBartender;
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

$wrongBartender = new WrongBartender();

$myCocktail = $wrongBartender->sayAboutStrength(['молоко', 'мороженое', 'банан'], true);

cocktailInfo($myCocktail);

$myCocktail = (new ExpertBartender())
                ->makeTart()
                ->addIce()
                ->makeSour()
                ->makeFresh()
                ->makeCocktail();
cocktailInfo($myCocktail);
