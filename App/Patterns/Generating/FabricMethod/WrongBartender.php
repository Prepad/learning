<?php
namespace App\Patterns\Generating\FabricMethod;

use App\Patterns\Generating\SimpleFactory\Interfaces\Cocktail;

class WrongBartender extends AbstractBartender
{
    public function makeCocktail(array $composition, bool $ice):Cocktail
    {
        return new NonAlcoholicCocktail($composition, $ice);
    }
}