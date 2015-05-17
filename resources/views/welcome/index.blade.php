<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <title>Home | CG-Marine</title>
    <link rel="shortcut icon" type="image/x-icon" href="http://combadi.com/static/img/favicon.ico">

    <link rel="stylesheet" href="css/bootstrap.min.css" media="all">
    <link rel="stylesheet" href="css/index.css" media="all">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" type="text/css" href="css/style.css" />

    <script src="js/jquery-2.1.1.min.js"></script>
    <script src="js/bootstrap-dropdown.js"></script>
    <script src="js/responsiveslides.min.js"></script>
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
    <!-- <div id="content"> -->
    <section id="header" class="navbar">
        {{--<img id="logo" src="http://www.omc.sg/assets/Uploads/logo.jpg" alt="logo"></a>--}}
        <span id="logo"><em>CG-Marine Logo</em></span>
        <ul id="right-menu" class="nav">
            <li><a href="{{ url('/') }}">HOME</a></li>
            <li><a href="{{ url('about') }}">ABOUT</a></li>
            <li class="dropdown"><a href="{{ url('service') }}" class="dropdown-toggle" data-toggle="dropdown">SERVICES <b class="caret"></b></a>
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


    <ul id="slider" class="rslides">
        <li>
            <div class="image" style="background-image: url('img/slider_1.jpg');"/>
        </li>
        <li>
            <div class="image" style="background-image: url('img/slider_2.jpg');"/>
        </li>
    </ul>

    <section id="info">
        <div id="about-left" class="tabs">
            <input id="tab-1" type="radio" name="radio-set" class="tab-selector-1" checked="checked" />
            <label for="tab-1" class="tab-label-1">About</label>

            <input id="tab-2" type="radio" name="radio-set" class="tab-selector-2" />
            <label for="tab-2" class="tab-label-2">Inspection</label>

            <input id="tab-3" type="radio" name="radio-set" class="tab-selector-3" />
            <label for="tab-3" class="tab-label-3">Management</label>

            <div class="clear-shadow"></div>

            <div class="content">
                <div class="content-1">
                    <h2>About us</h2>
                    <p>You think water moves fast? You should see ice. It moves like it has a mind. Like it knows it killed the world once and got a taste for murder. After the avalanche, it took us a week to climb out. Now, I don't know exactly when we turned on each other, but I know that seven of us survived the slide... and only five made it out. Now we took an oath, that I'm breaking now. We said we'd say it was the snow that killed the other two, but it wasn't. Nature is lethal but it doesn't hold a candle to man.</p>
                    <h3>How we work</h3>
                    <p>Like you, I used to think the world was this great place where everybody lived by the same standards I did, then some kid with a nail showed me I was living in his world, a world where chaos rules not order, a world where righteousness is not rewarded. That's Cesar's world, and if you're not willing to play by his rules, then you're gonna have to pay the price. </p>
                </div>
                <div class="content-2">
                    <h2>Services</h2>
                    <p>Do you see any Teletubbies in here? Do you see a slender plastic tag clipped to my shirt with my name printed on it? Do you see a little Asian child with a blank expression on his face sitting outside on a mechanical helicopter that shakes when you put quarters in it? No? Well, that's what you see at a toy store. And you must think you're in a toy store, because you're here shopping for an infant named Jeb.</p>
                    <h3>Excellence</h3>
                    <p>Like you, I used to think the world was this great place where everybody lived by the same standards I did, then some kid with a nail showed me I was living in his world, a world where chaos rules not order, a world where righteousness is not rewarded. That's Cesar's world, and if you're not willing to play by his rules, then you're gonna have to pay the price. </p>
                </div>
                <div class="content-3">
                    <h2>Portfolio</h2>
                    <p>The path of the righteous man is beset on all sides by the iniquities of the selfish and the tyranny of evil men. Blessed is he who, in the name of charity and good will, shepherds the weak through the valley of darkness, for he is truly his brother's keeper and the finder of lost children. And I will strike down upon thee with great vengeance and furious anger those who would attempt to poison and destroy My brothers. And you will know My name is the Lord when I lay My vengeance upon thee.</p>
                    <h3>Examples</h3>
                    <p>Now that we know who you are, I know who I am. I'm not a mistake! It all makes sense! In a comic, you know how you can tell who the arch-villain's going to be? He's the exact opposite of the hero. And most times they're friends, like you and me! I should've known way back when... You know why, David? Because of the kids. They called me Mr Glass. </p>
                </div>
            </div>
        </div>

        <div id="about-right">
            <div class="content">
                <label>Contact Us</label>
                <ul>
                    <li id="email">
                        <p class="info-title">Email:</p>
                        <p class="info-content">zhangsan@cg-marine.com</p>
                    </li>
                    <li id="phone">
                        <p class="info-title">Phone:</p>
                        <p class="info-content">+65 8238 9341</p>
                    </li>
                    <li id="fax">
                        <p class="info-title">Fax:</p>
                        <p class="info-content">+65 8238 9341</p>
                    </li>
                    <li id="addr">
                        <p class="info-title">ADDRESS</p>
                        <p class="info-content">#06-243 Woodlands Drive 50 <br> Singapore 278923</p>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <section id="partner">
        <ul>
            <li><img src="http://www.gsktech.com.sg/_content/client/hamilton.jpg" alt=""></li>
            <li><img src="http://www.gsktech.com.sg/_content/client/stengineering.jpg" alt=""></li>
            <li><img src="http://www.gsktech.com.sg/_content/client/jll.jpg" alt=""></li>
            <li><img src="http://www.gsktech.com.sg/_content/client/europace.jpg" alt=""></li>
            <li><img src="http://www.gsktech.com.sg/_content/client/altitudealliance.jpg" alt=""></li>
        </ul>
    </section>
</div>

<section id="footer">
    <p id="copy">Copyright © 2014 CG-Marine Pte. Ltd. <br/> <a href="">Designed by Ekoo Lab<a></p>
</section>
<script src="js/wow.min.js"></script>
</body>

</html>