<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CG MARINE</title>

    <link href="/css/about.css" type="text/css" rel="stylesheet" />
    <script type="text/javascript" language="javascript" src="/js/main.js"></script>
    <script type="text/javascript" language="javascript" src="/js/menujs.js"></script>
</head>
<body>
<div id="page">

    @include('common.menu')

    <div id="banner"><img src="/img/ot_banner.jpg" /></div>
    <div id="out_content">

        <div id="out_content_left">
            <div class="leftmenu">
                @yield('left-menu')
            </div>
            {{--<div align="center"><a href="message.asp"><img src="/img/livemessage.gif" /></a></div>--}}
        </div>

        <div id="out_content_right">
            @yield('right-content')
        </div>

        <div class="clear"></div>
    </div>
    @yield('main')
    @include('common.footer')

</div>
</body>
</html>