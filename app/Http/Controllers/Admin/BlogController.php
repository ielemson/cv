<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Category;
use App\Blog;
class BlogController extends Controller
{
    public function index(){
        $blogs = Blog::all();
        return view('admin.blog.index',compact('blogs'));
    }

    public function create(){
        $categories = Category::all();
        return view('admin.blog.create',compact('categories'));
    }


     
    public function store(Request $request)
    {
       $request->validate([
        'title'=>'required',
        'body'=>'required',
        'category_id'=>'required',
        'img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:1048',
       ]);

       
     $imageName = time().'.'.$request->img->extension();  

     $request->img->move(public_path('/assets/images/blog'), $imageName);

     $blog = new Blog();
     $blog->slug = Str::slug($request['title'], '-');
     $blog->title = $request->title;
     $blog->body = $request->body;
     $blog->category_id = $request->category_id;
     $blog->img = $imageName;

     $blog->save();

     return back()->with('success','Blog Created Successfully');
    }


    public function edit($id){
        $blog = Blog::find($id);
        $categories = Category::all();
        return view('admin.blog.edit',compact('blog','categories'));
      }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title'=>'required',
            'body'=>'required',
            'category_id'=>'required',
            'img' => 'image|mimes:jpeg,png,jpg,gif,svg|max:1048',
           ]);
    
           $blog = Blog::find($id);

           if(!empty($request->img)){

            $file = public_path("assets/images/blog/$blog->img"); 
            unlink($file);

            $imageName = time().'.'.$request->img->extension();  
    
            $request->img->move(public_path('/assets/images/blog'), $imageName);
        
            $blog->slug = Str::slug($request['title'], '-');
            $blog->title = $request->title;
            $blog->body = $request->body;
            $blog->category_id = $request->category_id;
            $blog->img = $imageName;

           }else{

            $blog->slug = Str::slug($request['title'], '-');
            $blog->title = $request->title;
            $blog->body = $request->body;
            $blog->category_id = $request->category_id;
           }
      
    
         $blog->save();
    
         return back()->with('success','Blog updated Successfully');
    }

    
    public function destroy(Blog $blog)
    {
        $file = public_path("assets/images/blog/$blog->img"); 
        unlink($file);
        $blog->delete();
        return redirect()->back()->with('success','Blog deleted successfully');
    }
}
