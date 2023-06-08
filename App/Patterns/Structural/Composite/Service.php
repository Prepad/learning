<?php
namespace App\Patterns\Structural\Composite;

use App\Patterns\Structural\Composite\Interfaces\Priced;

class Service implements Priced
{
    protected int $price = 150;

    public function getPrice(): int
    {
        return $this->price;
    }
}