<?php
namespace App\Solid\OpenClosed\BadIdea;

class TrickyClass
{
    public function takeAdvantage()
    {
        echo 'рыбку съесть';
        //Затем допустим у нас появляется необходимость
        //чтобы этот метод реализовывал ещё что нибудь
        echo ' и на хуй сесть';
        //А это уже модификация, а это нам не надо
    }
}