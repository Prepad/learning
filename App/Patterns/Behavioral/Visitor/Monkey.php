<?php
namespace App\Patterns\Behavioral\Visitor;

use App\Patterns\Behavioral\Visitor\Interfaces\Animal;
use App\Patterns\Behavioral\Visitor\Interfaces\AnimalOperation;

class Monkey implements Animal
{
    public function shout()
    {
        echo 'У-у-а-а!';
    }

    public function accept(AnimalOperation $operation)
    {
        $operation->visitMonkey($this);
    }
}