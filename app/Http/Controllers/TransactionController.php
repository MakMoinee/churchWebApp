<?php

namespace App\Http\Controllers;

use App\Models\Roles;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TransactionController extends Controller
{
    public function deleteTrans(Request $request)
    {
        if (session()->exists('users')) {
            $user = session()->pull('users');
            session()->put('users', $user);
            if ($request['btnDelete']) {
                $affectedRow = DB::table('transactions')->where('transactionID', '=', $request->btnDelete)->delete();
                if ($affectedRow) {
                    session()->put('successDeleteTrans', true);
                } else {
                    session()->put('errorDeleteTrans', true);
                }
            } else {
                session()->put('errorDeleteTrans', true);
            }
            return redirect('/inputs');
        }
        return redirect('/');
    }
}
