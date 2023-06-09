<?php
namespace App\Patterns\Behavioral\State;

use App\Patterns\Behavioral\State\Interfaces\WritingState;

class UpperCase implements WritingState
{
    public function write(string $words)
    {
        echo strtoupper($words);
    }
}