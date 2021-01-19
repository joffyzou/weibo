<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    // 更新策略，当前登录用户ID时候等于要更新用户ID
    public function update(User $currentUser, User $user)
    {
        return $currentUser->id === $user->id;
    }

    // 删除策略，当前用户时候为管理员，并且当前登录ID不能等于被删除用户id
    public function destroy(User $currentUser, User $user)
    {
        return $currentUser->is_admin && $currentUser->id !== $user->id;
    }

    public function follow(User $currentUser, User $user)
    {
        return $currentUser->id !== $user->id;
    }
}
