<?php
namespace App\Patterns\Structural\Decorator;

use App\Patterns\Structural\Decorator\Interfaces\Work;

class NormalWork implements Work
{
    protected $simpleWork;

    public function __construct(SimpleWork $simpleWork)
    {
        $this->simpleWork = $simpleWork;
    }

    public function getPrice(): int
    {
        return $this->getPrice() * 1.5;
    }
}