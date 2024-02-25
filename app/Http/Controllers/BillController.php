<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BillController extends Controller
{
    public function index(){

        return view("bill.search");
    }

    public function upload(){

        return view("bill.upload");
    }

    public function search(string $id){
        if($id == 10){
            $data = [
                "no"=> '1526341',
                'contract_No'=>'124',
                'name'=>'محمد مزهر عمر',
                'preAmount'=>'15000.00',
                'currAmount'=> '15000.00', 
                'amount'=>'30000.00' 
            ];
        }else if($id  == 11){
            $data = [
                "no"=> '1526341',
                'contract_No'=>'124',
                'name'=>' إبراهيم غانم ',
                'preAmount'=>'15000.00',
                'currAmount'=> '15000.00', 
                'amount'=>'30000.00' 
            ];
        }
        return response()->json($data);    
    }
}
