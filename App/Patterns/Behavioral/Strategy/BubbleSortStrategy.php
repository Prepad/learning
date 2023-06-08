<?php
namespace App\Patterns\Behavioral\Strategy;

use App\Patterns\Behavioral\Strategy\Interfaces\SortStrategy;

class BubbleSortStrategy implements SortStrategy
{
    public function sort(array $dataset): array
    {
        echo "Сортировка пузырьком";

        return $dataset;
    }
}