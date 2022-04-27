<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;
use App\Models\Blog;
use App\Models\Blogfaq;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Crypt;
use DB;

class BlogController extends Controller
{
    public function index(){
        $blog = Blog::with('brand')->orderby('id','desc')->get();
        return view('admin.blog.list',compact('blog'));
    }
    public function create(){
        $brand = Brand::where('status',1)->get(['id','name']);
        return view('admin.blog.create',compact('brand'));
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'image' => 'mimes:jpeg,png,bmp,tiff,gif,webp,jpg |max:40960',
        ],
        $messages = [
            'required' => 'The :attribute field is required.',
            'mimes' => 'Only jpeg, png, bmp, tiff, gif, webp, jpg are allowed.'
            ]
        );

        $imgName = $request->file('image')->getClientOriginalName();
        $file = pathinfo($imgName, PATHINFO_FILENAME);
        $ext = pathinfo($imgName, PATHINFO_EXTENSION);
        $slugimg = uniqid() . '_' . strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $file)));
        $imgName = $slugimg . '.' . $ext;

        $imgUrl = "storage/blog/" . strtolower($imgName);
        Storage::putFileAs('public/blog/', $request->file('image'), $imgName);

        $blog = new Blog;
        $blog->title = $request->title;
        $blog->slug = $this->slugify($request->slug);
        $blog->metatitle = $request->metatitle;
        $blog->metadescription = $request->metadescription;
        $blog->metakeywords = $request->metakeywords;
        $blog->image = $imgUrl;
        $blog->alt = $request->alt;
        $blog->brand_id = $request->brandid;
        $blog->description = $request->description;
        $blog->status = $request->status;
        $save = $blog->save();

        if ($save) {
            $msg = array(
                'message' => 'Blog Successfully added',
                'alert-type' => 'success'
            );
        } else {
            $msg = array(
                'message' => 'Something went wrong',
                'alert-type' => 'danger'
            );
        }
        return redirect(url("admin/blog/"))->with($msg);
    }

    public function edit($id){
        $id = Crypt::decrypt($id);
        $brand = Brand::where('status',1)->get(['id','name']);
        $blog = Blog::with('brand')->find($id);
        $faq = Blogfaq::where('blog_id',$blog->id)->get();
        if($blog){
            return view('admin.blog.edit',compact('blog','brand','faq'));
        }
        return abort(404);
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'image' => 'mimes:jpeg,png,bmp,tiff,gif,webp,jpg |max:40960',
        ],
        $messages = [
            'required' => 'The :attribute field is required.',
            'mimes' => 'Only jpeg, png, bmp, tiff, gif, webp, jpg are allowed.'
            ]
        );

        if ($request->file('image') != null) {
            $imgName = $request->file('image')->getClientOriginalName();
            $file = pathinfo($imgName, PATHINFO_FILENAME);
            $ext = pathinfo($imgName, PATHINFO_EXTENSION);
            $slugimg = uniqid() . '_' . strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $file)));
            $imgName = $slugimg . '.' . $ext;

            $imgUrl = "storage/blog/" . strtolower($imgName);
            Storage::putFileAs('public/blog/', $request->file('image'), $imgName);

            $media = Blog::findOrFail($request->id);
            $image_path = '/'.$media->image;  // Value is not URL but directory file path
            if(File::exists('public/'.$image_path)) {
                unlink('public/'.$image_path);
            }
        } else {
            $imgUrl = $request->oldimage;
        }

        $blog = Blog::find($request->id);
        $blog->title = $request->title;
        $blog->slug = $this->slugify($request->slug);
        $blog->metatitle = $request->metatitle;
        $blog->metadescription = $request->metadescription;
        $blog->metakeywords = $request->metakeywords;
        $blog->image = $imgUrl;
        $blog->alt = $request->alt;
        $blog->status = $request->status;
        $blog->brand_id = $request->brandid;
        $blog->description = $request->description;
        $blog->save();

        $msg = array(
            'message' => 'Blog Successfully Update',
            'alert-type' => 'success'
        );


        return redirect()->back()->with($msg);
    }

    public function delete($id)
    {
        $id = Crypt::decrypt($id);
        $media = Blog::findOrFail($id);
        $image_path = '/'.$media->image;  // Value is not URL but directory file path
        if(File::exists('public/'.$image_path)) {
            unlink('public/'.$image_path);
        }
        
        $delete = Blog::destroy($id);
        if ($delete) {
            $msg = array(
                'message' => 'Brandissue Successfully deleted',
                'alert-type' => 'success'
            );
        } else {
            $msg = array(
                'message' => 'Something went wrong',
                'alert-type' => 'danger'
            );
        }
        return redirect()->back()->with($msg);
    }

    public function savefaq(Request $req){
        $q = $req->question;
        $a = $req->answer;
        $bid = $req->blogid;
        $check = Blogfaq::where('blog_id',$bid)->count();
        if($check > 0){
            Blogfaq::where('blog_id',$bid)->delete();
        }
        if(!empty($q)){
            $len = count($q);
            for($i=0;$i<$len;$i++){
                if(!empty($q[$i])){
                    Blogfaq::insert([
                    'question' => $q[$i],
                    'answer' => $a[$i],
                    'blog_id' => $bid
                    ]);    
                }
            }
            return redirect()->back()->with('message','Faq Added Successfully');
        }
        return redirect()->back();
    }

    public function slugify($text)
    {
        $text = preg_replace('~[^\pL\d]+~u', '-', $text);
        $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
        $text = preg_replace('~[^-\w]+~', '', $text);
        $text = trim($text, '-');
        $text = preg_replace('~-+~', '-', $text);
        $text = strtolower($text);
        if (empty($text)) {
            return 'n-a';
        }
        return $text;
    }

}
