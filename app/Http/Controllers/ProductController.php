<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
   public function index()
   {
       $items=DB::select('SELECT * FROM produit', [1]);
//       dd($items);
        return view ('product.catalog', ['items'=>$items]);
   }

   public function show($productId)
   {
//       $item=DB::table('produit')->where('idProduit',16)->first();
       $productId=htmlspecialchars($productId);
       $item=DB::select('SELECT * FROM produit WHERE idProduit=:id', ['id'=>$productId]);
//       dd($item[0]);
       return view ('product.product', [
           'item'=>$item[0]
       ]);
   }
}
