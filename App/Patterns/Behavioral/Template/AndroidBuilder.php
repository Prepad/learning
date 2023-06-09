<?php
namespace App\Patterns\Behavioral\Template;

use App\Patterns\Behavioral\Template\Builder;

class AndroidBuilder extends Builder
{
    public function test()
    {
        echo 'Запуск Android тестов';
    }

    public function lint()
    {
        echo 'Копирование Android кода';
    }

    public function assemble()
    {
        echo 'Android сборка';
    }

    public function deploy()
    {
        echo 'Развертывание сборки на сервере';
    }
}