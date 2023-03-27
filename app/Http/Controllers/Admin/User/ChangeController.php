<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Models\User;

class ChangeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(User $user)
    {
        if($user->role === 'user') {
            $user->update(['role' => 'admin',]);
        } else {
            $user->update(['role' => 'user',]);
        }

        return redirect()->route('admin.users.index');
    }
}
