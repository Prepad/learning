<?php
namespace App\Patterns\Structural\Composite;

use App\Patterns\Structural\Composite\Interfaces\Priced;

class Basket implements Priced
{
    protected array $pricedArray = [];

    function addPriced(Priced $priced)
    {
        $this->pricedArray[] = $priced;
    }

    public function getPrice(): int
    {
        return array_sum($this->pricedArray);
    }
}