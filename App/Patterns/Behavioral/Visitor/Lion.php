<?php
namespace App\Patterns\Behavioral\Visitor;

use App\Patterns\Behavioral\Visitor\Interfaces\Animal;
use App\Patterns\Behavioral\Visitor\Interfaces\AnimalOperation;

class Lion implements Animal
{
    public function roar()
    {
        echo 'рррр!';
    }

    public function accept(AnimalOperation $operation)
    {
        $operation->visitLion($this);
    }
}