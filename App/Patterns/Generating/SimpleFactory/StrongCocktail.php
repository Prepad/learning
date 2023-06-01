<?php

namespace App\Patterns\Generating\SimpleFactory;

use App\Patterns\Generating\SimpleFactory\Interfaces\Cocktail;

class StrongCocktail implements Cocktail
{
    protected array $composition;
    protected bool $ice;

    public function __construct(array $composition, bool $ice = true) {
        $this->composition = $composition;
        $this->ice = $ice;
    }

    function swellsUp(): string
    {
        return 'набухивает<br>';
    }

    function icey(): bool
    {
        return $this->ice;
    }

    function getComposition(): array
    {
        return $this->composition;
    }
}