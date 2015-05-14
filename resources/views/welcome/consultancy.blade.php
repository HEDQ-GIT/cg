@extends('layout.master')

@section('left-menu')
    @include("common.servicesubmenu")
@stop

@section('right-content')
    <div class="title"><span class="weizhi">Position:<a href="{{ url('/') }}">Home</a> > <a href={{ url('service') }}>Our Services</a> > <b class="blue">Consultancy</b></span>Consultancy</div>
    <div class="content_all">
        <P><BR>&nbsp;</P>
        <P><BR><FONT 14px><STRONG>&nbsp;<FONT 14px>&nbsp;&nbsp;<FONT FONT-FAMILY: Roman New Times 14px;><FONT 14px> <FONT FONT-FAMILY: Roman New Times 14px;>KINGSHIP</FONT></FONT></FONT></FONT></STRONG></FONT><FONT FONT-FAMILY: Roman New Times 14px;><FONT style="FONT-FAMILY: " Roman New Times><FONT 12px>&nbsp;ltd main business scope covers ocean shipping, ship management, crew services, also engages in comprehensive technical management ,crew management, ship chartering, ship business, ship's insurance, shipping enterprise management and consulting services.<FONT FONT-FAMILY: Roman New Times 12px;>Our Company have excellent management and innovation ability, many experienced senior managers and crew.</FONT></FONT></FONT></FONT></P>
        <P>&nbsp;</P>
        <P>&nbsp;</P>
        <P><IMG height=343 src="http://www.kingshipltd.com/html/uploadfile/20090403165817432.jpg" width=706 border=0 1px; POSITION: TOP: relative; LEFT: HEIGHT: WIDTH: -1; -2; 706px; 92px; 149px 189px 95px; 707px;></P>
        {{--<P>&nbsp;&nbsp;&nbsp; <IMG src="http://www.kingshipltd.com/html/sysimage/file/doc.gif" border=0><A href="http://www.kingshipltd.com/html/uploadfile/20090403165130907.doc" target=_blank>金希普香港公司注册证书Microsoft Word 文档.doc</A></P>--}}
        {{--<P>&nbsp;&nbsp;&nbsp; <IMG src="http://www.kingshipltd.com/html/sysimage/file/doc.gif" border=0><A href="http://www.kingshipltd.com/html/uploadfile/20090403165146354.doc" target=_blank>金希普南京公司营业执照 Microsoft Word 文档.doc</A></P>--}}
    </div>
@stop
