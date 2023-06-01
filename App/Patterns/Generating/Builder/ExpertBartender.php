<?php
namespace App\Patterns\Generating\Builder;

class ExpertBartender
{
    public array $composition = [];
    public bool $ice = false;

    public function makeTart()
    {
        $this->composition[] = 'виски';
        return $this;
    }

    public function makeSweet()
    {
        $this->composition[] = 'сахарный сироп';
        return $this;
    }

    public function makeFresh()
    {
        $this->composition[] = 'сок';
        return $this;
    }

    public function makeSour()
    {
        $this->composition[] = 'лимон';
        return $this;
    }

    
    public function addIce()
    {
        $this->ice = true;
        return $this;
    }

    public function makeCocktail(): DesignerCocktail
    {
        return new DesignerCocktail($this);
    }
}