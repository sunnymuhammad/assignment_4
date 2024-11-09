<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data=Product::paginate(5);
        return view('pages.home',compact('data'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
            $request->validate([
                 'product_id'=>'required|integer',
                 'name'=>'required',
                 'description'=>'nullable',
                 'price'=>'required',
                 'stock'=>'nullable',
                 'image'=>'nullable',
            ]);

        $product = Product::where('product_id', $request->product_id)->first();
        $image = $request->file('image');
        if($image){
        $imageName = time().".".$image->getClientOriginalExtension();
        $image->move(public_path('images'), $imageName);
        }else{
            $imageName=null;
        }


        if ($product) {
            return response()->json(['error' => 'Product ID already exists.'], 400);
        } else {
          Product::create([
                'product_id' => $request->input('product_id'),
                'name' => $request->name,
                'description' => $request->description,
                'price' => $request->price,
                'stock' => $request->stock,
                'image' =>$imageName,
            ]);
        }
        // dd($data);
         return redirect('products');



    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {

        $menu=$request->input('menu') ?? 'id';
        $sort=$request->input('sort') ?? 'asc';
        $find= $request->input('name');
        $data=Product::where('product_id','=',$find)->orWhere('description','LIKE',"$find%")->orderBy("$menu","$sort")->paginate(5);
        // dd($data);
        return view('pages.home',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request,string $id)
    {
        return view('pages.update',compact('id'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = array_filter($request->only('product_id', 'name', 'description', 'price', 'stock', 'image'));
        // dd($data);
        Product::where('id', '=', $id)->update($data);
        return redirect('products');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request,string $id)
    {
        $data=Product::find($id)
        // dd($data)
        ->delete();
        return redirect('products');
    }
}
