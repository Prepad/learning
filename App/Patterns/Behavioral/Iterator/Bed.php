<?php
namespace App\Patterns\Behavioral\Iterator;

class Bed
{
    protected int $softness;

    public function __construct(int $softness) {
        $this->softness = $softness;
    }

    function getSoftness(): int
    {
        return $this->softness;
    }
}