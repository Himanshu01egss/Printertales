<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimonial;
use App\Models\Brand;
use Illuminate\Support\Facades\Crypt;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testimonial = Testimonial::get();
        return view('admin/testimonial/list',compact('testimonial'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $brand = Brand::get();
        return view('admin/testimonial/create',compact('brand'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $testimonials = new Testimonial;
        $testimonials->name = $request->name;
        $testimonials->brand_id = $request->brandid;
        $testimonials->comment = $request->comment;
        $testimonials = $testimonials->save();

        if ($testimonials) {
            $msg = array(
                'message' => 'Testimonials Successfully added',
                'alert-type' => 'success'
            );
        } else {
            $msg = array(
                'message' => 'Something went wrong',
                'alert-type' => 'danger'
            );
        }
        return redirect(url("admin/testimonials/"))->with($msg);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {  
        $list = Testimonial::with('brand')->find($id);
        $brand = Brand::get();
        return view('admin.testimonial.edit',compact('list','brand'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $testimonials = Testimonial::find($id);
        $testimonials->name = $request->name;
        $testimonials->brand_id = $request->brandid;
        $testimonials->comment = $request->comment;
        $testimonials = $testimonials->save();

        if ($testimonials) {
            $msg = array(
                'message' => 'Testimonials Successfully Update',
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $del = Testimonial::destroy($id);
        if ($del) {
            $msg = array(
                'message' => 'Testimonials Delete Successfully',
                'alert-type' => 'success'
            );
        } else {
            $msg = array(
                'message' => 'Something went wrong',
                'alert-type' => 'danger'
            );
        }
        return redirect(url("admin/testimonials/"))->with($msg);

    }
}
