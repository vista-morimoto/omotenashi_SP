$(document).ready(function() {
	$(".accordion dt, .faq .qa dt").hover(function(){
		$(this).css("cursor","pointer"); 
	},function(){
		$(this).css("cursor","default"); 
		});
	$(".accordion dd, .faq .qa dd").css("display","none");
	$(".accordion dt, .faq .qa dt").click(function(){
		$(this).next().slideToggle("fast");
		});
});