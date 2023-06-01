<?php
namespace App\Patterns\Generating\FabricMethod;

use App\Patterns\Generating\SimpleFactory\Interfaces\Cocktail;

class NonAlcoholicCocktail implements Cocktail
{
    protected array $composition;
    protected bool $ice;

    public function __construct(array $composition, bool $ice = true) {
        $this->composition = $composition;
        $this->ice = $ice;
    }

    function swellsUp(): string
    {
        return 'не набухивает<br>';
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