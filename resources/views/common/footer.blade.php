<script   language="javascript"   type="text/javascript">
    <!--
    function   MM_jumpMenu(targ,selObj,restore){   //v3.0
        eval(targ+".open('"+selObj.options[selObj.selectedIndex].value+"')");
        //(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
        if  (restore)  selObj.selectedIndex=0;
    }
    //-->
</script>
<div id="footer">
    <div id="footer_banquan"><a href="{{ url('about') }}">About Us</a>   /   <a href={{ url('service') }}>Our Services</a>   /   <a href={{ url('partner') }}>Our Partners</a>   /   <a href={{ url('contact') }}> Contact Us</a><br />
        <img src="/img/cp.gif" />
    </div>
    {{--<div id="footer_link">--}}
        {{--<select name="jumpMenu" id="jumpMenu" onchange="MM_jumpMenu('window',this,0)">--}}
            {{--<option>More Links...</option>--}}

            {{--<option value="http://www.chinashippinginfo.net/">中国海运信息网</option>--}}

        {{--</select>--}}
    {{--</div>--}}
</div>