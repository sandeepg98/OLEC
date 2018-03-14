var Location=320;
var c=0;
var d=0;
var e=true;
var h2=["Change Your Mindset","Do What Is To Be Done","Voting Is The Most Precious Gift","Your Vote Is Your Voice"]
$(document).ready(function()
{
setInterval(function() {
$("div#PiC__cont .imageslider").animate({'margin-top':'-='+Location+'px'},1000); c++; if(c===3) {c=0; if(Location>0) Location=-320; else if(Location<0) Location=320;} 
},5000);
setInterval(function()
{  $("div#HEa__DER h2").fadeOut(400, function() { $(this).html(h2[d]);$(this).fadeIn(400)});if(e)d++; else d--; if(d===3){e=false}; if(d===0){e=true;}}
,5000)

});
