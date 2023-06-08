<?php
namespace App\Patterns\Structural\Facade;

class PlovFacade
{
    protected $plov;

    public function __construct(Plov $plov)
    {
        $this->plov = $plov;
    }

    function letsCooking()
    {
        $this->plov->getDill();
        echo '<br>';
        $this->plov->getCatAss();
        echo '<br>';
        $this->plov->getPotato();
        echo '<br>';
        $this->plov->getBugs();
        echo '<br>';
        $this->plov->getBucketOfWater();
        echo '<br>';
        $this->plov->getDick();
        echo '<br>';
        $this->plov->getPileOfWood();
        echo '<br>';
        echo 'И плов готов!';
    }
}