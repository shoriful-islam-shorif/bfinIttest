<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Models\product;


class productController extends Controller
{
    public function createProduct(){
        return view('product.product');
    }

    public  function storeProduct(Request $Request){
        $validated=$Request->validate([
            'Product_Name'=>'required | max:255',
            'Category'=>'required ',
            'description'=>'required',
           
            
        ]);
        $posts=new product;
        $posts->Product_Name=$Request->Product_Name;
        $posts->Category=$Request->Category;
        $posts->description=$Request->description;

        $posts->save();
        return redirect()->to('/viewproduct');
        }

    public function viewProduct()
    {
        $productDelelis = product::all();
        return view('product.showProduct', compact('productDelelis'));
    }

    public function editProductDetails($id)
    {
        $editproduct = product::find($id);
        return view('product.editProduct', compact('editproduct'));
    }

    public function updateProduct(Request $Request, $id)
    {
        $update = array(
            'Product_Name' => $Request->Product_Name,
            'Category' => $Request->Category,
            'description' => $Request->description,
        );

        $updateProduct = product::where('id', $id)->update($update);

        return redirect()->to('/viewproduct');
    }
    public function DeleteProduct($id)
    {
        $delete = product::where('id', $id)->delete();

        return redirect()->to('/viewproduct');
    }
}

