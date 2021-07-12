<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $products = Product::paginate(1);
        $products = Product::all();
        return view('admin.products.all' , compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("admin.products.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validator = Validator::make($request->all() , [
            // 'cat_id' => ['required'],
            'img' => ['required'],
            'name_product' => ['required', 'min:3' , 'max:225'],
            'descriotion' => ['string','min:3' , 'max:225'],
            'price' => ['required', 'integer'],
        ]);
        // ERROR: There is no validation rule named string
        if($validator->fails())
        {
            return redirect()->back()->withErrors($validator)->withInput($request->all());
        }
        $products = new Product();
        $products->cat_id = $request->input('cat_id');
        $products->name_product = $request->input('name_product');
        $products->description = $request->input('description');
        $products->price = $request->input('price');
        if($request->hasFile('img')){
            $file = $request->file('img');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/products/' , $filename);
            $products->img = $filename;
        }
        else{
            return $request;
            $products->img = '';
        }
        $products->save();
        return redirect()->back()->with(['success' => 'Product has been added']);

        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $product = Product::findOrfail($id);
        return $id;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $product = Product::findOrfail($id);
        return view('admin.products.edit' , compact('product') );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $validator = Validator::make($request->all() , [
            'img' => ['required'],
            'name_product' => ['required', 'min:4' , 'max:225'],
            'description' => ['string' ,'min:9'],
            'price' => ['required'],
        ]);
        // ERROR: There is no validation rule named string
        if($validator->fails())
        {
            return redirect()->back()->withErrors($validator)->withInput($request->all());
        }
        // Second insert new inputs in DB
        $products = Product::findOrFail($id);
        $products->name_product = $request->input('name_product');
        $products->description = $request->input('description');
        $products->price = $request->input('price');

        if($request->hasFile('img')){
            $file = $request->file('img');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/products/' , $filename);
            $products->img = $filename;
        }
        else{
            return $request;
            $products->img = '';
        }
        $products->update();
        return redirect()->back()->with(['success' => 'Product has been updated']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $product = Product::findOrfail($id);
        $product->delete();
        return redirect()->back()->with(['success' => 'product has been Deleted']);
    }
}
