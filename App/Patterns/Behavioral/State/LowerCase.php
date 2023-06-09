<?php
namespace App\Patterns\Behavioral\State;

use App\Patterns\Behavioral\State\Interfaces\WritingState;

class LowerCase implements WritingState
{
    public function write(string $words)
    {
        echo strtolower($words);
    }
}