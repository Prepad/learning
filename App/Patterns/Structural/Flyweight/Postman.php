<?php
namespace App\Patterns\Structural\Flyweight;

use App\Patterns\Structural\Flyweight\Package;

class Postman
{
    protected $packages;

    function make(string $content)
    {
       return $this->packages[] = new Package($content);

    }
}