<?php
namespace App\Solid\OpenClosed\GoodIdea;

use App\Solid\OpenClosed\GoodIdea\Interfaces\TakeAdvantage;

class EatFish implements TakeAdvantage
{
    public function doTheTrick(): string
    {
        return 'Съесть рыбку';
    }
}