<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Blog;
class HomeController extends Controller
{
    


    public function index(){
        $blogs = Blog::latest()->get();
        return view('admin.home',compact('blogs'));
    }
}
