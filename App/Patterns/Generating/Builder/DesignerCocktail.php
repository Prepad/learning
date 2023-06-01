<?php
namespace App\Patterns\Generating\Builder;

use App\Patterns\Generating\SimpleFactory\Interfaces\Cocktail;

class DesignerCocktail implements Cocktail
{
    protected array $composition;
    protected bool $ice;

    public function __construct(ExpertBartender $bartender) {
        $this->composition = $bartender->composition;
        $this->ice = $bartender->ice;
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