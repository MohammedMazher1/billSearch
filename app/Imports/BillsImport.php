<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use App\Models\Bill;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class BillsImport implements ToCollection ,WithHeadingRow
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $rows)
    {
        foreach ($rows as $row) 
        {
            Bill::create([
                'BRANCH_NO' => $row['branch_no'],
                'CONTRACT_NO' => $row['contract_no'],
                'NAME' => $row['name'],
                'TYPE_OF_CUSTOMER' => $row['type_of_customer'],
                'P_MONTH' => $row['p_month'],
                'P_YEA' => $row['p_year'],
                'PREV_BILL_AMOUNT' => $row['prev_bill_amount'],
                'CUR_MON_TOT_BILL' => $row['cur_mon_tot_bill'],
            ]);
        }
    }
}
