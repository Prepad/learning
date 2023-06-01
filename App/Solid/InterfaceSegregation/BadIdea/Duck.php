<?php
namespace App\Solid\InterfaceSegregation\BadIdea;

use App\Solid\InterfaceSegregation\BadIdea\Contract\LiteralyDuck;

class Duck implements LiteralyDuck
{
    public function quack(): string
    {
        return 'Кря';
    }

    public function canSwim(): bool
    {
        return true;
    }

    public function haveFlatBeak(): bool
    {
        return true;
    }
}