<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();

        return view('products.index', ['products'=> $products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
        $data['image_path'] = $image_path;
        $product->create($data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {

    $data = $request->validated();
    $data['establishment_id'] = \Auth::user()->establishment_id;

    $data['price_cents']=(int)($data['price_cents'] *100);
     $product = Product::create($data);
       if ($request->hasFile('image')) {
         $imageFile =$request->file('image');


       $product->update([
         'image_path' => $imageFile->storeAs(
           "images/products/$product->id",
           'image.jpg',
           'public',
           )


         ]);


       }
       return redirect()->route('product.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('products.show', ['product'=>$product]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('products.edit', ['product'=> $product]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductRequest  $request, Product $product)
    {

        $data = $request->validated();
        $data['price_cents']=(int)($data['price_cents'] *100);
        if ($request->hasFile('image')) {
            $imageFile =$request->file('image');
            $data['image_path' ] =$imageFile->storeAs(
                "images/products/$product->id",
                'image.jpg',
                'public',
            );
       }



        $product->update($data);

        return redirect()->route('product.show', $product);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('product.index');
    }
}
