<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Billseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('bills')->insert([
            'BRANCH_NO' => 11111,
            'CONTRACT_NO' => 111225,
            'NAME' => '25355',
            'TYPE_OF_CUSTOMER' => '1524',
            'P_MONTH' => '1244',
            'P_YEA' => '22241',
            'PREV_BILL_AMOUNT' => '5552',
            'CUR_MON_TOT_BILL' => '1524',
        ]);
    }
}
