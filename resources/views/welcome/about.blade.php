@extends('layout.master')


@section('title')
    <title>About | CG-Marine</title>
@stop

{{--@section('left-content')--}}
    {{--<div class="col-md-5" style="margin-top: 0 !important; overflow: hidden;">--}}
        {{--<div><img src="/img/about-overview.jpg" alt="about-overview" style="max-width: 100%;"/></div>--}}
        {{--<div><img src="/img/about.png" alt="about-overview" style="max-width: 100%;"/></div>--}}
    {{--</div>--}}

{{--@stop--}}

@section('right-content')
    <div class="col-md-10 col-md-offset-1" style="margin-top: 20px !important;">
        <div class="row" style="margin-bottom: 30px !important;">
            {{--<div><img src="/img/aboutnew.png" alt="about-overview" style="max-width: 100%;"/></div>--}}
            <div style="background: url('/img/aboutnew.png') no-repeat;
             background-size: 100%;
    background-size: contain !important;
    background-repeat: no-repeat !important;
    background-position: center center!important;
    width: 100%; height: 300px;"></div>
        </div>
        <div class="row">
            <div class="span12" style="color:#777">
                <p>About Us > </p>
                <h2 style="color: #0072B2">Our Team and About Us</h2>
                <p style="text-align: justify;">We started our business in 2013 in Singapore.</p>
                <p><strong>Our Vision:</strong><br/>
                To flourish as an independent organisation, which is unique, cost effective controlled, and quality standards maintained.</p>
                <p><strong>Our Policy:</strong><br/>
                To establish and maintain a Quality system in order to provide customers with the most highest level of Marine Consultancy and safety services with mutually acceptable requirements.</p>
                <p>CG Marine Services is a Marine services and consultancy firm offering for inspections on tankers ( SIRE& CDI), specialised Cargo and offshore Support Vessels ( OVID).</p>
                <p>We provide safety consultancy for Oil Terminal and Oil Majors. Our customers include Oil companies, Oil Terminals and the Chemical Distribution Institute (CDI)</p>
                <p>It is imperative that training to seafarer and shore staff is given from time to time to ensure latest knowledge is gained in all aspects of shipping industry. CG Marine conducts Safety Training for company shore base and shipboard as well. Conduct internal and external audit on behalf of the ship owner or ship manager.</p>

            </div>
        </div>
    </div>
@stop

