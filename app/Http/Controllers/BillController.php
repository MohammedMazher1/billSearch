<?php

namespace App\Http\Controllers;

use App\Imports\BillsImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\Bill;
class BillController extends Controller
{
    public function index()
    {

        return view("bill.search");
    }

    public function upload()
    {

        return view("bill.upload");
    }

    public function search(string $id)
    {
        if ($id == 10) {
            $data = [
                "no" => '1526341',
                'contract_No' => '124',
                'name' => 'محمد مزهر عمر',
                'preAmount' => '15000.00',
                'currAmount' => '15000.00',
                'amount' => '30000.00'
            ];
        } else if ($id == 11) {
            $data = [
                "no" => '1526341',
                'contract_No' => '124',
                'name' => ' إبراهيم غانم ',
                'preAmount' => '15000.00',
                'currAmount' => '15000.00',
                'amount' => '30000.00'
            ];
        }
        return response()->json($data);
    }
    public function store(Request $request)
    {
        try {
            $request->validate([
                'file' => 'required|file|mimes:xlsx',
            ]);
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'صيغة الملف غير صحيحة');
        }

        try {
            Excel::import(new BillsImport, $request->file('file'));
        }catch (\Exception $e) {
            return redirect()->back()->with('error', 'هناك خطاء في التخزين');
        }

        return redirect()->route('dashbord');
    }
}
