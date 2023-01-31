<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JournalizingController extends Controller
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
            session()->put('users', $users);

            $month = $request->query('month');
            $year = $request->query('year');
            $filterDate = $request->query('filterDate');
            $isMonth = false;
            $isYear = false;
            if ($filterDate) {
                if ($month) {
                    $isMonth = true;
                }
                if ($year) {
                    $isYear = true;
                }
            }

            $role = DB::table('roles')->where(['userType' => $users[0]['userType']])->get();
            $decodeRole = json_decode($role, true);
            $hasAccessToUsers = false;
            foreach ($decodeRole as $r) {
                if ($r['users'] == 1) {
                    $hasAccessToUsers = true;
                }
            }

            if ($isYear) {
                $queryTrans = DB::table('transactions')->whereRaw("YEAR(DATE(`transactionDate`))=" . date('Y', strtotime($filterDate)))->orderByDesc('transactionDate')->get();
            } else if ($isMonth) {
                $queryTrans = DB::table('transactions')->whereRaw("MONTH(DATE(`transactionDate`))=" . date('m', strtotime($filterDate)))->orderByDesc('transactionDate')->get();
            } else {
                if ($filterDate) {
                    $queryTrans = DB::table('transactions')->whereRaw("transactionDate='" . $filterDate . "'")->orderByDesc('transactionDate')->get();
                } else {
                    $queryTrans = DB::table('transactions')->orderByDesc('transactionDate')->get();
                }
            }

            $transaction = json_decode($queryTrans, true);
            $totalDebit = 0;
            $totalCredit = 0;
            foreach ($transaction as $t) {
                if ($t['category'] == 'Income') {
                    $totalDebit += $t['amount'];
                } else if ($t['category'] == 'Expenses') {
                    $totalCredit += $t['amount'];
                }
            }

            return view('journalizing', [
                'hasAccessUsers' => $hasAccessToUsers,
                'transactions' => $transaction,
                'totalCredit' => $totalCredit,
                'totalDebit' => $totalDebit
            ]);
        } else {
            return redirect("/");
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
        //
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
