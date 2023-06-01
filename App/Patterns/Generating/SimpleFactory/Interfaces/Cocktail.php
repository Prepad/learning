<?php

namespace App\Patterns\Generating\SimpleFactory\Interfaces;

interface Cocktail
{
    function swellsUp(): string;

    function icey(): bool;

    function getComposition(): array;
}