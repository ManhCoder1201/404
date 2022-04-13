<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Supplier;
use App\Models\category;
use Illuminate\Http\Request;

class FontendController extends Controller
{
    public function index(){
        $product = product::where('categoryID',1)->get();
        $supplier = supplier::all();
        $category = category::all();
        return view('index',compact('product'));
    }
    
}
