<?php
namespace App\Patterns\Structural\Decorator;

use App\Patterns\Structural\Decorator\Interfaces\Work;

class SimpleWork implements Work
{
    public function getPrice(): int
    {
        return 100;
    }
}