<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function userManage()
    {
        // Fetch only users with the user_type 'user'
        $users = User::where('user_type', 'user')->get();
        return view('userManage', ['users' => $users]);
    }

    public function deleteUser($id)
    {
        $user = User::find($id);

        if (!$user) {
            return redirect()->route('userManage')->with('error', 'User not found');
        }

        $user->delete();

        return redirect()->route('userManage')->with('success', 'User deleted successfully');
    }
}

