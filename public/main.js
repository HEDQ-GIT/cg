/**
 * Created by DQ on 2015/5/14.
 */
var tID = "nav1";
function showmenu(ID){
    if(ID!=tID){
        var IDObj = document.getElementById( ID );
        var tIDObj = document.getElementById( tID );
        var IDObj_content = document.getElementById( ID + "_" );
        var tIDObj_content = document.getElementById( tID + "_" );
        IDObj.className='lion';
        tIDObj.className='lioff';
        tIDObj_content.style.display='none';
        IDObj_content.style.display='block';
        tID=ID;
    }
}

function i(ur,w,h){
    document.write('<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,29,0" width="'+w+'" height="'+h+'"> ');
    document.write('<param name="movie" value="'+ur+'">');
    document.write('<param name="quality" value="high"> ');
    document.write('<param name="wmode" value="transparent"> ');
    document.write('<param name="menu" value="false"> ');
    document.write('<embed src="'+ur+'" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="'+w+'" height="'+h+'"></embed> ');
    document.write('</object> ');
}
