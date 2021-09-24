<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Invoice;

class InvoiceController extends Controller
{
    function show(){
            $invoices = Invoice::all();
            //return dd($invoices);
            return view('invoice.list',compact('invoices'));//'invoices' => $invoices]

    }
}
