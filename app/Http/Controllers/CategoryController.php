<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
//use App\Exports\CategoryExport;
//use App\Imports\CategoryImport;
//use Maatwebsite\Excel\Facades\Excel;

class CategoryController extends Controller
{
    public function getCategories()
    {
        return view('category.form');
    }
    public function submitForm(Request $request)
    {
        $product = new Category();
        $product->name = $request->name;
      
        $product->save();
        return redirect()->route('category.table')->with('message', 'Data Successfully Added');
            
    }
    public function getTable(Request $request)
        {
            $data = Category::all();
            // dd($data);
            return view('category.table',compact('data'));
        } 
    public function edit($id)
    {
        $data = Category::find($id);
         
        return view('category.edit', compact('data'));
    }
    public function update(Request $request,$id)
    {
        $product = Category::find($id);
        $product->name = $request->name;
        $product->update();
        return redirect()->route('category.table')->with('message', 'Data Successfully Added');
    }
    public function deleteForm(Request $request,$id)
    {
        $product = Category::find($id);
        $product->name = $request->namee;
     
        
        $product->delete();
        return redirect()->route('category.table')->with('message', 'Data Successfully Added');
    }
    
    
       
}
