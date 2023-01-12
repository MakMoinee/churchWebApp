<?php

namespace App\Http\Controllers;

use App\Models\ChurchUsers;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReportsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if (session()->exists('users')) {
            $user = session()->pull('users');
            $data = $user[0];
            session()->put('users', $user);
            $newUsers = ChurchUsers::all();

            $count = count($newUsers);

            $role = DB::table('roles')->where(['userType' => $user[0]['userType']])->get();
            $decodeRole = json_decode($role, true);
            $hasAccessToUsers = false;
            foreach ($decodeRole as $r) {
                if ($r['users'] == 1) {
                    $hasAccessToUsers = true;
                }
            }
            $transDate = $request->query('transdate');
            $trans = Transaction::all();
            $nMonth = array();
            $total = 0;
            $income = 0;
            $expense = 0;
            foreach ($trans as $t) {
                $year = date('Y', strtotime($t['created_at']));

                if ($transDate != "") {
                    $desiredYear = date('Y', strtotime($transDate));
                    if ($year != $desiredYear) {
                        continue;
                    }
                } else {
                    $currentYear = date('Y', strtotime(now()));
                    if ($year != $currentYear) {
                        continue;
                    }
                }


                $total += (int)$t['amount'];

                if ($t['category'] == "Income") {
                    $income += $t['amount'];
                }

                if ($t['category'] == "Expenses") {
                    $expense += $t['amount'];
                }

                $month = date('m', strtotime($t['created_at']));
                if (array_key_exists($month, $nMonth)) {
                    $nMonth[(int)$month] += 1;
                } else {
                    $nMonth[(int)$month] = 1;
                }
            }

            for ($ii = 0; $ii < 12; $ii++) {
                if (array_key_exists($ii + 1, $nMonth)) {
                    continue;
                } else {
                    $nMonth[$ii + 1] = 0;
                }
            }

            return view('reports', [
                'users' => $data,
                'totalUsers' => $count,
                'hasAccessUsers' => $hasAccessToUsers,
                'monthArr' => count($nMonth) == 0 ? [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0] : $nMonth,
                'total' => $total,
                'income' => $income,
                'expense' => $expense,
                'incomePercent' => $total == 0 || $income == 0 ? 0 : $income / $total * 100,
                'expensePercent' => $total == 0 || $expense == 0 ? 0 : $expense / $total * 100,
                'transDate' => $transDate
            ]);
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
