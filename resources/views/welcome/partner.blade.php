<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://ogp.me/ns/fb#"
      xmlns:addthis="http://www.addthis.com/help/api-spec" xml:lang="en" lang="en" dir="ltr"
      class="js en wf-brandongrotesque-n7-active wf-museoslab-i3-active wf-museoslab-n1-active wf-museoslab-n3-active wf-museoslab-n7-active wf-active">
<!-- <![endif]-->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <script type="text/javascript" src="./Contact Us _ Combadi_files/widgets.js"></script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Partner | CG-Marine</title>
    <link rel="shortcut icon" type="image/x-icon" href="http://combadi.com/static/img/favicon.ico">

    <link rel="stylesheet" href="/css/bootstrap.min.css" media="all">
    <link rel="stylesheet" href="/css/contact.css" media="all">
    <link rel="stylesheet" href="/css/partner.css" media="all">
    <link rel="stylesheet" type="text/css" href="css/style.css"/>

    <script src="/js/jquery-2.1.1.min.js"></script>
    <script src="/js/bootstrap-dropdown.js"></script>
    <script src="/js/responsiveslides.min.js"></script>
    <script type="text/javascript">
        $(function () {
            $(".rslides").responsiveSlides({
                speed: 2000
            });

            new WOW().init();
        });
    </script>
</head>

<body>
<div class="container">
    <section id="header" class="navbar">
        <img id="logo" style="height: 82px;" src="/img/logo1.png" alt="logo">
        {{--<span id="logo"><em>CG-Marine Logo</em></span>--}}
        <ul id="right-menu" class="nav">
            <li><a href="{{ url('/') }}">HOME</a></li>
            <li><a href="{{ url('about') }}">ABOUT</a></li>
            <li class="dropdown"><a href="{{ url('service') }}" class="dropdown-toggle" data-toggle="dropdown">SERVICES
                    <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="{{ url('service/prevetting') }}">Prevetting</a></li>
                    <li><a href="{{ url('service/consultancy') }}">Consultancy</a></li>
{{--                    <li><a href="{{ url('service/delivery') }}">Delivery</a></li>--}}
                    {{--<li><a href="{{ url('service/pilotage') }}">Pilotage</a></li>--}}
                    <li><a href="{{ url('service/management') }}">Management</a></li>
                    <li><a href="{{ url('service/repaire') }}">Repair</a></li>
                </ul>
            </li>
            <li><a href="{{ url('partner') }}">PARTNERS</a></li>
            <li><a href="{{ url('contact') }}">CONTACT US</a></li>
        </ul>
    </section>
</div>

<div class="container">
    <ul id="slider" class="rslides rslides1">
        <li id="rslides1_s0" class="rslides1_on">
            <div class="image" style="background-image: url('/img/slider_1.jpg');">
            </div></li>
        <li id="rslides1_s1" class="">
            <div class="image" style="background-image: url('/img/slider_3.jpg');">
            </div></li>
    </ul>

    <section class="partner-detail">
        <div class="heading-container" style="width:80%;">
            <p>We have the privilege of working with some of the most well known companies in the world and we don’t
                take this lightly. Our clients engage us in a number of ways—we help them solve business problems, increase
                visibility and help them thrive in a networked world where customers and employees have become increasingly
                empowered. We view our clients as partners and work collaboratively with them to achieve results they can measure.
            </p>
        </div>
        <article class="featured-resource-list">
            <div class="title-block">
                <p>Learn more about our Partnership Programs</p>
            </div>
            <div class="row">
                <div class="list-item col-lg-4 col-md-4 col-sm-4">
                    <article class="featured-resource liEqualHeight">
                        <div class="resource-image" style="background:url('/img/logo_1.gif');">
                            {{--<img src="/img/logo_1.gif">--}}
                        </div>
                        <p class="resource-title component-headline">COSCO</p>
                        <p class="description component-subheadline">Safety consultancy for oil terminal</p>
                    </article>
                </div>
                <div class="list-item col-lg-4 col-md-4 col-sm-4">
                    <article class="featured-resource liEqualHeight">
                        <div class="resource-image" style="background:url('/img/logo_2.jpg');">
                            {{--<img src="/img/logo_2.jpg">--}}
                        </div>
                        <p class="resource-title component-headline">FEOSO</p>
                        <p class="description component-subheadline" style="color: white; font-weight: bold;">{FEOSO Description}</p>
                    </article>
                </div>
                <div class="list-item col-lg-4 col-md-4 col-sm-4">
                    <article class="featured-resource liEqualHeight" >
                        <div class="resource-image" style="background:url('/img/logo_3.jpg');">
                            {{--<img src="/img/logo_3.jpg">--}}
                        </div>
                        <p class="resource-title component-headline">FENGHAI</p>
                        <p class="description component-subheadline">Pre-vetting tanker SIRE inspection</p>
                    </article>
                </div>
                <div class="list-item col-lg-4 col-md-4 col-sm-4">
                    <article class="featured-resource liEqualHeight">
                        <div class="resource-image" style="background:url('/img/logo_4.jpg');">
                            {{--<img src="/img/logo_4.jpg">--}}
                        </div>
                        <p class="resource-title component-headline">EXXONMOBIL</p>
                        <p class="description component-subheadline">Sire inspection</p>
                    </article>
                </div>
                <div class="list-item col-lg-4 col-md-4 col-sm-4">
                    <article class="featured-resource liEqualHeight">
                        <div class="resource-image" style="background:url('/img/logo_index_1.png');">
                            {{--<img src="/img/logo_index_1.png">--}}
                        </div>
                        <p class="resource-title component-headline">ABS</p>
                        <p class="description component-subheadline" style="padding-bottom: 10px;">We engage to conduct an annual radio and GMDSS survey  for their vessels.</p>
                    </article>
                </div>
                <div class="list-item col-lg-4 col-md-4 col-sm-4">
                    <article class="featured-resource liEqualHeight">
                        <div class="resource-image" style="background:url('/img/logo_index_2.jpg');">
                            {{--<img src="/img/logo_index_2.jpg">--}}
                        </div>
                        <p class="resource-title component-headline">CCS</p>
                        <p class="description component-subheadline" style="padding-bottom: 10px;">We engage to conduct an annual radio and GMDSS survey for their vessels</p>
                    </article>
                </div>
                <div class="list-item col-lg-4 col-md-4 col-sm-4">
                    <article class="featured-resource liEqualHeight">
                        <div class="resource-image" style="background:url('/img/logo_index_3.png');">
                        {{--<div class="resource-image" style="background-color: #ffffff">--}}
                            {{--<img src="/img/logo_index_3.png" >--}}
                        </div>
                        <p class="resource-title component-headline">RINA</p>
                        <p class="description component-subheadline" style="padding-bottom: 10px;">We engage to establish an safe management system for ship company under RINA.</p>
                    </article>
                </div>
                {{--<div class="list-item col-lg-4 col-md-4 col-sm-4">--}}
                    {{--<article class="featured-resource liEqualHeight">--}}
                        {{--<div class="resource-image" style="background:url('/img/logo_index_4.gif');">--}}
                            {{--<img src="/img/logo_index_4.gif">--}}
                        {{--</div>--}}
                        {{--<p class="resource-title component-headline">EAGLE</p>--}}
                        {{--<p class="description component-subheadline" style="color: blue; font-weight: bold;">{EAGLE Description}</p>--}}
                    {{--</article>--}}
                {{--</div>--}}
                <div class="list-item col-lg-4 col-md-4 col-sm-4">
                    <article class="featured-resource liEqualHeight">
                        <div class="resource-image" style="background:url('/img/logo_index_5.png');">
                            {{--<img src="/img/logo_index_5.png">--}}
                        </div>
                        <p class="resource-title component-headline">BP</p>
                        <p class="description component-subheadline">Pre SIRE inspection</p>
                    </article>
                </div>
                {{--<div class="list-item col-lg-4 col-md-4 col-sm-4">--}}
                    {{--<article class="featured-resource liEqualHeight">--}}
                        {{--<div class="resource-image" style="background:url('/img/logo_15.jpg');">--}}
                            {{--<img src="/img/logo_15.jpg">--}}
                        {{--</div>--}}
                        {{--<p class="resource-title component-headline">CCCC</p>--}}
                        {{--<p class="description component-subheadline" style="padding-bottom: 10px;">Helping their ship to complete annual Radio and GMDSS service.</p>--}}
                    {{--</article>--}}
                {{--</div>--}}
                {{--<div class="list-item col-lg-4 col-md-4 col-sm-4">--}}
                    {{--<article class="featured-resource liEqualHeight">--}}
                        {{--<div class="resource-image" style="background:url('/img/logo_14.jpg');">--}}
                            {{--<img src="/img/logo_14.jpg">--}}
                        {{--</div>--}}
                        {{--<p class="resource-title component-headline">COSL</p>--}}
                        {{--<p class="description component-subheadline" style="color: blue; font-weight: bold;">{COSL Description}</p>--}}
                    {{--</article>--}}
                {{--</div>--}}
                {{--<div class="list-item col-lg-4 col-md-4 col-sm-4">--}}
                    {{--<article class="featured-resource liEqualHeight">--}}
                        {{--<div class="resource-image" style="background:url('/img/logo_13.gif');">--}}
                            {{--<img src="/img/logo_13.gif">--}}
                        {{--</div>--}}
                        {{--<p class="resource-title component-headline">CHEVRON</p>--}}
                        {{--<p class="description component-subheadline" style="color: blue; font-weight: bold;">{CHEVRON Description}</p>--}}
                    {{--</article>--}}
                {{--</div>--}}
                <div class="list-item col-lg-4 col-md-4 col-sm-4">
                    <article class="featured-resource liEqualHeight">
                        <div class="resource-image" style="background:url('/img/logo_12.png');">
                            {{--<img src="/img/logo_12.png">--}}
                        </div>
                        <p class="resource-title component-headline">PAC MARINE</p>
                        <p class="description component-subheadline">Pre-SIRE & CDI Inspection</p>
                    </article>
                </div>
                {{--<div class="list-item col-lg-4 col-md-4 col-sm-4">--}}
                    {{--<article class="featured-resource liEqualHeight">--}}
                        {{--<div style="background-color: #000000">--}}
                        {{--<div class="resource-image" style="background:url('/img/logo_11.png');">--}}
                            {{--<img src="/img/logo_11.png">--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--<p class="resource-title component-headline">PSA</p>--}}
                        {{--<p class="description component-subheadline">Deep sea pilotage for VLCC</p>--}}
                    {{--</article>--}}
                {{--</div>--}}
                <div class="list-item col-lg-4 col-md-4 col-sm-4">
                    <article class="featured-resource liEqualHeight">
                        <div class="resource-image" style="background:url('/img/logo_10.jpg');">
                            {{--<img src="/img/logo_10.jpg">--}}
                        </div>
                        <p class="resource-title component-headline">HARPS</p>
                        <p class="description component-subheadline" style="padding-bottom: 10px;">Helping them for ship delivery from China to Singapore</p>
                    </article>
                </div>
            </div>
        </article>
    </section>
</div>

<section id="footer">
    <p id="copy">Copyright © 2015 CG-Marine Pte. Ltd. <br/> <a href="">Designed by Ekoo Lab<a></p>
</section>
</body>
</html>



