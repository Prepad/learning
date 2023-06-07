<?php
namespace App\Patterns\Structural\Bridge\Interfaces;

use App\Patterns\Structural\Bridge\Interfaces\Weapon;

interface Warrior
{
    function __construct(Weapon $weapon);
    function attack();
}