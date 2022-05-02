<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Brand;
use App\Models\Blog;
use App\Models\Printer;
use App\Models\Brandissue;
use App\Models\Contact;
use App\Models\Setting;
use App\Models\Support;
use App\Models\Issue;
use App\Models\Testimonial;
use Mail;
use App\Mail\ContactMailer;
use App\Mail\SupportMailer;
use App\Mail\IssueMailer;
use View;

class FrontController extends Controller
{
    public function __construct()
    {
        $popularbrandprinters = Brand::with(['printer'=>function($query){
            return $query->where('popular',1);
        }])->where('popular',1)->limit(4)->get();
        $settings = Setting::first();
        View::share(compact('popularbrandprinters','settings'));
    }
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
        $blog = Blog::with('faq')->where('slug',$slug)->where('status',1)->first();
        
        $meta = [
            'metatitle' => $blog->metatitle,
            'metakeywords' => $blog->metakeywords,
            'metadescription' => $blog->metadescription,
            'image' => $blog->image,
            'type' => 'blog'
        ];

        $recent = Blog::where('slug','!=',$slug)->where('status',1)->limit(5)->get();
        return view('pages.blogdetail',compact('blog','recent','meta'));
    }
    public function contact(){
        return view('pages.contact');
    }
    public function submitcontact(Request $request){
        // return $_SERVER['REMOTE_ADDR'];
        $data = $request->all();
        Mail::to('himanshu01eglobalsoft@gmail.com')->send(new ContactMailer($data));
        $contact = new Contact();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->date = $request->date;
        $save = $contact->save();
        if($save){
            $msg = array(
                'message' => 'Thanks For Contacting Us',
                'alert-type' => 'success'
            );
        }
        else {
            $msg = array(
                'message' => 'Something went wrong',
                'alert-type' => 'danger'
            );
        }
        return redirect()->back()->with($msg);
    }
    public function support(){
        return view('pages.support');
    }
    public function printerdetails($slug1, $slug2){
        $printer = Printer::with('features')->with('errors')->with('faq')->with('brand')->whereHas('brand', function ($query) use($slug1) {
            $query->where('slug','=',$slug1);
        })->where('slug',$slug2)->first();

        if($printer){
            $latestprinter = Brand::with(['printer'=>function($query) {
                return $query->limit(6);
            }])->where('status',1)->first();
            $meta = [
                'metatitle' => $printer->metatitle,
                'metakeywords' => $printer->metakeywords,
                'metadescription' => $printer->metadescription,
                'image' => $printer->image,
                'type' => 'printer'
            ];
            return view('pages.printerdetails',compact('printer','latestprinter','meta'));
        } else {
            $issue = Brandissue::with('brand')->whereHas('brand', function ($query) use($slug1) {
                $query->where('slug','=',$slug1);
            })->where('slug',$slug2)->first();
            if($issue){
               $printer = Printer::where('brand_id',$issue->brand->id)->get();
            
                $meta = [
                    'metatitle' => $issue->metatitle,
                    'metakeywords' => $issue->metakeywords,
                    'metadescription' => $issue->metadescription,
                    'image' => $issue->image,
                    'type' => 'issue'
                ];
                $latestblog = Brand::with(['blog'=>function($query){
                    return $query->orderby('id','desc')->limit(6);
                }])->where('slug',$slug1)->first();
                return view('pages.issuedetails',compact('issue','latestblog','meta','printer'));
            }
            else {
                abort(404);
            }
           
        }
        
    }

    public function details($slug){
        $brand =  Brand::with('brandissue')->with(['blog'=>function($query) {
            return $query->limit(4);
        }])->with(['printer'=>function($query) {
            return $query->limit(4);
        }])->where('slug',$slug)->where('status',1)->first();
        
        if($brand){
            $meta = [
                'metatitle' => $brand->metatitle,
                'metakeywords' => $brand->metakeywords,
                'metadescription' => $brand->metadescription,
                'image' => $brand->image,
                'type' => 'brand'
            ];
            return view('pages.details',compact('brand','meta'));
        } else {
            return abort(404);
        }
        
    }

    public function homesearch(Request $request){
        $value = $request->full_text_search_query;
        $result = Blog::where('title', 'like', "%{$value}%")->get();
        return $result;
    }
    public function homesearchprinter(Request $request){
        $value = $request->full_text_search_query;
        $result = Printer::with('brand')->where('name', 'like', "%{$value}%")->get();
        return $result;
    }

    public function printersearch(Request $request){
        $value = $request->printersearch;
        $result = Printer::with('brand')->where('name',$value)->first();
        return $result;
    }

    public function supportform(Request $request){
        $data = $request->all();
        Mail::to('himanshu01eglobalsoft@gmail.com')->send(new SupportMailer($data));
        $support = new Support();
        $support->brand = $request->brand;
        $support->issue = $request->issue;
        $support->otherissue = $request->otherissue;
        $support->email = $request->email;
        $support->before = $request->before;
        $support->phone = $request->phone;
        $save = $support->save();
        if($save){
            $msg = array(
                'message' => 'Thanks For Contacting Us',
                'alert-type' => 'success'
            );
            return view('pages.thankyou');
        }
        else {
            $msg = array(
                'message' => 'Something went wrong',
                'alert-type' => 'danger'
            );
            return redirect()->back()->with($msg);
        }
        
    }

    public function issuesubmit(Request $request){
        $data = $request->all();
        Mail::to('himanshu01eglobalsoft@gmail.com')->send(new IssueMailer($data));
        $issue = new Issue();
        $issue->printer = $request->printer;
        $issue->name = $request->fname;
        $issue->email = $request->femail;
        $issue->phone = $request->fcode.'-'.$request->fphone;
        $save = $issue->save();
        if($save){
            $msg = array(
                'message' => 'Thanks For Contacting Us',
                'alert-type' => 'success'
            );
            return view('pages.issuesubmit');
        }
        else {
            $msg = array(
                'message' => 'Something went wrong',
                'alert-type' => 'danger'
            );
            return redirect()->back()->with($msg);
        }
    }


}
