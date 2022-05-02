<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Setting;
use App\Models\Sociallink;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $contact = Contact::get();
        return view('admin.dashboard',compact('contact'));
    }
    public function settings(){
        $setting = Setting::first();
        return view('admin/setting/index',compact('setting'));
    }

    public function savesettings(Request $request){
        $this->validate($request, [
            'image' => 'mimes:jpeg,png,bmp,tiff,gif,webp,jpg |max:40960',
            'fevicon' => 'mimes:jpeg,png,bmp,tiff,gif,webp,jpg |max:40960',
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

            $imgUrl = "storage/site/" . strtolower($imgName);
            Storage::putFileAs('public/site/', $request->file('image'), $imgName);

            $media = Setting::findOrFail($request->id);
            $image_path = '/'.$media->image;  // Value is not URL but directory file path
            if(File::exists('public/'.$image_path)) {
                // unlink('public/'.$image_path);
            }
        } else {
            $imgUrl = $request->oldimage;
        }  

        if ($request->file('fevicon') != null) {
            $imgName = $request->file('fevicon')->getClientOriginalName();
            $file = pathinfo($imgName, PATHINFO_FILENAME);
            $ext = pathinfo($imgName, PATHINFO_EXTENSION);
            $slugimg = uniqid() . '_' . strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $file)));
            $imgName = $slugimg . '.' . $ext;

            $imgUrl2 = "storage/site/" . strtolower($imgName);
            Storage::putFileAs('public/site/', $request->file('fevicon'), $imgName);

            $media = Setting::findOrFail($request->id);
            $image_path = '/'.$media->fevicon;  // Value is not URL but directory file path
            if(File::exists('public/'.$image_path)) {
                // unlink('public/'.$image_path);
            }
        } else {
            $imgUrl2 = $request->oldfev;
        }   


        $setting = Setting::firstOrCreate();
        $setting->sitename = $request->name;
        $setting->email = $request->email;
        $setting->usnum = $request->usnum;
        $setting->uknum = $request->uknum;
        $setting->logo = $imgUrl;
        $setting->fevicon = $imgUrl2;
        $setting->webindex = $request->webindex;
        $setting->footercontent = $request->content;
        $save = $setting->save();

        if ($save) {
            $msg = array(
                'message' => 'Successfully Updated',
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

    public function sociallinks(){
        $link = Sociallink::get();
        return view('admin/setting/sociallinks',compact('link'));
    }

    public function updatesociallinks(Request $req){
        $q = $req->name;
        $a = $req->url;
        $check = Sociallink::count();
        if($check > 0){
            Sociallink::truncate();
        }
        if(!empty($q)){
            $len = count($q);
            for($i=0;$i<$len;$i++){
                if(!empty($q[$i])){
                    Sociallink::insert([
                    'name' => $q[$i],
                    'link' => $a[$i],
                    ]);    
                }
            }
            return redirect()->back()->with('message','Added Successfully');
        }
        return redirect()->back();
    }
  
}
