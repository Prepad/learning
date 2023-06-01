<?php
namespace App\Solid\InterfaceSegregation\BadIdea;

use App\Solid\InterfaceSegregation\BadIdea\Contract\LiteralyDuck;

class Platypus implements LiteralyDuck
{
    public function quack(): string
    {
        return 'лмрмлрмлрмлмрмм';
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