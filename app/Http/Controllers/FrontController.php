<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;
use App\Models\Blog;
use App\Models\Testimonial;

class FrontController extends Controller
{
    public function index(){ 
        $brand = Brand::orderby('id','Desc')->get();
        $blog = Blog::orderby('id','Desc')->limit(4)->get();
        $testimonials = Testimonial::with('brand')->orderby('id','Desc')->limit(30)->get();
        return view('pages.home',compact('brand','blog','testimonials'));
    }
    public function blog(){
        $blog = Blog::where('status',1)->paginate(15);
        return view('pages.blog',compact('blog'));
    }
    public function blogdetail($slug){
        $blog = Blog::where('slug',$slug)->where('status',1)->first();
        $recent = Blog::where('slug','!=',$slug)->where('status',1)->limit(5)->get();
        return view('pages.blogdetail',compact('blog','recent'));
    }
    public function contact(){
        return view('pages.contact');
    }
}
