<?php

namespace App\Http\Controllers;

use App\Models\ChurchUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        if (session()->exists('users')) {
            $user = session()->pull('users');
            session()->put('users', $user);
            $count = count($user);
            $role = DB::table('roles')->where(['userType' => $user[0]['userType']])->get();
            $decodeRole = json_decode($role, true);
            $hasAccessToUsers = false;
            foreach ($decodeRole as $r) {
                if ($r['users'] == 1) {
                    $hasAccessToUsers = true;
                }
            }
            return view('dashboard', ['users' => $user, 'totalUsers' => $count, 'hasAccessUsers' => $hasAccessToUsers]);
        }
        return redirect('/');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $un = $request->username;
        $pw = $request->password;

        if ($un != "" && $pw != "") {
            $queryResult = ChurchUsers::where([['username', '=', $un]])->get();
            $users =  json_decode($queryResult, true);
            $user = [];
            $newUsers = ChurchUsers::all();

            $count = count($newUsers);
            foreach ($users as $u) {
                if (password_verify($pw, $u['password'])) {
                    array_push($user, $u);
                    break;
                }
            }

            if (count($user) == 0) {
                session()->put('errorUserNotFound', true);
                return view('welcome');
            } else {
                session()->put('users', $user);
                session()->put('successLogin', true);
                $role = DB::table('roles')->where(['userType' => $user[0]['userType']])->get();
                $decodeRole = json_decode($role, true);
                $hasAccessToUsers = false;
                foreach ($decodeRole as $r) {
                    if ($r['users'] == 1) {
                        $hasAccessToUsers = true;
                    }
                }
                return view('dashboard', ['users' => $user, 'totalUsers' => $count, 'hasAccessUsers' => $hasAccessToUsers]);
            }
        } else {
            Session::flush();
            return redirect('/');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
