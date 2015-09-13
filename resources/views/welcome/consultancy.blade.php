@extends('layout.master')

@section('title')
    <title>Consultancy | CG-Marine</title>
@stop

@section('left-content')
    <div class="col-md-5" style="margin-top: 0 !important; overflow: hidden;">
        {{--<div><img src="/img/about-overview.jpg" alt="about-overview" style="max-width: 100%;"/></div>--}}
        {{--<div class="left-img" style="background:url('/img/pre2.png');"></div>--}}
        <div class="left-img" style="background:url('/img/about.png');"></div>

    </div>

@stop

@section('right-content')
    <div class="col-md-6" style="margin-top: 40px !important; margin-left: 30px !important;">
        <div class="row-fluid">
            <div class="span12" style="color:#777">
                <p>Service > Consultancy > </p>
                <h2 class="text-justify">Maritime Consultancy</h2>
                {{--<p style="text-align: justify;">Our new building projects are manned by a well-rounded team comprising of Marine Engineers, Naval Architects, Production Engineers, Electrical Engineers and Senior Ship Officers, with both ship building and operational experience for various vessel types thus ensuring that vessels are built not only to suit commercial requirements but also to ensure operational practicality</p>--}}
                <p class="text-justify">&nbsp;&nbsp;&nbsp;&nbsp;We provide Marine safety consultancy for the entire marine industries in various areas;</p>
                <ul>
                    <li>1.	Oil Terminals</li>
                    <li>2.	Port / terminal development </li>
                    <li>3.	Company internal and External Audits</li>
                    <li>4.	Tanker company TMSA development and management </li>
                </ul>
            </div>
        </div>
    </div>
@stop
