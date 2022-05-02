@extends('layouts.app')
@section('content')

<div class="clearfix"></div>
    <div class="about-area faq-area inc-shape default-padding">
        <div class="container">
        <h5 class="">Thank You, </h5>
        <p>Our Certified technician will call you on the registered number , kindly answer the call. Mean while an email has been sent to you from our email.<br/>Customer service <a href="{{config('app.url')}}"><strong>printertales.com</strong></a>  </p>
        <div class="mainform">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="calls">
                        <h3>Call Us.</h3>
                        @if($settings->usnum)
                            <h2 class="text-dark"><strong>US / CA : </strong> <a class="text-danger" href="tel:{{$settings->usnum}}">{{$settings->usnum}}</a> </h2>
                        @endif
                        @if($settings->uknum)
                            <h2 class="text-dark"><strong>UK : </strong><a class="text-danger" href="tel:{{$settings->uknum}}">{{$settings->uknum}}</a> </h2>
                        @endif
                    </div>
                </div>
                <div class="col-lg-6 brd">
                    <div class="text-center border-lft chat-sec" id="myHeader">
                    <img src="{{url('public/assets/img/ask-lice-chat.png')}}" alt="Support">
                    <h5 class="mb-0">Ask Live Chat</h5>
                    <p>You can also start live chat from the following link</p>
                    <a href="{{url('chat')}}"><button class="btn btn-primary circle w-50 " type="submit">Live Chat </button></a>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
    <section class="calls">
        <div class="container">
        <div class="row align-items-center">
            <div class="col-sm-4">
                <h2 class="text-dark"><strong>Free Consultaion </strong></h2>
            </div>
            <div class="col-sm-8">
                @if($settings->usnum)
                    <h2 class="text-dark"><strong>US / CA : </strong> <a class="text-danger" href="tel:{{$settings->usnum}}">{{$settings->usnum}}</a> </h2>
                @endif
                @if($settings->uknum)
                    <h2 class="text-dark"><strong>UK : </strong><a class="text-danger" href="tel:{{$settings->uknum}}">{{$settings->uknum}}</a> </h2>
                @endif
            </div>
        </div>
        </div>
    </section>
@endsection