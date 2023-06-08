<?php
namespace App\Patterns\Structural\Flyweight;

class Package
{
    protected string $content;

    public function __construct(string $content)
    {
        $this->content = $content;
    }

    function unpack(): string
    {
        return $this->content;
    }
}