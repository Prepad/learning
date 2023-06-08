<?php
namespace App\Patterns\Behavioral\Visitor;

use App\Patterns\Behavioral\Visitor\Interfaces\AnimalOperation;
use App\Patterns\Behavioral\Visitor\Monkey;
use App\Patterns\Behavioral\Visitor\Lion;
use App\Patterns\Behavioral\Visitor\Dolphin;

class Speak implements AnimalOperation
{
    public function visitMonkey(Monkey $monkey)
    {
        $monkey->shout();
    }

    public function visitLion(Lion $lion)
    {
        $lion->roar();
    }

    public function visitDolphin(Dolphin $dolphin)
    {
        $dolphin->speak();
    }
}