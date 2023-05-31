<?php
namespace App\Oop\Inheritance;

abstract class Tree
{
    protected $trunk = 'деревянный цилиндр с корой';
    protected $leaves = 'зелёные штуки для фотосинтеза';

    protected function getTrunk()
    {
        echo $this->trunk . '<br>';
    }

    protected function getLeaves()
    {
        echo $this->leaves . '<br>';
    }

    public function grow()
    {
        $this->getTrunk();
        $this->getLeaves();
    }

    abstract public function winterCome();
}