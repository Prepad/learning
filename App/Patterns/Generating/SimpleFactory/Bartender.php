<?php
namespace App\Patterns\Generating\SimpleFactory;

use App\Patterns\Generating\SimpleFactory\Interfaces\Cocktail;
use App\Patterns\Generating\SimpleFactory\StrongCocktail;

class Bartender
{
    public static function makeStrongCocktail(array $composition, bool $ice = true): Cocktail
    {
        return new StrongCocktail($composition, $ice);
    }
}