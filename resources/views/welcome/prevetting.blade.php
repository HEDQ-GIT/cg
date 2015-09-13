@extends('layout.master')

@section('title')
    <title>Prevetting | CG-Marine</title>
@stop

@section('left-content')
    <div class="col-md-5" style="margin-top: 0 !important; overflow: hidden;">
        {{--<div class="left-img" style="background:url('/img/pre2.png');"></div>--}}
        {{--<div class="left-img" style="background:url('/img/pre1.png');"></div>--}}
        <div>
            <img src="/img/pre1new.png" alt=""/>
            <img src="/img/pre2new.png" alt=""/>
        </div>
        {{--<div class="left-img" style="background:url('/img/pre3.png');"></div>--}}
    </div>

@stop

@section('right-content')
    <div class="col-md-6" style="margin-top: 40px !important; margin-left: 30px !important;">
        <div class="row-fluid">
            <div class="span12" style="color:#777">
                <p>Service > Prevetting > </p>
                {{--<h2 style="color: #0072B2">Bunker Survey Company in Singapore</h2>--}}
                <h4 class="text-justify">Tanker prevetting</h4>

                <p class="text-justify">&nbsp;&nbsp;In the marine oil industry, we provide two Pre-Vetting services to ship owner or ship managers which are called SIRE and CDI.</p>
                <p class="text-justify">&nbsp;Those two inspection regimes are predominant SIRE and CDI. SIRE inspection is commissioned by oil companies that are members of the OCIMF (Oil Companies International Marine Forum), Reports of such inspections are maintained on the OCIMF database for members to access, providing them up to date inspection status of the vessel. And CDI (Chemical Distribution Institute) is an inspection regime designed for chemical, and the completed report provides a score for the inspected vessel. A higher score indicates a vessel compliant with industry standards.</p>
                {{--<ul>--}}
                    {{--<li>Supported by Master Mariners with tanker experience</li>--}}
                    {{--<li>Quality checks for Density, Viscosity, Water content can be conducted ON THE SPOT PRIOR TO BUNKERING</li>--}}
                    {{--<li>24 hours response arrangement</li>--}}
                    {{--<li>In-House Engineers for loss investigations</li>--}}
                {{--</ul><br>--}}

                {{--<p>Bunker/ ROB surveys can be combined with On/ Off Hire condition Surveys</p>--}}
            </div>
        </div>
    </div>
@stop
