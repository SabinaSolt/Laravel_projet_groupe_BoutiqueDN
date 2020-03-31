<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
   public function index(Request $request)
   {
       $sort = $request->input('sort', 'name');

//       $items=DB::select('SELECT * FROM products');
       $items=Product::select('id', 'name','image','description','price')->get()->sortBy($sort);
        return view ('product.catalog', ['items'=>$items,'sortby'=>$sort]);
   }



   public function show($productId)
   {
       $productId=intval($productId);

//       $item=DB::select('SELECT * FROM products WHERE id=:id', ['id'=>$productId]);
       $item=Product::where('id',$productId)->firstOrFail();
//       dd($item[0]);
       return view ('product.product', ['item'=>$item]);
   }
}
