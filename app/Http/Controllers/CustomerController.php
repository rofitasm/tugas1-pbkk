<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    public function show()
    {
        $customer = DB::table('sales.customers')
        ->where('customer_id', '<=',  480)
        ->where('customer_id', '>',  460)
        ->get();
        
        return view('welcome', ['customer' => $customer]);   
    }
}
