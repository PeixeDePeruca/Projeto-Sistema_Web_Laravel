<?php

namespace App\Policies;

use App\Models\Hospede;
use App\Models\User;

class HospedePolicy
{
    public function delete(User $user, Hospede $hospede): bool
    {
        return $user->role === 'admin';
    }

    public function update(User $user, Hospede $hospede): bool
    {
        return in_array($user->role, ['admin', 'funcionario']);
    }
}