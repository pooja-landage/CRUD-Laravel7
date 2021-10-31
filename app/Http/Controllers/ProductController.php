<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
class ProductController extends Controller
{
    public function getForm()
    {
        $categories = Category::all();
        // dd($categories);
        return view('product.form',compact('categories'));
    }
    public function submitForm(Request $request)
    {
        $product = new Product();
        //  $arrayTostring =implode(',', $request->category_id);
        // $product->category_id=$arrayTostring;
        $product->name = $request->name;
        $product->price = $request->price;
        $product->category_id = $request->category_id;
        $product->description = $request->description;
        if($files = $request->file('photo'))
        {
            $name = $files->getClientOriginalName();
            $files->move('photo',$name);
            $product->photo = $name;
        }
        $product->save();
        return redirect()->route('product.table')->with('message', 'Data Successfully Added');
        
    }
    public function getTable(Request $request)
    {
       

         
    
        $data = Product::all();
        // dd($data);
        return view('product.table',compact('data'));
    } 
public function editform($id)
{
    $data = Product::find($id);
     
    $categories = Category::all();
    return view('product.edit', compact('data','categories'));
}
public function updateForm(Request $request,$id)
{ 
    $product = Product::find($id);
    $product->name = $request->name;
    $product->price = $request->price;
    $product->category_id = $request->category_id;
    $product->description = $request->description;
    $product->update();
    return redirect()->route('product.table')->with('message', 'Data Successfully Added');
}
public function deleteForm(Request $request,$id)
{
    $product = Product::find($id);
    $product->name = $request->name;
    $product->price = $request->price;
    $product->category_id = $request->category_id;
    $product->description = $request->description;
    $product->delete();
    return redirect()->route('product.table')->with('message', 'Data Successfully Added');
}
}
