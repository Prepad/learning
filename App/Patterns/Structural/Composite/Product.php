<?php
namespace App\Patterns\Structural\Composite;

use App\Patterns\Structural\Composite\Interfaces\Priced;

class Product implements Priced
{
    protected int $price = 100;

    public function getPrice(): int
    {
        return $this->price;
    }
}