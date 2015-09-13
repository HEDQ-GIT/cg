@extends('layout.master')

@section('title')
    <title>Management | CG-Marine</title>
@stop

@section('left-content')
    <div class="col-md-5" style="margin-top: 0 !important; overflow: hidden;">
        {{--<div class="left-img" style="background:url('/img/management.jpg');"></div>--}}
        {{--<div class="left-img" style="background:url('/img/hao.png');"></div>--}}
        <div>
            {{--<img src="/img/Calbration1.jpg" alt=""/>--}}
            {{--<img src="/img/Calbration2.jpg" alt=""/>--}}
            <div class="left-img" style="background:url('/img/equip1.jpg'); "></div>
            <img src="/img/Calbration2.jpg" style="max-width: 100%;width: 100%;" alt=""/>

            {{--<div class="left-img" style="background:url('/img/equip2.jpg');"></div>--}}
        </div>
    </div>

@stop

@section('right-content')
    <div class="col-md-6" style="margin-top: 40px !important; margin-left: 30px !important;">
        <div class="row-fluid">
            <div class="span12" style="color:#777">
                <p>Service > Equipment > </p>
                <h2 style="color: #0072B2">Equipment Calibration</h2>
                {{--<p style="text-align: justify;">The company is specialized in international ship management, focus on ship maintenance, technical management, navigation security, crew manning, scheduling control, insurance claims, etc. We adhere to “acquire benefit from operating management” and “people oriented”, attach importance to scientific management, properly allocation, and control cost in the premise of keeping safety. We realize scientific and reasonable increasing income and reducing expenditure through large-scale procurement, purchase by biding, encouraging self-repair, fuel and energy saving. Through these efforts, we successfully met the challenges from the severe market, presented a good development state.</p>--}}
                <p class="text-justify">&nbsp;&nbsp;&nbsp;&nbsp;We have been a provider of instrument calibration and repair services. Each of our highly trained technicians has extensive experience in calibration and instrument repair.</p>
                <p class="text-justify">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;We are dedicated to provide the best calibration services to following equipment:</p>
                <ul>
                <li>1.	Temperature gauge calibration ( 00- 5000  C) ( Digital , liquid-in-glass)</li>
                <li>2.	Pressure Gauge calibration </li>
                <li>3.	MMC UTI Calibration</li>
                </ul><br>
                {{--<p class="text-justify">&nbsp;&nbsp;&nbsp;&nbsp;We manage in a very open and transparent way and believe that our service can meet up with our clients’ requirement.</p>--}}
                {{--<p class="text-justify">&nbsp;&nbsp;We strive to achieve the highest operational efficiency, cost saving and green environment achievable.</p>--}}
            </div>
        </div>
    </div>
@stop
