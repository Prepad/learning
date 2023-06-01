<?php
namespace App\Solid\DependencyInversion\GoodIdea;

use App\Solid\DependencyInversion\GoodIdea\Interfaces\Booze;

class Whiskey implements Booze
{
    public function swellsUp(): void
    {
        echo 'эстетично набухивает';
    }
}