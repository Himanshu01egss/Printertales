<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;
use App\Models\Printer;
use App\Models\Printerfaq;
use App\Models\Printererror;
use App\Models\Printerfeature;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Crypt;

class PrintersController extends Controller
{
    public function index(){
        $printer = Printer::with('brand')->with('features')->with('errors')->with('faq')->orderby('id','desc')->get();
        return view('admin.printers.list',compact('printer'));
    }
    public function create(){
        $brand = Brand::where('status',1)->get();
        return view('admin.printers.create',compact('brand'));
    }
    public function store(Request $request){
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

        $imgUrl = "storage/printer/" . strtolower($imgName);
        Storage::putFileAs('public/printer/', $request->file('image'), $imgName);

        $printer = new Printer;
        $printer->name = $request->name;
        $printer->slug = $this->slugify($request->slug);
        $printer->technology = $request->technology;
        $printer->inktype = $request->inktype;
        $printer->supportnum = $request->supportnum;
        $printer->metatitle = $request->metatitle;
        $printer->metadescription = $request->metadescription;
        $printer->metakeywords = $request->metakeywords;
        $printer->image = $imgUrl;
        $printer->alt = $request->alt;
        $printer->brand_id = $request->brandid;
        $printer->description = $request->description;
        $printer->status = $request->status;
        $printer->popular = $request->popular;

        $save = $printer->save();

        if ($save) {
            $msg = array(
                'message' => 'Printer Successfully added',
                'alert-type' => 'success'
            );
        } else {
            $msg = array(
                'message' => 'Something went wrong',
                'alert-type' => 'danger'
            );
        }
        return redirect(url("admin/printer/"))->with($msg);
    }

    public function edit($id){
        $id = Crypt::decrypt($id); 
        $printer = Printer::with('brand')->with('features')->with('errors')->with('faq')->find($id);
        $brand = Brand::where('status',1)->get();
        $faq = Printerfaq::where('printer_id',$printer->id)->get();
        $error = Printererror::where('printer_id',$printer->id)->get();
        $feature = Printerfeature::where('printer_id',$printer->id)->get();
        return view('admin.printers.edit',compact('printer','brand','faq','error','feature'));
    }

    public function update(Request $request){
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

            $imgUrl = "storage/printer/" . strtolower($imgName);
            Storage::putFileAs('public/printer/', $request->file('image'), $imgName);

            $media = Printer::findOrFail($request->id);
            $image_path = '/'.$media->image;  // Value is not URL but directory file path
            if(File::exists('public/'.$image_path)) {
                unlink('public/'.$image_path);
            }
        } else {
            $imgUrl = $request->oldimage;
        }

        $printer = Printer::find($request->id);
        $printer->name = $request->name;
        $printer->slug = $this->slugify($request->name);
        $printer->technology = $request->technology;
        $printer->inktype = $request->inktype;
        $printer->supportnum = $request->supportnum;
        $printer->alt = $request->alt;
        $printer->metatitle = $request->metatitle;
        $printer->metadescription = $request->metadescription;
        $printer->metakeywords = $request->metakeywords;
        $printer->image = $imgUrl;
        $printer->description = $request->description;
        $printer->status = $request->status;
        $printer->brand_id = $request->brandid;
        $printer->popular = $request->popular;
        $save = $printer->save();

        if ($save) {
            $msg = array(
                'message' => 'Printer Successfully Updated',
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

    public function savefeature(Request $req){
        $q = $req->feature;
        $bid = $req->printerid;

        $check = Printerfeature::where('printer_id',$bid)->count();
        if($check > 0){
            Printerfeature::where('printer_id',$bid)->delete();
        }
        if(!empty($q)){
            $len = count($q);
            for($i=0;$i<$len;$i++){
                if(!empty($q[$i])){
                    Printerfeature::insert([
                    'feature' => $q[$i],
                    'printer_id' => $bid
                    ]);    
                }
            }
            return redirect()->back()->with('message','Features Added Successfully');
        }
        return redirect()->back();
    }

    public function saveerror(Request $req){
        $q = $req->title;
        $a = $req->descriptions;
        $bid = $req->printerid;

        $check = Printererror::where('printer_id',$bid)->count();
        if($check > 0){
            Printererror::where('printer_id',$bid)->delete();
        }
        if(!empty($q)){
            $len = count($q);
            for($i=0;$i<$len;$i++){
                if(!empty($q[$i])){
                    Printererror::insert([
                    'title' => $q[$i],
                    'description' => $a[$i],
                    'printer_id' => $bid
                    ]);    
                }
            }
            return redirect()->back()->with('message','Errors Added Successfully');
        }
        return redirect()->back();
    }

    public function savefaq(Request $req){
        $q = $req->question;
        $a = $req->answer;
        $bid = $req->printerid;

        $check = Printerfaq::where('printer_id',$bid)->count();
        if($check > 0){
            Printerfaq::where('printer_id',$bid)->delete();
        }
        if(!empty($q)){
            $len = count($q);
            for($i=0;$i<$len;$i++){
                if(!empty($q[$i])){
                    Printerfaq::insert([
                    'question' => $q[$i],
                    'answer' => $a[$i],
                    'printer_id' => $bid
                    ]);    
                }
            }
            return redirect()->back()->with('message','Faq Added Successfully');
        }
        return redirect()->back();
    }

    public function delete($id){
        $id = Crypt::decrypt($id); 
        $media = Printer::findOrFail($id);
        $image_path = '/'.$media->image;  // Value is not URL but directory file path
        if(File::exists('public/'.$image_path)) {
            unlink('public/'.$image_path);
        }
        $deletefaq = Printerfaq::where('printer_id',$id)->delete();
        $deleteerrors = Printererror::where('printer_id',$id)->delete();
        $deletefeatures = Printerfeature::where('printer_id',$id)->delete();
        $delete = Printer::destroy($id);
        if ($delete) {
            $msg = array(
                'message' => 'Printer Successfully deleted',
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
