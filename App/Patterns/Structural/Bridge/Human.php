<?php
namespace App\Patterns\Structural\Bridge;

use App\Patterns\Structural\Bridge\Interfaces\Warrior;
use App\Patterns\Structural\Bridge\Interfaces\Weapon;

class Human implements Warrior
{
    protected $weapon;

    public function __construct(Weapon $weapon) {
        $this->weapon = $weapon;
    }

    function attack()
    {
        $this->weapon->doDamage();
    }
}