<?php
namespace App\Patterns\Behavioral\Strategy;

use App\Patterns\Behavioral\Strategy\Interfaces\SortStrategy;

class Sorter
{
    protected $sorter;

    public function __construct(SortStrategy $sorter)
    {
        $this->sorter = $sorter;
    }

    public function sort(array $dataset): array
    {
        return $this->sorter->sort($dataset);
    }
}