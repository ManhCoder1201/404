<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\user;
use App\Models\Product;
use App\Models\Supplier;
use App\Models\category;
use Illuminate\Support\Facades\Auth;
class ProductController extends Controller
{
    public function viewProduct(){
        $supplier=supplier::all();
        $category=category::all();
        $product=product::all();
        return view('admin.Product',compact('supplier','category','product'));
        
    }
    public function createProduct(Request $request){
        if($request->has('productImage')){
            $productImage = $request->productImage;
            //lay ten file
            $file_name= $productImage->getClientOriginalName();
            //upload file
            $productImage->move(base_path('images'),$file_name);
        }
        Product::create([
            'productName'=>$request->productName,
            'productDescription'=>$request->productDescription,
            'productPrice'=>$request->productPrice,
            'productPrice'=>$request->productPrice,
            'productImage'=>$file_name,
            'sipplierID'=>$request->sipplierID,
            'categoryID'=>$request->categoryID,
        ]);
    }
}
