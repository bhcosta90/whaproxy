<?php

declare(strict_types=1);

namespace App\Policies;

use App\Models\Instance;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class InstancePolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user): bool
    {

    }

    public function view(User $user, Instance $plan): bool
    {
    }

    public function create(User $user): bool
    {
    }

    public function update(User $user, Instance $plan): bool
    {
    }

    public function delete(User $user, Instance $plan): bool
    {
    }

    public function restore(User $user, Instance $plan): bool
    {
    }

    public function forceDelete(User $user, Instance $plan): bool
    {
    }
}
