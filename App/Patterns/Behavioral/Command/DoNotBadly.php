<?php
namespace App\Patterns\Behavioral\Command;

use App\Patterns\Behavioral\Command\Interfaces\Command;
use App\Patterns\Behavioral\Command\Programmer;

class DoNotBadly implements Command
{
    protected Programmer $programmer;

    public function __construct(Programmer $programmer)
    {
        $this->programmer = $programmer;
    }

    public function execute()
    {
        $this->programmer->doNotBadly();
    }

    public function undo()
    {
        $this->programmer->doWell();
    }

    public function redo()
    {
        $this->programmer->doNotBadly();
    }
}