<?php
namespace App\Patterns\Structural\Bridge;

use App\Patterns\Structural\Bridge\Interfaces\Weapon;

class Sword implements Weapon
{
    function doDamage()
    {
        echo 'shink';
    }
}