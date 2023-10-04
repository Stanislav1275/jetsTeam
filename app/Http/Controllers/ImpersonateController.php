<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ImpersonateController extends Controller
{
    public function impersonate($user_id)
    {
        $user = User::where('id', +$user_id)->first();
        if (!empty($user)) {

                session()->put('impersonate', $user->id);
                return redirect('/')->with('success', 'You are now impersonating ' . $user->name);
        }

        return redirect("/")->with('error', 'User not found');
    }

    public function stopImpersonating()
    {
        session()->forget('impersonate');
        return redirect('/')->with('success', 'You have stopped impersonating');
    }
}
