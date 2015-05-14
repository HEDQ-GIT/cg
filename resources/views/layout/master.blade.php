<!doctype html>
<html lang="en">
<head>
    <title>Overview &raquo; Offshore Marine Centre</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="generator" content="SilverStripe - http://silverstripe.org"/>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8"/>

    {{--<link href="http://www.omc.sg/themes/simple/css/bootstrap.css" rel="stylesheet">--}}
    <style type="text/css">
        body {
            background-color: #ffffff !important;
        }

        .sidebar-nav {
            padding: 0px 0;
        }

        #content {
            background-color: #141414 !important;
            margin: 0 !important;
            padding: 0 !important;
        }

    </style>
    {{--<link href="http://www.omc.sg/themes/simple/css/bootstrap-responsive.css" rel="stylesheet"/>--}}
    <link href="/css/bootstrap.min.css" rel="stylesheet"/>
    <link href='http://www.omc.sg/themes/simple/css/font.css' rel='stylesheet' type='text/css'/>
    <link rel="stylesheet" href="http://www.omc.sg/themes/simple/css/dark-hive/jquery-ui-1.10.4.custom.css"/>
    <link rel="stylesheet" href="http://www.omc.sg/themes/simple/css/custom_form.css"/>
    <link rel="stylesheet" href="http://www.omc.sg/themes/simple/css/custom.css"/>
    <link rel="stylesheet" href="http://www.omc.sg/themes/simple/css/style.css"/>

    <script src="/js/jquery-2.1.1.min.js"></script>
    <script src="/js/bootstrap-dropdown.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
<div class="container">
    @include('common.menu')

    <div class="container" id="content">
        <div class="row">
            @yield('left-content')
            {{--<div class="span5" style="margin-top: 0 !important;">--}}
            {{--<div class="well sidebar-nav"><img src="/img/about-overview.jpg" alt="about-overview" /></div>--}}
            {{--</div>--}}

            @yield('right-content')
            {{--<div class="span6" style="margin-top: 80px !important; margin-left: 60px !important;">--}}
            {{--<div class="row-fluid">--}}
            {{--<div class="span12">--}}

            {{--<p>About Us > </p>--}}


            {{--<h2>Overview of OMC</h2>--}}
            {{--<p style="text-align: justify;">The Offshore Marine Centre (OMC), operated and managed by Jurong Port since 2011, is a purpose-built facility that offers an integrated suite of marine terminal-related services targeting the offshore and marine industry. <br><br> The OMC provides a common-user wharf infrastructure that allows companies to load and discharge heavy and oversized structures, modules and project cargoes in a safe and effective manner. It provides a ‘single-stop’ solution to companies that require a quick turnaround of vessel operations, open yard support services and end-to-end logistics solutions. <br><br> Leveraging on its extensive port management experience and world-class infrastructure, Jurong Port delivers a cost-effective, industry-specific solution that caters to the specialized requirements of users at OMC.</p>--}}

            {{--</div>--}}
            {{--</div>--}}
            {{--</div>--}}
        </div>
    </div>
</div>
    <div class="container-fluid" style="padding-left: 0 !important; padding-right: 0 !important;">
        @include('common.footer')
    </div>

</body>
</html>
