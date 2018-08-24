<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Validator;
use App\Products;
use App\Category;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products   =   Products::all()->toArray();
        $category  =  Category::all()->toArray();
        return view('product.index',compact('products') ,compact('category'));

          /*  $products = Products::all();
    $selectedRole = Products::first()->role_id;

    return view('product.index', compact('products', 'selectedRole'));*/

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category  =  Category::all()->toArray();
        return view('product.createproduct' , compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request , [
            'fname'     =>  'required',
            'price'     =>  'required',
            'image'     =>  'required',
            'catname'   =>  'required'
        ]);
        $products    = new Products([
            'fname'     =>  $request->get('fname'),
            'price'     =>  $request->get('price'),
            'image'     =>  $request->get('image'),
            'catname'   =>  $request->get('catname')
        ]);
           /* $image     =  $request->file('image');
            $new_name   = rand() .'.'. $image->getClientOriginalExtension();
            $image->move(public_path("images"), $new_name);
       
        return back()->with('success','Image uploaded')->with('path',$new_name);*/
         $products->save();
        return redirect()->route('product.index')->with('success','Product added');
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $products =     Products::find($id);
        return view('product.editproduct',compact('products','id'));
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
         $this->validate($request , [
            'fname'  =>  'required',
            'price'     =>  'required',
            'image'     =>  'required',
            'catname'   =>  'required'

        ]);

        $products = Products::find($id);
        $products->fname = $request->get('fname');
        $products->price = $request->get('price');
        $products->image = $request->get('image');
        $products->catname = $request->get('catname');

        $products->save();
        return redirect()->route('product.index')->with('success','Data Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $products  =    Products::find($id);
        $products->delete();
        return redirect()->route('product.index')->with('success','Data deleted');
    }
}
