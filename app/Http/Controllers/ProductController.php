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
       $items=Product::select('id', 'name','image','description','price')->get()->sortBy($sort);
        return view ('product.catalog', ['items'=>$items,'sortby'=>$sort]);
   }

    public function create()
    {
        return view('product/add-product');
    }

    public function store(Request $request)
    {
//        $request->validate(['name'=>'required','price'=>'required|integer|gt:0']);
        $newitem = Product::create($request->all());

//        $newitem->name=$request->input('name');
//        $newitem->save();
//        $lastid=DB::getPdo()->lastInsertId();

        return view ('product.confirm-save-product', ['item'=>$newitem]);
    }


   public function show(Product $productId)
   {
//       $item=DB::select('SELECT * FROM products WHERE id=:id', ['id'=>$productId]);
//       $item=Product::where('id',$productId)->first();
       return view ('product.product', ['item'=>$productId]);
   }

    public function edit(Product $productId)
    {
        return view('product.edit-product',['item'=>$productId]);
    }

    public function update(Product $productId, Request $request)
    {
        $productId->update($request->all());
        return view('product.confirm-edit-product',['item'=>$productId]);
    }

    public function delete(Product $productId)
    {
        $productId->delete();
        return view('product.confirm-delete-product',['id'=>$productId->id]);
    }

}
