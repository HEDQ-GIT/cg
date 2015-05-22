<style>

    /* ------------------------------------------------------ Header section start	 ------------------------------------------------------*/

    #header{
        position: relative;
        margin:15px 0 20px;
    }

    #logo, #right-menu, #right-menu li{
        display: inline-block;
    }

    #right-menu{
        position: absolute;
        right:0;
        z-index:99;
        -webkit-transform: translate3d(0, 50%, 0);
        transform: translate3d(0, 50%, 0);
    }

    #right-menu li{
        font-size: 1.2em;
        color: #333;
    }

    ul.nav {
        margin-top: 0 !important;
    }
    #logo {
        /*text*/
        /*vertical-align: middle !important;*/
        /*font-size: 2.5em;*/
        /*color: rgb(51, 122, 183);*/
        /*padding-top: 10px;*/

        /*img*/
        height: 82px;
    }
    /* ------------------------------------------------------ Header section End	 ------------------------------------------------------*/

</style>

<section id="header" class="navbar">
    <img id="logo" src="/img/logo.png" alt="logo">
    {{--<span id="logo"><em>CG-Marine Logo</em></span>--}}
    <ul id="right-menu" class="nav">
        <li><a href="{{ url('/') }}">HOME</a></li>
        <li><a href="{{ url('about') }}">ABOUT</a></li>
        <li class="dropdown"><a href="{{ url('service') }}" class="dropdown-toggle" data-toggle="dropdown">SERVICES <b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li><a href="{{ url('service/prevetting') }}">Prevetting</a></li>
                <li><a href="{{ url('service/consultancy') }}">Consultancy</a></li>
                <li><a href="{{ url('service/delivery') }}">Delivery</a></li>
                <li><a href="{{ url('service/pilotage') }}">Pilotage</a></li>
                <li><a href="{{ url('service/management') }}">Management</a></li>
                <li><a href="{{ url('service/repaire') }}">Repair</a></li>
            </ul>
        </li>
        <li><a href="{{ url('partner') }}">PARTNERS</a></li>
        <li><a href="{{ url('contact') }}">CONTACT US</a></li>
    </ul>
</section>