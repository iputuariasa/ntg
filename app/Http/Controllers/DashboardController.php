<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $role = auth()->user()->role;

        if ($role == 'user') {
            return view('users.index');
        } else {
            return view('index');  // or other role views
        }
    }
}
