<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IncomeStatementController extends Controller
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


            $role = DB::table('roles')->where(['userType' => $users[0]['userType']])->get();
            $decodeRole = json_decode($role, true);
            $hasAccessToUsers = false;
            foreach ($decodeRole as $r) {
                if ($r['users'] == 1) {
                    $hasAccessToUsers = true;
                }
            }

            $year = $request->query('year');
            if ($year) {
                $queryTrans = DB::table('transactions')->whereRaw("YEAR(DATE(`transactionDate`))=" . $year . "")->orderByDesc('transactionDate')->get();
            } else {
                $queryTrans = DB::table('transactions')->whereRaw("YEAR(DATE(`transactionDate`))=YEAR(DATE(NOW()))")->orderByDesc('transactionDate')->get();
            }

            $trans = json_decode($queryTrans, true);

            $totalRevenue = 0;
            $totalExpenses = 0;
            $totalOperatingExpense = 0;
            $utilityExpense = 0;
            $supplyExpense = 0;
            $pettyCash = 0;
            foreach ($trans as $t) {
                if (str_contains($t['description'], 'Utility Expense')) {
                    $utilityExpense += $t['amount'];
                    continue;
                }
                if (str_contains($t['description'], 'Supply') || str_contains($t['description'], 'Supplies')) {
                    $supplyExpense += $t['amount'];
                    continue;
                }
                if (str_contains($t['description'], 'Petty Cash')) {
                    $pettyCash += $t['amount'];
                    continue;
                }
                if ($t['category'] == 'Expenses') {
                    $totalExpenses += $t['amount'];
                }
                if ($t['category'] == 'Income') {
                    $totalRevenue += $t['amount'];
                }
            }

           
            $totalOperatingExpense = $supplyExpense + $utilityExpense + $pettyCash + $totalExpenses;
            $netIncome = $totalRevenue - $totalOperatingExpense;


            return view('incomstatement', [
                'hasAccessUsers' => $hasAccessToUsers,
                'netIncome' => $netIncome,
                'gross' => $totalRevenue,
                'pettyCash' => $pettyCash,
                'utilityExpense' => $utilityExpense,
                'supplyExpense' => $supplyExpense,
                'totalOperatingExpense' => $totalOperatingExpense,
                'otherExpense' => $totalExpenses
            ]);
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
