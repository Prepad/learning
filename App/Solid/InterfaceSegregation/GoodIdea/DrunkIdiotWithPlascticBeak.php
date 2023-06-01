<?php
namespace App\Solid\InterfaceSegregation\GoodIdea;

use App\Solid\InterfaceSegregation\GoodIdea\Contract\CanSwim;
use App\Solid\InterfaceSegregation\GoodIdea\Contract\HaveFlatBeak;

class DrunkIdiotWithPlascticBeak implements CanSwim, HaveFlatBeak
{
    public function canSwim(): bool
    {
        return false;
    }

    public function haveFlatBeak(): bool
    {
        return true;
    }
}