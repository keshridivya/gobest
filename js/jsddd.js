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

    
   $("#spancatname").hide();
   $(".callmessage").keyup(function(){
	     txt_check();
	   });
	   function txt_check(){
		   let txt=$(".callmessage").val();
		   let vali =/^\d{10}$/;
		   if(!vali.test(txt)){
            catdnkname="no";
			  $("#spancatname").show().html("Enter Alphabets only").css("color","red").focus();
			  txt_err=false;
			  return false;
		   }
		   else{
            catdnkname="yes";
		       $("#spancatname").hide();
		       
		   }
	   }
});


