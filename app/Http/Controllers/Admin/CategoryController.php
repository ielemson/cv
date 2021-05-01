<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;
use App\Portfolio;
class CategoryController extends Controller
{
public function index(){
        $categories = Category::all();
    return view('admin.category.index',compact('categories'));
}
public function create(){
    return view('admin.category.create');
}

public function store(Request $request){
    $request->validate([
    'name'=>'required|unique:categories'
    ]);

    $category = new Category();
    $category->name = $request->name;

    $category->save();

    return redirect()->back()->with('success','Category Created Successfully');
}


public function edit($id)
{
    $category = Category::where('id',$id)->first();
    return view('admin.category.edit',compact('category'));
}

public function update(Request $request, $id)
{
    $request->validate([
        'name'=>'required'
    ]);

   
    $category = Category::find($id);
    $category->name = $request->name;

    $category->save();

    return redirect()->back()->with('success','Category Updated Successfully');
}


public function destroy($id){
    $category = Category::where('id',$id)->first();
    $checkArt = Portfolio::where('category_id',$category->id)->first();
    if($checkArt != null){
    return back()->with('error','Category is currently used by an Art');
    }

    $category->delete();

    return back()->with('success','Category Delete Successfully');
        
        }
}
