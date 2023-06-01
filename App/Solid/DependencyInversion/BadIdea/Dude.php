<?php
namespace App\Solid\DependencyInversion\BadIdea;

use App\Solid\DependencyInversion\BadIdea\Beer;

class Dude
{
    protected Beer $beer;

    public function __construct(Beer $beer) {
        $this->beer = $beer;
    }

    public function drink()
    {
        $this->beer->swellsUp();
    }
}