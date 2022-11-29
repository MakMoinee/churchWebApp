<?php

namespace App\Http\Controllers;

use App\Models\ChurchUsers;
use App\Models\Roles;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (session()->exists('users')) {
            $users = session()->pull('users');
            // $data = $users[0];

            // $newUsers = ChurchUsers::all();

            // $count = count($newUsers);

            session()->put('users', $users);
            $queryResult = DB::table('vwuserswithroles')->get();
            $result = json_decode($queryResult, true);
            $roles = [];
            foreach ($result as $r) {
                array_push($roles, $r);
            }

            $userTypes = Roles::all();

            $role = DB::table('roles')->where(['userType' => $users[0]['userType']])->get();
            $decodeRole = json_decode($role, true);
            $hasAccessToUsers = false;
            foreach ($decodeRole as $r) {
                if ($r['users'] == 1) {
                    $hasAccessToUsers = true;
                }
            }

            return view('users', ['roles' => $roles, 'userTypes' => $userTypes, 'hasAccess' => $hasAccessToUsers]);
        } else {
            return redirect('/');
        }
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
        if (session()->exists('users')) {
            $user = session()->pull('users');
            session()->put('users', $user);
            $newUser = new ChurchUsers();
            $newUser->username = $request->username;
            $newUser->password = Hash::make($request->password);
            $newUser->userType = $request->utype;
            $isSave = $newUser->save();
            if ($isSave) {
                session()->put('successAddUser', true);
            } else {
                session()->put('errorAddUser', true);
            }
            return redirect('/users');
        } else {
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
