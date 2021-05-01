<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Category;
use App\Portfolio;
class PortfolioController extends Controller
{
    

    public function index(){

        $portfolios = Portfolio::all();
        return view('admin.porfolio.index',compact('portfolios'));
    }
    public function create(){
        $categories = Category::all();
        return view('admin.porfolio.create',compact('categories'));
    }

    
    public function store(Request $request)
    {
       $request->validate([
        'name'=>'required',
        'link'=>'required',
        'category_id'=>'required',
        'img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:1048',
       ]);

       
     $imageName = time().'.'.$request->img->extension();  

     $request->img->move(public_path('/assets/images/portfolio'), $imageName);

     $portfolio = new Portfolio();
     $portfolio->name = $request->name;
     $portfolio->link = $request->link;
     $portfolio->category_id = $request->category_id;
     $portfolio->img = $imageName;

     $portfolio->save();

     return back()->with('success','Portfolio Created Successfully');
    }

    
    // public function edit($id)
    // {
    //   $portfolio = Portfolio::find($id);
    //   $categories = Category::all();
    //   return view('admin.portfolio.edit',compact('portfolio','categories'));
    // }


    public function edit($id){
      $portfolio = Portfolio::find($id);
      $categories = Category::all();
      return view('admin.porfolio.edit',compact('portfolio','categories'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name'=>'required',
            'link'=>'required',
            'category_id'=>'required',
            'img' => 'image|mimes:jpeg,png,jpg,gif,svg|max:1048',
           ]);
    
           $portfolio = Portfolio::find($id);

           if(!empty($request->img)){

            $imageName = time().'.'.$request->img->extension();  
    
            $request->img->move(public_path('/assets/images/portfolio'), $imageName);
       
            $portfolio->name = $request->name;
            $portfolio->link = $request->link;
            $portfolio->category_id = $request->category_id;
            $portfolio->img = $imageName;

           }else{

            $portfolio->name = $request->name;
            $portfolio->link = $request->link;
            $portfolio->category_id = $request->category_id;
           }
      
    
         $portfolio->save();
    
         return back()->with('success','Portfolio updated Successfully');
    }

   
    public function destroy($id)
    {
        $portfolio = Portfolio::find($id);
        $portfolio->delete();
        return back()->with('success','Portfolio deleted Successfully');
        
    }
}
