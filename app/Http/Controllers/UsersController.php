<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User; // add

class UsersController extends Controller
{
    public function index()
    {
        $users = User::paginate(10); //書き換えたよリナ
        
        return view('users.index', [
            'users' => $users,
        ]);
    }
    
    public function show($id) //追加りな
    {
        $user = User::find($id);

        return view('users.show', [
            'user' => $user,
        ]);
    }
}
