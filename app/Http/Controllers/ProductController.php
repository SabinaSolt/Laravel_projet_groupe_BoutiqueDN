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

    public function create()
    {
        return view('product/add-product');
    }

    public function store(Request $request)
    {
        $newitem = new Product;
        $newitem->name=$request->input('name');
        $newitem->description=$request->input('description');
        $newitem->image=$request->input('image');
        $newitem->price=$request->input('price');
        $newitem->categoryId=$request->input('categoryId');
        $newitem->save();
        $lastid=DB::getPdo()->lastInsertId();

        $lastitem=Product::where('id', $lastid)->first();
       // dd($lastitem);
        return view ('product.confirm-save-product', ['lastitem'=>$lastitem]);
    }


   public function show($productId)
   {
       $productId=intval($productId);
//       $item=DB::select('SELECT * FROM products WHERE id=:id', ['id'=>$productId]);
       $item=Product::where('id',$productId)->first();
       return view ('product.product', ['item'=>$item]);
   }

    public function edit(Request $request)
    {
        $id=$request->input('id');
        $item=Product::where('id',$id)->first();
        return view('product.edit-product',['item'=>$item]);
    }
    public function update(Request $request)
    {
        $id=$request->input('id');
        $item=Product::where('id',$id)->first();
        $item->name=$request->input('name');
        $item->price=$request->input('price');
        $item->save();

        return view('product.confirm-edit-product',['item'=>$item]);
    }

    public function delete(Request $request)
    {
        $id=$request->input('id');
        Product::destroy($id);
        return view('product.confirm-delete-product',['id'=>$id]);
    }

}
