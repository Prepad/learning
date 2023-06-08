<?php
namespace App\Patterns\Behavioral\Mediator\Interfaces;

use App\Patterns\Behavioral\Mediator\User;

interface ChatRoomMediator
{
    public function showMessage(User $user, string $message);
}