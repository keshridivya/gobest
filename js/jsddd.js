$(document).ready(function(){
   $(".toggle-menu").click(function(){
       $(".toggle-menu").toggleClass("add");
       $(".number-mbl").toggleClass("point");
       $(".logo-box").toggleClass("css");
   }) ;
   $(".close2").click(function(){
      $(".orange").css("display","none"); 
      $(".banner").addClass("up");
   });
});


