<?php
namespace App\Patterns\Behavioral\Strategy;

use App\Patterns\Behavioral\Strategy\Interfaces\SortStrategy;

class QuickSortStrategy implements SortStrategy
{
    public function sort(array $dataset): array
    {
        echo "Быстрая сортировка";

        // Сортировка
        return $dataset;
    }
}