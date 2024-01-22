<?php

namespace App\Policies;

use App\Models\User;

class OfferPolicy
{
    /**
     * Create a new policy instance.
     */
    public function Create(User $user)
    {
        return $user->role === 'user';
    }
}
