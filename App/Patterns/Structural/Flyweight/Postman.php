<?php
namespace App\Patterns\Structural\Flyweight;

use App\Patterns\Structural\Flyweight\Package;

class Postman
{
    protected $packages;

    function make(string $content, string $address)
    {
       return $this->packages[$address][] = new Package($content);

    }

    function getPackages(): array
    {
        return $this->packages;
    }
}