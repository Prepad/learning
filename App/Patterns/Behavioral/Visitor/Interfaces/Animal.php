<?php
namespace App\Patterns\Behavioral\Visitor\Interfaces;

use App\Patterns\Behavioral\Visitor\Interfaces\AnimalOperation;

interface Animal
{
    public function accept(AnimalOperation $operation);
}