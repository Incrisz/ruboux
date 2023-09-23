<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;
use File;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Products::orderBy('created_at', 'desc')->get();
        return view('dashboard.product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.product.add-product');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $product = new Products();
        $product->name = $request->name;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->image = $request->image;
        $product->sample_image = $request->sample_image;
        if($request->hasfile('image')){
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('dist/img/products', $filename);
            $product->image = $filename;
         }
        if($request->hasfile('sample_image')){
            $file = $request->file('sample_image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('dist/img/products/sample', $filename);
            $product->sample_image = $filename;
         }
        //dd($product);
        $product->save();
       return redirect()->route('product.index')->with('success', 'Product saved successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Products $products)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $products = Products::findOrFail($id);
        return view('dashboard.product.edit', compact('products'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Products $products, $id)
    {
        $name = $request->name;
        $price = $request->price;
        $description = $request->description;
        $image = $request->image;
        $sample_image = $request->sample_image;

        if($request->hasfile('image'))
        {
            $filepath_image = 'dist/img/products/'.$products->image;
            if(File::exists($filepath_image)){
                File::delete($filepath_image);
            }
            $image_file = $request->file('image');
            $img_extension = $image_file->getClientOriginalExtension();
            $img_filename = time().'.'. $img_extension;
            $image_file->move('dist/img/products', $img_filename );
            $image = $img_filename;
        }

        if($request->hasfile('sample_image'))
        {
            $filepath_image = 'dist/img/products/'.$products->sample_image;
            if(File::exists($filepath_image)){
                File::delete($filepath_image);
            }
            $image_file = $request->file('sample_image');
            $img_extension = $image_file->getClientOriginalExtension();
            $img_filename = time().'.'. $img_extension;
            $image_file->move('dist/img/products/sample', $img_filename );
            $sample_image = $img_filename;
        }
        Products::find($id)->update([
            'name'=>$name,
            'price'=>$price,
            'description'=>$description,
            'image'=>$image,
            'sample_image'=>$sample_image,
        ]);
        return redirect()->route('product.index')->with('success', 'Product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Products::find($id)->delete();
        return redirect()->route('product.index')->with('Success', 'Product deleted successfully');
    }

    /**
     * Search the specified resource from storage.
     */
    public function search()
    {
        $search_text = $_GET['query'];
        $products = Products::where('name', 'LIKE', '%'.$search_text.'%')->get();

        return view('dashboard.product.search', compact('products'));
    }
}
