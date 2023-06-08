<?php
namespace App\Patterns\Behavioral\Chain;

use App\Patterns\Behavioral\Chain\Abstracts\Cudgel;

class NormalCudgel extends Cudgel
{
    protected int $damage;

    public function __construct(int $damage)
    {
        $this->damage = $damage;
    }
}