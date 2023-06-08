<?php
namespace App\Patterns\Behavioral\Visitor\Interfaces;

use App\Patterns\Behavioral\Visitor\Monkey;
use App\Patterns\Behavioral\Visitor\Lion;
use App\Patterns\Behavioral\Visitor\Dolphin;

interface AnimalOperation
{
    public function visitMonkey(Monkey $monkey);
    public function visitLion(Lion $lion);
    public function visitDolphin(Dolphin $dolphin);
}