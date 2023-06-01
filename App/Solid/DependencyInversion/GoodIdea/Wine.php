<?php
namespace App\Solid\DependencyInversion\GoodIdea;

use App\Solid\DependencyInversion\GoodIdea\Interfaces\Booze;

class Wine implements Booze
{
    public function swellsUp(): void
    {
        echo 'элегантно набухивает';
    }
}