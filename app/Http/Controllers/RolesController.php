<?php

namespace App\Http\Controllers;

use App\Models\ChurchUsers;
use App\Models\Roles;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RolesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if (session()->exists('users')) {
            $users = session()->pull('users');
            $data = $users[0];
            $roles = Roles::all();
            session()->put('users', $users);

            return view('roles', ['roles' => $roles]);
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
            $users = session()->pull('users');
            session()->put('users', $users);

            $chats = $request->checkchat == true;
            $cusers = $request->checkusers == true;
            $inputs = $request->checkinput == true;

            $newRole = new Roles();
            $newRole->description = $request->roledesc;
            $newRole->inputs = $inputs == true ? 1 : 0;
            $newRole->chats = $chats == true ? 1 : 0;
            $newRole->users = $cusers == true ? 1 : 0;
            $isSave = $newRole->save();

            if ($isSave) {
                session()->put('successAddRole', true);
            } else {
                session()->put('errorAddRole', true);
            }
            return redirect('/roles');
        } else {
            return redirect('/');
        } //
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
        if (session()->exists('users')) {
            $users = session()->pull('users');
            session()->put('users', $users);

            $chats = $request->checkchat == true;
            $cusers = $request->checkusers == true;
            $inputs = $request->checkinput == true;

            $affectedRows = DB::table('roles')->where(['userType' => $id])
                ->update([
                    'description' => $request->roledesc,
                    'inputs' => $inputs == true ? 1 : 0,
                    'users' => $cusers == true ? 1 : 0,
                    'chats' => $chats == true ? 1 : 0,
                ]);

            if ($affectedRows > 0) {
                session()->put('successUpdateRole', true);
            } else {
                session()->put('errorUpdateRole', true);
            }

            return redirect('/roles');
        } else {
            return redirect('/');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (session()->exists('users')) {
            $users = session()->pull('users');
            session()->put('users', $users);

            $affectedRows = DB::table('roles')->where(['userType' => $id])->delete();
            if ($affectedRows > 0) {
                session()->put('successDeleteRole', true);
            } else {
                session()->put('errorDeleteRole', true);
            }
            return redirect('/roles');
        } else {
            return redirect('/');
        }
    }
}
