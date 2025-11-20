<?php

namespace App\Policies;

use App\Models\MenuImage;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class MenuImagePolicy
{
    public function viewAny(User $user): bool
    {
        return false;
    }

    public function view(User $user, MenuImage $image): bool
    {
        return false;
    }

    public function create(User $user): bool
    {
        return Auth::check();
    }

    public function update(User $user, MenuImage $image): bool
    {
        return Auth::check();
    }

    public function delete(User $user, MenuImage $image): bool
    {
        return Auth::check();
    }

    public function restore(User $user, MenuImage $image): bool
    {
        return false;
    }

    public function forceDelete(User $user, MenuImage $image): bool
    {
        return false;
    }
}
