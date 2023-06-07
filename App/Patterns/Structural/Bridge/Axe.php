<?php
namespace App\Patterns\Structural\Bridge;

use App\Patterns\Structural\Bridge\Interfaces\Weapon;

class Axe implements Weapon
{
    function doDamage()
    {
        echo 'хуяк';
    }
}