<?php
namespace App\Patterns\Behavioral\State\Interfaces;

interface WritingState
{
    public function write(string $words);
}