<?php

namespace App\Http\Controllers;

use App\Models\Transaction_latests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    public function index(Request $request){

        if ($request->path() === "customer/motor") {
            return view('admin.customerMotor');
        }else{
            return view('admin.customerMobil');
        }
    }

    public function store(Request $request)
    {   
        DB::beginTransaction();
        try {
            $transaction_latest = new Transaction_latests;
            $transaction_latest->nopol = $request->nopol;
            $transaction_latest->jenis_kendaraan = $request->kendaraan;
            $transaction_latest->keterangan = "pending";
            $transaction_latest->save();
            DB::commit();
            return view('admin.customerSuccess');
        } catch (\Throwable $th) {
            
            DB::rollBack();
            throw $th;
        }

    }
}
