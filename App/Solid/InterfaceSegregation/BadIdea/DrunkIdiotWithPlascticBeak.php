<?php
namespace App\Solid\InterfaceSegregation\BadIdea;

use App\Solid\InterfaceSegregation\BadIdea\Contract\LiteralyDuck;

class DrunkIdiotWithPlascticBeak implements LiteralyDuck
{
    public function quack(): string
    {
        return 'Бля';
    }

    public function canSwim(): bool
    {
        return false;
    }

    public function haveFlatBeak(): bool
    {
        return true;
    }
}