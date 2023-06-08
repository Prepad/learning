<?php
namespace App\Patterns\Behavioral\Command\Interfaces;

interface Command
{
    function execute();
    function undo();
    function redo();
}