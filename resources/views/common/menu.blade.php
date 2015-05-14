<div id="header">
    <div class="logo"><img src="/img/log0.gif" /></div>
    <div class="topmenu">
        <div class="yuyan">
            {{--<span>ENGLISH</span><a href="../">简体中文</a>--}}
        </div>
        <!--主菜单开始-->
        <div class="nav">
            <ul>
                <li id="nav1" onmouseover="showmenu('nav1')" class="lion"><a href={{ url('/') }}>Home</a></li>
                <li id="nav2" onmouseover="showmenu('nav2')" class="lioff"><a href={{ url('about') }}>About Us</a></li>
                <li id="nav3" onmouseover="showmenu('nav3')" class="lioff"><a href={{ url('service') }}>Our Services</a></li>
                <li id="nav5" onmouseover="showmenu('nav5')" class="lioff"><a href={{ url('partner') }}>Our Partners</a></li>
                <li id="nav6" onmouseover="showmenu('nav6')" class="lioff"><a href={{ url('contact') }}>Contact Us</a></li>
            </ul>
        </div>
        <!--主菜单结束-->
    </div>
    <!--子菜单开始-->
    <div class="sub">
        <div class="submenu1 block" id="nav1_"></div>
        <div class="submenu2 none" id="nav2_"></div>
        <div class="submenu3 none" id="nav3_">
            <ul>
                <li><a href={{ url('service/prettying') }}>Prettying</a></li>
                <li><a href={{ url('service/consultancy') }}>Consultancy</a></li>
                <li><a href={{ url('service/delivery') }}>Delivery</a></li>
                <li><a href={{ url('service/pilotage') }}>Pilotage</a></li>
                <li><a href={{ url('service/management') }}>Management</a></li>
            </ul>
        </div>
        <div class="submenu5 none" id="nav5_"></div>
        <div class="submenu6 none" id="nav6_"></div>
    </div>
    <!--子菜单结束-->
</div>