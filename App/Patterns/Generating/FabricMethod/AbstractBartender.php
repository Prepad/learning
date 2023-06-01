<?php
namespace App\Patterns\Generating\FabricMethod;

use App\Patterns\Generating\SimpleFactory\Interfaces\Cocktail;

abstract class AbstractBartender
{
    abstract public function makeCocktail(array $composition, bool $ice):Cocktail;

    public function sayAboutStrength(array $composition, bool $ice): Cocktail
    {
        $cocktail = $this->makeCocktail($composition, $ice);
        echo 'Этот коктейль ' . $cocktail->swellsUp();
        return $cocktail;
    }
}