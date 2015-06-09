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
                <h4 style="text-align: justify;">Tanker prevetting</h4>

                <p style="text-align: justify;">In the marine tanker industry, we provide two Pre-Vetting services which to be called SIRE and CDI to ship-owners or ship managers, we offer audit and inspect the entire ships, and prepare the entire ship ready in order to pass SIRE /CDI inspection.</p>
                <p>Two inspection regimes are predominant SIRE and CDI.  SIRE inspections are commissioned by oil companies that are members of the OCIMF (Oil Companies International Marine Forum), Reports of such inspections are maintained on the OCIMF database for members to access, providing them up to date inspection status of the vessel.</p>
                <p>The CDI (Chemical Distribution Institute) is an inspection regime designed for chemical, and the completed report provides a score for the inspected vessel. A higher score indicates a vessel compliant with industry standards. </p>
                <p>Our customers include Shell, Chevron, BP, ExxonMobil etc. </p>
                <p>Our clients are always aware of the costs. CG Marine Services is dedicated to providing a quality service that is based on objectivity, fairness and honesty, and on which our reputation can be built and stand.</p>
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
