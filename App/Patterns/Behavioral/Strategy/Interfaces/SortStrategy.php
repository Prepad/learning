<?php
namespace App\Patterns\Behavioral\Strategy\Interfaces;

interface SortStrategy
{
    public function sort(array $dataset): array;
}