<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\product;
use App\Models\Invoice;
use App\Models\User;

class invoiceController extends Controller
{
    public function createInvoice(){
        $cusInvoices=Customer::all();
        $proInvoices=Product::all();
        $invoices=Invoice::all();
        return view ('invoice.createInvoiceTable',compact('cusInvoices','proInvoices','invoices'));
    }

    public function storeInvoice(Request $Request ){
        $validated=$Request->validate([
            
            'unite_price'=>'',
            'quantity'=>'',
            'item_code'=>'',
            'Currency'=>'',
            'discount'=>'',
           
            'delevary_time'=>'',
            
           
            
        ]);
        $invoices=new invoice();
        $invoices->Customer_id=$Request->Customer;

        $invoices->unite_price=$Request->unite_price;
        $invoices->quantity=$Request->quantity;
        $invoices->item_code=$Request->item_code;
        $invoices->Currency=$Request->Currency;
        $invoices->discount= $Request->discount;

        $total = ($Request->quantity * $Request->unite_price) * $Request->Currency;
        
        $per_price=($total * $Request->discount)/100;
        $invoices->total_price=  $total - $per_price;
        $invoices->delevary_time= $Request->delevary_time;
        $invoices->Product_id=$Request->item_description;
     
        $invoices->save();
        return redirect()->to('/home')->with('success', 'successfully posted!');
        
    }

    public function viewIncoiceTable(){
        $invoicesView=Invoice::join('customers','invoices.Customer_id','Customer_id')->get();
        return view('invoice.viewInvoiceTable',compact('invoicesView'));
    }
}
