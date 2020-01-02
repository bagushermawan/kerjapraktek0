<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $daftar_product = \App\Product::paginate(5);
        $count=\App\Product::count();
        return view("product.index", ["daftar_product" => $daftar_product], compact('count'));
    }
    public function create()
    {
        return view('product.create');
    }
    public function store(Request $request)
    {
        $this->validate($request,[
            'title' => 'required',
            'description' => 'required',
            'image' => 'required',
            'price' => 'required',
            'stock' => 'required',


        ]);

        $product = new Product();
        $product->title = $request->title;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->stock = $request->stock;
        if($request->file('image')){
            $image_path = $request->file('image')->store('product_images', 'public');
            $product->image = $image_path;
            // dd($image_path);
        }
           


    	if(!$product->save()){
            Session::flash('gagal','Yamaap, Product gagal disimpan!!');
            return redirect()->route('product.create');
        }

        Session::flash('sukses','Yeahh, Product berhasil disimpan!');
        return redirect()->route('product');

        return back()->withErrors(['name.required', 'Name is required']);
    }
    public function show($id)
    {
        //
    }
    public function edit($id)
    {
        //
    }
    public function update(Request $request, $id)
    {
        //
    }
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        Session::flash('delete','Product berhasil dihapus!');
        return redirect()->route('product');
    }
}
