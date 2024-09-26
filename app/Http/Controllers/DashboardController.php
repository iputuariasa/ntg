<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $role = auth()->user()->role;

        if ($role == 'user') {
            return view('users.index');
        } 
        elseif ($role == 'cs'){
            return view('cs.index');
        }
        else {
            return view('index',[
                'users' => User::all()
            ]);  // or other role views
        }
    }
}
