<?php
namespace App\Patterns\Behavioral\State;

use App\Patterns\Behavioral\State\Interfaces\WritingState;

class DefaultCase implements WritingState
{
    public function write(string $words)
{
    echo $words;
}
}