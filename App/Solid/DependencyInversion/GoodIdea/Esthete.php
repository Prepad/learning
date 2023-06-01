<?php
namespace App\Solid\DependencyInversion\GoodIdea;

use App\Solid\DependencyInversion\GoodIdea\Interfaces\Booze;

class Esthete
{
    protected Booze $booze;

    public function __construct(Booze $booze) {
        $this->booze = $booze;
    }

    public function drink()
    {
        $this->booze->swellsUp();
    }
}