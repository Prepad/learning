<?php
namespace App\Patterns\Behavioral\Visitor;

use App\Patterns\Behavioral\Visitor\Interfaces\Animal;
use App\Patterns\Behavioral\Visitor\Interfaces\AnimalOperation;

class Dolphin implements Animal
{
    public function speak()
    {
        echo '*звуки дельфина*!'; // Я понятия не имею как описать их звуки
    }

    public function accept(AnimalOperation $operation)
    {
        $operation->visitDolphin($this);
    }
}