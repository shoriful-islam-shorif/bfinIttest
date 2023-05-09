<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Models\Customer;

class customerController extends Controller
{
    public function createCustomer(){
        return view('master.createCustomer');
    }

    public function storeCustomer(Request $Request){
        $validated=$Request->validate([
            'Customer_Name'=>'required | max:255',
            'Address'=>'required ',
            'email'=>'required',   
        ]);
        $posts=new Customer;
        $posts->Customer_Name=$Request->Customer_Name;
        $posts->Address=$Request->Address;
        $posts->email=$Request->email;
        $posts->save();
        return redirect()->to('/home')->with('success', 'successfully posted!');
        }

    public function viewCustomer(){
        $CustomerDelelis=Customer::all();
        return view('master.CustomerDetalis',compact('CustomerDelelis'));

    }

    public function editCustomerDetails($id){
       $editCustomer=Customer::find($id);
       return view('master.EditCustomerDetails',compact('editCustomer'));

    }

    public function updateCustomerDetails(Request $Request, $id){
        $update=array(
            'Customer_Name'=> $Request->Customer_Name,
            'Address'=> $Request->Address,
            'email'=> $Request->email,
        );

        $updateCustomer=Customer::where('id',$id)->update($update);
        
        return redirect()->to('/viewCustomer');
    }

    public function DeleteCustomerDetails($id){
        $delete=Customer::where('id',$id)->delete();
        
        return redirect()->to('/viewCustomer');
    }
}
