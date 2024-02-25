<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    use HasFactory;
    protected $table = 'bills';
    protected $fillable = [
        'BRANCH_NO',
        'CONTRACT_NO',
        'NAME',
        'TYPE_OF_CUSTOMER',
        'P_MONTH',
        'P_YEA',
        'PREV_BILL_AMOUNT',
        'CUR_MON_TOT_BILL'
    ];
}
