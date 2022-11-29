<?php

namespace App\Http\Controllers;

use App\Models\ChurchUsers;
use App\Models\Roles;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    function index()
    {
        if (session()->exists('users')) {
            $users = session()->pull('users');
            $data = $users[0];
            session()->put('users', $users);
            $newUsers = ChurchUsers::all();

            $count = count($newUsers);

            $role = DB::table('roles')->where(['userType' => $users[0]['userType']])->get();
            $decodeRole = json_decode($role, true);
            $hasAccessToUsers = false;
            foreach ($decodeRole as $r) {
                if ($r['users'] == 1) {
                    $hasAccessToUsers = true;
                }
            }

            
            return view('dashboard', ['users' => $data, 'totalUsers' => $count, 'hasAccessUsers' => $hasAccessToUsers]);
        } else {
            session()->flush();
            $queryResult = DB::table('church_users')->where(['userType' => '1'])->get();
            if (count($queryResult) == 0) {
                $newUser = new ChurchUsers();
                $newUser->username = env('ADMIN_USER', 'admin');
                $newUser->password = Hash::make(env('ADMIN_PASSWORD', 'admin123'));
                $newUser->userType = 1;
                $newUser->save();

                $queryResult2 = DB::table('roles')->where(['userType' => '1'])->get();
                if (count($queryResult2) == 0) {
                    $newRole = new Roles();
                    $newRole->description = 'Administrator';
                    $newRole->users = 1;
                    $newRole->inputs = 1;
                    $newRole->chats = 1;
                    $newRole->save();
                }
            }
            return view('welcome');
        }
    }
}
