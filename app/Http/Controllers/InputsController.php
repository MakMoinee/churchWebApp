<?php

namespace App\Http\Controllers;

use App\Models\Roles;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InputsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (session()->exists('users')) {
            $user = session()->pull('users');
            session()->put('users', $user);

            $userTypes = Roles::all();
            $transactions = Transaction::paginate(5);
            return view('inputs', ['users' => $user, 'userTypes' => $userTypes, 'transactions' => $transactions]);
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
        if (session()->exists('users')) {
            $user = session()->pull('users');
            session()->put('users', $user);

            $queryAvail = DB::table('transactions')->orderByDesc('transactionDate')->get();
            $tmpAvail = json_decode($queryAvail, true);
            $totalAvail = 0;
            foreach ($tmpAvail as $t) {
                if ($t['category'] == 'Income') {
                    $totalAvail += $t['amount'];
                }
            }

            $userTypes = Roles::all();
            if ($request['btnAdd']) {
                $amount = $request->amount;
                if ($amount <= $totalAvail) {
                    $trans = new Transaction();
                    $trans->description = $request->description;
                    $trans->category = $request->category;
                    $trans->amount = $request->amount;
                    $trans->transactionDate = date('Y-m-d', strtotime($request->transdate));
                    $affectedRows = $trans->save();
                    if ($affectedRows > 0) {
                        session()->put('successAddInput', true);
                    } else {
                        session()->put('errorAddInput', true);
                    }
                } else {
                    session()->put('errorExceedAvail', true);
                }
            } else {
                session()->put('errorAddInput', true);
            }

            return redirect('/inputs');
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
        if (session()->exists('users')) {
            $user = session()->pull('users');
            session()->put('users', $user);

            if ($request['btnUpdate']) {

                $queryResult = DB::table('transactions')->where([['transactionID', '=', $id]])->get();
                if (count($queryResult) == 0) {
                    session()->put('errorNonExisting', true);
                    return redirect("/inputs");
                }

                $affectedRows = DB::table('transactions')->where([['transactionID', '=', $id]])->update([
                    "description" => $request->description,
                    "category" => $request->category,
                    "amount" => $request->amount,
                    "transactionDate" => date('Y-m-d', strtotime($request->transdate))
                ]);

                if ($affectedRows > 0) {
                    session()->put('successUpdateInput', true);
                } else {
                    session()->put('errorUpdateInput', true);
                }
            } else {
                session()->put('errorUpdateInput', true);
            }
            return redirect("/inputs");
        } else {
            return redirect("/");
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
        //
    }
}
