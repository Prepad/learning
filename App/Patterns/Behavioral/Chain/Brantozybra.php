<?php
namespace App\Patterns\Behavioral\Chain;

class Brantozybra
{
    protected int $hp;

    public function __construct(int $hp)
    {
        $this->hp = $hp;
    }

    function getHp(): int
    {
        return $this->hp;
    }
}