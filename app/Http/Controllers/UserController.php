<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        if($request->search)
        {
            $users = User::search($request->search)->get();
        }
        else
        {
            $users = User::get();
        }

        return view('users', compact('users'));
    }
}
