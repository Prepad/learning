<?php
namespace App\Solid\InterfaceSegregation\GoodIdea;

use App\Solid\InterfaceSegregation\GoodIdea\Contract\CanSwim;
use App\Solid\InterfaceSegregation\GoodIdea\Contract\Quack;
use App\Solid\InterfaceSegregation\GoodIdea\Contract\HaveFlatBeak;

class Duck implements Quack, CanSwim, HaveFlatBeak
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