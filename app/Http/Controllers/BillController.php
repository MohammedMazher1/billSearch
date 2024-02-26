<?php

namespace App\Http\Controllers;

use App\Imports\BillsImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\Bill;
use Illuminate\Support\Facades\DB;
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
        $bill = Bill::where("CONTRACT_NO", $id)->first();
        if (!$bill){
            return response()->json([
                "status"=> "false",
                "message"=> "لا توجد فاتورة "
            ]);
        }

        return response()->json($bill);
    }
    public function store(Request $request)
    {
        Bill::truncate();
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
