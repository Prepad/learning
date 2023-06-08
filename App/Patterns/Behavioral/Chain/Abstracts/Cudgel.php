<?php
namespace App\Patterns\Behavioral\Chain\Abstracts;

use App\Patterns\Behavioral\Chain\Brantozybra;

abstract class Cudgel
{
    protected Cudgel $nextCudgel;
    protected int $damage;

    function setNext(Cudgel $cudgel)
    {
        $this->nextCudgel = $cudgel;
    }

    function knock(Brantozybra $brantozybra)
    {
        if (!$this->canKill($brantozybra)) {
            echo 'Я дубинкою махал <br>';
            $this->nextCudgel->knock($brantozybra);
        } else {
            echo 'Ооооо брантозябра <br>';
        }
    }

    function canKill(Brantozybra $brantozybra): bool
    {
        return $brantozybra->getHp() <= $this->damage;
    }
}