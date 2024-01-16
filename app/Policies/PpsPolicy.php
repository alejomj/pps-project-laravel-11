<?php

namespace App\Policies;

use App\Models\Pps;
use App\Models\User;

class PpsPolicy
{

    public function update(User $user, Pps $pps): bool
    {
        return $user->is($pps->user);
    }

    public function delete(User $user, Pps $pps): bool
    {
        return $user->is($pps->user);
    }
}
