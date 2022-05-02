<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;
use App\Models\Brandissue;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use DB;

class BrandController extends Controller
{
    public function index(){
        $brand = Brand::with('brandissue')->orderby('id','Desc')->get();
        return view('admin/brand/list',compact('brand'));
    }
    public function create(){
        return view('admin/brand/create');
    }
    public function store(Request $request)
    {
        $slug = $this->slugify($request->name);
        $count = Brand::where('slug', $slug)->count();
            if( $count != 0 ){
                $msg = array(
                    'message' => 'Brand Already Added',
                    'alert-type' => 'danger'
                );
                return redirect()->back()->with($msg);
            };
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

        $imgUrl = "storage/brand/" . strtolower($imgName);
        Storage::putFileAs('public/brand/', $request->file('image'), $imgName);

        $brand = new Brand;
        $brand->name = $request->name;
        $brand->slug = $this->slugify($request->name);
        $brand->headquarter = $request->headquarter;
        $brand->founder = $request->founder;
        $brand->established = $request->established;
        $brand->website = $request->website;
        $brand->people = $request->people;
        $brand->metatitle = $request->metatitle;
        $brand->metadescription = $request->metadescription;
        $brand->metakeywords = $request->metakeywords;
        $brand->image = $imgUrl;
        $brand->description = $request->description;
        $brand->status = $request->status;
        $brand->popular = $request->popular;
        $save = $brand->save();

        if ($save) {
            $msg = array(
                'message' => 'Brand Successfully added',
                'alert-type' => 'success'
            );
        } else {
            $msg = array(
                'message' => 'Something went wrong',
                'alert-type' => 'danger'
            );
        }
        return redirect(url("admin/brand/"))->with($msg);
    }

    public function edit($id){
        $id = Crypt::decrypt($id);
        $brand = Brand::with('brandissue')->find($id);
        if($brand){
            return view('admin.brand.edit',compact('brand'));
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

            $imgUrl = "storage/brand/" . strtolower($imgName);
            Storage::putFileAs('public/brand/', $request->file('image'), $imgName);

            $media = Brand::findOrFail($request->id);
            $image_path = '/'.$media->image;  // Value is not URL but directory file path
            if(File::exists('public/'.$image_path)) {
                unlink('public/'.$image_path);
            }
        } else {
            $imgUrl = $request->oldimage;
        }

        $brand = Brand::find($request->id);
        $brand->name = $request->name;
        $brand->slug = $this->slugify($request->name);
        $brand->headquarter = $request->headquarter;
        $brand->founder = $request->founder;
        $brand->established = $request->established;
        $brand->website = $request->website;
        $brand->people = $request->people;
        $brand->metatitle = $request->metatitle;
        $brand->metadescription = $request->metadescription;
        $brand->metakeywords = $request->metakeywords;
        $brand->image = $imgUrl;
        $brand->description = $request->description;
        $brand->status = $request->status;
        $brand->popular = $request->popular;
        $save = $brand->save();

        if ($save) {
            $msg = array(
                'message' => 'Brand Successfully Updated',
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

    public function delete($id)
    {
        $id = Crypt::decrypt($id);
        $media = Brand::findOrFail($id);
        $image_path = '/'.$media->image;  // Value is not URL but directory file path
        if(File::exists('public/'.$image_path)) {
            unlink('public/'.$image_path);
        }
        
        $delete = Brand::destroy($id);
        if ($delete) {
            $msg = array(
                'message' => 'Brand Successfully deleted',
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

    public function issues(){
        $brandissue = Brandissue::with('brand')->get();
        return view('admin.brand.brandissue',compact('brandissue'));
    }

    public function issuecreate(){
        $brand = Brand::where('status',1)->get();
        return view('admin/brand/issuecreate',compact('brand'));
    }

    public function issuestore(Request $request)
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

        $imgUrl = "storage/brandissues/" . strtolower($imgName);
        Storage::putFileAs('public/brandissues/', $request->file('image'), $imgName);

        $brandissue = new Brandissue;
        $brandissue->name = $request->name;
        $brandissue->slug = $this->slugify($request->name);
        $brandissue->brand_id = $request->brandid;
        $brandissue->metatitle = $request->metatitle;
        $brandissue->metadescription = $request->metadescription;
        $brandissue->metakeywords = $request->metakeywords;
        $brandissue->image = $imgUrl;
        $brandissue->description = $request->description;
        $brandissue->description2 = $request->description2;
        $save = $brandissue->save();

        if ($save) {
            $msg = array(
                'message' => 'Brand Issues Successfully added',
                'alert-type' => 'success'
            );
        } else {
            $msg = array(
                'message' => 'Something went wrong',
                'alert-type' => 'danger'
            );
        }
        return redirect(url("admin/brand/issues"))->with($msg);
    }

    public function issueedit($id){
        $id = Crypt::decrypt($id);
        $brandissue = Brandissue::find($id);
        $brand = Brand::get();
        if($brand){
            return view('admin.brand.issuesedit',compact('brand','brandissue'));
        }
        return abort(404);
    }

    public function issueupdate(Request $request){
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

            $imgUrl = "storage/brandissues/" . strtolower($imgName);
            Storage::putFileAs('public/brandissues/', $request->file('image'), $imgName);

            $media = Brandissue::findOrFail($request->id);
            $image_path = '/'.$media->image;  // Value is not URL but directory file path
            if(File::exists('public/'.$image_path)) {
                unlink('public/'.$image_path);
            }
        } else {
            $imgUrl = $request->oldimage;
        }

        $brandissue = Brandissue::find($request->id);
        $brandissue->name = $request->name;
        $brandissue->slug = $this->slugify($request->name);
        $brandissue->brand_id = $request->brandid;
        $brandissue->metatitle = $request->metatitle;
        $brandissue->metadescription = $request->metadescription;
        $brandissue->metakeywords = $request->metakeywords;
        $brandissue->image = $imgUrl;
        $brandissue->description = $request->description;
        $brandissue->description2 = $request->description2;
        $save = $brandissue->save();

        if ($save) {
            $msg = array(
                'message' => 'Brand Issues Successfully Updated',
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
    }

    public function issuedelete($id)
    {
        $id = Crypt::decrypt($id);
        $media = Brandissue::findOrFail($id);
        $image_path = '/'.$media->image;  // Value is not URL but directory file path
        if(File::exists('public/'.$image_path)) {
            unlink('public/'.$image_path);
        }
        
        $delete = Brandissue::destroy($id);
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
