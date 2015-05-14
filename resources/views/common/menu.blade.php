<style>

    /* ------------------------------------------------------ Header section start	 ------------------------------------------------------*/

    #header{
        position: relative;
        margin:20px 0;
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
        vertical-align: middle !important;
    }
    /* ------------------------------------------------------ Header section End	 ------------------------------------------------------*/

</style>

<section id="header" class="navbar">
    <img id="logo" src="http://www.omc.sg/assets/Uploads/logo.jpg" alt="logo"></a>
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
            </ul>
        </li>
        <li><a href="{{ url('partner') }}">PARTNERS</a></li>
        <li><a href="{{ url('contact') }}">CONTACT US</a></li>
    </ul>
</section>