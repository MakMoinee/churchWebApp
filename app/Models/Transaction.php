<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $table = 'transactions';
    protected $id = 'transactionID';


    protected $fillable = [
        'description',
        'category',
        'amount',
        'transactionDate'
    ];
}
