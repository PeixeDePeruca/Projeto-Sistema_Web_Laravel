<?php

namespace App\Policies;

use App\Models\Quarto;
use App\Models\User;

class QuartoPolicy
{
    public function delete(User $user, Quarto $quarto): bool
    {
        return $user->role === 'admin';
    }

    public function update(User $user, Quarto $quarto): bool
    {
        return in_array($user->role, ['admin', 'funcionario']);
    }
}