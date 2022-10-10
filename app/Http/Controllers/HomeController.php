<?php

namespace App\Http\Controllers;

use App\Models\ChurchUsers;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index()
    {
        if (session()->exists('users')) {
            $users = session()->pull('users');
            $data = $users[0];

            $newUsers = ChurchUsers::all();

            $count = count($newUsers);

            session()->put('users', $users);
            return view('dashboard', ['users' => $data, 'totalUsers' => $count]);
        } else {
            session()->flush();
            return view('welcome');
        }
    }
}
