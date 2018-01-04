// JavaScript Document
$(function(){
	
    $(".body-leftmain  .zz").css("display","block");//显示第一个
    $(".body-leftmain > ul > li > a").bind("click",function(){
    	
    	$(".body-leftmain ul li ").siblings().children("ul").css("display","none");
    	$(this).next(".u").css("display","block");
    	$(".body-leftmain ul li").siblings().children(".p").css("display","block"); 
    	$(this).siblings(".pp").css("display","none");
    });
    
});