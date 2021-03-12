<?php

namespace App\Policies;

use App\Models\{User,Pengumuman};
use Illuminate\Auth\Access\HandlesAuthorization;

class PengumumanPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    public function update(User $user, Pengumuman $pengumuman)
    {
        return $user->id == $pengumuman->user_id;
    }

    public function delete(User $user, Pengumuman $pengumuman)
    {
        return $user->id == $pengumuman->user_id;         
    }
}
