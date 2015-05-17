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
    <title>Contact | CG-Marine</title>
    <link rel="shortcut icon" type="image/x-icon" href="http://combadi.com/static/img/favicon.ico">

    <link rel="stylesheet" href="/css/bootstrap.min.css" media="all">
    <link rel="stylesheet" href="/css/contact.css" media="all">
    <link rel="stylesheet" type="text/css" href="css/style.css"/>


    <script src="/js/jquery-2.1.1.min.js"></script>
    <script src="/js/bootstrap-dropdown.js"></script>
    {!! HTML::script('/js/angular.min.js') !!}
    <script src="/js/contact.js"></script>
    <script>
        var emailUrl = '{{url("contact/email/")}}';
    </script>
</head>
<body ng-app="app" ng-controller="MainCtrl">
<div class="container">
    <section id="header" class="navbar">
        <span id="logo"><em>CG-Marine Logo</em></span>
        <ul id="right-menu" class="nav">
            <li><a href="{{ url('/') }}">HOME</a></li>
            <li><a href="{{ url('about') }}">ABOUT</a></li>
            <li class="dropdown"><a href="{{ url('service') }}" class="dropdown-toggle" data-toggle="dropdown">SERVICES
                    <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="{{ url('service/prevtting') }}">Prevtting</a></li>
                    <li><a href="{{ url('service/consultancy') }}">Consultancy</a></li>
                    <li><a href="{{ url('service/delivery') }}">Delivery</a></li>
                    <li><a href="{{ url('service/pilotage') }}">Pilotage</a></li>
                    <li><a href="{{ url('service/management') }}">Management</a></li>
                    <li><a href="{{ url('service/repaire') }}">Repaire</a></li>
                </ul>
            </li>
            <li><a href="{{ url('partner') }}">PARTNERS</a></li>
            <li><a href="{{ url('contact') }}">CONTACT US</a></li>
        </ul>
    </section>
</div>

<section id="contact">
    <div class="row wrapper">
        <form id="contact-form" class="styled-form col-lg-8 col-md-8 col-sm-8" ng-submit="submitContact()">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <h1 class="pagetitle">Contact us</h1>

            <div class="note">
                <p>We are here to answer any questions you may have about our combadi
                    experiences. Reach out to us and we'll respond as soon as we can.</p>

                <p>Even if there is something you have always wanted to experience and
                    can't find it on combadi, let us know and we promise we'll do our
                    best to find it for you and send you there.</p>
            </div>

            <p>
                <label for="id_name">Name: <span class="required">*</span></label>
                <span class="field">
                    <input id="id_name" name="name" placeholder="Your name" required type="text" ng-model="formData.name">
                </span>
            </p>

            <p>
                <label for="id_email">Email: <span class="required">*</span></label>
                <span class="field">
                    <input id="id_email" name="email" placeholder="Your email" required type="text" ng-model="formData.email">
                </span>
            </p>

            <p>
                <label for="id_message">Message: <span class="required">*</span></label>
                <span class="field">
                    <textarea id="id_message" name="message" rows="5" placeholder="Put your message here" required ng-model="formData.message" class="message"></textarea>
                </span>
            </p>

            <p class="submit-row">
                <input id="submit" type="submit" class="btn btn-primary" value="Submit">
            </p>
        </form>

        <div id="contact-info" class="col-lg-4 col-md-4 col-sm-4">
            <div>
                <p class="title">Email</p>

                <p class="detail"><a href="mailto:info@combadi.com" title="Click to send us an email">info@cg-marine
                        .com</a></p>

                <p class="title">Telephone</p>

                <p class="detail"><a href="tel:00306977447033" title="Click to call us">+65 8238 9341</a></>
                <p class="title">Fax</p>

                <p class="detail"><a href="skype:combaditravel?call" title="Click to call us on Skype">+65 8238 9341</a>
                </p>

                <p class="title">Address</p>

                <p class="detail">
                <address>
                    CG-Marine Ltd.<br>
                    1 Kings Avenue<br>
                    Singapore<br>
                    #09-982<br>
                    Singapore<br><br>
                    Company No. 08714000
                </address>
                </p>
                </dl>
            </div>
        </div>
    </div>
{{--    @include('flash::message')--}}

</section>
<section id="footer">
    <p id="copy">Copyright © 2014 CG-Marine Pte. Ltd. <br/> <a href="">Designed by Ekoo Lab<a></p>
</section>
{{--</div>--}}
</body>
</html>



