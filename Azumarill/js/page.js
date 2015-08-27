//Ready
$(document).ready(function(){
	hSize();
});
//Resize
$(window).resize(function(){
	hSize();
});

$(window).scroll(function(){
	if($(window).scrollTop()>300){
		$('.gotop').css('bottom','0px');
	}else{
		$('.gotop').css('bottom','-50px');
	}
});

//同步header大小
function hSize(){
	if( $("body").width()>650 ){
	    var sidebarH = $(".sidebar .my").outerHeight();
	    $('.header .mob').css('display','none');
	}
	if( $("body").width()<650 ){
	    var sidebarH = "100px";
	    $('.header .mob').css('display','block');
	}
	$(".header").css("height",sidebarH);
	$(".main").css("top",sidebarH);
}

function menu(){
	if ($('.sidebar').css('display') == "none") {
		$('.sidebar').css('display','block');
		$(".menuicon i").removeClass().addClass("icon-cancel");
	}else{
		$('.sidebar').css('display','none');
		$(".menuicon i").removeClass().addClass("icon-menu");
	}
}

function gotop(){
    $("body,html").animate({scrollTop:0},1000);
}


//Hitokoto
setTimeout("getkoto()",1000);
var timer;
function getkoto(){
    var loader = document.createElement('script');
    loader.setAttribute('src', 'http://api.hitokoto.us/rand?encode=jsc&fun=echokoto');
    document.getElementById("loadbox").appendChild(loader);
    timer=setTimeout("getkoto()",5000);
}
function echokoto(result){
    var hc = eval(result);
    document.getElementById("hitokoto").innerHTML = hc.hitokoto;
}
