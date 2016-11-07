// JavaScript Document

$(function() {
 var isIE=false;
 if(navigator.userAgent.toLowerCase().indexOf("msie")!=-1) isIE=true;
 if(isIE){
   var url="http://gdata.youtube.com/feeds/api/users/nsm758/uploads?max-results=9&v=2&alt=json-in-script&callback=getList";
   var script = document.createElement("script");
   script.setAttribute("type", "text/javascript");
   script.setAttribute("src", url);
   document.getElementsByTagName("head")[0].appendChild(script);
}else{
   $.getJSON(
      //�w�Z��Youtube���[�U�[���w��
      "http://gdata.youtube.com/feeds/api/users/nsm758/uploads?max-results=9&v=2&alt=json", /* ���{ */
      {
         v:2,
         alt:"json"
      },
     function(xml) {
       getList(xml);
     }
   );
}
});
/* IE���� */
var browser = function() {
var ua = navigator.userAgent;
return {
 ie: ua.match(/MSIE\s([^;]*)/)
};
}();
/* ���t�t�H�[�}�b�g */
var timeAgo = function(dateString) {
var rightNow = new Date();
var then = new Date(dateString);
 var isIE=0;
 if(navigator.userAgent.toLowerCase().indexOf("msie")!=-1) isIE=1;
if (isIE) {
   var dary=dateString.split("-");
   var year=dary[0];
   var month=dary[1];
   var day=dary[2].substring(0,2);
   var _tary=dateString.split("T");
   var tary=_tary[1].split(":");
   var hh=tary[0];
   var mm=tary[1];
   var ss=tary[2].substring(0,2);
   var _rightNow=""+rightNow.getFullYear()+"/"+rightNow.getMonth()+"/"+rightNow.getDate()+" "+rightNow.getHours()+":"+rightNow.getMinutes()+":"+rightNow.getSeconds();
   var _then=""+year+"/"+(month-1)+"/"+day+" "+hh+":"+mm+":"+ss;
   var rightNow=new Date(_rightNow).getTime();
   var then=new Date(_then).getTime()+9*60*60*1000; //GMT9:00
}

var diff = rightNow - then;
var second = 1000,
   minute = second * 60,
   hour = minute * 60,
   day = hour * 24,
   week = day * 7;
if (isNaN(diff) || diff < 0) {
   return ""; // return blank string if unknown
}
if(diff < second * 2)            return "���܂�����";
if(diff < minute)               return Math.floor(diff/second)+"�b�O";
if(diff < minute * 2)            return "��1���O";
if(diff < hour)                  return Math.floor(diff/minute)+"���O";
if(diff < hour * 2)               return "��1���ԑO";
if(diff < day)                  return  Math.floor(diff/hour)+"���ԑO";
if(diff > day && diff < day * 2)   return "���̂�";
if(diff < day * 365){
   return Math.floor(diff/day)+"���O";
}else{
   return "1�N�ȏ�O";
}
}
/* 3����؂� */
function addFigure(str) {
var num = new String(str).replace(/,/g, "");
while(num != (num = num.replace(/^(-?\d+)(\d{3})/, "$1,$2")));
return num;
}
/* function getList(xml){
 $('#load').fadeOut();
 var feed = xml.feed;
 $.each(feed.entry, function(i,item){
   var tmp=item.id.$t.split("video:");
   var vid=tmp[tmp.length-1];
   var s='';
   s+='<dt><img src="http://img.youtube.com/vi/'+vid+'/2.jpg" /></dt>';
   s+='<dd>';
   s+='<div class="title"><a href="'+item.link[0].href+'">'+item.title.$t+'</a></div>';
   s+='<p>';
      s+='�쐬�ҁF<a href="http://www.youtube.com/user/'+item.author[0].name.$t+'">'+item.author[0].name.$t+'</a>';
   s+='</p>';
   s+='</dd>';
    $("#youtubeList").append('<dl class="video clearfix heightLine">'+s+'</dl>');
    $(".video").fadeIn(1000);
 });
} */
function getList(xml){
 $('#load').fadeOut();
 var feed = xml.feed;
 $.each(feed.entry, function(i,item){
   var tmp=item.id.$t.split("video:");
   var vid=tmp[tmp.length-1];
   var s='';
   s+='<iframe src="//www.youtube.com/embed/'+vid+'?rel=0" frameborder="0" allowfullscreen></iframe>';
    $("#youtubeList").append('<div class="video_s">'+s+'</div>');
    $(".video").fadeIn(1000);
 });
}