<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function userManage()
    {
        $users = User::all();
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
