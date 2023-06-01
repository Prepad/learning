<?php
namespace App\Solid\InterfaceSegregation\BadIdea\Contract;

interface LiteralyDuck
{
    function quack(): string;

    function canSwim(): bool;

    function haveFlatBeak(): bool;
}